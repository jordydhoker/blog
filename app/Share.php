<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    public function post()
    {
        return $this->belongsTo('App\Post', 'post_id');
    }
}
