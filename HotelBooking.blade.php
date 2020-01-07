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

<?php
$location = $_POST['inputLocation'];
$checkIn = $_POST['check-in'];
$checkOut = $_POST['check-out'];
?>

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
                    <div class="col-md-12" style="font-family:algerian;text-align:center;">
                        <h1><?php echo $location?></h1>
                    </div>
                </div>
            </div>


<div class="container" style="margin-top:3%;">
    <div class="row">

        <div class="col-md-3" style="background-color: #302939;color:white;border: 1px solid red;">
            <form action="" method="POST">
                @csrf
                <div class="col-md-12">

                    <div class="form-group">
                        <label>Enter Your Destination:</label>
                        <div class="form-field">
                            <input type="text" id="inputLocation" value = "<?php echo $location?>" name="inputLocation" placeholder="Enter Location" required="required">
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Check-in:</label>
                        <div class="form-field">
                            <input type="date" id="check-in" value = "<?php echo $checkIn?>" name="check-in" placeholder="Check-in Date" required="required">
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Check-Out:</label>
                        <div class="form-field">
                            <input type="date" id="check-out" name="check-out" value = "<?php echo $checkOut?>" placeholder="Check-out Date" required="required">
                        </div>
                    </div>
                </div>

            <div class="col">
                <button class="btn btn-info btn-sm btn-block" style="border-radius: 25px;border: 2px transparent #73AD21;margin-top:5%;">Search</button>
            </div>

        </form>
        </div> <!--Container-col -->
        <?php
        if(!empty($hotelData)){
        ?>
        <div class="col-md-9">

            @foreach($hotelData as $hotels)

            <div class="container" style="border: 1px solid black;margin-bottom: 5%">
                    <div class="row">
                        <div class="col-md-12" style="font-family:'Times New Roman', Times, serif;">
                    <div class="container" style="border: 1px solid black;">
                        <div class="row">
                        <div class="col-md-3">
                          <img src="{{$hotels->hotel_image}}" style="max-width: 100%;max-height: 100%;">
                        </div>
                        <div class="col-md-9">
                        <div class="cold-md-4">
                            <div class="container">
                                <div class="row" >
                                    <div class="col-md-8">
                                        <h4>{{$hotels->name}}</h4>
                                        <h5>{{$hotels->address}}<br><a href="#" data-toggle="modal" data-target="#exampleModalCenter">Show on Map</a></h5>
                                    </div>
                                    <div class="col-md-4" style="border: 1px solid black;background-color: blanchedalmond;">
                                        <h5><a href="{{$hotels->DescriptionURL}}checkin=<?php echo $checkIn?>;checkout=<?php echo $checkOut?>;" target="blank">{{$hotels->review}}<br>Rating: {{$hotels->rating}}<br>{{$hotels->total_reviews}}<br>{{$hotels->hotel_type}}</a></h5>
                                        <br>
                                        <br>
                                        <h5>{{$hotels->persons_stay_in_room}}</h5>
                                        <h5>Price: {{$hotels->price}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-9" style="border: 1px solid black;">
                            <a><b>{{$hotels->UserReviewName}}<br>"{{$hotels->UserReviewComment}}"</b></a>
                        </div>
                        <div class="col-md-3">
                                <a href="{{$hotels->DescriptionURL}}checkin=<?php echo $checkIn?>;checkout=<?php echo $checkOut?>;" target="blank" class="btn btn-info btn-sm btn-block" style="border-radius: 25px;border: 2px transparent #73AD21;margin-top:5%;">For More Details</a>
                                <a href="{{$hotels->DescriptionURL}}checkin=<?php echo $checkIn?>;checkout=<?php echo $checkOut?>;" target="blank" class="btn btn-info btn-sm btn-block" style="border-radius: 25px;border: 2px transparent #73AD21;margin-top:5%;">Book Now</a>
                        </div>
                    </div>
                </div>
                        </div>
                    </div>
            </div>
            @endforeach
            <?php
        }else{
        ?>
         <div class="col-md-9">
                <div class="container" style="border: 1px solid black;margin-bottom: 5%">
                        <div class="row">
                            <h3>Oops....No Data Found In our Records... Try With Different Location</h3>
                        </div>
                </div>
            </div>
        <?php
    }
    ?>




        </div> <!--Container-col-->
    </div>  <!--Container-row--->
</div>  <!--Container-Fluid-->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header"  style="background-color: white;color:black;">
              <h5 class="modal-title" id="exampleModalLongTitle">Pearl Continental Hotel, Lahore</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="background-color: white;color:black;">
                    <iframe
                    width="450"
                    height="400"
                    frameborder="0" style="border:2"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAFnpil_fmiYRaBY2XlzfvDOSWDxSYgtYU
                      &q=Shahrah-e-Quaid-e-Azam, The Mall, 54000 Lahore, Pakistan" allowfullscreen>
                  </iframe>
            </div>
            <div class="modal-footer" style="background-color: white;color:black;">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
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
