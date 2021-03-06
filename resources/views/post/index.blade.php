@extends("layout.main")

@section("content")
	@foreach($posts as $post)
		<div class="blog-post">
			<h2 class="blog-post-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
			<p class="blog-post-meta">{{$post->created_at}} by <a href="/user/{{ $post->user->id }}">{{ $post->user->name }}</a></p>
			<p>{!! str_limit($post->content, 300, '...') !!}</p>
			<p class="blog-post-meta">赞 {{ $post->zans_count }} | 评论{{ $post->comments_count }}</p>
		</div>
	@endforeach

	{{ $posts->links() }}

@endsection