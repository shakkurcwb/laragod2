<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password', 'is_admin',
    ];

    protected $hidden = [
        'password', 'remember_token', 'ip_address',
    ];

    protected $casts = [
        // 
    ];

    protected $dates = [
        'created_at', 'updated_at', 'deleted_at',
        'last_seen_at',
    ];

    public function meta()
    {
        return $this->hasOne('App\UserMeta');
    }

    public function scopeSearch($query, $text, $fields)
    {
        $query->where('id', $text);
        foreach ($fields as $field)
        {
            $query->orWhereHas('meta', function($query) use ($text, $field) {
                $query->where($field, 'LIKE', '%'.$text.'%');
            });
        }
        return $query;
    }
    
}
