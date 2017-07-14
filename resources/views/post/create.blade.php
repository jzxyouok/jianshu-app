@extends("layout.main")

@section("content")
<div class="create">
	<form action="/posts" method="POST">
		{{ csrf_field() }}
		<div class="form-group">
			<label>title</label>
			<input type="text" name="title" class="form-control" placeholder="title">
		</div>
		<div class="form-group">
			<label>content</label>
			<textarea id="content" name="content" class="form-control" placeholder="content"></textarea>
		</div>
		@include('layout.error')
		<button type="submit" class="btn btn-default">submit</button>
	</form>
</div>
@endsection