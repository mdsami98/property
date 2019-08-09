<?php

namespace App;
use App\PostImage;
use App\User;
use App\Category;
use App\Profile;
use App\Type;
use App\Comment;
use App\Favourite;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    protected $guarded = [];

    public function sluggable() : array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    public function user(){
        return $this->belongsTo('App\User');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function type(){
        return $this->belongsTo('App\Type');
    }

    public function photos(){
        return $this->hasMany('App\PostImage');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }



}
