<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

//it is usrs table
class User extends Authenticatable
{
    //protected $guarded

    protected $fillable = ['name', 'email', 'password'];
}
