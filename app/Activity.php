<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Activity extends Eloquent
{
    public function user()
    {
        return $this->belongsTo('App\User' , 'user_id');
    }

    public function comments()
    {
        return $this->embedsMany('App\Activitycomment' , 'comments');
    }

    public function likes()
    {
        return $this->embedsMany('App\Activitylike' , 'likes');
    }

    public function shares()
    {
        return $this->embedsMany('App\Activityshare' , 'shares');
    }
}
