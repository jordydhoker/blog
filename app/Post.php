<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $fillable = ['description', 'body'];
    use SoftDeletes;

    public function likes()
    {
        return $this->hasMany('App\Like', 'post_id');
    }

    public function shares()
    {
        return $this->hasMany('App\Share', 'post_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
