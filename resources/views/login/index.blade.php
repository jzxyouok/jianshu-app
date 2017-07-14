<!DOCTYPE html>
<html>
<head>
	<title>登录页面</title>
	<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<form method="POST" action="/login">
			{{ csrf_field() }}
			<h2>请登录</h2>
			<label for="inputEmail" class="sr-only">邮箱</label>
			<input type="email" name="email" id="inputEmail" class="form-control" placeholder="邮箱地址">
			<label for="inputPassword" class="sr-only">密码</label>
			<input type="password" name="password" id="inputPassword" class="form-control" placeholder="密码">
			<div class="checkbox">
				<label>
					<input type="checkbox" value="1" name="is_remember">记住我
				</label>
			</div>

			@include('layout.error')
			<button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
			<a href="/register" class="btn btn-lg btn-primary btn-block" type="submit">去注册</a>
		</form>
	</div>
</body>
</html>