<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ratings;
use App\Model\Musics;

class RatingController extends Controller
{
    // public function calculateRating(Request $request, $song_id) {
    //     $userRating = $request->input('user_rating');
    
    //     // Lakukan proses untuk menghitung rata-rata rating yang ada di database
    //     $existingRatings = Ratings::where('song_id', $song_id)->pluck('value');
    //     $totalRatings = $existingRatings->push($userRating)->count();
    //     $newAverageRating = ($existingRatings->sum() + $userRating) / $totalRatings;
    
    //     // Simpan nilai rata-rata baru ke dalam tabel ratings
    //     $songRating = Ratings::updateOrCreate(
    //         ['song_id' => $song_id],
    //         ['value' => $newAverageRating]
    //     );
    
    //     return redirect()->back()->with('success', 'Rating berhasil dihitung!');
    // }
    public function showRatings()
    {
        $ratings = Ratings::all();
        
        return view('songDetails_test', ['ratings' => $ratings]);
    }
    
    public function list(){
        $topThreeMusicIds = Ratings::orderByDesc('rating')->take(3)->pluck('musics_id');
        $topThreeRatings = Ratings::orderByDesc('rating')->take(3)->pluck('rating');
    
        $musicData = [
            'topThreeMusicIds' => $topThreeMusicIds,
            'topThreeRatings' => $topThreeRatings,
        ];
    
        return view('chart', $musicData);
    }
    
}
