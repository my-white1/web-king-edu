<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>WEb King |
            @yield('fronMaster_title')
        </title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset('frontend/css/style.css')}}"/>

		<!-- php5 shim and Respond.js for IE8 support of php5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/php5shiv/3.7.3/php5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>

		<!-- Header -->
		<header id="header" class="transparent-nav">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="index.php">
							<img src="{{asset('./frontend/img/logo-alt.png')}}" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle">
						<span></span>
					</button>
					<!-- /Mobile toggle -->
				</div>

				<!-- Navigation -->
				<nav id="nav">
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href="/">Home</a></li>
						<li><a href="/blog">Blog</a></li>
						<li><a href="/contact">Contact</a></li>
					</ul>
				</nav>
				<!-- /Navigation -->

			</div>
		</header>
		<!-- /Header -->


        @yield('fronMaster_main_content')

        		<!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer logo -->
					<div class="col-md-6">
						<div class="footer-logo">
							<a class="logo" href="index.php">
								<img src="{{asset('./frontend/img/logo.png')}}" alt="logo">
							</a>
						</div>
					</div>
					<!-- footer logo -->

					<!-- footer nav -->
					<div class="col-md-6">
						<ul class="footer-nav">
							<li><a href="/">Home</a></li>
							<li><a href="/blog">Blog</a></li>
							<li><a href="/contact">Contact</a></li>
						</ul>
					</div>
					<!-- /footer nav -->

				</div>
				<!-- /row -->


			</div>
			<!-- /container -->

		</footer>
		<!-- /Footer -->

		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->


		<!-- jQuery Plugins -->
		<script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/js/main.js')}}"></script>

	</body>
</html>