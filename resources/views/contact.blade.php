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
                    <h1 class="second-color">Contact Us</h1>
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
                        <h1>Contact Us<span class="special-color">.</span></h1>
                        <div class="title-separator-primary"></div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h4 class="f-primary-b"></h4>
                        <div class="row">
						<br/>
                            <div id="contactSuccessMsg" style="margin-left: 15px;margin-bottom: 15px;"></div><!-- End notification -->
                            <form action="" id="ajax-buy-form">
                                <div id="fields">
                                    <div class="col-md-6">
                                        <div class="b-form-row">
                                            <label class="b-form-vertical__label" for="name">Name</label>
                                            <div class="b-form-vertical__input">
                                                <input type="text" id="name" name="name" class="form-control">
												<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="b-form-row">
                                            <label class="b-form-vertical__label" for="email">Email</label>
                                            <div class="b-form-vertical__input">
                                                <input type="email" id="email1" name="email" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="b-form-row">
                                            <label class="b-form-vertical__label" for="name">ISD</label>
                                            <div class="b-form-vertical__input">
                                                <select name="isd" id="isd" class="form-control">
                                                    <option value=""> Select One </option>
                                                    <option value="+91" selected="">India (+91)</option>
                                                    <option value="+61">Australia (+61)</option>
                                                    <option value="+852">Hong Kong (+852)</option>
                                                    <option value="+968">Oman (+968)</option>
                                                    <option value="+974">Qatar (+974)</option>
                                                    <option value="+65">Singapore (+65)</option>
                                                    <option value="+971">UAE (+971)</option>
                                                    <option value="+44">UK (+44)</option>
                                                    <option value="+1">USA (+1)</option>
                                                    <option value="9">South Africa (+27)</option>
                                                    <option value="+60">Malaysia (+60)</option>
                                                    <option value="+64">New Zealand (+64)</option>
                                                    <option value="+66">Thailand (+66)</option>
                                                    <option value="+966">Saudi Arabia (+966)</option>
                                                    <option value="+31">Netherlands (+31)</option>
                                                    <option value="+973">Bahrain (+973)</option>
                                                    <option value="other">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="b-form-row">
                                            <label class="b-form-vertical__label" for="title">Contact No.</label>

                                            <div class="b-form-vertical__input">
                                                <input type="text" id="phone" class="form-control" name="phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="b-form-row b-form--contact-size">
                                            <label class="b-form-vertical__label">Message</label>
                                            <textarea name="msg" id="msg" class="form-control" height="162px" rows="3" style="margin-bottom: 15px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="g-recaptcha" data-sitekey="6LevorwUAAAAALHPfgCFcRvTUUN6_k_fPDmIEFNS" style="transform:scale(0.97);-webkit-transform:scale(0.97);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
                                    </div>
                                    <div class="clearfix col-md-6 col-xs-12 ">
                                        <div class="b-form-row">
                                            <br>
                                            <button class="btn btn-primary" id="captchabtn">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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

    <!-- plugins script -->
    <script type="text/javascript" src="{{ asset('public/js/plugins.js')}}"></script>

    <!-- template scripts -->

    <script type="text/javascript" src="{{ asset('public/js/apartment.js')}}"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
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
				/*if($("input[name=name]").val()=='') {
					alert("Name is requred");
					return false;
				}				
				if($("#email1").val()=='') {
					alert("Email Id is requred");
					return false;
				}
				if($("#phone").val()=='') {
					alert("Phone is requred");
					return false;
				}
				if($("#msg").val()=='') {
					alert("Message is requred");
					return false;
				}
				if($("#recaptcha-token").val()=='') {
					alert("Recaptcha is requred");
					return false;
				}*/
                var str = $(this).serialize();
                $.ajax({
                    method: 'POST',
                    url: "{{ url('/contact')}}",
                    data: str,
                    success: function(response) {
                        console.log(response);
						var success 	= response['success'];						
						var error	 	= response['error'];
						//alert(error);	
						if(success =='<h5 style="color:green;">Mail Sent Successfully</h5>'){	
							$('#contactSuccessMsg').html(success);
							$("#contactSuccessMsg").delay(5000).fadeOut('slow');
							window.setTimeout(function(){window.location.reload()}, 10000);
						}	
						if(error !=""){
							$('#contactSuccessMsg').html(error);							
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