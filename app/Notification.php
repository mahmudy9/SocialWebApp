<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Notification extends Eloquent
{
    public function users()
    {
        return $this->embedsMany('App\User' , 'users');
    }
}
