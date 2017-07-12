<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@include("layout.nav")
	<div class="main">
		@yield("content")

		@include("layout.sidebar")
	</div>
	@include("layout.footer")
</body>
</html>