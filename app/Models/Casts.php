<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Casts extends BaseModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'age',
        'date_of_birth',
        'place_of_birth',
        'bio',
    ];
}
