<!DOCTYPE html>
<html>
<head>
	<title>注册页面</title>
	<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<form method="POST" action="/register">
			{{ csrf_field() }}
			<h2>请注册</h2>
			<label for="name" class="sr-only">名字</label>
			<input type="text" name="name" id="name" class="form-control" placeholder="名字">
			<label for="inputEmail" class="sr-only">邮箱</label>
			<input type="email" name="email" id="inputEmail" class="form-control" placeholder="邮箱">
			<label for="inputPassword" class="sr-only">密码</label>
			<input type="password" name="password" id="inputPassword" class="form-control" placeholder="输入密码">
			<label class="sr-only">重复密码</label>
			<input type="password" name="password_confirmation" class="form-control" placeholder="重复输入密码">
			
			@include('layout.error')
			<button class="btn btn-lg btn-primary btn-block" type="submit">注册</button>
		</form>
	</div>
</body>
</html>