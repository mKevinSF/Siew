<?php

namespace App\Http\Controllers;

use App\Models\User; // Perubahan disini: 'Users' menjadi 'User'
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; // Perubahan disini: 'Hash' digunakan secara langsung
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function login(){
        return view('login');
    }
    function loginpost(Request $request){
        $request->validate([
            'user_name' => 'required',
            'password' => 'required'
        ], [
            'user_name.required' => 'Nama pengguna wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $user = DB::table('users_siew')->where('user_name', $request->user_name)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Password cocok, menyimpan informasi pengguna dalam sesi
            session(['user' => $user]);
            return redirect()->intended(route('newhome'));
        }

        return redirect(route('login'))->withErrors('Kredensial tidak valid');
    }


    function register(){
        return view('register');
    }
    function registerpost(Request $request){
        $request->validate([
            'user_name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $data['user_name'] = $request->user_name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = Users::create($data);
        if(!$user){
            return redirect(route('register'))->withErrors('ada yg salah');
        }
        return redirect()->intended(route('login'));
    }

    function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->intended(route('login'));
    }

}
