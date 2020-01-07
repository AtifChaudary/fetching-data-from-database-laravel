<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ghoom-Lay</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	<script src="js/jquery-1.12.4.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="js/bootstrap-4.2.1.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="css/bootstrap-4.2.1.css" rel="stylesheet" type="text/css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>

    <!-- Navigation -->

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-sm-start fixed-top">
	    <a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 mr-auto" href="/index"><img src="img/logo2.png" width="200px"></a>

			<button class="navbar-toggler align-self-start" type="button">
				<span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end bg-dark p-3 p-lg-0 mt-5 mt-lg-0 mobileMenu small" id="navbarSupportedContent">

                <ul class="navbar-nav align-self-stretch">
					<li class="nav-item  {{ Request::is('/') ? 'active' : null }}">
						<a class="nav-link" href="{{ url('/')}}"><b>Home</b></a>
					</li>
					<li class="nav-item {{ Request::is('hotel') || Request::is('HotelBooking') ? 'active' : null }}">
						<a class="nav-link" href="{{ url('/hotel')}}"><b>Hotels</b></a>
					</li>
					<li class="nav-item {{ Request::is('PlanATour') || Request::is('TourSuggestion') ? 'active' : null }}">
						<a class="nav-link" href="{{ url('/PlanATour')}}"><b>Plan a Tour</b></a>
                    </li>

					<li class="nav-item dropdown {{ Request::is('TourPoints/*') ? 'active' : null }}">
						<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">Tour Points</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="/TourPoints/4">Islamabad</a>
							<a class="dropdown-item" href="/TourPoints/2">Azad Kashmir</a>
							<a class="dropdown-item" href="/TourPoints/3">Naran Kaghan</a>
							<a class="dropdown-item" href="/TourPoints/5">Murree</a>
							<a class="dropdown-item" href="/TourPoints/6">Sawat</a>
							<a class="dropdown-item" href="/TourPoints/7">Gilgit</a>
							<a class="dropdown-item" href="/TourPoints/8">Balochistan</a>
							<a class="dropdown-item" href="/TourPoints/4">Punjab</a>
							<a class="dropdown-item" href="/TourPoints/4">Sindh</a>
							<a class="dropdown-item" href="/TourPoints/4">Hunza</a>
						</div>
					</li>
					<li class="nav-item {{ Request::is('Trending') ? 'active' : null }}">
						<a class="nav-link" href="{{ url('/Trending')}}"><b>Trending</b></a>
					</li>
					<li class="nav-item {{ Request::is('ContactUs') ? 'active' : null }}">
						<a class="nav-link" href="{{ url('/ContactUs')}}"><b>Contact Us</b></a>
					</li>
				</ul>
			</div>
    </nav>
    <div class="overlay"></div>



	@yield('content')





<!--- Footer -->
<footer data-aos="fade-up">
		<div class="container padding">
			<div class="row text-center">
				<div class="col-md-4">
					<img src="img/logo2.png" height="57px">
					<hr class="light">
					<p style="color:white;font-family: 'Times New Roman', Times, serif;">Contact No: 03034239783</p>
					<p style="color:white;font-family: 'Times New Roman', Times, serif;">Email: ghoomly.tours@gmail.com
					</p>
					<p style="color:white;font-family: 'Times New Roman', Times, serif;">Have a nice day...</p>
				</div>
				<div class="col-md-4">
					<hr class="light">
					<h5 style="color:white;font-family: 'Times New Roman', Times, serif;"><b>Popular Tags</b></h5>
					<hr class="light">
					<p><a href="#" style="color:white;font-family: 'Times New Roman', Times, serif;">Historical places
							in Pakistan</a></p>
					<p><a href="#" style="color:white;font-family: 'Times New Roman', Times, serif;"> Featured</a></p>
					<p><a href="#" style="color:white;font-family: 'Times New Roman', Times, serif;">Lakes Valleys</a>
					</p>
					<p><a href="#" style="color:white;font-family: 'Times New Roman', Times, serif;">Forts in
							Pakistan</a></p>
					<p><a href="#" style="color:white;font-family: 'Times New Roman', Times, serif;">Tombs</a></p>
					<p><a href="#" style="color:white;font-family: 'Times New Roman', Times, serif;">Beaches</a></p>
					<p><a href="#" style="color:white;font-family: 'Times New Roman', Times, serif;">Mosques</a></p>
				</div>
				<div class="col-md-4">
					<hr class="light">
					<h5 style="color:white;font-family: 'Times New Roman', Times, serif;"><b>Featured Posts</b></h5>
					<hr class="light">
					<p><a href="#" style="color:white;font-family: 'Times New Roman', Times, serif;">Lake Saif ul
							Malook</a></p>
					<p><a href="#"
							style="color:white;font-family: 'Times New Roman', Times, serif;">Minar-e-Pakistan</a></p>
					<p><a href="#" style="color:white;font-family: 'Times New Roman', Times, serif;">Neelum Valley</a>
					</p>
					<p><a href="#" style="color:white;font-family: 'Times New Roman', Times, serif;">Ansu Jheel</a></p>
					<p><a href="#" style="color:white;font-family: 'Times New Roman', Times, serif;">Babu Sar Top</a>
					</p>
					<p><a href="#" style="color:white;font-family: 'Times New Roman', Times, serif;">Gwadar</a></p>
					<p><a href="#" style="color:white;font-family: 'Times New Roman', Times, serif;">Chitral</a></p>
				</div>
				<div class="col-md-12">
					<hr class="light-100">
					<h5 style="color: white;">© 2019 ghoom-ly.com. All rights reserved. Copying and reproduction of
						content
						without explicit permission is prohibited.</h5>
				</div>
			</div>
		</div>
    </footer>


	<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
	<script src="js/EaselPlugin.js"></script>
	<script src="js/ScrollToPlugin.js"></script>
	<script src="js/TweenMax.js"></script>
	<script src="js/animate-scroll.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

	<script type="text/javascript">
		$(document).animateScroll();
    </script>

    <script>
            $(document).ready(function(){
                $(".navbar-toggler, .overlay").on("click",function(){
                    $(".mobileMenu, .overlay").toggleClass("open");
                });
            });

    </script>

	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>


	<script>
		var vid = document.getElementById("myVideo");

		function playVid() {
			vid.play();
		}

		function pauseVid() {
			vid.pause();
		}
    </script>

</body>
</html>
