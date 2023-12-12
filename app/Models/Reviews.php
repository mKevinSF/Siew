<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(users::class);
    }

    public function musics()
    {
        return $this->belongsTo(musics::class);
    }

    public function comments()
    {
        return $this->belongsToMany(comments::class);
    }

    public function ratings()
    {
        return $this->belongsToMany(ratings::class);
    }
}
