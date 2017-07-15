<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function setting()
    {
    	return view('user/setting');
    }

    public function settingStore()
    {
    	
    }

    //个人中心
    public function show(User $user)
    {
        //这个人信息：包含文章数/关注/粉丝
        $user = User::withCount(['stars', 'fans', 'posts'])->find($user->id);

        //这个人的文章列表，取创建时间最新的前10条
        $posts = $user->posts()->orderby('created_at', 'desc')->take(10)->get();

        //这个人关注的用户，包含关注用户的 关注/粉丝/文章数
        $stars = $user->stars;
        $susers = User::whereIn('id', $stars->pluck('star_id'))->withCount(['stars', 'fans', 'posts'])->get();

        //这个人的粉丝用户，包含粉丝用户的关注/粉丝/文章数
        $fans = $user->fans;
        $fusers = User::whereIn('id', $fans->pluck('fan_id'))->withCount(['stars', 'fans', 'posts'])->get();

    	return view('/user/show', compact('user', 'posts', 'susers', 'fusers'));
    }

    public function fan(User $user)
    {
        $me = \Auth::user();
        $me->doFan($user->id);
    	return [
            'error' => 0,
            'msg' => ''
        ];
    }

    public function unfan(User $user)
    {
    	$me = \Auth::user();
        $me->doUnFan($user->id);
        return [
            'error' => 0,
            'msg' => ''
        ];
    }
}
