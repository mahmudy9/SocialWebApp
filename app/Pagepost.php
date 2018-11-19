<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Pagepost extends Eloquent
{
    public function page()
    {
        return $this->belongsTo('App\Page' , 'page_id');
    }

    public function comments()
    {
        return $this->embedsMany('App\Pagecomment' , 'comments');
    }

    public function likes()
    {
        return $this->embedsMany('App\Pagelike' , 'likes');
    }

    public function shares()
    {
        return $this->embedsMany('App\Pageshare' , 'shares');
    }
}
