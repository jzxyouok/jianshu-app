@extends("layout.main")

@section("content")
<div class="detail">
	<h2 class="blog-post-title">{{ $post->title }}</h2>
	@can('update', $post)
	<a href="/posts/{{ $post->id }}/edit">edit</a>
	@endcan
	@can('delete', $post)
	<a href="/posts/{{ $post->id }}/delete">delete</a>
	@endcan
	<div>{{ $post->created_at }} by {{ $post->user->name }}</div>
	<p>{!! $post->content !!}</p>
</div>

<div class="panel panel-default">
	<div class="panel-heading">评论</div>
	<ul class="list-group">
		@foreach($post->comments as $comment)
		<li class="list-group-item">
			<h5>{{ $comment->created_at }} by {{ $comment->user->name }}</h5>
			<div>{{ $comment->content }}</div>
		</li>
		@endforeach
	</ul>
</div>

<div class="panel panel-default">
	<div class="panel-heading">发表评论</div>
	<ul class="list-group">
		<form action="/posts/{{ $post->id }}/comment" method="POST">
			{{ csrf_field() }}
			<li class="list-group-item">
				<textarea name="content" class="form-control" rows="10"></textarea>

				@include('layout.error')
				<button class="btn btn-default" type="submit">提交</button>
			</li>

		</form>
	</ul>
</div>

@endsection