<!DOCTYPE html>
<html>
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>简书</title>
	<!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/wangEditor.min.css">
</head>
<body>
	@include("layout.nav")
	<div class="main">
		@yield("content")

		@include("layout.sidebar")
	</div>
	@include("layout.footer")

<script type="text/javascript" src="/js/lib/jquery-1.10.2.min.js"></script>
<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="/js/wangEditor.min.js"></script>

<script type="text/javascript">
	var editor = new wangEditor('content');
	editor.config.uploadImgUrl = '/posts/image/upload';
	editor.config.uploadHeaders = {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	};
	editor.create();
</script>

</body>
</html>