<!DOCTYPE html>
<html>
<head>
	<title>内容管理系统首页</title>
</head>
<body>
	@include('admin/layout/header')

	@include('admin/layout/sidebar')

	<div class="content-wrapper">
		@yield('content')
	</div>
</body>
</html>