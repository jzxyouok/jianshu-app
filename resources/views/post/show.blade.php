@extends("layout.main")

@section("content")
<div class="detail">
	<h2 class="blog-post-title">{{ $post->title }}</h2>
	<a href="/posts/{{ $post->id }}/edit">edit</a>
	<a href="/posts/{{ $post->id }}/delete">delete</a>
	<div>{{ $post->created_at }}</div>
	<p>{{ $post->content }}</p>
</div>
@endsection