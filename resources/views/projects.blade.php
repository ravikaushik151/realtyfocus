<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


?>
@include('price')
@foreach($data as $item)
@php
//var_dump($item);//am_id
$bank=$item->bank_id;
$masterplan_image=$item->masterplan_image;
$latitute=$item->latitude;
$legal=$item->legal_id;
$amenitites=$item->am_id;
$rooms=$item->rooms;
$longitude=$item->longitude;
$about=$item->about;
$status=$item->status;
$type=$item->type;
$micro_id=$item->micro_id;
$name=$item->name;
$featured_image=$item->featured_image;
$builder_id=$item->builder_id;
$logo=$item->logo;
$builder_name=$item->builder_name;
$possession=$item->possession;
$no_of_units=$item->no_of_units;
$total_area=$item->total_area;
$location=$item->location;
$sub_location=$item->sub_location;
$gallery_image=$item->gallery_image;
$slider_image=$item->slider_image;
$address=$item->address;

@endphp
@endforeach

{{--geting builder information--}}

@php

$builder_infor = " SELECT * FROM `builder` WHERE `builder_id`= $builder_id";
$builder_infor = DB::select($builder_infor );
//var_dump($builder_infor);
foreach($builder_infor as $bilder) {
$builder_names=ucwords($bilder->name);
$builder_images=$bilder->logo;
$builder_about=ucwords($bilder->about);
//var_dump($bilder);
}
@endphp

{{--end getting builder information --}}
{{--geting min-max price--}}

@php

$price = " SELECT MIN(`basic_cost`) as `min`, MAX(`basic_cost`) as `max`,MIN(sqft) as min_sqft,MAX(sqft) as max_sqft
FROM `price` WHERE `micro_id`=$item->micro_id";
$price_result = DB::select($price );
foreach($price_result as $price) {
$min_price=no_to_words($price->min);
$max_price=no_to_words($price->max);
$min_sqft=$price->min_sqft;
$max_sqft=$price->max_sqft;
}
@endphp

{{--end getting min-max price--}}

{{-- geting amenities--}}
@php
$slider_image=explode (',',$slider_image) ;
foreach ($slider_image as $val) {
$sql="select image_name from image_data where img_id=" . $val;
$slider_image = DB::select($sql );
foreach ($slider_image as $slider) {
$slider_val[]=array( "image_name"=>"http://mylandmark.info/admin/images/slider/".$slider->image_name );
}
}
// var_dump( $slider_val);
@endphp
{{-- end amenities--}}


{{-- geting amenities--}}
@php
$am=explode (',',$amenitites) ;
foreach ($am as $val) {
$sql="select name,image from amenities where am_id=" . $val;
$amenitites_result = DB::select($sql );
foreach ($amenitites_result as $ami) {
$am_val[]=array( "name"=>$ami->name,"image"=>$ami->image );
}
}
// var_dump( $am_val);
@endphp
{{-- end amenities--}}

{{-- geting bank--}}
@php
$bank=explode (',',$bank) ;
foreach ($bank as $val) {
$sql="SELECT * FROM `bankapproval` where bank_id=" . $val;
$bank_result = DB::select($sql );
foreach ($bank_result as $bank) {
$bank_val[]=array( "name"=>$bank->name,"image"=>$bank->image );
}
}
// var_dump( $bank_val);
@endphp
{{-- end bank--}}

{{-- geting bank--}}
@php
$legal=explode (',',$legal) ;
foreach ($legal as $legals) {
$sql="SELECT * FROM legalapproval where legal_id=" . $legals;
$legal_result = DB::select($sql );
foreach ($legal_result as $legal) {
$legal_val[]=array( "name"=>$legal->name,"image"=>$legal->image );
}
}
// var_dump( $legal_val);
@endphp
{{-- end bank--}}

@php
/* floor_plan */

$sql="select * from floor_plan where micro_id='$micro_id'";
$floor_plan = DB::select($sql );

/* end floor_plan */
/* price*/

$sql="select * from price where micro_id='$micro_id'";
$price_res = DB::select($sql );

/* end price */
@endphp


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ ucwords($name) }}, {{ucwords($type)}} for sale at {{ucwords($location)}}</title>
    <meta name="keywords"
        content="Download, Apartment, Premium, Real Estate, HMTL, Site Template, property, mortgage, CSS" />
    <meta name="description" content="Download Apartment - Premium Real Estate HMTL Site Template" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    @include('header1')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
<style>#contact-form {

    position: absolute;
    left: 75%;
    top: 16%;
    z-index: 159 !important;
    width: 320px;
    background: #3797dd;
    padding: 10px

}
#mobile-contact-form h3, #contact-form h3 {margin: 15px 0 ;color:white;text-align: center}
#mobile-contact-form {

