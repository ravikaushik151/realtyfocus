<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

/*var_dump($blogs);
die();*/
foreach ($blogs as $res ) {
	
	$id			=	$res->id;
	$name		=	$res->name;
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
  	
    <section class="short-image no-padding blog-short-title">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-12 short-image-title">
					<h5 class="subtitle-margin second-color">from</h5>
					<h1 class="second-color">our blog</h1>
					<div class="short-title-separator"></div>
				</div>
			</div>
		</div>
    </section>
	
	<section class="section-light section-top-shadow">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<article class="archive-item zoom-cont2">
						<h2 class="title-negative-margin"><?php echo ucfirst($name); ?><span class="special-color">.</span></h2>
						<a href="#" class="title-link"><div class="blog-top-icon pull-left"><i class="fa fa-user"></i>Joshua Smith</div></a>
						<a href="#" class="title-link"><div class="blog-top-icon pull-left"><i class="fa fa-calendar-o"></i>28/09/15</div></a>						
						<div class="clearfix"></div>						
						<div class="title-separator-primary"></div>
						<figure><a href="#"><img src="{{ asset('public/images/blog-image-big4.jpg') }}" alt="" class="zoom" /></a></figure>
						<div class="blog-text">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
						</div>
					</article>
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