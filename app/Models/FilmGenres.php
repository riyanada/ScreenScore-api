<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilmGenres extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'film_id',
        'genre_id',
    ];

    public function film()
    {
        return $this->belongsTo(Films::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genres::class);
    }
}
