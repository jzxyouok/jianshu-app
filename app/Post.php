<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//it is posts table
class Post extends Model
{
	//protected $guarded

    protected $fillable = ['title', 'content'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function comments()
    {
    	return $this->hasMany('App\Comment')->orderBy('created_at', 'desc');
    }
}
