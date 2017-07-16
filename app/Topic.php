<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = ['name'];

    //获取一个专题的所有文章
    public function posts()
    {
    	return $this->belongsToMany(\App\Post::class, 'post_topics', 'post_id');
    }

    //用来计算专题下的文章数
    public function postTopics()
    {
    	return $this->hasMany(\App\PostTopic::class, 'topic_id', 'id');
    }
}
