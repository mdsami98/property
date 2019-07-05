<?php

namespace App;
use App\PostImage;
use App\User;
use App\Category;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];


    public function user(){
        return $this->belongsTo('App\User');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function photos(){
        return $this->hasMany('App\PostImage');
    }
}
