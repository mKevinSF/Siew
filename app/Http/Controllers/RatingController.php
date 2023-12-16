<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ratings;

class RatingController extends Controller
{
    public function calculateRating(Request $request, $song_id) {
        $userRating = $request->input('user_rating');
    
        // Lakukan proses untuk menghitung rata-rata rating yang ada di database
        $existingRatings = Ratings::where('song_id', $song_id)->pluck('value');
        $totalRatings = $existingRatings->push($userRating)->count();
        $newAverageRating = ($existingRatings->sum() + $userRating) / $totalRatings;
    
        // Simpan nilai rata-rata baru ke dalam tabel ratings
        $songRating = Ratings::updateOrCreate(
            ['song_id' => $song_id],
            ['value' => $newAverageRating]
        );
    
        return redirect()->back()->with('success', 'Rating berhasil dihitung!');
    }
    
}
