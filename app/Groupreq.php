<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Groupreq extends Eloquent
{
    public function user()
    {
        return $this->belongsTo('App\User' , 'user_id');
    }

    public function group()
    {
        return $this->belongsTo('App\Group' , 'group_id');
    }

}
