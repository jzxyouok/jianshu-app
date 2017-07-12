<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//it is posts table
class Post extends Model
{
	//protected $guarded

    protected $fillable = ['title', 'content'];
}
