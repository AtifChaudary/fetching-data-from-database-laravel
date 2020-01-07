
@extends('nav')

<style>
input[type=date]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    display: none;
}

input{
    border-radius: 25px;
    border: 2px transparent #73AD21;
}
</style>

@section('content')

	<!-- Image Slider -->
	<div id="slides" class="carousel slide" data-ride="carousel" id="carousel-other">
		<ul class="carousel-indicators">
			<li data-target="#slides" data-slide-to="0" class="active"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="img/background1.png" style="max-height: 400px !important;">
				<div class="carousel-caption">
                    <h3 data-animate-scroll='{"x": "-200","y": "0", "alpha": "0", "duration": "1"}' style="font-family: algerian;">Come &amp; enjoy the unforgetable nights</h3>
					<h3 data-animate-scroll='{"x": "-200","y": "0", "alpha": "0", "duration": "1"}' style="font-family: algerian;">In the heart of luxehotel</h3>
				</div>
			</div>
		</div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="font-family: algerian;text-align: center;margin-top:5%;">Ghoom-Lay</h1>
                <h3 style="font-family: 'Times New Roman', Times, serif;text-align: center;margin-top:1.5%;">Find deals for any Season From cosy country homes to funky city flats</h3>
            </div>
        </div>
    </div>
    <div class="container" style="background-color: #302939;color:white;">
            <div class="row">
                <div class="col-md-12 search-wrap">
                    <form action="/HotelBooking" method="POST">
                        @csrf
                        <div class="row">

                            <div class= "col-md-3">
                            <div class="form-group">
                                <label>Enter Your Destination:</label>
                                <div class="form-field">
                                <input type="text" id="inputLocation" name="inputLocation" placeholder="Enter Location" required="required">
                            </div>
                            </div>
                        </div>

                        <div class= "col-md-3">
                                <div class="form-group">
                                    <label>Check-in:</label>
                                    <div class="form-field">
                                    <input type="date" name="check-in" placeholder="Check-in date" required="required">
                                </div>
                                </div>
                            </div>

                            <div class= "col-md-3">
                                    <div class="form-group">
                                        <label>Check-out:</label>
                                        <div class="form-field">
                                        <input type="date" name="check-out" placeholder="Check-out date" required="required">
                                    </div>
                                    </div>
                                </div>


                                <div class="col-md-2">
                                    <button class="btn btn-info btn-sm btn-block" style="border-radius: 25px;border: 2px transparent #73AD21;margin-top:15%;">Search</button>
                                </div>

                        </div>
                    </form>
                </div>
            </div>
    </div>

	<!-- Top Destinations -->
	<div class="container padding">
		<div class="row welcome text-center" data-aos="fade-up">
			<div class="col-12">
				<h1 class="display-4">Top Destinations</h1>
			</div>
			<hr>
		</div>
	</div>
	<div class="container padding">
		<div class="row text-center padding" data-aos="fade-up">
			<div class="col-xs-12 col-sm-6 col-md-4 ">
				<img src="img/hotel.png" class="rounded" height="65%" width="85%">
				<h4 align="left" style="margin-left: 1.5rem "><br>
					<pre class="tab" style="color: #d6692a">Islamabad 595 Hotels</pre>
				</h4>
				<h3 align="left" style="margin-left: 1.5rem ; margin-bottom: 8rem;">VISITS THE CITY OF LIGHT</h3>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 ">
				<img src="img/karachi.jpg" class="rounded" height="65%" width="85%">
				<h4 align="left" style="margin-left: 1.5rem "><br>
					<pre class="tab" style="color: #d6692a">Karachi 1001 Hotels</pre>
				</h4>
				<h3 align="left" style="margin-left: 1.5rem ; margin-bottom: 8rem;">DISCOVER THE CITY OF DREAMS</h3>
			</div>
			<div class="col-xs-12 col-md-4 ">
				<img src="img/lahore.jpg" class="rounded" height="65%" width="85%">
				<h4 align="left" style="margin-left: 1.5rem "><br>
					<pre class="tab" style="color: #d6692a">Lahore 999 Hotels</pre>
				</h4>
				<h3 align="left" style="margin-left: 1.5rem ; margin-bottom: 8rem;"> ZINDA DILANE LAHORE </h3>
			</div>
		</div>
		<hr class="my-4">
	</div>

	<!--A little bit more about momondo hotels-->
	<div class="container padding">
		<div class="row welcome text-center" data-aos="fade-up">
			<div class="col-12">
				<h1 class="display-4"><b>Little bit more about Hotels</b></h1>
				<p class="lead"><b>Here’s why people use Ghoom-Lay as their free service to search for cheap hotels</b>
				</p>
			</div>
			<hr>
		</div>
	</div>
	<div class="container padding">
		<div class="row text-center padding" data-aos="fade-up">
			<div class="col-xs-12 col-sm-6 col-md-4 ">
				<h4>Best Deals</h4>
				<p class="lead" align="justify">Hotel photos and star ratings don’t tell you everything. We search
					across the
					major booking and hotel sites and collect guest reviews posted online so that you can get the full
					story</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 ">
				<h4>Best Price garaunted</h4>
				<p class="lead" align="justify">Hotel photos and star ratings don’t tell you everything. We search
					across the
					major booking and hotel sites and collect guest reviews posted online so that you can get the full
					story</p>
			</div>
			<div class="col-xs-12 col-md-4 ">
				<h4>Travellers Love Us</h4>
				<p class="lead" align="justify">Hotel photos and star ratings don’t tell you everything. We search
					across the
					major booking and hotel sites and collect guest reviews posted online so that you can get the full
					story</p>
			</div>
		</div>
		<hr class="my-4">
    </div>

    <script>
    function initMap() {
                var input = document.getElementById('inputLocation');
                var autocomplete = new google.maps.places.Autocomplete(input);
                }
    </script>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places&callback=initMap"
async defer></script>

@endsection
