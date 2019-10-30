<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

?>
@include('price')
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Realty Focus - Flats, Premium Apartments for sale at Bangalore</title>
	<meta name="keywords"
		content="Download, Apartment, Premium, Real Estate, HMTL, Site Template, property, mortgage, CSS" />
	<meta name="description" content="Download Apartment - Premium Real Estate HMTL Site Template" />

	@include('header1')

	<style>
		.pagination>li>a,
		.pagination>li>span {
			padding: 14px
		}


		.grid-offer-col {
			height: 460px !important;
			max-height: 480px !important;
		}
	</style>
	<section class="short-image no-padding blog-short-title">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-12 short-image-title">
					<h5 class="subtitle-margin second-color"></h5>
					<h1 class="second-color">Our Projects</h1>
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
					<div class="row">
						<div class="col-xs-12 col-lg-6">
							<h5 class="subtitle-margin"></h5>
							<h1>Our <span class="special-color">Projects</span></h1>
						</div>
						<div class="col-xs-12 col-lg-6">
							<!--<div class="view-icons-container">
								<a class="view-box view-box-active"><img class="lazy" data-src="{{ asset('public/images/grid-icon.png') }}" alt="" /></a>
								<a class="view-box" href=""><img class="lazy" data-src="{{ asset('public/images/list-icon.png') }}" alt="" /></a>
							</div>-->
							{{--<form method='post' id='profilter'>
							<div class="order-by-container">
								<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
							<select id='projectfilter' name="sort" class="bootstrap-select" title="Order By:">
								<option value='pmax'>Price low to high</option>
								<option value='pmin'>Price high to low</option>
								<option value='amin'>Area high to low</option>
								<option value='amax'>Area high to low</option>
							</select>
						</div>
						</form>--}}
					</div>
					<div class="col-xs-12">
						<div class="title-separator-primary"></div>
					</div>
				</div>
				<div class="row grid-offer-row defult">
					@php
					$p=1;
					@endphp
					@foreach($data as $querys)
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 grid-offer-col">
						<div class="grid-offer">
							<div class="grid-offer-front">
								<div class="grid-offer-photo">
									<img class="lazy"
										data-src="http://www.mylandmark.info/admin/images/fimage/{{ $querys->featured_image}}" alt="" style='height:150px'/>
									<div class="type-container">
										<div class="estate-type">{{$querys->type}}</div>
										<div class="transaction-type">sale</div>
									</div>
								</div>
								<div class="grid-offer-text">
									<i class="fa fa-map-marker grid-offer-localization"></i>
									<div class="grid-offer-h4">
										<h4 class="grid-offer-title">{{ ucwords( $querys->name ) }} {{--  $querys->location --}}</h4>
									</div>
									<div class="clearfix"></div>
									<p class="text-justify">
										{{substr(strip_tags($querys->about),0,150)}} ...
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									</p>
									<div class="clearfix"></div>
								</div>
								@php

								$price = " SELECT MIN(`basic_cost`) as `min`, MAX(`basic_cost`) as `max`,MIN(sqft) as min_sqft,MAX(sqft)
								as max_sqft FROM `price` WHERE `micro_id`=$querys->micro_id";
								$price_result = DB::select($price );
								@endphp

								@foreach($price_result as $price)
								<div class="price-grid-cont">
									<div class="grid-price-label pull-left">Price:</div>
									<div class="grid-price pull-right">
										@php 
										if($price->min==NULL) {
											echo 'N/A';
										}else {
											echo no_to_words($price->min);
										}
										@endphp
										@endforeach
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="grid-offer-params">
									<div class="grid-area">
										<img class="lazy" data-src="{{ asset('public/images/area-icon.png') }}"
											alt="" />{{round($price->min_sqft*0.092903)}}m<sup>2</sup>
									</div>
									<div class="grid-rooms">
										<img class="lazy" data-src="{{ asset('public/images/rooms-icon.png')}}"
											alt="" />{{ substr( $querys->rooms,0,1) }}
									</div>

								</div>
							</div>
							<div class="grid-offer-back">
							

							<div  class="col-sm-12" style="padding:15px 10px">
                    <h4 class="featured-offer-title">{{ ucwords( $querys->name)}} - {{ $querys->location}}</h4>
                            <p class="text-justify">
								{{ strip_tags( substr($querys->about,0,420),'p')}}...
								
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            </p>
                    
                    </div>
								<div class="button">
									<a href="{{ url('projects/' . strtolower(str_replace(' ', '-', $querys->name))) }}"
										class="button-primary">
										<span>read more</span>
										<div class="button-triangle"></div>
										<div class="button-triangle2"></div>
										<div class="button-icon"><i class="fa fa-search"></i></div>
									</a>
								</div>
							</div>
						</div>
					</div>
					@php

					$p++;
					@endphp
					@endforeach
				</div>

				<div class="row grid-offer-row sorting">
					@php
					$p=0;
					@endphp
					@foreach($data as $querys)
					<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 grid-offer-col">
						<div class="grid-offer">
							<div class="grid-offer-front">
								<div class="grid-offer-photo">
									<img class="lazy"
										data-src="http://www.mylandmark.info/admin/images/fimage/{{ $querys->featured_image}}" alt=""  style='height:150px'/>
									<div class="type-container">
										<div class="estate-type">{{$querys->type}}</div>
										<div class="transaction-type">sale</div>
									</div>
								</div>
								<div class="grid-offer-text">
									<i class="fa fa-map-marker grid-offer-localization"></i>
									<div class="grid-offer-h4">
										<h4 class="grid-offer-title">{{ ucwords( $querys->name)}} {{--  $querys->location --}}</h4>
									</div>
									<div class="clearfix"></div>
									<p class="text-justify">
										{{substr(strip_tags($querys->about),0,150)}} ...
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									</p>
									<div class="clearfix"></div>
								</div>
								@php

								$price = " SELECT MIN(`basic_cost`) as `min`, MAX(`basic_cost`) as `max`,MIN(sqft) as min_sqft,MAX(sqft)
								as max_sqft FROM `price` WHERE `micro_id`=$querys->micro_id";
								$price_result = DB::select($price );
								@endphp

								@foreach($price_result as $price)
								<div class="price-grid-cont">
									<div class="grid-price-label pull-left">Price:</div>
									<div class="grid-price pull-right">
										@php 
										if($price->min==NULL) {
											echo 'N/A';
										}else {
											echo no_to_words($price->min);
										}
										@endphp
										@endforeach
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="grid-offer-params">
									<div class="grid-area">
										<img class="lazy" data-src="{{ asset('public/images/area-icon.png') }}"
											alt="" />{{round($price->min_sqft*0.092903)}}m<sup>2</sup>
									</div>
									<div class="grid-rooms">
										<img class="lazy" data-src="{{ asset('public/images/rooms-icon.png')}}"
											alt="" />{{ substr( $querys->rooms,0,1) }}
									</div>

								</div>
							</div>
							<div class="grid-offer-back">
								<div  class="col-sm-12" style="padding:15px 10px">
									<h4 class="featured-offer-title">{{ ucwords( $querys->name)}} - {{ $querys->location}}</h4>
									<p class="text-justify">
										{{ strip_tags( substr($querys->about,0,420),'p')}}...
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									</p>
								</div>
								<div class="button">
									<a href="{{ url('projects/' . strtolower(str_replace(' ', '-', $querys->name))) }}"
										class="button-primary">
										<span>read more</span>
										<div class="button-triangle"></div>
										<div class="button-triangle2"></div>
										<div class="button-icon"><i class="fa fa-search"></i></div>
									</a>
								</div>
							</div>
						</div>
					</div>
					@php
					$p++;
					@endphp
					@endforeach
				</div>

				<div class="offer-pagination ">
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
	<script type="text/javascript"
		src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDfDCV5hXiPamCIT8_vwGXuzimLQ9MF76g&amp;sensor=false&amp;libraries=places">
	</script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<!-- plugins script -->
	<script type="text/javascript" src="{{ asset('public/js/plugins.js')}}"></script>

	<!-- template scripts -->

	<script type="text/javascript" src="{{ asset('public/js/apartment.js')}}"></script>
	<script type="text/javascript" src="{{ asset('public/js/recliner.min.js')}}"></script>
	<!-- google maps initialization -->
	<script type="text/javascript">
		google.maps.event.addDomListener(window, 'load', init);
			function init() {
			
                     @php
				 $x = 0;
				@endphp
					
				@foreach($data as $querys )
				
				mapInit({{$querys->latitude}},{{$querys->longitude}},"grid-map-{{$x}}","{{ asset('public/images/pin-house.png')}}", false);
				@php
				 $x++;
				@endphp
				@endforeach          
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
		$(function() {
		
		// instantiate recliner
		$('.lazy').recliner({
		attrib: "data-src", // selector for attribute containing the media src
		throttle: 300, // millisecond interval at which to process events
		threshold: 100, // scroll distance from element before its loaded
		live: true // auto bind lazy loading to ajax loaded elements
		});
		})
	</script>

	</body>


</html>