margin:0 10px;
padding:20px;
max-width: 320px;
background: #3797dd;
padding: 10px

}
.carousel-inner > .item > a > img, .carousel-inner > .item > img, .img-responsive, .thumbnail a > img, .thumbnail > img {padding:5px}
</style>
    <section class="section-dark no-padding">
        <!-- Slider main container -->
        <div id="swiper-gallery" class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                @foreach($slider_val as $sliver_val)
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="slide-bg swiper-lazy" data-background="{{ $sliver_val['image_name'] }}"
                        data-sub-html="<strong>this is a caption 1</strong><br/>Second line of the caption" style="background-size:100%;"></div>
                    <!-- Preloader image -->
                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    <div class="container">
                        <div class="row">
                            <div
                                class="col-sm-12 col-md-9 col-lg-8 slide-desc-col animated fadeInUp gallery-slide-desc-1">
                                <div class="gallery-slide-cont">
                                    <div class="gallery-slide-cont-inner">
                                        <div class="gallery-slide-title pull-right">
                                            <h5 class="subtitle-margin">{{ucwords($type)}} for sale</h5>
                                            <h3>{{ucwords($name)}} - {{ucwords($location)}}<span
                                                    class="special-color">.</span></h3>
                                        </div>
                                        <div class="gallery-slide-estate pull-right hidden-xs">
                                            <i class="fa fa-home"></i>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="gallery-slide-desc-price pull-right">
                                        {{$min_price}} - {{$max_price}}
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach

                <div class="slide-buttons slide-buttons-center">
                    <a href="#" class="navigation-box navigation-box-next slide-next">
                        <div class="navigation-triangle"></div>
                        <div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div>
                    </a>
                    <div id="slide-more-cont"></div>
                    <a href="#" class="navigation-box navigation-box-prev slide-prev">
                        <div class="navigation-triangle"></div>
                        <div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div>
                    </a>
                </div>

            </div>

    </section>
    
    
	<div class="container row margin-top-30 hidden-xs hidden-sm" id="contact-form">
		<h3>Contact Us </h3>
		<p class="projectSuccessMsg"></p>
		<form name="contact-from" id='ajax-project-form'>
			<input name="name" id='p_name' type="text" class="input-full main-input" placeholder="Your name" />
			<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
			<input type="hidden" name="project_name" id="project_name" value="{{ ucwords($name) }}">
			<input name="phone" id='p_phone' type="text" class="input-full main-input" placeholder="Your phone" />
			<input name="email"  id='p_email' type="email" class="input-full main-input"
				placeholder="Your email" />
			<textarea name="msg" id="p_mesg" class="input-full agent-textarea main-input" placeholder="Your Message"></textarea>
			<div class="g-recaptcha" data-sitekey="6LevorwUAAAAALHPfgCFcRvTUUN6_k_fPDmIEFNS" style="transform:scale(0.97);-webkit-transform:scale(0.97);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
			<br/>
			<div class="form-submit-cont">
				<input type="submit" name="project" value="Submit" class="btn btn-primary btn-block input-long">
				<!--<a href="#" class="button-primary pull-right">
					<span>send</span>
					<div class="button-triangle"></div>
					<div class="button-triangle2"></div>
					<div class="button-icon"><i class="fa fa-paper-plane"></i></div>
				</a>-->
				<div class="clearfix"></div>
			</div>
		</form>
	</div>
    <section class="thumbs-slider section-both-shadow">
        <div class="container">
            <div class="row">
                <div class="col-xs-1">
                    <a href="#" class="thumb-box thumb-prev pull-left">
                        <div class="navigation-triangle"></div>
                        <div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div>
                    </a>
                </div>
                <div class="col-xs-10">
                    <!-- Slider main container -->
                    <div id="swiper-thumbs" class="swiper-container">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->

                            @foreach($slider_val as $sliver_val)
                            <div class="swiper-slide">
                                <img class="slide-thumb" src="{{ $sliver_val['image_name'] }}" alt="{{$name}}"
                                    style="height:100px">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xs-1">
                    <a href="#" class="thumb-box thumb-next pull-right">
                        <div class="navigation-triangle"></div>
                        <div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div>
                    </a>
                </div>
            </div>
        </div>


    </section>

	<div class="row  hidden-lg hidden-md">
		<div class="container row margin-top-20" id="mobile-contact-form">
			<h3>Contact Us </h3>
			<p class="projectSuccessMsgmobile"></p>
			<form id='ajax-project-form-mobile'>
				<input name="name" id='m_name' type="text" class="input-full main-input" placeholder="Your name" />
				<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
				<input type="hidden" name="project_name" id="project_name" value="{{ ucwords($name) }}">
				<input name="phone" id='m_phone' type="text" class="input-full main-input" placeholder="Your phone" />
				<input name="email" id='m_email' type="email" class="input-full main-input"
					placeholder="Your email" />
				<textarea name="msg" id="m_mesg" class="input-full agent-textarea main-input" placeholder="Your Message"></textarea>				
				<div class="g-recaptcha" data-sitekey="6LevorwUAAAAALHPfgCFcRvTUUN6_k_fPDmIEFNS" style="transform:scale(0.97);-webkit-transform:scale(0.97);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
				<div class="form-submit-cont">
					<input type="submit" name="project" value="Submit" class="btn btn-primary btn-block input-long">
					<!--<a href="#" class="button-primary pull-right">
						<span>send</span>
						<div class="button-triangle"></div>
						<div class="button-triangle2"></div>
						<div class="button-icon"><i class="fa fa-paper-plane"></i></div>
					</a>-->
					<div class="clearfix"></div>
				</div>
			</form>                
		</div>
	</div>
    <section class="section-light no-bottom-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12">
                    <div class="row">
                        <div class="col-xs-12 col-sm-7 col-md-8">
                            <div class="details-image pull-left hidden-xs">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="details-title pull-left">
                                <h5 class="subtitle-margin">{{ucwords($type)}} for sale</h5>
                                <h3>{{ucwords($name) }} - {{ ucwords($location)}}<span class="special-color">.</span></h3>
                            </div>
                            <div class="clearfix"></div>
                            <div class="title-separator-primary"></div>
                            <p class="details-desc">{{ucwords(strip_tags( $about,'p'))}}</p>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-4">
                            <div class="details-parameters-price">{{$min_price}} - {{$max_price}} </div>
                            <div class="details-parameters">
                                <div class="details-parameters-cont">
                                    <div class="details-parameters-name">Property Type</div>
                                    <div class="details-parameters-val">{{$type}}</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="details-parameters-cont">
                                    <div class="details-parameters-name">Property Status </div>
                                    <div class="details-parameters-val">{{$status}}</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="details-parameters-cont">
                                    <div class="details-parameters-name">Area Range </div>
                                    <div class="details-parameters-val">{{round($min_sqft*0.092903)}}m<sup>2</sup> -
                                        {{round($max_sqft*0.092903)}}m<sup>2</sup> </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="details-parameters-cont">
                                    <div class="details-parameters-name">Location </div>
                                    <div class="details-parameters-val">{{$location}}</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="details-parameters-cont">
                                    <div class="details-parameters-name">Classification </div>
                                    <div class="details-parameters-val">{{ $rooms }}</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="details-parameters-cont">
                                    <div class="details-parameters-name">Base Price</div>
                                    <div class="details-parameters-val">{{$type}}</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="details-parameters-cont details-parameters-cont">
                                    <div class="details-parameters-name">Project Area </div>
                                    <div class="details-parameters-val">{{$total_area}}</div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="details-parameters-cont details-parameters-cont">
                                    <div class="details-parameters-name">Possession </div>
                                    <div class="details-parameters-val">{{$possession}}</div>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="details-parameters-cont details-parameters-cont-last">
                                    <div class="details-parameters-name">No. of Units </div>
                                    <div class="details-parameters-val">{{$no_of_units}}</div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row margin-top-45">
                        <h5 class="subtitle-margin title-negative-margin"></h5>
                        <h4 class="title-negative-margin">Amenities<span class="special-color">.</span></h4>
                        <div class="title-separator-primary "></div>
                        <p class="margin-top-10">&nbsp;</p>
                        @php
                        $x=1;
                        echo '<div class="col-xs-6 col-sm-4  margin-top-10">';
                            echo '<ul class="details-ticks">';
                                foreach ($am_val as $amenities) {

                                $am_name= $amenities['name'];
                                @endphp

                                <li><i class="jfont">&#xe815;</i>{{$am_name}}</li>


                                @php
                                if($x%4==0) {
                                echo ' </ul>
                        </div>';
                        echo '<div class="col-xs-6 col-sm-4 margin-top-10">';
                            echo '<ul class="details-ticks">';
                                }
                                $x++;
                                }
                                echo ' </ul>
                        </div>';
                        @endphp



                    </div>
					
					@php

					$sql_spec="SELECT specification.`sp_id`,specification.`description`
					,specifications.name,specifications.image FROM `specification` LEFT JOIN specifications
					ON specifications.id=specification.sp_id
					WHERE specifications.name!='' AND specification.micro_id=$micro_id ";
					
					$spe= DB::select($sql_spec );
					if($spe != NULL){
					@endphp

                    <div class="row margin-top-45">

                        <p class="margin-top-10">&nbsp;</p>
                        <div class="col-xs-12 col-lg-12 margin-top-xs-90 margin-top-sm-90 margin-top-md-30">
                            <h4 class="title-negative-margin">Specifications<span class="special-color">.</span></h4>
                            <div class="title-separator-primary"></div>

                            <div class="panel-group margin-top-60 panel-apartment" id="accordion" role="tablist"
                                aria-multiselectable="true">

                                @php

                                $sql_spec="SELECT specification.`sp_id`,specification.`description`
                                ,specifications.name,specifications.image FROM `specification` LEFT JOIN specifications
                                ON specifications.id=specification.sp_id
                                WHERE specifications.name!='' AND specification.micro_id=$micro_id ";
                                // die();
                                $spe= DB::select($sql_spec );
                                $sp=0;
                                foreach ($spe as $spec) {
                                @endphp

                                <div class="panel panel-default ">
                                    <div class="panel-heading" role="tab" id="headingFour{{$sp}}">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseFour{{$sp}}" aria-expanded="false"
                                            aria-controls="collapseFour{{$sp}}">
                                            <span>{{ucwords($spec->name)}} </span>
                                            <div class="button-triangle"></div>
                                            
                                        </a>
                                    </div>
                                    <div id="collapseFour{{$sp}}" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="collapseFour{{$sp}}" aria-expanded="false">
                                        <div class="panel-body">
                                            <img src="http://www.mylandmark.info/admin/images/specification/{{$spec->image}}"
                                                alt="" class="p-image">{{ucwords($spec->description)}}
                                        </div>
                                    </div>
                                </div>


                                @php
                                $sp++;
                                }

                                @endphp




                            </div>
                        </div>



                    </div>
					@php } @endphp



                    {{-- start bank approaval --}}

                    <div class="row margin-top-45">
                        <h5 class="subtitle-margin title-negative-margin"></h5>
                        <h4 class="title-negative-margin">Bank Approval<span class="special-color">.</span></h4>
                        <div class="title-separator-primary"></div>
                        <p class="margin-top-10">&nbsp;</p>
                        @php
                        $x=1;
                        echo '<div class="col-xs-6 col-sm-4 margin-top-10">';
                            echo '<ul class="details-ticks">';
                                foreach ($bank_val as $bank) {

                                $am_name= $bank['name'];
                                @endphp

                                <li><i class="jfont">&#xe815;</i>{{$am_name}}</li>


                                @php
                                if($x%4==0) {
                                echo ' </ul>
                        </div>';
                        echo '<div class="col-xs-6 col-sm-4  margin-top-10">';
                            echo '<ul class="details-ticks">';
                                }
                                $x++;
                                }
                                echo ' </ul>
                        </div>';
                        @endphp



                    </div>


                    {{-- start legal approaval --}}

                    <div class="row margin-top-45">
                        <h5 class="subtitle-margin title-negative-margin"></h5>
                        <h4 class="title-negative-margin">Legal Approval<span class="special-color">.</span></h4>
                        <div class="title-separator-primary"></div>
                        <p class="margin-top-10">&nbsp;</p>
                        @php
                        $x=1;
                        echo '<div class="col-xs-6 col-sm-4 margin-top-10">';
                            echo '<ul class="details-ticks">';
                                foreach ($legal_val as $legal) {

                                $legal_name= $legal['name'];
                                @endphp

                                <li><i class="jfont">&#xe815;</i>{{$legal_name}}</li>


                                @php
                                if($x%4==0) {
                                echo ' </ul>
                        </div>';
                        echo '<div class="col-xs-6 col-sm-4  margin-top-10">';
                            echo '<ul class="details-ticks">';
                                }
                                $x++;
                                }
                                echo ' </ul>
                        </div>';
                        @endphp



                    </div>






                    <div class="row margin-top-45">
							<h4 class="title-negative-margin">About Builder<span class="special-color"></span> </h4>
							<div class="title-separator-primary"></div>
                        <div class="col-xs-12 col-sm-12 margin-top-30">
							<h5 class="subtitle-margin title-negative-margin">{{$builder_names}}</h5>
						{{--<div class="agent-social-bar">
								<div class="pull-left">
                                    <span class="agent-icon-circle">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                    <span class="agent-bar-text">123-456-789</span>
                                </div>
                                <div class="pull-left">
                                    <span class="agent-icon-circle">
                                        <i class="fa fa-envelope fa-sm"></i>
                                    </span>
                                    <span class="agent-bar-text">apartment@domain.tld</span>
								</div>
                                <div class="pull-right">
                                    <div class="pull-right">
                                        <a class="agent-icon-circle" href="#">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </div>
                                    <div class="pull-right">
                                        <a class="agent-icon-circle icon-margin" href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </div>
                                    <div class="pull-right">
                                        <a class="agent-icon-circle icon-margin" href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                    <div class="pull-right">
                                        <a class="agent-icon-circle icon-margin" href="#">
                                            <i class="fa fa-skype"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>--}}
							
                            <div class="col-sm-4">
                                <p class="{{--author-desc--}}">
									<img src="http://www.mylandmark.info/admin/images/builder/{{$builder_images}}" alt="{{$builder_names}}">
                                </p>
                            </div>
                            <div class="col-sm-8">
                                <p class="{{--author-desc--}}">{{strip_tags($builder_about)}}</p>
                            </div>
                        </div>
                    </div>


                    <div class="row margin-top-45">
                        <div class="col-xs-12 apartment-tabs">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
								@php
                                if(count($floor_plan) !=  0) {
								@endphp
                                <li role="presentation" 
								@php
                                if(count($floor_plan) !=  0) {
								@endphp 
								class="active" 
								@php
								}
								@endphp 
								>
                                    <a href="#floor-plan" aria-controls="floor-plan" role="tab" data-toggle="tab">
                                        <span>Floor Plan</span>
                                        <div class="button-triangle2"></div>
                                    </a>
                                </li>
								@php
									}
								@endphp
                                <li role="presentation" @php
                                if(count($floor_plan) ==  0) {
								@endphp 
								class="active" 
								@php
								}
								@endphp >
                                    <a href="#master-plan" aria-controls="master-plan" role="tab" data-toggle="tab">
                                        <span>Master Plan</span>
                                        <div class="button-triangle2"></div>
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#gallery" aria-controls="gallery" role="tab" data-toggle="tab">
                                        <span>Gallery</span>
                                        <div class="button-triangle2"></div>
                                    </a>
                                </li>
                                @php
                                if(count($price_res) > 0) {
								@endphp
                                <li role="presentation">
                                    <a href="#price-list" aria-controls="tab-map" role="tab" data-toggle="tab">
                                        <span>Price List</span>
                                        <div class="button-triangle2"></div>
                                    </a>
                                </li>
                                @php
									}
								@endphp
                                <li role="presentation">
                                    <a href="#tab-map" aria-controls="tab-map" role="tab" data-toggle="tab">
                                        <span>Map</span>
                                        <div class="button-triangle2"></div>
                                    </a>
                                </li>
                                <!--<li role="presentation">
                                    <a href="#tab-street-view" aria-controls="tab-street-view" role="tab"
                                        data-toggle="tab">
                                        <span>Street view</span>
                                        <div class="button-triangle2"></div>
                                    </a>
                                </li>-->


                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane @php
                                if(count($floor_plan) !=  0) {
								@endphp  active @php
									}
								@endphp" id="floor-plan">
                                    <div id="floor-plan" class=" details-map">

                                        @php
                                        $sql="select * from floor_plan where micro_id='$micro_id'";
                                        $floor_plan = DB::select($sql );
                                        //var_dump($builder_infor);
                                        foreach($floor_plan as $floor) {
                                        @endphp

                                        <div class="col-sm-4">
                                         <a href="http://www.mylandmark.info/admin/images/floor_plan/{{$floor->image}}" data-toggle="lightbox" data-title="{{$floor->title}}" >
										 <img src="http://www.mylandmark.info/admin/images/floor_plan/{{$floor->image}}" alt="{{$floor->title}}" title="{{$floor->title}}" class="img-responsive">
                                         </a>
                                            <div class="type-container">
                                                <div class="estate-type">{{ucwords($floor->title)}}</div>
                                                <div class="transaction-type"></div>
                                            </div>
                                        </div>

                                        @php
                                        }
                                        @endphp

                                    </div>
                                </div>
								
                                <div role="tabpanel" class="tab-pane @php
                                if(count($floor_plan) ==  0) {
								@endphp  active @php
									}
								@endphp"" id="master-plan">
                                    <div id="master-plan" class="details-map">
										<a href="http://www.mylandmark.info/admin/images/master_plan/{{$masterplan_image}}" data-toggle="lightbox" data-title="{{$name}}" >
										<img src="http://www.mylandmark.info/admin/images/master_plan/{{$masterplan_image}}" alt="{{$name}}" class="img-responsive" style="width: 100%;height: 100%;"></a>

                                    </div>
                                </div>
								
                                <div role="tabpanel" class="tab-pane" id="price-list">
                                    <div id="price-list" class="details-map">

                                        <div class="col-sm-12">

                                            @php
                                            $sql="select * from price where micro_id='$micro_id'";
                                            $price_res = DB::select($sql );
                                            //var_dump($price_res);
                                            $s_no = 1;
                                            echo ' <table class="table table-responsive table-border">';
                                                echo ' <tr>
                                                    <th>S.No. </th>
                                                    <th>BHK</th>
                                                    <th> Area (Sq.Ft.)</th>
                                                    <th>Price/Sq.Ft </th>
                                                    <th>Base Cost</th>
                                                </tr>';
                                               // var_dump($price_res);
                                                foreach($price_res as $prices_) {
                                                // var_dump($prices_);
                                                // die();
                                                @endphp
                                                <tr>
                                                    <td>{{ $s_no}} </td>
                                                    <td>{{$prices_->type}}</td>
                                                    <td>{{ $prices_->sqft}} </td>
                                                    <td> <i class="fa fa-inr"></i>{{ $prices_->price}}</td>
                                                    <td><i
                                                            class="fa fa-inr"></i>{{ no_to_words($prices_->price*$prices_->sqft)}}
                                                    </td>
                                                </tr>
                                                @php
                                                $s_no++;
                                                }
                                                if( count($price_res)==0) {
                                                 echo '<tr><td colspan="5" class="text-center">N/A</td></tr>'   ;
                                                };
                                                echo '</table>';
                                            @endphp

                                            @php

                                            @endphp



                                        </div>
                                    </div>
                                </div>
                               
                                


                                <div role="tabpanel" class="tab-pane" id="gallery">
                                    <div id="gallery" class="details-map">
                                        @php
                                        $gallery=explode(',',$gallery_image );
                                        foreach( $gallery as $gal) {

                                        $sql="select * from image_data where img_id='$gal'";
                                        $gallery = DB::select($sql );
                                        //var_dump($builder_infor);
                                        foreach($gallery as $gall) {
                                        @endphp

                                        <div class="col-sm-4">
                                            <a href="http://www.mylandmark.info/admin/images/gallery/{{$gall->image_name}}" data-toggle="lightbox" data-title="{{$name}}" >
  
                                            <img src="http://www.mylandmark.info/admin/images/gallery/{{$gall->image_name}}"
                                                alt="{{$name}}-Gallery" title="{{$name}}" class="img-responsive">
                                            </a>
                                        </div>

                                        @php
                                        }
                                        }
                                        @endphp

                                    </div>
                                </div>


                                <div role="tabpanel" class="tab-pane " id="tab-map">
                                    <iframe src="http://maps.google.com/maps?q={{$latitute.','.$longitude}}&z=15&output=embed" width="100%" height="450" frameborder="0" style="border:0"></iframe>
                                    {{--<div id="estate-map" id='map' class="details-map">
                                        </div>--}} 
                                </div>
                                {{-- <div role="tabpanel" class="tab-pane" id="tab-street-view">
                                    <div id="estate-street-view" class="details-map"></div>
                                </div>--}}


                            </div>
                        </div>
                    </div>

                    @php
                    $sql_spec="SELECT que,ans from faq where micro_id=$micro_id ";
                    // die();
                    $faq_count= DB::table('faq')->where('micro_id',$micro_id)->count();
                    // var_dump($faq_count);


                    if($faq_count>0) {
                    @endphp
                    <div class="row margin-top-45">

                        <p class="margin-top-10">&nbsp;</p>
                        <div class="col-xs-12 col-lg-12 margin-top-xs-90 margin-top-sm-90 margin-top-md-30">
                            <h4 class="title-negative-margin">FAQ<span class="special-color">.</span></h4>
                            <div class="title-separator-primary"></div>

                            <div class="panel-group margin-top-60 panel-apartment" id="accordion" role="tablist"
                                aria-multiselectable="true">

                                @php

                                $sql_spec="SELECT que,ans from faq where micro_id=$micro_id ";
                                // die();
                                $faq= DB::select($sql_spec );
                                $sp=0;
                                foreach ($faq as $faqs) {
                                @endphp

                                <div class="panel panel-default ">
                                    <div class="panel-heading" role="tab" id="faqheadingFour{{$sp}}">
                                        <a class="collapsed" role="button" data-toggle="collapse"
                                            data-parent="#accordion" href="#faqcollapseFour{{$sp}}"
                                            aria-expanded="false" aria-controls="faqcollapseFour{{$sp}}">
                                            <span>{{ucwords($faqs->que)}} </span>
                                            <div class="button-triangle"></div>
                                            <div class="button-triangle2"></div>
                                            <div class="button-icon"><i class="jfont">�?</i></div>
                                        </a>
                                    </div>
                                    <div id="faqcollapseFour{{$sp}}" class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="faqcollapseFour{{$sp}}" aria-expanded="false">
                                        <div class="panel-body">
                                            {{ucwords($faqs->ans)}}
                                        </div>
                                    </div>
                                </div>


                                @php
                                $sp++;
                                }

                                @endphp




                            </div>
                        </div>



                    </div>
                    @php
                    }

                    @endphp

                    {{--<div class="row margin-top-60">
                        <div class="col-xs-12">
                            <h3 class="title-negative-margin">contact the agent<span class="special-color">.</span></h3>
                            <div class="title-separator-primary"></div>
                        </div>
                    </div>
                    <div class="row margin-top-60">
                        <div class="col-xs-12 col-sm-12">
							<p class="projectSuccessMsg"></p>
                            <form name="contact-from" id='ajax-project-form'>
                                <input name="name" type="text" class="input-long main-input" placeholder="Your name" />
								<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
								<input type="hidden" name="project_name" id="project_name" value="{{ ucwords($name) }}">
                                <input name="phone" type="text" class="input-long pull-right main-input" placeholder="Your phone" />
                                <input name="email" type="email" class="input-full main-input"
                                    placeholder="Your email" />
                                <textarea name="msg" id="mesg" class="input-full agent-textarea main-input" placeholder="Your Message"></textarea>
                                <div class="form-submit-cont">
                                    <input type="submit" name="project" value="Submit" class="btn btn-primary btn-block input-long">
									<!--<a href="#" class="button-primary pull-right">
                                        <span>send</span>
                                        <div class="button-triangle"></div>
                                        <div class="button-triangle2"></div>
                                        <div class="button-icon"><i class="fa fa-paper-plane"></i></div>
                                    </a>-->
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>--}}
                    <div class="row margin-top-90">
                        <div class="col-xs-12 col-sm-9">
                            <h5 class="subtitle-margin">hot</h5>
                            <h1>new listings<span class="special-color">.</span></h1>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <a href="#" class="navigation-box navigation-box-next" id="short-offers-owl-next">
                                <div class="navigation-triangle"></div>
                                <div class="navigation-box-icon"><i class="jfont">&#xe802;</i></div>
                            </a>
                            <a href="#" class="navigation-box navigation-box-prev" id="short-offers-owl-prev">
                                <div class="navigation-triangle"></div>
                                <div class="navigation-box-icon"><i class="jfont">&#xe800;</i></div>
                            </a>
                        </div>
                        <div class="col-xs-12">
                            <div class="title-separator-primary"></div>
                        </div>
                    </div>

                    <div class="short-offers-container">
                        <div class="owl-carousel" id="short-offers-owl">



                            @php
                            $sql2="select microsite_detail.latitude,microsite_detail.longitude,microsite_detail.about as
                            aa, prop_status.status,prop_type.type,
                            microsite.micro_id,microsite.location,microsite.name,microsite_detail.featured_image,
                            microsite_detail.builder_id ,microsite_detail.rooms, builder.logo as logo, builder.name as
                            builder_name from microsite
                            left join microsite_detail on microsite.micro_id=microsite_detail.micro_id
                            LEFT JOIN builder on microsite_detail.builder_id =builder.builder_id
                            LEFT JOIN prop_status ON prop_status.status_id=microsite_detail.status_id
                            LEFT JOIN prop_type on prop_type.type_id=microsite_detail.type_id

                            order by microsite.micro_id limit 24 ";//featured project
                            $query_result = DB::select($sql2);
                            $p=0;
                            @endphp
                            @foreach($query_result as $item)
                            @php
                            $x++;
                            @endphp
                            <div class="grid-offer-col">
                                <div class="grid-offer">
                                    <div class="grid-offer-front">
                                        <div class="grid-offer-photo">
                                            <img src="http://www.mylandmark.info/admin/images/fimage/{{ $item->featured_image}}"
                                                alt="" />
                                            <div class="type-container">
                                                <div class="estate-type">{{$item->type}}</div>
                                                <div class="transaction-type">sale</div>
                                            </div>
                                        </div>
                                        <div class="grid-offer-text">
                                            <i class="fa fa-map-marker grid-offer-localization"></i>
                                            <div class="grid-offer-h4">
                                                <h4 class="grid-offer-title">{{ ucwords( $item->name)}}
                                                    </h4>
                                            </div>
                                            <div class="clearfix"></div>
                                            <p> {{substr(strip_tags($item->aa),0,150)}} ...

                                            </p>
                                            <div class="clearfix"></div>
                                        </div>
                                        @php

                                        $price = " SELECT MIN(`basic_cost`) as `min`, MAX(`basic_cost`) as
                                        `max`,MIN(sqft) as min_sqft,MAX(sqft) as max_sqft FROM `price` WHERE
                                        `micro_id`=$item->micro_id";
                                        $price_result = DB::select($price );
                                        @endphp

                                        <div class="price-grid-cont">
                                            <div class="grid-price-label pull-left">Price:</div>
                                            <div class="grid-price pull-right">
                                                @foreach($price_result as $price)

                                                {{no_to_words($price->min)}}

                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="grid-offer-params">
                                            <div class="grid-area">
                                                <img src="{{ asset('public/')}}/images/area-icon.png"
                                                    alt="" />{{round($price->min_sqft*0.092903)}}m<sup>2</sup>
                                            </div>

                                            <div class="grid-baths">
                                                <img src="{{ asset('public/')}}/images/bathrooms-icon.png" alt="" />2
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
									<div class="grid-offer-back">
										<div  class="col-sm-12" style="padding:15px 10px">
											<h4 class="featured-offer-title">{{ ucwords( $item->name)}} - {{ $item->location}}</h4>
											<p class="text-justify">
												{{substr(strip_tags($item->aa,'p'),0,420)}} ...
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
											<a href="{{ url('projects/' . strtolower(str_replace(' ', '-', $item->name))) }}"
												class="button-primary">
												<span>read more</span>
												<div class="button-triangle"></div>
												<div class="button-triangle2"></div>
												<div class="button-icon"><i class="fa fa-search"></i></div>
											</a>
										</div>
									</div>
                                    {{--<div class="grid-offer-back">
                                        <div id="grid-map-{{$p}}" class="grid-offer-map"></div>
                                        <div class="button">
                                            <a href="{{ url('projects/' . strtolower(str_replace(' ', '-', $item->name))) }}"
                                                class="button-primary">
                                                <span>read more</span>
                                                <div class="button-triangle"></div>
                                                <div class="button-triangle2"></div>
                                                <div class="button-icon"><i class="fa fa-search"></i></div>
                                            </a>
                                        </div>
                                    </div>--}}
                                </div>
                            </div>
                            @php
                            $p++;
                            @endphp

                            @endforeach


                        </div>
                    </div>
                    <div class="margin-top-45"></div>
                </div>
            </div>
        </div>
    </section>
