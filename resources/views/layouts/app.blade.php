<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Exposify Funktionen</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<style>
			body {
				font-family: 'Lato';
			}

			.fa-btn {
				margin-right: 6px;
			}
		</style>
	</head>
	<body id="app-layout">
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">

					<!-- Collapsed Hamburger -->
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
						<span class="sr-only">Navigation umschalten</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<!-- Branding Image -->
					<a class="navbar-brand" href="{{ url('/') }}">
						Exposify Funktionen
					</a>
				</div>

				<div class="collapse navbar-collapse" id="app-navbar-collapse">

					<ul class="nav navbar-nav">
						<li><a href="https://www.exposify.de">Startseite</a></li>
						<li><a href="http://blog.exposify.de">Blog</a></li>
						<li><a href="https://www.exposify.de/#email">Beta Zugang</a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						@if (Auth::guest())
							<li><a href="{{ url('/login') }}">Anmelden</a></li>
							<li><a href="{{ url('/register') }}">Registrieren</a></li>
						@else
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
									{{ Auth::user()->fullname }} <span class="caret"></span>
								</a>

								<ul class="dropdown-menu" role="menu">
									<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Abmelden</a></li>
								</ul>
							</li>
						@endif
					</ul>

				</div>
			</div>
		</nav>

		@yield('content')

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</body>
</html>
