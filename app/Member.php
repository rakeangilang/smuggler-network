<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    $table = 'members';

    protected $guarded = [
        'stash_id', 'user_id'
    ];

    public function stashes() {
        return $this->belongsTo('App\Stash', 'stash_id');
    }  

    public function members() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
