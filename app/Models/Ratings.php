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

    public function users()
    {
        return $this->belongsTo(users::class);
    }
}
