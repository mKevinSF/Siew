<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users_siew';
    use HasFactory;
    protected $fillable = [
        'user_name', 'email', 'password'
    ];
    protected $attributes = [
        'user_name' => 'default_user_name'
    ];

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
