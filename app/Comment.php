<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    $table = 'comments';

    protected $fillable = [
        'content'
    ];

    public function item() {
        return $this->belongsTo('App\Item', 'item_id');
    }

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
