<!-- Bootstrap -->
<link rel="stylesheet" href="{{ asset('public/bootstrap/bootstrap.min.css')}}">
<!-- Font awesome styles -->
<link rel="stylesheet" href="{{ asset('public/apartment-font/css/font-awesome.min.css')}}">
<!-- Custom styles -->
<link rel='stylesheet' type='text/css'
	href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,500italic,700,700italic&amp;subset=latin,latin-ext'>
<link rel="stylesheet" type="text/css" href="{{ asset('public/css/plugins.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/css/apartment-layout.css')}}">
<link id="skin" rel="stylesheet" type="text/css" href="{{ asset('public/css/apartment-colors-blue.css')}}">

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
	.col-xl-3 {
		width: 25%;
		position: relative;
		min-height: 1px;
		padding-left: 0.9375rem;
		padding-right: 0.9375rem;
		float: left;
	}

	.col-xl-6 {
		width: 50%;
		position: relative;
		min-height: 1px;
		padding-left: 0.9375rem;
		padding-right: 0.9375rem;
		float: left;
	}

	.col-xl-4 {
		width: 33.33333%;
		position: relative;
		min-height: 1px;
		padding-left: 0.9375rem;
		padding-right: 0.9375rem;
		float: left;
	}

	.col-xl-12 {
		width: 100%;
		position: relative;
		min-height: 1px;
		padding-left: 0.9375rem;
		padding-right: 0.9375rem;
		float: left;
	}

	 #mlogo {
    width: 135px;
    margin-top:-10px;
  }
</style>
</head>

<body>
	<div class="loader-bg"></div>
	<div id="wrapper">

		<!-- Page header -->
		<header>
			<!--<div class="top-bar-wrapper">
				<div class="container top-bar">
					<div class="row">
						<div class="col-xs-5 col-sm-8">
							<div class="top-mail pull-left hidden-xs">
								<span class="top-icon-circle">
									<i class="fa fa-envelope fa-sm"></i>
								</span>
								<span class="top-bar-text for email"></span>
							</div>
							<div class="top-phone pull-left hidden-xxs">
								<span class="top-icon-circle for-php">
								
								</span>
								<span class="top-bar-text"></span>
							</div>
							<div class="top-localization pull-left hidden-sm hidden-md hidden-xs">
								<span class="top-icon-circle pull-left">
									<i class="fa fa-map-marker"></i>
								</span>
								<span class="top-bar-text for-address"></span>
							</div>
						</div>
						<div class="col-xs-7 col-sm-4">
							<div class="top-social-last top-dark pull-right" data-toggle="tooltip" data-placement="bottom"
								title="Login/Register">
								<a class="top-icon-circle" href="#login-modal" data-toggle="modal">
									<i class="fa fa-lock"></i>
								</a>
							</div>

							<div class="top-social pull-right">
								<a class="top-icon-circle" href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</div>
							<div class="top-social pull-right">
								<a class="top-icon-circle" href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</div>
							<div class="top-social pull-right">
								<a class="top-icon-circle" href="#">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
							<div class="top-social pull-right">
								<a class="top-icon-circle" href="#">
									<i class="fa fa-skype"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>--><!-- /.Page top-bar-wrapper -->
			<nav class="navbar main-menu-cont">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
							aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar icon-bar1"></span>
							<span class="icon-bar icon-bar2"></span>
							<span class="icon-bar icon-bar3"></span>
						</button>
						<a href="{{ url('/')}}" title="" class="navbar-brand">
							<img src="{{ asset('public/images/logo-dark.png')}}" id="mlogo"
								alt="My landmark - Flats, Premium Apartments for sale at Bangalore" />
						</a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="{{ url('/')}}" class="dropdown-toggle">Home</a>
							</li>
							<li class="dropdown">
								<a href="{{ url('/about')}}" class="dropdown-toggle">About Us</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
									aria-expanded="false">Post</a>
								<ul class="dropdown-menu">
									<li><a tabindex="-1" href="{{ url('/buy')}}">Buy Property</a> </li>
									<li><a href="{{ url('/sell')}}">Sell Property</a></li>
									<li><a href="{{ url('/rent')}}">Rent Property</a></li>
								</ul>
							</li>
							<li><a href="{{ url('/project')}}" class="dropdown-toggle">Projects</a></li>
							<li><a href="{{ url('/builder')}}" class="dropdown-toggle">Builders</a></li>
							<li><a href="{{ url('/contact')}}" class="dropdown-toggle">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</nav><!-- /.mani-menu-cont -->
		</header>