@extends('layout.main')

@section('content')
<div>
	<blockquote>
		<p><img src="{{ $user->avatar }}">{{ $user->name }}</p>
		<footer>关注: {{ $user->stars_count }}粉丝: {{ $user->fans_count }} 文章: {{ $user->posts_count }}</footer>

		@include('user/badges/like', ['target_user' => $user])
	</blockquote>
</div>
<div>
	<div>
		<ul class="nav nav-tabs">
			<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">文章</a></li>
			<li><a href="#tab_2" data-toggle="tab" aria-expanded="false">关注</a></li>
			<li><a href="#tab_3" data-toggle="tab" aria-expanded="false">粉丝</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="tab_1">
				@foreach($posts as $post)
				<div style="margin-top: 30px;">
					<div>
						<a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
						&nbsp;&nbsp;--
						<a href="/user/{{$post->user->id}}">{{ $post->user->name }}</a>{{ $post->created_at->diffForHumans() }}
					</div>
					<p class="content">{!! str_limit($post->content, 100, '...') !!}</p>
				</div>
				@endforeach
			</div>

			<div class="tab-pane" id="tab_2">
				@foreach($susers as $user)
				<div style="margin-top: 30px;">
					<p>{{ $user->name }}</p>
					<p>关注:{{ $user->stars_count }}  粉丝: {{ $user->fans_count }}  文章: {{ $user->posts_count }}</p>

					@include('user/badges/like', ['target_user' => $user])
				</div>
				@endforeach
			</div>

			<div class="tab-pane" id="tab_3">
				@foreach($fusers as $user)
				<div style="margin-top: 30px;">
					<p>{{ $user->name }}</p>
					<p>关注:{{ $user->stars_count }}  粉丝: {{ $user->fans_count }}  文章: {{ $user->posts_count }}</p>
					@include('user/badges/like', ['target_user' => $user])
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection