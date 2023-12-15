<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Musics;

class reviewController extends Controller
{
    // public function index() {
    //     $musics = musics::all();

    //     return view('songDetails_test', ['musics' => $musics]);
    // }

    public function show(Musics $post) {

        return view('songDetails_test', ['song' => $post]);
    }

    // public function detial(Movies $id){

    //     return view('detail', ['movies'=>$id]);
    // }
}
