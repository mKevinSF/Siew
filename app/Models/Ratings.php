<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    use HasFactory;

    public function reviews()
    {
        return $this->hasOne(reviews::class);
    }

    protected $fillable = [
        'musics_id', 'rating' // Sesuaikan dengan atribut yang ada di tabel Ratings
    ];

    public function users()
    {
        return $this->belongsTo(users::class);
    }
}
