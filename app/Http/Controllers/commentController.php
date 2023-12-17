<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\Musics;
use Auth;

class commentController extends Controller
{
    public function store(Request $request, Musics $post) {
        // Validation Request
        $request->validate([
            'comment' => 'required',
        ]);

        // Store Comments into Database
        $comment = new Comments([
            'comment' => $request->comment,
            'musics_id' => $post->id,
        ]);

        $comment->save();

        // Redirect Successfull
        return redirect()->back()->with('Success', 'Comment Added Successfully');
    }
}
