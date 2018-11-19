<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function pageins()
    {
        return $this->embedsMany('App\Pagein' , 'pageins');
    }

    public function groupins()
    {
        return $this->embedsMany('App\Groupin' , 'groupins');
    }

    public function friends()
    {
        return $this->embedsMany('App\Friend' , 'friends');
    }

    public function activities()
    {
        return $this->hasMany('App\Activity' , 'user_id');
    }

    public function pages()
    {
        return $this->hasMany('App\Page' , 'user_id');
    }

    public function groups()
    {
        return $this->hasMany('App\Group' , 'user_id');
    }

    public function groupposts()
    {
        return $this->hasMany('App\Grouppost' , 'user_id');
    }

    public function groupreqs()
    {
        return $this->hasMany('App\Groupreq' , 'user_id');
    }

}
