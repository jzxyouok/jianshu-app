<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login/index');
    }

    public function login()
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required|min:5',
            'is_remember' => 'integer'
        ]);

        $user = request(['email', 'password']);
        $is_remember = boolval(request('is_remember'));


        if(\Auth::attempt($user, $is_remember)) {
            return redirect('/posts');
        }

        return \Redirect::back()->withErrors('failed');
    }

    public function logout()
    {
        \Auth::logout();
    	return redirect('/');
    }
}
