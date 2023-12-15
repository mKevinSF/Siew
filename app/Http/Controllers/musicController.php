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
}
