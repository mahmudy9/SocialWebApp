<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Message extends Eloquent
{
    public function chat()
    {
        return $this->belongsTo('App\Chat' , 'chat_id');
    }
}
