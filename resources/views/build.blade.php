<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

foreach ($data as $res ) {
	//var_dump($res);
	$id			=	$res->builder_id;
	$name		=	$res->name;
	$logo		=	$res->logo;
	$address	=	$res->address;
	$about		=	$res->about;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title>Apartment - Premium Real Estate HMTL Site Template</title>
	<meta name="keywords" content="Download, Apartment, Premium, Real Estate, HMTL, Site Template, property, mortgage, CSS" />
	<meta name="description" content="Download Apartment - Premium Real Estate HMTL Site Template" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

    @include('header1')
  		
    <section class="short-image no-padding agency">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-12 short-image-title">
					<h1 class="second-color"><?php echo ucfirst($name); ?></h1>
					<div class="short-title-separator"></div>
				</div>
			</div>
		</div>
    </section>
	
	<section class="section-light section-top-shadow no-bottom-padding">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="details-title pull-left">
						<h3 class="title-negative-margin"><?php echo ucfirst($name); ?><span class="special-color">.</span></h3>
						<div class="details-agency-address">
							<i class="fa fa-map-marker"></i>
							<span><?php echo strip_tags($address); ?></span>
						</div>
					</div>
					<div class="clearfix"></div>	
					<div class="title-separator-primary"></div>
					<div class="row margin-top-60">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-lg-3">
								<img src="http://www.mylandmark.info/admin/images/builder/<?php echo $logo; ?>" alt="" />
							</div>					
							<div class="col-xs-12 col-sm-6 col-lg-9">
								<p class="negative-margin"><?php echo strip_tags($about); ?></p>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    @include('footer1')

<!-- jQuery  -->
    <script type="text/javascript" src="{{ asset('public/js/jQuery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/js/jQuery/jquery-ui.min.js')}}"></script>

    <!-- Bootstrap-->
    <script type="text/javascript" src="{{ asset('public/bootstrap/bootstrap.min.js')}}"></script>

    <!-- Google Maps -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDfDCV5hXiPamCIT8_vwGXuzimLQ9MF76g&amp;sensor=false&amp;libraries=places"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- plugins script -->
    <script type="text/javascript" src="{{ asset('public/js/plugins.js')}}"></script>

    <!-- template scripts -->

    <script type="text/javascript" src="{{ asset('public/js/apartment.js')}}"></script>

<!-- google maps initialization -->	
	<script type="text/javascript">
            google.maps.event.addDomListener(window, 'load', init);
			function init() {						
				mapInit(41.2693,-70.0874,"agency-map","images/pin-house.png", true);
				
				mapInit(41.2693,-70.0874,"grid-map1","images/pin-house.png", false);
				mapInit(33.7544,-84.3857,"grid-map2","images/pin-apartment.png", false);
				mapInit(33.7337,-84.4443,"grid-map3","images/pin-land.png", false);
				mapInit(33.8588,-84.4858,"grid-map4","images/pin-commercial.png", false);
				mapInit(34.0254,-84.3560,"grid-map5","images/pin-apartment.png", false);
				mapInit(40.6128,-73.9976,"grid-map6","images/pin-house.png", false);
			}
			jQuery(document).ready(function($) {
				$("#footerform").submit(function() {
					var str = $(this).serialize();
					$.ajax({
						method: 'POST',
						url: "{{ url('/contact')}}",
						data: str,
						success: function(response) {
							//console.log(response);
							$('.footerSuccessMsg').html('<h5 style="color:green">Mail Sent Successfully.</h5>');
							//$(".footerSuccessMsg").delay(5000).fadeOut('slow');
							/*window.setTimeout(function() {
								window.location.reload()
							}, 10000);*/
						},
						error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
							console.log(JSON.stringify(jqXHR));
							console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
						}
					});
					return false;
				});
			});
	</script>
	
	</body>
</html>