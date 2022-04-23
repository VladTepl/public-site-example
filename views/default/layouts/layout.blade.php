 <!DOCTYPE html>
<html>
	<head>
		<title>{{$title}}</title>
	</head>
	<body>
		
		@section('navbar')
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="{{route('home')}}">Home</a></li>
				<li><a href="{{route('about')}}">About</a></li>
				<li><a href="{{route('articles')}}">Articles</a></li>
				<li><a href="{{route('article')}}">Article</a></li>
				<li><a href="{{route('addUser')}}">addUser</a></li>
				<li><a href="{{route('contact')}}">Contact</a></li>
			</ul>
		</div>
		@show	
		
		@section('date')
			<h1>{{date('Y.M.d',time())}}</h1>
		@show
		
		@yield('content')
		
		@section('footer')
		<div>
			<p>Это футер</p>
		</div>
		@show
	</body>
</html>