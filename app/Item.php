<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    $table = 'items';

    protected fillable = [
        'content', 'content_type' 
    ];

    public function items() {
        $this->hasMany('App\Item', 'item_id');
    }

    public function stash() {
        $this->belongsTo('App\Stash', 'stash_id');
    }

    public function user() {
        $this->belongsTo('App\User', 'uploader_id');
    }
}
