
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
					<h5 class="subtitle-margin second-color">dashboard</h5>
					<h1 class="second-color">my account</h1>
					<div class="short-title-separator"></div>
				</div>
			</div>
			<div class="clearfix"></div>
			
		</div>
    </section>
   

<section class="section-light section-top-shadow">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
						{{--<div class="row">
							<div class="col-xs-12 col-lg-6">
								<h5 class="subtitle-margin">LOCALIZATION: ALL</h5>
								 <h1>96 agencies found<span class="special-color">.</span></h1>
							</div>
							<div class="col-xs-12 col-lg-6">											
								<div class="order-by-container">
									<select name="transaction1" class="bootstrap-select" title="Localization:">
										<option>Localization 1</option>
										<option>Localization 2</option>
										<option>Localization 3</option>
										<option>Some Long Localization 4</option>
									</select>
								</div>	
							</div>							
							<div class="col-xs-12">
								<div class="title-separator-primary"></div>
							</div>
						</div>--}}
						<div class="row list-agency-row">
							<div class="col-xs-12">
                                                            @foreach($data as $item)
								<div class="list-agency">
									<div class="list-agency-left">
										<img src="http://www.mylandmark.info/admin/images/builder/{{$item->logo}}" style='height:60px;' alt="" />
										<!--<div class="list-agency-description">
											<div class="team-desc-line">
												<span class="team-icon-circle">
													<i class="fa fa-phone"></i>
												</span>
												<span>(0)-123-456-789</span>
											</div>
											<div class="team-desc-line">
												<span class="team-icon-circle">
													<i class="fa fa-phone"></i>
												</span>
												<span>(0)-987-654-321</span>
											</div>
											<div class="team-desc-line">
												<span class="team-icon-circle">
													<i class="fa fa-envelope fa-sm"></i>
												</span>
												<span><a href="#">apartment@domain.tld</a></span>
											</div>
											<div class="team-social-cont">
												<div class="team-social">
													<a class="team-icon-circle" href="#">
														<i class="fa fa-facebook"></i>
													</a>
												</div>
												<div class="team-social">
													<a class="team-icon-circle" href="#">
														<i class="fa fa-twitter"></i>
													</a>
												</div>
												<div class="team-social">
													<a class="team-icon-circle" href="#">
														<i class="fa fa-google-plus"></i>
													</a>
												</div>
												<div class="team-social">
													<a class="team-icon-circle" href="#">
														<i class="fa fa-skype"></i>
													</a>
												</div>
											</div>
										</div>	-->								
									</div>
                                                                  
									
									<a class="list-agency-right-large"
									href="{{ url('builders/' . strtolower(str_replace(' ', '-', $item->name))) }}">
										<div class="list-agency-text">
											<h3 class="list-agency-title">{{ ucwords($item->name)}}</h3>
											<i class="fa fa-map-marker"></i>
											<span class="list-agency-address">{{ ucwords(strip_tags($item->address))}}</span>
											<div class="list-agency-separator"></div>
											{{ substr(strip_tags($item->about),0,150)}}..
										</div>
									</a>
									<div class="small-triangle"></div>
									<div class="small-triangle2"></div>
									<a class="small-icon" href="{{ url('builders/' . strtolower(str_replace(' ', '-', $item->name))) }}"><i class="jfont fa-2x">&#xe804;</i></a>
								</div>
								
								  @endforeach
								
								
							</div>
						</div>
						
						
						<div class="offer-pagination margin-top-0">
						{!! $data->links() !!}
						<div class="clearfix"></div>
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