<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'musics_id',
    ];

    public function users()
    {
        return $this->belongsTo(users::class);
    }

    public function reviews()
    {
        return $this->hasOne(reviews::class);
    }

    public function music()
    {
        return $this->belongsTo(Musics::class, 'musics_id');
    }
}
