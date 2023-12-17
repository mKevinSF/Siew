<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Musics;

class musicController extends Controller
{
    public function list() {
        $musics = musics::all();

        return view('songList', ['musics' => $musics]);
    }

    public function list2() {
        $home = musics::orderBy('created_at', 'desc')->take(3)->get();
    
        return view('newhome', ['home' => $home]);
    }
    
}
