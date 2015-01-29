<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Census Maps</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

		<!-- local CSS file -->
		{{ HTML::style('css/layout.css'); }}

		<!-- Bootstrap core JavaScript -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

		<!-- CSS file for typeahead -->
		{{ HTML::style('css/typeahead.css'); }}

	</head>

	<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Census Maps</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="/">Home</a></li>
					<li><a href="about">About</a></li>
					<li><a href="contact">Contact</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>

	<script>
		// get current URL and split into array
		var pathArray = window.location.pathname.split( "/" );

		// get the last part of the URL
		var last = pathArray[(pathArray.length - 1)];

		// remove any existing highlighting
		$(".navbar-nav a").parent().removeClass("active");

		// highlight the navigation element based on the current page
		if(last == "about"){
			$(".navbar-nav a[href='about']").parent().addClass("active");
		} else if(last == "contact"){
			$(".navbar-nav a[href='contact']").parent().addClass("active");
		} else {
			$(".navbar-nav a[href='/']").parent().addClass("active");
		}
	</script>


	<div class="container">
		@yield('content')
	</div>




	</body>
</html>