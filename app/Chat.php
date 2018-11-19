<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Chat extends Eloquent
{
    public function messages()
    {
        return $this->hasMany('App\Message' , 'chat_id');
    }
}
