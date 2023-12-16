<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\Reviews;
use Auth;

class commentController extends Controller
{
    public function store(Request $request, Reviews $post) {
        // Validation Request
        $request->validate([
            'comment' => 'required',
        ]);

        // Store Comments into Database
        $comment = new Comments([
            'comment' => $request->comment,
            'users_id' => Auth::id(),
            'ratings_id' => $post->ratings_id,
        ]);

        $comment->save();

        // Redirect Successfull
        return redirect()->back()->with('Success', 'Comment Added Successfully');
    }
}
