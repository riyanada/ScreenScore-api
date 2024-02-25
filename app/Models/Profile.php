<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Profile extends BaseModel
{
    /**
     * Table database
     */
    protected $table = 'profile';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'no_telp', 'gender', 'umur', 'bio', 'avatar', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
