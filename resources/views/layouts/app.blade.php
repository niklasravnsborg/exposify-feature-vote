<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Exposify Funktionen</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.exposify.de/assets/css/main.css">
		<link rel="stylesheet" href="/main.css">
	</head>
	<body id="app-layout">
		<header class="navigation">
			<div class="logo-section">
				<div class="logo"><a href="/"><img src="https://www.exposify.de/assets/img/exposify-logo-single-white.svg" alt="Exposify logo"></a></div>
			</div>
			<nav class="header-nav">
				<a href="https://www.exposify.de">Startseite</a>
				<a href="http://blog.exposify.de">Blog</a>
				<a href="https://exposify.de#features">Funktionen</a>
				<a href="https://exposify.de#email">Beta Zugang</a>
			</nav>
		</header>
		<section class="hero">
			<div class="row">
				<div class="medium-12 column">
					<div class="hero-content text-center">
						<h1 class="section-title">Exposify Funktionen</h1>
						<p class="intro">Melde Dich an um mitzubestimmen welche Funktionen Du in Exposify sehen möchtest.</p>
					</div>
				</div>
			</div>
		</section>
		<nav class="navbar">
			<div class="row">
				<div class="small-12 column">
					<ul class="navbar-nav">
						<li><a href="/">Funktionen</a></li>
					</ul>
					<ul class="navbar-nav navbar-right">
						@if (Auth::guest())
							<li><a href="{{ url('/login') }}">Anmelden</a></li>
							<li><a href="{{ url('/register') }}">Registrieren</a></li>
						@else
							<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>{{ Auth::user()->fullname }} abmelden</a></li>
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
