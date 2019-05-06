<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Site Metas -->
    <title>E - Aset Dinas Pendidikan Kabupaten Bandung</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{URL::to('Home/images/dinas.png')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{URL::to('Home/images/dinas.png')}}">

    <!-- Bootstrap CSS -->
    <link href="{{asset('Home/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Site CSS -->
    <link href="{{asset('Home/css/style.css')}}" rel="stylesheet">
    <!-- ALL VERSION CSS -->
    <link href="{{asset('Home/css/versions.css')}}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{asset('Home/css/responsive.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('Home/css/custom.css')}}" rel="stylesheet">

    <!-- Font Awesome css-->
    <link href="{{asset('Home/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Modernizer for Portfolio -->
    <script src="{{asset('Home/js/modernizer.js')}}"></script>

</head>
<body class="host_version">


    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->

	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.html">
					<img src="{{URL::to('Home/images/dinas.png')}}" height="70" width="80" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="{{URL('/')}}">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="{{URL('/about')}}">About Us</a></li>
						<li class="nav-item"><a class="nav-link" href="teachers.html">Projeck</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="{{URL('/login')}}">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->
    @yield('contens')
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>About US</h3>
                        </div>
                        <p>Kabupaten Bandung adalah salah satu kabupaten yang ada di indonesia lahir melalui piagam Sultan Agung Mataram, yaitu pada tanggal 9 bulan Muharram tahun Alif.</p>
						<div class="footer-right">
							<ul class="footer-links-soi">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul><!-- end links -->
						</div>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

				<div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Information Link</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Projeck</a></li>
							<li><a href="#">Contact</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">info@bandungkab.go.id</a></li>
                            <li><a href="#">http://www.bandungkab.go.id</a></li>
                            <li>022-5891691/1183 </li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-center">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">E - Aset Dinas Pendidikan Kabupaten Bandung</a> Design By : <a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="{{asset('Home/js/all.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('Home/js/custom.js')}}"></script>
	<script src="{{asset('Home/js/timeline.min.js')}}"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>
</body>
</html>
