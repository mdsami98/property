<?php

namespace App;
use App\Comment;

use Illuminate\Database\Eloquent\Model;

class CommentReply extends Model
{
    protected $guarded = [];


    public function comment(){
        return $this->belongsTo('App\Comment');
    }
}
