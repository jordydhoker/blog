<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['description', 'body', 'picture'];

    public function likes()
    {
        return $this->hasMany('App\Like', 'post_id');
    }

    public function shares()
    {
        return $this->hasMany('App\Share', 'post_id');
    }
}
