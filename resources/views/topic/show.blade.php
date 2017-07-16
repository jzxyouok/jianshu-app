@extends('layout.main')

@section('content')
<div>
	<blockquote>
		<h4>{{ $topic->name }}</h4>
		<footer>文章: {{ $topic->post_topics_count }}</footer>

		@include('layout.error')
		<button class="btn btn-default" data-toggle="modal" data-target="#topic_submit_modal" topic-id="{{ $topic->id }}" type="button">投稿</button>
	</blockquote>
</div>
<div class="modal fade" id="topic_submit_modal">
	<div class="modal-dialog">
		<div class="modal-header">
			<button type="button" class="
			close" data-dismiss="modal" aria-label="Close">close
			</button>
			<h4 class="modal-title" id="myModalLabel">我的文章</h4>
		</div>
		<div class="modal-body">
			<form action="/topic/{{ $topic->id }}/submit" method="POST">
				{{ csrf_field() }}
				@foreach($myposts as $post)
				<div class="checkbox">
					<label>
						<input type="checkbox" name="post_ids[]" value="{{ $post->id }}">
						{{ $post->title }}
					</label>
				</div>
				@endforeach
				<button type="submit" class="btn btn-default">投稿</button>
			</form>
		</div>
	</div>
</div>

<div>
	<div>
		<ul class="nav nav-tabs">
			<li class="active">
				<a href="#tab_1" data-toggle="tab" aria-expanded="true">文章</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="tab_1">
				@foreach($posts as $post)
				<div>
					<p><a href="/user/{{ $post->user->id }}">{{ $post->user->name }}</a>{{ $post->created_at->diffForHumans() }}</p>
					<p><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></p>
					<p>{!! str_limit($post->content, 100, '...') !!}</p>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection