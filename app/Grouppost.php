<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Grouppost extends Eloquent
{
    public function user()
    {
        return $this->belongsTo('App\User' , 'user_id');
    }

    public function comments()
    {
        return $this->embedsMany('App\Groupcomment' , 'comments');
    }

    public function likes()
    {
        return $this->embedsMany('App\Grouplike' , 'groups');
    }

    public function shares()
    {
        return $this->embedsMany('App\Groupshare' , 'shares');
    }
}
