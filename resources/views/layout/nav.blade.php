<ul class="nav navbar-nav">
	<li class="dropdown">
		<div>
			<img src="/storage/1d41f81b9831ed56184ca0f9045a3d1b.jpeg">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">{{ \Auth::user()->name }} <span class="caret"></span></a>
			<ul class="dropdown-menu">
				<li><a href="/user/{{ \Auth::id() }}">我的主页</a></li>
				<li><a href="/user/5/setting">个人设置</a></li>
				<li><a href="/logout">退出登录</a></li>
			</ul>
		</div>
	</li>
	<li>
		<a href="/posts" style="display: inline-block;">首页</a>
		<a href="/posts/create" style="display: inline-block;">写文章</a>
		<a href="" style="display: inline-block;">通知</a>
	</li>
</ul>