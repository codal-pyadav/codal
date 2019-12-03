<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $fillable = [
        'aname',
        'user',
        'age',
        'gender',
    ];

    protected $hidden = ['password'];

}
