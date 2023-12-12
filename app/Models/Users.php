<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->hasMany(comments::class);
    }

    public function reviews()
    {
        return $this->belongsToMany(reviews::class);
    }

    public function ratings()
    {
        return $this->hasMany(ratings::class);
    }
}
