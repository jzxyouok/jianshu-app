<div class="sidebar">
	<h1>专题</h1>
	<ul class="list-group">
		@foreach($topics as $topic)
		<li class="list-group-item">
			<a href="/topic/{{ $topic->id }}">{{ $topic->name }}</a>
		</li>
		@endforeach
	</ul>
</div>