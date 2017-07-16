<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

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

    public function zan($user_id)
    {
        return $this->hasOne('App\Zan')->where('user_id', $user_id);
    }

    public function zans()
    {
        return $this->hasMany('App\Zan');
    }

    //属于某个作者的文章
    public function scopeAuthorBy(Builder $query, $user_id)
    {
        return $query->where('user_id', $user_id);
    }

    public function postTopics()
    {
        return $this->hasMany(\App\PostTopic::class, 'post_id', 'id');
    }

    //还不在这个专题的文章
    public function scopeTopicNotBy(Builder $query, $topic_id)
    {
        return $query->doesntHave('postTopics', 'and', function($q) use($topic_id) {
            $q->where('topic_id', $topic_id);
        });
    }

}