<!--
<a href="https://unsplash.it/1200/768.jpg?image=250" data-toggle="lightbox" data-title="A random title" data-footer="A custom footer text">
    <img src="https://unsplash.it/600.jpg?image=250" class="img-fluid">
</a> -->
    @include('footer1')
    <!-- jQuery  -->
    <script type="text/javascript" src="{{ asset('public/js/jQuery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/js/jQuery/jquery-ui.min.js')}}"></script>

    <!-- Bootstrap-->
    <script type="text/javascript" src="{{ asset('public/bootstrap/bootstrap.min.js')}}"></script>

    <!-- Google Maps -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDfDCV5hXiPamCIT8_vwGXuzimLQ9MF76g&amp;sensor=false&amp;libraries=places">
    </script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- plugins script -->
    <script type="text/javascript" src="{{ asset('public/js/plugins.js')}}"></script>
    <!-- template scripts -->
    <script type="text/javascript" src="{{ asset('public/js/apartment.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    
<script>
    $(document).ready(function ($) {
        // delegate calls to data-toggle="lightbox"
        $(document).on('click', '[data-toggle="lightbox"]:not([data-gallery="navigateTo"]):not([data-gallery="example-gallery-11"])', function (event) {
            event.preventDefault();
            return $(this).ekkoLightbox({
                onShown: function () {
                    if (window.console) {
                        return console.log('Checking our the events huh?');
                    }
                },
                onNavigate: function (direction, itemIndex) {
                    if (window.console) {
                        return console.log('Navigating ' + direction + '. Current item: ' + itemIndex);
                    }
                }
            });
        });

       


    });
	<!-- google maps initialization -->
		var map;
		
		function initMap() {                            
			var latitude = 27.7172453; // YOUR LATITUDE VALUE
			var longitude = 85.3239605; // YOUR LONGITUDE VALUE
			
			var myLatLng = {lat: latitude, lng: longitude};
			
			map = new google.maps.Map(document.getElementById('map'), {
			  center: myLatLng,
			  zoom: 14                    
			});
					
			var marker = new google.maps.Marker({
			  position: myLatLng,
			  map: map,
			  //title: 'Hello World'
			  
			  // setting latitude & longitude as title of the marker
			  // title is shown when you hover over the marker
			  title: latitude + ', ' + longitude 
			});            
		}
	</script>


    <script type="text/javascript">
		jQuery(document).ready(function($) {
			$("#ajax-project-form").submit(function() {
			
			/*if($("#p_name").val()=='') {
				alert("Name is requred");
				return false;
			}
			if($("#p_phone").val()=='') {
				alert("Phone is requred");
				return false;
			}
			if($("#p_email").val()=='') {
				alert("Email Id is requred");
				return false;
			}
			if($("#p_mesg").val()=='') {
				alert("Message is requred");
				return false;
			}*/
			
			var str = $(this).serialize();
			$.ajax({
				method: 'POST', 
				url: "{{ url('/projectsPost')}}", 
				data: str,
				success: function(response){ 
					//console.log(response);			  
					var success 	= response['success'];
					var error 		= response['error'];
					//alert(msg);
					if(success =='<h5 style="color:black;">Mail Sent Successfully</h5>'){					
						$('.projectSuccessMsg').html(success);
						$(".projectSuccessMsg").delay(5000).fadeOut('slow');
						window.setTimeout(function(){window.location.reload()}, 10000);	
					}
					if(error !=""){
						$('.projectSuccessMsg').html(error);
					}
				}
			});
			return false;
			});
		});
		jQuery(document).ready(function($) {
			$("#ajax-project-form-mobile").submit(function() {
			
			/*if($("#m_name").val()=='') {
				alert("Name is requred");
				return false;
			}
			if($("#m_phone").val()=='') {
				alert("Phone is requred");
				return false;
			}
			if($("m_email").val()=='') {
				alert("Email Id is requred");
				return false;
			}
			if($("#m_mesg").val()=='') {
				alert("Message is requred");
				return false;
			}*/	
			var str = $(this).serialize();
			$.ajax({
				method: 'POST', 
				url: "{{ url('/projectsPost')}}", 
				data: str,
				success: function(response){ 
					//console.log(response);			  
					var success 	= response['success'];
					var error 		= response['error'];
					//alert(msg);
					if(success =='<h5 style="color:black;">Mail Sent Successfully</h5>'){					
						$('.projectSuccessMsgmobile').html(success);
						$(".projectSuccessMsgmobile").delay(5000).fadeOut('slow');
						window.setTimeout(function(){window.location.reload()}, 10000);	
					}
					if(error !=""){
						$('.projectSuccessMsgmobile').html(error);
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