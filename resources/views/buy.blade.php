<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Realty Focus - Flats, Premium Apartments for sale at Bangalore</title>
    <meta name="keywords" content="Download, Apartment, Premium, Real Estate, HMTL, Site Template, property, mortgage, CSS" />
    <meta name="description" content="Download Apartment - Premium Real Estate HMTL Site Template" />

    @include('header1')

    <section class="short-image no-padding blog-short-title">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12 short-image-title">
                    <h1 class="second-color">Buy Property</h1>
                    <div class="short-title-separator"></div>
                </div>
            </div>
            <div class="clearfix"></div>

        </div>
    </section>
    <section class="container">

        <div class="row">
            <div class="col-sm-12">
                <div class="row contact1">
                    <div class="col-sm-12">
                        <h5 class="subtitle-margin"></h5>
                        <h1>Post Your Requirement<span class="special-color">.</span></h1>
                        <div class="title-separator-primary"></div>
                    </div>
                    <?php /*<div class="col-xs-12 col-md-6 margin-top-45">
									<p class="negative-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<img src="images/contact-image.jpg" alt="" class="pull-left margin-top-45 hidden-md" />
									<address class="contact-info pull-left">
										<span><i class="fa fa-map-marker"></i>00456 Some Address line</span>
										<span><i class="fa fa-envelope fa-sm"></i><a href="#">email@domain.tld</a></span>
										<span><i class="fa fa-phone"></i>01-23456789</span>
										<span><i class="fa fa-globe"></i><a href="#">http://somedmain.tld</a></span>
										<span><i class="fa fa-clock-o"></i>mon-fri: 8:00 - 18:00</span>
										<span class="span-last">sat: 10:00 - 16:00</span>
									</address>
								</div> */ ?>
                    <div class="col-xs-12 col-md-12 margin-top-45">
						<p id="note"></p>
						  <p class="buySuccessMsg"></p>
                        <form class="contact-comments " id="ajax-buy-form">
                            <div class="row">
                                <div class="form-group col-xl-3">
                                    <label>Name</label>
                                    <input type="text" id='buyname' class="form-control" name="name" >
									<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                </div><!-- /.form-group -->

                                <div class="form-group col-xl-3">
                                    <label>Contact No. </label>
                                    <input type="text" name="phone" class="form-control" >
                                </div><!-- /.form-group -->

                                <div class="form-group col-xl-3">
                                    <label>Email Id:</label>
                                    <input type="email" class="form-control" name="email" >
                                </div><!-- /.form-group -->

                                <div class="form-group col-xl-3">
                                    <label>Preferred Time to Contact:</label>
                                    <input type="text" class="form-control" name="timetocontact" >
                                </div><!-- /.form-group -->
                            </div><!-- /.row -->



                            <div class="row">
                                <div class="form-group col-xl-6">
                                    <label>Location/Project Name</label>
                                    <input type="text" class="form-control" name="location" >
                                </div><!-- /.form-group -->

                                <div class="form-group col-xl-6">
                                    <label>Budget</label>
                                    <input type="text" class="form-control" name="budget" >
                                </div><!-- /.form-group -->
                            </div><!-- /.row -->

                            <div class="row">
                                <div class="form-group col-xl-6">
                                    <label>Purpose</label>
                                    <select class="form-control" name="purpose" >
                                        <option> Investment</option>
                                        <option>End Use</option>
                                    </select>
                                </div><!-- /.form-group -->

                                <div class="form-group col-xl-6">
                                    <label>Home Loan</label>
                                    <select class="form-control" name="homelocan" >
                                        <option> Yes</option>
                                        <option>No</option>
                                    </select>
                                </div><!-- /.form-group -->
                            </div><!-- /.row -->

                            <div class="row">
                                <div class="form-group col-xl-6">
                                    <label>Possession</label>
                                    <select class="form-control" name="possession" >
                                        <option> Ready to Move</option>
                                        <option> Under Construction</option>
                                        <option> Pre - Launch</option>
                                    </select>
                                </div><!-- /.form-group -->

                                <div class="form-group col-xl-6">
                                    <label>Decision Making Time</label>
                                    <select class="form-control" name="decision" >
                                        <option> Immediate</option>
                                        <option>1 week</option>
                                        <option> 2 week</option>
                                        <option> 1 month</option>
                                        <option> more than 1 month</option>

                                    </select>
                                </div><!-- /.form-group -->
                            </div><!-- /.row -->
							<div class="g-recaptcha" data-sitekey="6LevorwUAAAAALHPfgCFcRvTUUN6_k_fPDmIEFNS"
								style="transform:scale(0.97);-webkit-transform:scale(0.97);transform-origin:0 0;-webkit-transform-origin:0 0;">
							</div>
							<br/>
                            <div class="form-group-btn form-group-btn-placeholder-gap">
                                <input type="submit" name="buy" value="Submit" class="btn btn-primary btn-block">
                            </div><!-- /.form-group -->
                        </form>

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
				
				/*if($("#buyname").val()=='') {
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
				}*/
				
				var str = $(this).serialize();
				$.ajax({
					method: 'POST', 
					url: "{{ url('/buy')}}", 
					data: str,
					success: function(response){ 
						console.log(response);
						var success 	= response['success'];						
						var error	 	= response['error'];
						//alert(error);	
						if(success =='<h5 style="color:green;">Mail Sent Successfully</h5>'){	
							$('.buySuccessMsg').html(success);
							$(".buySuccessMsg").delay(5000).fadeOut('slow');
							window.setTimeout(function(){window.location.reload()}, 10000);
						}	
						if(error !=""){
							$('.buySuccessMsg').html(error);							
						}
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