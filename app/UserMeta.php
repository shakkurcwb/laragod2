<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMeta extends Model
{

    protected $table = 'user_meta';

    public $timestamps = false;

    protected $fillable = [
        'language', 'theme',
        'gender', 'birth',
        'avatar', 'headline',
        'position', 'company',
        'country', 'city',
        'summary', 'interests',
        'facebook', 'instagram', 'linkedin',
        'twitter', 'youtube', 'github',
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
