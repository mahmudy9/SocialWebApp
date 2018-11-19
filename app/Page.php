<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Page extends Eloquent
{
    public function user()
    {
        return $this->belongsTo('App\User' , 'user_id');
    }

    public function follows()
    {
        return $this->embedsMany('App\Pagefollow' , 'follows');
    }

    public function pageposts()
    {
        return $this->hasMany('App\Pagepost' , 'page_id');
    }
}
