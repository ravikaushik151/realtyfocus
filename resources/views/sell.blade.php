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
                    <h1 class="second-color">Sell Property</h1>
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
                    <div class="col-xs-12 col-md-12 margin-top-45">
						<p class="sellSuccessMsg"></p>
                        <form action="" id="ajax-buy-form">
                            <div class="row">
                                <div class="form-group col-xl-3">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" >
									<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                </div><!-- /.form-group -->

                                <div class="form-group col-xl-3">
                                    <label>Contact No. </label>
                                    <input type="text" class="form-control" name="phone" >
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
                                <div class="form-group col-xl-3">
                                    <label>Location/Project Name</label>
                                    <input type="text" class="form-control" name="location" >
                                </div><!-- /.form-group -->

                                <div class="form-group col-xl-3">
                                    <label>Unit No.</label>
                                    <input type="text" class="form-control" name="unitno" >
                                </div><!-- /.form-group -->
                                <div class="form-group col-xl-3">
                                    <label>Property Age</label>
                                    <input type="text" class="form-control" name="p_age" >
                                </div><!-- /.form-group -->
                                <div class="form-group col-xl-3">
                                    <label>Size</label>
                                    <input type="text" class="form-control" name="size" >
                                </div><!-- /.form-group -->
                            </div><!-- /.row -->

                            <div class="row">


                                <div class="form-group col-xl-4">
                                    <label>Expected Price</label>
                                    <input type="text" class="form-control" name="price" >
                                </div><!-- /.form-group -->

                                <div class="form-group col-xl-4">
                                    <label>Seller Resident</label>
                                    <select class="form-control" name="resident" >
                                        <option> India</option>
                                        <option> NRI</option>
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group col-xl-4">
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


                            <div class="row">
                                <div class="form-group col-xl-12">
                                    <label>Aditional Info</label>
                                    <textarea class="form-control" id='info' name="info" ></textarea>
                                </div><!-- /.form-group -->
                            </div><!-- /.row -->
							<div class="g-recaptcha" data-sitekey="6LevorwUAAAAALHPfgCFcRvTUUN6_k_fPDmIEFNS"
								style="transform:scale(0.97);-webkit-transform:scale(0.97);transform-origin:0 0;-webkit-transform-origin:0 0;">
							</div>
							<br/>
                            <div class="form-group-btn form-group-btn-placeholder-gap">
                                <input type="submit" name="sell" value="Submit" class="btn btn-primary btn-block">
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
    
    <script>
        jQuery(document).ready(function($) {
            $("#ajax-buy-form").submit(function() {
				/*if($("input[name=name]").val()=='') {
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
				if($("input[name=p_age]").val()=='') {
					alert("Property Age is requred");
					return false;
				}
				if($("input[name=size]").val()=='') {
					alert("Size is requred");
					return false;
				}
				if($("input[name=price]").val()=='') {
					alert("Expected Price is requred");
					return false;
				}
				if($("#info").val()=='') {
					alert("Aditional Info is requred");
					return false;
				}*/
				
                var str = $(this).serialize();
                $.ajax({
                    method: 'POST',
                    url: "{{ url('/sell')}}",
                    data: str,
                    success: function(response) {
                        //console.log(response);
						var success 	= response['success'];						
						var error	 	= response['error'];
						//alert(error);	
						if(success =='<h5 style="color:green;">Mail Sent Successfully</h5>'){	
							$('.sellSuccessMsg').html(success);
							$(".sellSuccessMsg").delay(5000).fadeOut('slow');
							window.setTimeout(function(){window.location.reload()}, 10000);
						}	
						if(error !=""){
							$('.sellSuccessMsg').html(error);							
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