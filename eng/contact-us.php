<?php
$title = "Contact Page";
include("includes/header.php");
?>

<!-- End Section Header style3 -->

<!-- Start Pages Title Style1 -->

<section id="Page-title" class="Page-title-Style1">
	<div class="container inner-Pages">
    	<div class="row">
            <div class="Page-title">
				<div class="col-md-6 Title-Pages">
                	<h2>Contact</h2>
                </div>
                <div class="col-md-6 Catogry-Pages">
					<p>You are Here :  <a href="#">Home</a> / <a href="#">Contact Us</a></p>
                </div>
            </div>
 		</div>
    </div>
</section>

<!-- End Pages Title Style1 -->

<!-- Start Map Style1 -->

<div id="Map-Style" class="light-wrapper">
	<div id="map_canvas"></div>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
	<script>
	// This example displays a marker at the center of Australia.
	// When the user clicks the marker, an info window opens.

	function initialize() {
	  var myLatlng = new google.maps.LatLng(-0.174323, -78.349396);
	  var mapOptions = {
		zoom: 10,
		center: myLatlng,
		  zoomControl: false,
		  scaleControl: false,
		  scrollwheel: false,
		  disableDoubleClickZoom: true,
   	  };

	  var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

	  var contentString = '<div id="content">'+
		  '<h3>Fobles Inc.</h3><p>25, 245 Street Name, Address, City</p>'+
		  '</div>';

	  var infowindow = new google.maps.InfoWindow({
		  content: contentString
	  });

	  var marker = new google.maps.Marker({
		  position: myLatlng,
		  map: map,
		  title: 'Uluru (Ayers Rock)'
	  });
	  google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map,marker);
	  });
	}

	google.maps.event.addDomListener(window, 'load', initialize);

    </script>

</div>

<!-- End Map Style1 -->


<!-- Start Contact -->

<section id="Contact" class="light-wrapper"> 
	<div class="container inner">
    	<div class="row">
        	<div class="col-md-12">
                <div class="title-section text-center">
                    <h3>Get in touch with us!</h3>
                   
                    <div class="line-break"></div>
                </div>
                <div class="description-section text-center">
                <p>Give us the opportunity to show you the potentials of our products and services and how it can help you in day to day operations, please fill out our request form below and or e-mail us any questions</p>

                </div>
            </div>
        </div>
        <div class="divcod30"></div>
        <div class="row">
			<div class="col-md-8">
				<div class="Contact-Form">
					<form class="leave-comment contact-form" method="post" action="http://hotelerotech.com/formsend.php" id="cform" autocomplete="on">
						<div class="Contact-us">
							<div class="form-input">
								<input type="text" name="nombre" placeholder="Name" required>
							</div>
							<div class="form-input">
								<input type="email" name="email"  placeholder="Email" required>
							</div>
                            
                            <div class="form-input" style="margin-right:30px;">
								<input type="text" name="telefono"  placeholder="Phone Number" required>
							</div>
                            
                            <div class="form-input">
								<input type="text" name="company"  placeholder="Company*" required>
							</div>
                            
							<div class="form-textarea">
								<textarea class="txt-box textArea" name="message" cols="40" rows="7" id="messageTxt" placeholder="Message" spellcheck="true" required></textarea>
							</div>
							<div class="form-submit">
								<input type="submit" class="btn btn-large main-bg" value="Send">
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-4">
				<div class="Contact-Info">
					<div class="Title-Contact">
						<h3>Address:</h3>
					</div>
					<div class="Block-Contact">
						<ul>
							<li>
								<i class="fa fa-map-marker"></i>
								<p>Calle 24 de septiembre y Tobias Trujillo E, Tababela, Quito - Ecuador</p>
							</li>
							<li>
								<i class="fa fa-phone"></i>
								<p>+593 995470312</p>
							</li>
							<li>
								<i class="fa fa-fax"></i>
								<p>+593 22150100</p>
							</li>
							<li>
								<i class="fa fa-envelope"></i>
								<p>info@hotelerotech.com</p>
							</li>
                           
						</ul>	
					</div>					
				</div>
				
			</div>

        </div>
    </div>
</section>

<!-- End Contact -->




<?php
include("includes/footer.php");
?>
