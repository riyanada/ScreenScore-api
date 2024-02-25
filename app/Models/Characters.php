<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characters extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'film_id',
        'cast_id',
        'name'
    ];

    public function film()
    {
        return $this->belongsTo(Films::class);
    }

    public function cast()
    {
        return $this->belongsTo(Casts::class);
    }
}
