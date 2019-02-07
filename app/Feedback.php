<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{

    protected $table = 'feedback';

    protected $fillable = [
        'description',
    ];

    protected $hidden = [
        // 
    ];

    protected $casts = [
        // 
    ];

    protected $dates = [
        'created_at',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
