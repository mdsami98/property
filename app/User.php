<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;
use App\Post;
use App\Profile;
use App\Favourite;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    protected $fillable = [
        'name', 'email', 'password', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function posts(){
        return $this->hasMany('App\Post');
    }


    public function is_admin(){
        if ($this->role->id == 3){
            return true;
        }
        else{
            return false;
        }
    }
    public function is_agent(){
        if ($this->role->id == 2){
            return true;
        }
        else{
            return false;
        }
    }

    public function profile()
    {
        return $this->hasOne('App\Profile');
    }

    public function favourites(){
        return $this->hasMany('App\Favourite');
    }

}
