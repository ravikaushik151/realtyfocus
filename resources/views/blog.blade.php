<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title>Realty Focus - Flats, Premium Apartments for sale at Bangalore</title>
	<meta name="keywords" content="Download, Apartment, Premium, Real Estate, HMTL, Site Template, property, mortgage, CSS" />
	<meta name="description" content="Download Apartment - Premium Real Estate HMTL Site Template" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

    @include('header1')
	
  		
    <section class="short-image no-padding blog-short-title">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-12 short-image-title">
					<h1 class="second-color">our blog</h1>
					<div class="short-title-separator"></div>
				</div>
			</div>
		</div>
    </section>
	
	<section class="section-light section-top-shadow">
		<div class="container">
			<div class="row">
					@foreach($blog as $blogs)
					<article class="archive-item zoom-cont2 col-xs-4" >
						<a href="{{ url('blogs/' . strtolower(str_replace(' ', '-', $blogs->name))) }}" class="title-link"><h4 class="title-negative-margin">{{ $blogs->name }}<span class="special-color">.</span></h4></a>
						<a href="#" class="title-link"><div class="blog-top-icon pull-left"><i class="fa fa-user"></i>Joshua Smith</div></a>
						<a href="{{ url('blogs/' . strtolower(str_replace(' ', '-', $blogs->name))) }}" class="title-link"><div class="blog-top-icon pull-left"><i class="fa fa-calendar-o"></i>28/09/15</div></a>
						<div class="clearfix"></div>						
						<div class="title-separator-primary"></div>
						<figure><a href="{{ url('blogs/' . strtolower(str_replace(' ', '-', $blogs->name))) }}"><img src="{{ asset('public/images/blog-image-big5.jpg') }}" alt="" class="zoom" /></a></figure>
						<div class="blog-text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
						<a href="{{ url('blogs/' . strtolower(str_replace(' ', '-', $blogs->name))) }}" class="button-primary pull-right">
								<span>read more</span>
								<div class="button-triangle"></div>
								<div class="button-triangle2"></div>
								<div class="button-icon"><i class="fa fa-search"></i></div>
							</a>
						<div class="clearfix"></div>	
					</article>
					@endforeach
					<div class="offer-pagination margin-top-45 col-xs-12">
						<a href="#" class="prev"><i class="jfont">&#xe800;</i></a><a class="active">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#" class="next"><i class="jfont">&#xe802;</i></a>
						<div class="clearfix"></div>
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


            /*
            mapInit(40.7222,-73.7903,"featured-map2","images/pin-apartment.png", false);
            mapInit(41.0306,-73.7669,"featured-map3","images/pin-land.png", false);
            mapInit(41.3006,-72.9440,"featured-map4","images/pin-commercial.png", false);
            mapInit(42.2418,-74.3626,"featured-map5","images/pin-house.png", false);
            mapInit(38.8974,-77.0365,"featured-map6","images/pin-apartment.png", false);
            mapInit(38.7860,-77.0129,"featured-map7","images/pin-house.png", false);
            
            mapInit(41.2693,-70.0874,"grid-map1","images/pin-house.png", false);
            mapInit(33.7544,-84.3857,"grid-map2","images/pin-apartment.png", false);
            mapInit(33.7337,-84.4443,"grid-map3","images/pin-land.png", false);
            mapInit(33.8588,-84.4858,"grid-map4","images/pin-commercial.png", false);
            mapInit(34.0254,-84.3560,"grid-map5","images/pin-apartment.png", false);
            mapInit(40.6128,-73.9976,"grid-map6","images/pin-house.png", false);
            */
        }
			
			jQuery(document).ready(function($) {
				$("#ajax-buy-form").submit(function() {
				
				if($("input[name=name]").val()=='') {
					alert("Name is requred");
					return false;
				}
				if($("input[name=phone]").val()=='') {
					alert("Phone is requred");
					return false;
				}
				if($("input[name=email]").val()=='') {
					alert("Email Id is requred");
					return false;
				}
				if($("input[name=timetocontact]").val()=='') {
					alert("Preferred Time to Contact is requred");
					return false;
				}
				if($("input[name=location]").val()=='') {
					alert("Location/Project Name is requred");
					return false;
				}
				if($("input[name=unitno]").val()=='') {
					alert("Unit No is requred");
					return false;
				}
				if($("input[name=budget]").val()=='') {
					alert("Budget is requred");
					return false;
				}
				
				var str = $(this).serialize();
				$.ajax({
					method: 'POST', 
					url: "{{ url('/buy')}}", 
					data: str,
					success: function(response){ 
					   //console.log(response);			  
						$('.buySuccessMsg').html('<h5 style="color:green">Mail Sent Successfully.</h5>');
						$(".buySuccessMsg").delay(5000).fadeOut('slow');
						window.setTimeout(function(){window.location.reload()}, 10000);					  
					},
					error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
						console.log(JSON.stringify(jqXHR));
						console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
					}
				});
				return false;
				});
			});
			jQuery(document).ready(function($) {
				$("#footerform").submit(function() {				
					var str = $(this).serialize();
					$.ajax({
						method: 'POST',
						url: "{{ url('/contact')}}",
						data: str,
						success: function(response) {
							//console.log(response);
							var success 	= response['success'];						
							var error	 	= response['error'];
							//alert(error);	
							if(success =='<h5 style="color:green;">Mail Sent Successfully</h5>'){	
								$('.footerSuccessMsg').html(success);
								$(".footerSuccessMsg").delay(5000).fadeOut('slow');
								window.setTimeout(function(){window.location.reload()}, 10000);
							}	
							if(error !=""){
								$('.footerSuccessMsg').html(error);							
							}
						}
					});
					return false;
				});
			});
    </script>
	
	</body>
</html>