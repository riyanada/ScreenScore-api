<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genres extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // Relasi many-to-many dengan model Film
    public function films()
    {
        return $this->belongsToMany(Films::class, 'film_genres', 'genre_id', 'film_id');
    }
}
