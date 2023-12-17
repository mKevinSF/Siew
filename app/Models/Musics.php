<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musics extends Model
{
    use HasFactory;

    public function creators()
    {
        return $this->belongsTo(creators::class);
    }

    public function reviews()
    {
        return $this->hasOne(reviews::class);
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
}
