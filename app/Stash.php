<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stash extends Model
{
    //
    $table = 'stashes';

    protected $fillable = [
        'name', 'avatar', 'description'
    ];

    public function stashMembers() {
        return $this->hasMany('App\Member', 'stash_id');
    }

    public function items() {
        return $this->hasMany('App\Item', 'stash_id');
    }

    public function ownedBy() {
        return $this->belongsTo('App\User', 'owner_id');
    }
}
