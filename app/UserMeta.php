<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMeta extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'language', 'theme',
        'gender', 'birth',
        'avatar', 'headline',
        'position', 'company',
        'country', 'city',
        'summary', 'interests',
        'facebook', 'instagram',
        'twitter', 'youtube',
    ];

    protected $hidden = [
        // 
    ];

    protected $casts = [
        // 
    ];

    protected $dates = [
        'birth',
    ];
}
