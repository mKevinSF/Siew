<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Musics;

class reviewController extends Controller
{
    public function index() {
        $musics = musics::all();
        $creators = Musics::find(1)->creators()
                    ->where('id', '1')
                    ->first();
        // $genres = Genres::all();

        return view('songDetails_test', ['musics' => $musics, 'creators' => $creators]);
    }

    // public function detial(Movies $id){

    //     return view('detail', ['movies'=>$id]);
    // }
}
