<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>DIY HELP</title>
	<link rel="stylesheet" href="{!! asset('css/bootstrap.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/slick.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/slick-theme.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/lightgallery.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/font-awesome.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/style.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/responsive.css') !!}">
</head>

<body>
	<div class="sub-header">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-7 col-lg-7 col-xs-12">
					<div class="gen-info">
						<ul class="general-info">
							<li>
								<a href="tel:+(49) 176 576 665">
									<i class="fa fa-phone"></i><span> Phone: +(49) 176 576 80665</span>
								</a>
							</li>
							<li>
								<a href="javascript:;">
									<i class="fa fa-map-marker"></i><span>Frankengut Str. 1</span>
								</a>
							</li>
							<li>
								<a href="mailto:contact@diy-help.com">
									<i class="fa fa-envelope"></i><span>Email:contact@diy-help.com</span>
								</a>
							</li>

						</ul>
					</div>
				</div>

				<div class="col-md-5 col-sm-5 col-lg-5 col-xs-12">
					<ul class="login-register">


					</ul>
					<div class="social-info">

						<ul class="social-icon">
							<li>
								<a href="javascript:;">
									<i class="fa fa-facebook-official"></i>
								</a>
							</li>
							<li>
								<a href="javascript:;">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="javascript:;">
									<i class="fa fa-linkedin-square"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-2 col-lg-2 col-xs-12">
					<div class="logo">
						<a href="index.html">
							<img src="/images/logo.png" class="images-responsive" />
						</a>
					</div>
				</div>
				<div class="col-md-7 col-sm-7 col-lg-7 col-xs-12">
					<div class="nav">
						<ul class="nav-menu">
							<li>
								<a href="javascript:;">HOME</a>
							</li>
							<li>
								<a href="javascript:;">ABOUT</a>
							</li>
							<li>
								<a href="javascript:;">SERVICES</a>
							</li>
							<li>
								<a href="javascript:;">BLOG</a>
							</li>
							<li>
								<a href="javascript:;">CATEGORIES</a>
							</li>
							<li>
								<a href="javascript:;">CONTACT</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-lg-3 col-xs-12">
					<div class="search">
						<form class="searchform" name="searchform" id="searchform">
							<input type="search" name="s" class="search" id="search" placeholder="Search...">
							<span class="searchformsubmit">
								<input type="submit" name="searchformsubmit" value="">
								<i class="fa fa-search"></i>
							</span>
						</form>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-lg-12 col-xs-12">
					<div class="header-caption">
						<div class="header-caption-inner">
							<h3>We connect house holds with professionals</h3>
							<!-- Authentication Links -->
							@guest

							<button type="submit" class="btn btn-primary" align="right">
								{{ __('login') }}
							</button>

							@if (Route::has('register'))

							<button type="submit" class="btn btn-primary">
								{{ __('register') }}
							</button>

							@endif
							@else
							<li>
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>

								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</div>
							</li>
							@endguest
							<p>DIY Help provides platform to domestic households with professionals. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

</html>