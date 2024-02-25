<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reviews extends BaseModel
{
    protected $fillable = [
        'user_id',
        'film_id',
        'ulasan',
        'rating',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function film()
    {
        return $this->belongsTo(Films::class);
    }
}
