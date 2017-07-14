@extends('layout.main')

@section('content')
<div class="blog-main">
	<form class="form-horizontal" action="/usr/5/setting" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="MESUY3topeHgvFqsy9EcM916UWQq6khiGHM91wHy">
		<div class="form-group">
			<label>用户名</label>
			<div>
				<input type="text" name="name" class="form-control" value="黄汉韬">
			</div>
		</div>
		<div class="form-group">
			<label>头像</label>
			<div>
				<input type="file" value="用户名" style="width: 72px;" name="avatar">
				<img src="image/user.jpeg" alt="" style="border-radius: 50%;">
			</div>
		</div>
		<button type="submit" class="btn btn-default">修改</button>
	</form>
</div>
@endsection