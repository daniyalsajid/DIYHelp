<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
					<div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
						<div class="gen-info">
							<ul class="general-info">
								<li>
									<a href="tel:+(49) 176 576 665">
										<i class="fa fa-phone"></i><span> Phone: +(49) 176 576 665</span>
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
                                 <!-- Authentication Links -->
                                @guest
                                <li>
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                <li>
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
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
                                
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
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
							<img src="images/logo.png" class="images-responsive"/>
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
							<input type="search" name="s"  class="search" id="search" placeholder="Search...">
							<span class="searchformsubmit" >
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
							<p>DIY Help provides platform to domestic households with professionals. </p>
					</div>
					</div>
				</div>
			</div>
        </div>
        

	</header>

<section class="process">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                <div class="process-box">
                    <div class="process-box-inner">
                        <img src="images/mask2.png" class="img-responsive" />
                        <h4>Register for Free</h4>
                        <p>DIY-Help provides free platform to domestic users and freelance professionals.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                <div class="process-box">
                    <div class="process-box-inner">
                        <img src="images/mask3.png" class="img-responsive" />
                        <h4>Choose a Service</h4>
                        <p>Find or offer services at the time of your choice.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                <div class="process-box">
                    <div class="process-box-inner">
                        <img src="images/mask4.png" class="img-responsive" />
                        <h4>Find a Customer or Professional</h4>
                        <p>DIY-Help directly connects users and professionals without charging any fee.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
                <div class="process-box">
                    <div class="process-box-inner">
                        <img src="images/mask5.png" class="img-responsive" />
                        <h4>Get or Offer a Service</h4>
                        <p>Get free estimations and get services at the earliest. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="help">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="help-heading">
                    <h2>Help is here!</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="no-pad col-md-4 col-lg-4 col-sm-4 col-xs-12">
                <div class="help-box">
                    <div class="help-box-inner">
                        <a href="category.html">
                            <img src="images/s1.png" class="img-responsive" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="no-pad col-md-4 col-lg-4 col-sm-4 col-xs-12">
                <div class="help-box">

                    <div class="help-box-inner">
                        <a href="javascript:;">
                            <img src="images/s2.png" class="img-responsive" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="no-pad col-md-4 col-lg-4 col-sm-4 col-xs-12">
                <div class="help-box">
                    <div class="help-box-inner">
                        <a href="offer_services.html">
                            <img src='/images/s3.png' class="img-responsive" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!DOCTYPE html>
<html>

<footer class="home-footer">
<script src="{!! asset('js/jquery-3.4.1.min.js') !!}"></script>
	<script src="{!! asset('js/bootstrap.js') !!}"></script>
	<script src="{!! asset('js/slick.js') !!}"></script>
	<script src="{!! asset('js/lightgallery-all.min.js') !!}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js"></script>
	<script src="{!! asset('js/main.js') !!}"></script>
		<div class="container">
			<div class="row">
				<div class="col-md-offset-4 col-lg-offset-4 col-sm-offset-4 col-md-4 col-lg-4 col-sm-4 col-xs-12">
					<div class="play-icon">
						<a href="get_help_video.html">
							<img src="images/play-icon.png"/>
							<span>WE MAKE A DIFFERENCE</span>
						</a>
					</div>
					<div class="help-heading">
						<h2>Video Help!</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
					<div class="copy-right">
						<p>Copyright © 2019 DIY-Help. All Rights Reserved.</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
					<div class="develop">
						<p><span>Small Masters Project.</span></p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</html>