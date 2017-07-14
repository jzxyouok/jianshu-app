<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post()
    {
    	return $this->belongsTo('App\Post')->orderBy('created_at', 'desc');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
