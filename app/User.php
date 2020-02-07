<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    $table = 'users';

    /**
     * The attributes that are mass assignable.
     * *jwt and fame shouldnt be mass assignable i think
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function owns() {
        return $this->hasMany('App\Stash', 'owner_id');
    }

    public function stashes() {
        return $this->hasMany('App\Member', 'user_id');
    }

    public function items() {
        return $this->hasMany('App\Item', 'uploader_id');
    }
    
    public function comments() {
        return $this->hasMany('App\Comment', 'user_id');
    }
}
