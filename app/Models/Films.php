<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Films extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'director',
        'ringkasan',
        'tahun',
        'poster',
        'avg_ratings',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genres::class, 'film_genres', 'film_id', 'genre_id');
    }

    public function casts()
    {
        return $this->belongsToMany(Casts::class, 'characters', 'film_id', 'cast_id');
    }

    public function characters()
    {
        return $this->hasMany(Characters::class, 'film_id');
    }

    public function reviews()
    {
        return $this->hasMany(Reviews::class, 'film_id');
    }
}
