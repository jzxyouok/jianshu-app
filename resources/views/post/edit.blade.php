@extends("layout.main")

@section("content")
<div class="update">
	<form action="/posts/{{ $post->id }}" method="POST">
		<input type="hidden" name="_method" value="PUT">
		{{ csrf_field() }}
		<div class="form-group">
			<label>title</label>
			<input type="text" name="title" class="form-control" placeholder="title" value="{{ $post->title }}">
		</div>
		<div class="form-group">
			<label>content</label>
			<textarea id="content" name="content" class="form-control" placeholder="content">{{ $post->content }}</textarea>
		</div>

		@include('layout.error')
		<button type="submit" class="btn btn-default">submit</button>
	</form>
</div>
@endsection