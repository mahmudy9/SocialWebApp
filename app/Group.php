<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Group extends Eloquent
{
    public function user()
    {
        return $this->belongsTo('App\User' , 'user_id');
    }

    public function groupreqs()
    {
        return $this->hasMany('App\Groupreq' , 'group_id');
    }

    public function members()
    {
        return $this->embedsMany('App\Groupmember' , 'members');
    }
}
