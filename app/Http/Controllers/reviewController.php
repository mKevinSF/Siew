<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use App\Models\Musics;
use App\Models\Ratings;

class reviewController extends Controller
{

    // public function show(Musics $post) {
    //     $ratings = Ratings::all();
    //     return view('songDetails_test', ['song' => $post]);
    // }

    public function show(Musics $post)
    {
        $rating = Ratings::where('musics_id', $post->id)->first();
        return view('songDetails_test', ['song' => $post, 'rating' => $rating]);
    }

    public function storeRating(Request $request, Musics $post)
    {
        // Validasi request
        $request->validate([
            'user_rating' => 'required|numeric|min:1|max:5', // Sesuaikan validasi sesuai kebutuhan
        ]);
    
        // Mengambil rating yang sudah ada untuk lagu ini
        $existingRating = Ratings::where('musics_id', $post->id)->first();
        
        if ($existingRating) {
            // Hitung rata-rata dengan rating baru
            $newRating = ($existingRating->rating + $request->user_rating) / 2;
            
            // Perbarui rating di dalam basis data
            $existingRating->update([
                'rating' => $newRating,
            ]);
        } else {
            // Jika belum ada rating sebelumnya, buat rating baru
            Ratings::create([
                'musics_id' => $post->id,
                'rating' => $request->user_rating,
            ]);
        }
    
        // Redirect dengan pesan berhasil atau error
        return redirect()->intended(route('newhome'));
    
        // Jika ingin menampilkan pesan error saat terjadi kegagalan, bisa gunakan redirect dengan withErrors()
    }
    
    
    

    // public function detial(Movies $id){

    //     return view('detail', ['movies'=>$id]);
    // }
}
