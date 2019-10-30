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
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css'>

    @include('header1')
    <style>
        .simple-search-cont .bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
            top: 0
        }

        input.simple-search-input {
            width: 100%
        }

        .button-primary,
        .button-primary:active,
        .button-primary:focus {
            /*  letter-spacing: 0 */
        }

        .adv-search-cont {
            top: 55%
        }

        .adv-search-icons,
        .tt {
            display: none
        }

        @media only screen and (max-width: 480px) {
            .simple-search-cont {
                height: 250px;
            }

            .simple-search-cont .button-primary {
                position: absolute;
                top: 0px;
                right: 25px;
                float: none !important;
            }

            .button-primary.pull-right.se2 {

                position: absolute;
                top: 49px;

            }
        }

        .button-primary,
        .button-primary:active,
        .button-primary:focus {
            padding: 0 65px 0 30px;
        }



        .select2.select2-container {
            width: 100% !important;
        }

        .select2.select2-container .select2-selection {
            border: 1px solid #ccc;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            height: 34px;
            margin-bottom: 15px;
            outline: none;
            transition: all 0.15s ease-in-out;
        }

        .select2.select2-container .select2-selection .select2-selection__rendered {
            color: #333;
            line-height: 32px;
            padding-right: 33px;
        }

        .select2.select2-container .select2-selection .select2-selection__arrow {
            background: #f8f8f8;
            border-left: 1px solid #ccc;
            -webkit-border-radius: 0 3px 3px 0;
            -moz-border-radius: 0 3px 3px 0;
            border-radius: 0 3px 3px 0;
            height: 32px;
            width: 33px;
        }

        .select2.select2-container.select2-container--open .select2-selection.select2-selection--single {
            background: #f8f8f8;
        }

        .select2.select2-container.select2-container--open .select2-selection.select2-selection--single .select2-selection__arrow {
            -webkit-border-radius: 0 3px 0 0;
            -moz-border-radius: 0 3px 0 0;
            border-radius: 0 3px 0 0;
        }

        .select2.select2-container.select2-container--open .select2-selection.select2-selection--multiple {
            border: 1px solid #34495e;
        }

        .select2.select2-container.select2-container--focus .select2-selection {
            border: 1px solid #34495e;
        }

        .select2.select2-container .select2-selection--multiple {
            height: auto;
            min-height: 34px;
        }

        .select2.select2-container .select2-selection--multiple .select2-search--inline .select2-search__field {
            margin-top: 0;
            height: 32px;
        }

        .select2.select2-container .select2-selection--multiple .select2-selection__rendered {
            display: block;
            padding: 7px 4px;
            line-height: 29px;
        }

        .select2.select2-container .select2-selection--multiple .select2-selection__choice {
            background-color: #f8f8f8;
            border: 1px solid #ccc;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            margin: 4px 4px 0 0;
            padding: 0 6px 0 22px;
            height: 24px;
            line-height: 24px;
            font-size: 12px;
            position: relative;
        }

        .select2.select2-container .select2-selection--multiple .select2-selection__choice .select2-selection__choice__remove {
            position: absolute;
            top: 0;
            left: 0;
            height: 22px;
            width: 22px;
            margin: 0;
            text-align: center;
            color: #e74c3c;
            font-weight: bold;
            font-size: 16px;
        }

        .select2-container .select2-dropdown {
            background: transparent;
            border: none;
            margin-top: -5px;
        }

        .select2-container .select2-dropdown .select2-search {
            padding: 0;
        }

        .select2-container .select2-dropdown .select2-search input {
            outline: none;
            border: 1px solid #34495e;
            border-bottom: none;
            padding: 4px 6px;
        }

        .select2-container .select2-dropdown .select2-results {
            padding: 0;
        }

        .select2-container .select2-dropdown .select2-results ul {
            background: #fff;
            border: 1px solid #34495e;
        }

        .select2-container .select2-dropdown .select2-results ul .select2-results__option--highlighted[aria-selected] {
            background-color: #3498db;
        }

        .big-drop {
            width: 600px !important;
        }

        .select2.select2-container .select2-selection--multiple .select2-selection__rendered {
            padding: 6:24px
        }

        .select2 {
            margin-top: 25px
        }
    </style>

    <section class="no-padding adv-search-section">
        <!-- Slider main container -->
        <div id="swiper2" class="swiper-container">
            <div class="container swiper2-navigation">
                <div class="row">
                    <div class="col-xs-2">
                        <a href="#" class="navigation-box2 navigation-box-prev slide-prev">
                            <div class="navigation-triangle"></div>
                            <div class="navigation-box-icon2"><i class="jfont">&#xe800;</i></div>
                        </a>
                    </div>
                    <div class="col-xs-2 col-xs-offset-8">
                        <a href="#" class="navigation-box2 navigation-box-next slide-next">
                            <div class="navigation-triangle"></div>
                            <div class="navigation-box-icon2"><i class="jfont">&#xe802;</i></div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
				@php 
					$t = 0;
					
					$slidercount = count($slider);
					
					while ($t < $slidercount){
						
					$path = explode(",", $slider[$t] -> sliderimage);
					
					$imagdata ="select image_name from image_data where img_id= " . $path[0];
					
					$resultimage = DB::select($imagdata);
					
				@endphp
				
				<div class="swiper-slide swiper-lazy" data-background="{{ asset('public/images/slides/banner1-1.jpg')}}" style="background-size: 100%;">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-8 col-xs-offset-2 animated fadeInDown slide2-desc slide2-desc-3">
                                <!--<h1 class="second-color">{{ $slider[$t]->name }}</h1>-->
                                <div class="clearfix"></div>
                               <!-- <p class="swiper2-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                            </div>
                        </div>
                    </div>
                    {{--<div class="slider-overlay"></div>--}}
                </div>


                        <div class="swiper-slide swiper-lazy" data-background="{{ asset('public/images/slides/banner2-2.jpg')}}"style="background-size: 100%;">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-8 col-xs-offset-2 animated fadeInDown slide2-desc slide2-desc-3">
                                <!--<h1 class="second-color">{{ $slider[$t]->name }}</h1>-->
                                <div class="clearfix"></div>
                               <!-- <p class="swiper2-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                            </div>
                        </div>
                    </div>
                    {{--<div class="slider-overlay"></div>--}}
                </div>

                                   <div class="swiper-slide swiper-lazy" data-background="{{ asset('public/images/slides/banner3-3.jpg')}}"style="background-size: 100%;">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-8 col-xs-offset-2 animated fadeInDown slide2-desc slide2-desc-3">
                                <!--<h1 class="second-color">{{ $slider[$t]->name }}</h1>-->
                                <div class="clearfix"></div>
                               <!-- <p class="swiper2-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
                            </div>
                        </div>
                    </div>
                    {{--<div class="slider-overlay"></div>--}}
                </div>
				
				@php 
				$t++;
				} 
					@endphp
                {{--<div class="swiper-slide swiper-lazy" data-background="{{ asset('public/images/slides/banner2.jpg')}}" style="background-size: 100%;">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-8 col-xs-offset-2 animated slide2-desc slide2-desc-3">
                                <h1 class="second-color">E. Elwood St. Phoenix, AZ 85034<span
                                        class="special-color">.</span></h1>
                                <div class="clearfix"></div>
                                <p class="swiper2-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="slider-overlay"></div>
                </div>--}}
            </div>
        </div>
        <form class="adv-search-form" action="searchresult" id="show-form" method='post'>
            <div class="adv-search-cont">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-lg-11 adv-search-icons">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs adv-search-tabs" role="tablist">
                                <li role="presentation" class="active" data-toggle="tooltip" data-placement="top"
                                    title="apartments"><a href="#apartments" aria-controls="apartments" role="tab"
                                        data-toggle="tab" id="adv-search-tab1"><i class="fa fa-building"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-1 visible-lg  tt">
                            <a id="adv-search-hide" href="#"><i class="jfont">&#xe801;</i></a>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row tab-content" style="width: 100%;">
                        <div role="tabpanel" class="col-xs-12 adv-search-outer tab-pane fade in active" id="apartments">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-lg-3">
									<select class="bootstrap-select" name="proj_cat" required>
										<option value="">Project Category</option>
										<option value="Residential Plot">Residential Plot </option>
										<option value="Residential Apartment">Residential Apartment </option>
										<option value="Residential Villas">Residential Villas </option>
										<option value="Residential Apartment and Penthouse">Residential Apartment and Penthouse </option>
										<option value="Residential Apartment and Villa">Residential Apartment and Villa </option>
										<option value="Town house">Town house </option>
										<option value="Row House">Row House </option>
										<option value="Villas and Row House">Villas and Row House </option>
									</select>
									<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-6">
                                    <select class="js-select2-multi bootstrap-select" name='location[]' multiple="multiple" placeholder='Search Location' required>
										@foreach($address as $item)
											<option value='{{ $item->location}}'>{{ $item->location}}</option>
										@endforeach
                                    </select>
                                    <!--<select class="js-example-data-array form-control"></select>
                                    <pre data-fill-from=".js-code-placeholder"></pre>-->
                                </div>

                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <button type="submit" name="submit" class="btn btn-primary bootstrap-select" style="float: right;width: 200px;height: 45px;">Search</button>
									<!--<a href="#" class="button-primary pull-right bootstrap-select">
                                        <span>search</span>
                                        <div class="button-triangle"></div>
                                        <div class="button-triangle2"></div>
                                        <div class="button-icon"><i class="fa fa-search"></i></div>
                                    </a>-->
                                </div>
                            </div>
                            <div class="row row2">
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <select name="property_type" class="bootstrap-select" title="Property type:"
                                        tabindex="-98" required>
                                        <option class="bs-title-option" value="">Property type:</option>
                                        <option value='Under Construction'>Under Construction</option>
                                        <option value='Completed'>Completed</option>
                                        <option value='Coming Soon'>Coming Soon</option>
                                        <option value='Pre - Launch'>Pre - Launch</option>
                                        <option value='Sold Out'>Sold Out</option>

                                    </select>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-lg-3">
                                    <div class="adv-search-range-cont">
                                        <label for="slider-range-price1-value" class="adv-search-label">Price:</label>
                                        <input type="text" id="slider-range-price1-value" readonly class="adv-search-amount">
										<input type="hidden" name="min_p" id="min_price" value='0'>
										<input type="hidden" name="max_p" id="max_price" value='5000000'>
                                        <div class="clearfix"></div>
                                        <div id="slider-range-price1" data-min="0" data-max="300000" class="slider-range"></div>

                                    </div>

                                </div>
                                {{--<div class="col-xs-12 col-sm-6 col-lg-3">
                                    <div class="adv-search-range-cont">
                                        <label for="slider-range-area1-value" class="adv-search-label">Area:</label>
                                        <span>m<sup>2</sup></span>
                                        <input type="text" id="slider-range-area1-value" readonly
                                            class="adv-search-amount">
                                        <div class="clearfix"></div><input type="hidden" name="min_p" id="min_p" ><input type="hidden" name="max_p" id="max_p" >
                                        <div id="slider-range-area1" data-min="0" data-max="180" class="slider-range">
                                        </div>
                                    </div>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </section>

    {{--<section class="section-light bottom-padding-45 section-both-shadow">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="feature2 wow fadeInLeft" id="feature1">
                        <div class="feature2-icon"><i class="fa fa-building"></i></div>
                        <div class="feature2-text">
                            <h4>PIXEL PERFECT DESIGN<span class="special-color">.</span></h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature2 wow fadeInUp" id="feature2">
                        <div class="feature2-icon"><i class="fa fa-home"></i></div>
                        <div class="feature2-text">
                            <h4>50 HTML FILES<span class="special-color">.</span></h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature2 wow fadeInRight" id="feature3">
                        <div class="feature2-icon"><i class="fa fa-industry"></i></div>
                        <div class="feature2-text">
                            <h4>MASONRY, LIST &amp; GRID<span class="special-color">.</span></h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature2 wow fadeInLeft" id="feature4">
                        <div class="feature2-icon"><i class="fa fa-tree"></i></div>
                        <div class="feature2-text">
                            <h4>MODERN CLEAN PROJECT<span class="special-color">.</span></h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature2 wow fadeInUp" id="feature5">
                        <div class="feature2-icon"><i class="fa fa-gears"></i></div>
                        <div class="feature2-text">
                            <h4>3 BLOG STYLES<span class="special-color">.</span></h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="feature2 wow fadeInRight" id="feature6">
                        <div class="feature2-icon"><i class="fa fa-pie-chart"></i></div>
                        <div class="feature2-text">
                            <h4>6 HOMEPAGES<span class="special-color">.</span></h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}

    <section class="featured-offers parallax">

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
                    <h5 class="subtitle-margin second-color">highly recommended</h5>
                    <h1 class="second-color">featured offers<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-12 col-sm-3 navigation-box2-cont">
                    <a href="#" class="navigation-box2 navigation-box-next" id="featured-offers-owl-next">
                        <div class="navigation-triangle"></div>
                        <div class="navigation-box-icon2"><i class="jfont">&#xe802;</i></div>
                    </a>
                    <a href="#" class="navigation-box2 navigation-box-prev" id="featured-offers-owl-prev">
                        <div class="navigation-triangle"></div>
                        <div class="navigation-box-icon2"><i class="jfont">&#xe800;</i></div>
                    </a>
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
                    <div class="title-separator-secondary2"></div>
                </div>
            </div>
        </div>
        <div class="featured-offers-container">
            <div class="owl-carousel" id="featured-offers-owl">
                @php
                $x = 0;
                @endphp

                @foreach($data as $item)
				
				
                @php
				if($item->aa != ""){
                $x++;
                @endphp
                <div class="featured-offer-col">
                    <div class="featured-offer-front">
                        <div class="featured-offer-photo">
                            <?php //<img src="{{  asset('public/images/featured-offer1.jpg')}}" alt="" /> ?>
                            <img class="lazy"
                                data-src="http://www.mylandmark.info/admin/images/fimage/{{ $item->featured_image}}"
                                alt="" style="height: 240px;width: 100%;" class="lazy"/>
                            <div class="type-container">
                                <div class="estate-type">{{$item->type}}</div>
                                <div class="transaction-type">sale</div>
                            </div>
                        </div>
                        <div class="featured-offer-text">
                            <h4 class="featured-offer-title">{{ ucwords( $item->name)}} - {{ $item->location}}</h4>
                            <p>
                                {{strip_tags( substr($item->aa,0,150),'')}} ...
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            </p>
                        </div>
                        @php
                        $price = " SELECT MIN(`basic_cost`) as `min`, MAX(`basic_cost`) as `max`,MIN(sqft) as
                        min_sqft,MAX(sqft) as max_sqft FROM `price` WHERE `micro_id`=$item->micro_id";
                        $price_result = DB::select($price );
                        @endphp

                        @foreach($price_result as $price)
                       

                        <div class="featured-offer-params">
                            <div class="featured-area">
                                <img class="lazy" data-src="{{ asset('public/images/area-icon.png')}}"
                                    alt="" />{{round($price->min_sqft*0.092903)}}m<sup>2</sup>
                            </div>
                            <div class="featured-rooms ">

                                @if (strtolower(trim($item->rooms))=='plot')
                                <img class="lazy" data-src="{{ asset('public/images/rooms-icon.png')}}"
                                    alt="" />{{  $item->rooms }}
                                @else
                                <img class="lazy" data-src="{{ asset('public/images/rooms-icon.png')}}"
                                    alt="" />{{ substr( $item->rooms,0,1) }}
                                @endif


                            </div>
                            {{--<div class="featured-baths">
                                <img class="lazy" data-src="{{ asset('public/images/bathrooms-icon.png')}}" alt="" />1
                        </div>--}}
                    </div>
                    <div class="featured-price">

                        @php 
                        if($price->min==NULL) {
                            echo 'N/A';
                        }else {
                            echo no_to_words($price->min);
                        }
                        @endphp
                       


                        @endforeach



                    </div>
                </div>
                <div class="featured-offer-back">
                    <div class="col-sm-12" style="padding:15px 10px">
                        <h4 class="featured-offer-title">{{ ucwords( $item->name)}} - {{ $item->location}}</h4>
                        <p class="text-justify">
                            {{ strip_tags( substr($item->aa,0,700),'p') }} ...
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
                        <a target="_blank"
                            href="{{ url('projects/' . strtolower(str_replace(' ', '-', $item->name))) }}"
                            class="button-primary">
                            <span>read more</span>
                            <div class="button-triangle"></div>
                            <div class="button-triangle2"></div>
                            <div class="button-icon"><i class="fa fa-search"></i></div>
                        </a>
                    </div>
                </div>

            </div>
			@php } @endphp
			
            @endforeach







            {{--<div class="featured-offer-col">
                    <div class="featured-offer-front">
                        <div class="featured-offer-photo">
                            <img class="lazy" data-src="{{ asset('public/images/featured-offer7.jpg')}}" alt="" />
            <div class="type-container">
                <div class="estate-type">house</div>
                <div class="transaction-type">sale</div>
            </div>
        </div>
        <div class="featured-offer-text">
            <h4 class="featured-offer-title">200 South Dr, Fort Collins, Colorado 80523, USA</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
        </div>
        <div class="featured-offer-params">
            <div class="featured-area">
                <img class="lazy" data-src="{{ asset('public/images/area-icon.png')}}" alt="" />54m<sup>2</sup>
            </div>
            <div class="featured-rooms">
                <img class="lazy" data-src="{{ asset('public/images/rooms-icon.png')}}" alt="" />3
            </div>
            <div class="featured-baths">
                <img class="lazy" data-src="{{ asset('public/images/bathrooms-icon.png')}}" alt="" />1
            </div>
        </div>
        <div class="featured-price">
            $ 320 000
        </div>
        </div>
        <div class="featured-offer-back">
            <div id="featured-map7" class="featured-offer-map"></div>
            <div class="button">
                <a href="estate-details-right-sidebar.html" class="button-primary">
                    <span>read more</span>
                    <div class="button-triangle"></div>
                    <div class="button-triangle2"></div>
                    <div class="button-icon"><i class="fa fa-search"></i></div>
                </a>
            </div>
        </div>

        </div> --}}
        </div>
        </div>
    </section>

    <!--<section class="team section-light section-both-shadow">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
                    <h5 class="subtitle-margin">meet our</h5>
                            <h1>proffesional team<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-12 col-sm-3 navigation-box2-cont">
                    <a href="#" class="navigation-box2 navigation-box-next secondary" id="team-owl-next"><div class="navigation-triangle"></div><div class="navigation-box-icon2"><i class="jfont">&#xe802;</i></div></a>
                    <a href="#" class="navigation-box2 navigation-box-prev secondary"  id="team-owl-prev"><div class="navigation-triangle"></div><div class="navigation-box-icon2"><i class="jfont">&#xe800;</i></div></a>
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
                    <div class="title-separator-primary2"></div>
                </div>
            </div>
        </div>
        <div class="team-container">
            <div class="owl-carousel" id="team-owl">
                <div class="team-member-cont">
                    <div class="team-member">
                        <div class="team-photo">
                            <img class="lazy" data-src="{{ asset('public/images/agent1.jpg')}}" alt="" />
                            <div class="big-triangle"></div>
                            <div class="big-triangle2"></div>
                            <a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>
                            <div class="team-description">
                                <div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <span>(0)-123-456-789</span>
                                    </div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle">
                                            <i class="fa fa-envelope fa-sm"></i>
                                        </span>
                                        <span>apartment@domain.tld</span>
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
                                    <p class="team-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                              </div>
                            </div>
                        </div>
                        <div class="team-name">
                            <h5>manager</h5>
                            <h4>Mark Smith<span class="special-color">.</span></h4>
                        </div>
                    </div>
                </div>
                <div class="team-member-cont">
                    <div class="team-member">
                        <div class="team-photo">
                            <img class="lazy" data-src="{{ asset('public/images/agent2.jpg')}}" alt="" />
                            <div class="big-triangle"></div>
                            <div class="big-triangle2"></div>
                            <a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>
                            <div class="team-description">
                                <div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <span>(0)-123-456-789</span>
                                    </div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle">
                                            <i class="fa fa-envelope fa-sm"></i>
                                        </span>
                                        <span>apartment@domain.tld</span>
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
                                    <p class="team-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                              </div>
                            </div>
                        </div>
                        <div class="team-name">
                            <h5>Agent</h5>
                            <h4>Michelle Jackson<span class="special-color">.</span></h4>
                        </div>
                    </div>
                </div>
                <div class="team-member-cont">
                    <div class="team-member">
                        <div class="team-photo">
                            <img class="lazy" data-src="{{ asset('public/images/agent3.jpg')}}" alt="" />
                            <div class="big-triangle"></div>
                            <div class="big-triangle2"></div>
                            <a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>
                            <div class="team-description">
                                <div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <span>(0)-123-456-789</span>
                                    </div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle">
                                            <i class="fa fa-envelope fa-sm"></i>
                                        </span>
                                        <span>apartment@domain.tld</span>
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
                                    <p class="team-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                              </div>
                            </div>
                        </div>
                        <div class="team-name">
                            <h5>specialist</h5>
                            <h4>Robert Duncan<span class="special-color">.</span></h4>
                        </div>
                    </div>
                </div>
                <div class="team-member-cont">
                    <div class="team-member">
                        <div class="team-photo">
                            <img class="lazy" data-src="{{ asset('public/images/agent4.jpg')}}" alt="" />
                            <div class="big-triangle"></div>
                            <div class="big-triangle2"></div>
                            <a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>
                            <div class="team-description">
                                <div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <span>(0)-123-456-789</span>
                                    </div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle">
                                            <i class="fa fa-envelope fa-sm"></i>
                                        </span>
                                        <span>apartment@domain.tld</span>
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
                                    <p class="team-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                              </div>
                            </div>
                        </div>
                        <div class="team-name">
                            <h5>agent</h5>
                            <h4>Veronica Green<span class="special-color">.</span></h4>
                        </div>
                    </div>
                </div>
                <div class="team-member-cont">
                    <div class="team-member">
                        <div class="team-photo">
                            <img class="lazy" data-src="{{ asset('public/images/agent5.jpg')}}" alt="" />
                            <div class="big-triangle"></div>
                            <div class="big-triangle2"></div>
                            <a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>
                            <div class="team-description">
                                <div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <span>(0)-123-456-789</span>
                                    </div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle">
                                            <i class="fa fa-envelope fa-sm"></i>
                                        </span>
                                        <span>apartment@domain.tld</span>
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
                                    <p class="team-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                              </div>
                            </div>
                        </div>
                        <div class="team-name">
                            <h5>agent</h5>
                            <h4>Timothe Lee<span class="special-color">.</span></h4>
                        </div>
                    </div>
                </div>
                <div class="team-member-cont">
                    <div class="team-member">
                        <div class="team-photo">
                            <img class="lazy" data-src="{{ asset('public/images/agent6.jpg')}}" alt="" />
                            <div class="big-triangle"></div>
                            <div class="big-triangle2"></div>
                            <a class="big-icon big-icon-plus" href="agent-right-sidebar.html"><i class="jfont">&#xe804;</i></a>
                            <div class="team-description">
                                <div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <span>(0)-123-456-789</span>
                                    </div>
                                    <div class="team-desc-line">
                                        <span class="team-icon-circle">
                                            <i class="fa fa-envelope fa-sm"></i>
                                        </span>
                                        <span>apartment@domain.tld</span>
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
                                    <p class="team-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                              </div>
                            </div>
                        </div>
                        <div class="team-name">
                            <h5>agent</h5>
                            <h4>Joanne Doe<span class="special-color">.</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    {{--<section class="testimonials parallax">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
                    <h5 class="subtitle-margin second-color">recommendations</h5>
                    <h1 class="second-color">our clients say<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-12 col-sm-3 navigation-box2-cont">
                    <a href="#" class="navigation-box2 navigation-box-next" id="testimonials-owl-next">
                        <div class="navigation-triangle"></div>
                        <div class="navigation-box-icon2"><i class="jfont">&#xe802;</i></div>
                    </a>
                    <a href="#" class="navigation-box2 navigation-box-prev" id="testimonials-owl-prev">
                        <div class="navigation-triangle"></div>
                        <div class="navigation-box-icon2"><i class="jfont">&#xe800;</i></div>
                    </a>
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
                    <div class="title-separator-secondary2"></div>
                </div>
            </div>
        </div>

        <div class="container margin-top-90">
            <div class="row">
                <div class="col-xs-12 owl-carousel" id="testimonials-owl">
                    <div class="testimonial2">
                        <img class="lazy" data-src="{{ asset('public/images/testimonials1b.jpg')}}" alt=""
                            class="testimonials-photo img-circle" />
                        <div class="testimonials2-content">
                            <p class="lead">Smith’s Family</p>
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor
                                sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
                        </div>

                    </div>
                    <div class="testimonial2">
                        <img class="lazy" data-src="{{ asset('public/images/testimonials2b.jpg')}}" alt=""
                            class="testimonials-photo img-circle" />
                        <div class="testimonials2-content">
                            <p class="lead">Meggy Johnson</p>
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor
                                sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
                        </div>
                    </div>
                    <div class="testimonial2">
                        <img class="lazy" data-src="{{ asset('public/images/testimonials3b.jpg')}}" alt=""
                            class="testimonials-photo img-circle" />
                        <div class="testimonials2-content">
                            <p class="lead">Paola Brown &amp; Tommy</p>
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor
                                sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>--}}

    <section class="section-light section-top-shadow">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-12 col-lg-6">
                            <h5 class="subtitle-margin">apartments for sale</h5>
                            <h1>Trending Projects<span class="special-color">.</span></h1>
                        </div>
                        {{--<div class="col-xs-12 col-lg-6">                                            
                                <div class="view-icons-container">
                                    <a class="view-box view-box-active"><img class="lazy" data-src="{{  asset('public/images/grid-icon.png') }}" alt="" /></a>
                        <a class="view-box" href="listing-list-right-sidebar.html"><img class="lazy"
                                data-src="{{  asset('public/images/list-icon.png') }}" alt="" /></a>
                    </div>
                    <div class="order-by-container">
                        <select name="sort" class="bootstrap-select" title="Order By:">
                            <option>Price low to high</option>
                            <option>Price high to low</option>
                            <option>Area high to low</option>
                            <option>Area high to low</option>
                        </select>
                    </div>
                </div>--}}
                <div class="col-xs-12">
                    <div class="title-separator-primary"></div>
                </div>
            </div>
            <div class="row grid-offer-row">


                @php
                $query = "select microsite_detail.latitude,microsite_detail.longitude,microsite_detail.about as aa,
                prop_status.status,prop_type.type,
                microsite.micro_id,microsite.location,microsite.name,microsite_detail.featured_image,
                microsite_detail.builder_id ,microsite_detail.rooms, builder.logo as logo, builder.name as builder_name
                from microsite
                left join microsite_detail on microsite.micro_id=microsite_detail.micro_id
                LEFT JOIN builder on microsite_detail.builder_id =builder.builder_id
                LEFT JOIN prop_status ON prop_status.status_id=microsite_detail.status_id
                LEFT JOIN prop_type on prop_type.type_id=microsite_detail.type_id
                 order by microsite.micro_id DESC limit 8 
                "; //where microsite.micro_id in (122,125,173,347,458,458,312,132,791)
                $query_result = DB::select($query );
                $p=0;
                @endphp

                @foreach($query_result as $querys)
				@php 
				if($querys->aa != ""){
				@endphp
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 grid-offer-col">
                    <div class="grid-offer">
                        <div class="grid-offer-front">
                            <div class="grid-offer-photo">
                                <img class="lazy"
                                    data-src="http://www.mylandmark.info/admin/images/fimage/{{ $querys->featured_image}}"
                                    alt="" style='height:150px'/>
                                <div class="type-container">
                                    <div class="estate-type">{{$querys->type}}</div>
                                    <div class="transaction-type">sale</div>
                                </div>
                            </div>
                            <div class="grid-offer-text">
                                <i class="fa fa-map-marker grid-offer-localization"></i>
                                <div class="grid-offer-h4">
                                    <h4 class="grid-offer-title">{{ ucwords( $querys->name)}} {{--  $querys->location --}} </h4>
                                </div>
                                <div class="clearfix"></div>
                                <p>
                                    {{ strip_tags( substr($querys->aa,0,150),'') }} ...
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                </p>
                                <div class="clearfix"></div>
                            </div>
                            @php

                            $price = " SELECT MIN(`basic_cost`) as `min`, MAX(`basic_cost`) as `max`,MIN(sqft) as
                            min_sqft,MAX(sqft) as max_sqft FROM `price` WHERE `micro_id`=$querys->micro_id";
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
                            <div class="col-sm-12" style="padding:15px 10px">
                                <h4 class="featured-offer-title">{{ ucwords( $querys->name)}} - {{ $querys->location}}
                                </h4>
                                <p class="text-justify">
                                    {{ strip_tags( substr($querys->aa,0,350),'p')}} ...
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
				}
                $p++;
                @endphp

                @endforeach

            </div>

        </div>
        </div>
        </div>
    </section>

    {{--<section class="section-light no-bottom-padding section-top-shadow">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
                    <h5 class="subtitle-margin">hot</h5>
                    <h1>new listings<span class="special-color">.</span></h1>
                </div>
                <div class="col-xs-12 col-sm-3 navigation-box2-cont">
                    <a href="#" class="navigation-box2 navigation-box-next secondary" id="grid-offers-owl-next">
                        <div class="navigation-triangle"></div>
                        <div class="navigation-box-icon2"><i class="jfont">&#xe802;</i></div>
                    </a>
                    <a href="#" class="navigation-box2 navigation-box-prev secondary" id="grid-offers-owl-prev">
                        <div class="navigation-triangle"></div>
                        <div class="navigation-box-icon2"><i class="jfont">&#xe800;</i></div>
                    </a>
                </div>
                <div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
                    <div class="title-separator-primary2"></div>
                </div>
            </div>
        </div>
        <div class="grid-offers-container">
            <div class="owl-carousel" id="grid-offers-owl">
                <div class="grid-offer-col">
                    <div class="grid-offer">
                        <div class="grid-offer-front">
                            <div class="grid-offer-photo">
                                <img class="lazy" data-src="{{ asset('public/images/grid-offer1.jpg')}}" alt="" />
                                <div class="type-container">
                                    <div class="estate-type">apartment</div>
                                    <div class="transaction-type">sale</div>
                                </div>
                            </div>
                            <div class="grid-offer-text">
                                <i class="fa fa-map-marker grid-offer-localization"></i>
                                <div class="grid-offer-h4">
                                    <h4 class="grid-offer-title">34 Fort Collins, Colorado 80523, USA</h4>
                                </div>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et [...]</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="price-grid-cont">
                                <div class="grid-price-label pull-left">Price:</div>
                                <div class="grid-price pull-right">
                                    $ 320 000
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="grid-offer-params">
                                <div class="grid-area">
                                    <img class="lazy" data-src="{{ asset('public/images/area-icon.png')}}"
                                        alt="" />54m<sup>2</sup>
                                </div>
                                <div class="grid-rooms">
                                    <img class="lazy" data-src="{{ asset('public/images/rooms-icon.png')}}" alt="" />3
                                </div>
                                <div class="grid-baths">
                                    <img class="lazy" data-src="{{ asset('public/images/bathrooms-icon.png')}}"
                                        alt="" />1
                                </div>
                            </div>

                        </div>
                        <div class="grid-offer-back">
                            <div id="grid-map1" class="grid-offer-map"></div>
                            <div class="button">
                                <a href="estate-details-right-sidebar.html" class="button-primary">
                                    <span>read more</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="fa fa-search"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-offer-col">
                    <div class="grid-offer">
                        <div class="grid-offer-front">
                            <div class="grid-offer-photo">
                                <img class="lazy" data-src="{{ asset('public/images/grid-offer2.jpg')}}" alt="" />
                                <div class="type-container">
                                    <div class="estate-type">apartment</div>
                                    <div class="transaction-type">sale</div>
                                </div>
                            </div>
                            <div class="grid-offer-text">
                                <i class="fa fa-map-marker grid-offer-localization"></i>
                                <div class="grid-offer-h4">
                                    <h4 class="grid-offer-title">West Fourth Street, New York 10003, USA</h4>
                                </div>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et [...]</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="price-grid-cont">
                                <div class="grid-price-label pull-left">Price:</div>
                                <div class="grid-price pull-right">
                                    $ 299 000
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="grid-offer-params">
                                <div class="grid-area">
                                    <img class="lazy" data-src="{{ asset('public/images/area-icon.png')}}"
                                        alt="" />48m<sup>2</sup>
                                </div>
                                <div class="grid-rooms">
                                    <img class="lazy" data-src="{{ asset('public/images/rooms-icon.png')}}" alt="" />2
                                </div>
                                <div class="grid-baths">
                                    <img class="lazy" data-src="{{ asset('public/images/bathrooms-icon.png')}}"
                                        alt="" />1
                                </div>
                            </div>
                        </div>
                        <div class="grid-offer-back">
                            <div id="grid-map2" class="grid-offer-map"></div>
                            <div class="button">
                                <a href="estate-details-right-sidebar.html" class="button-primary">
                                    <span>read more</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="fa fa-search"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-offer-col">
                    <div class="grid-offer">
                        <div class="grid-offer-front">
                            <div class="grid-offer-photo">
                                <img class="lazy" data-src="{{ asset('public/images/grid-offer3.jpg')}}" alt="" />
                                <div class="type-container">
                                    <div class="estate-type">apartment</div>
                                    <div class="transaction-type">sale</div>
                                </div>
                            </div>
                            <div class="grid-offer-text">
                                <i class="fa fa-map-marker grid-offer-localization"></i>
                                <div class="grid-offer-h4">
                                    <h4 class="grid-offer-title">E. Elwood St. Phoenix, AZ 85034, USA</h4>
                                </div>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et [...]</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="price-grid-cont">
                                <div class="grid-price-label pull-left">Price:</div>
                                <div class="grid-price pull-right">
                                    $ 400 000
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="grid-offer-params">
                                <div class="grid-area">
                                    <img class="lazy" data-src="{{ asset('public/images/area-icon.png')}}"
                                        alt="" />93m<sup>2</sup>
                                </div>
                                <div class="grid-rooms">
                                    <img class="lazy" data-src="{{ asset('public/images/rooms-icon.png')}}" alt="" />4
                                </div>
                                <div class="grid-baths">
                                    <img class="lazy" data-src="{{ asset('public/images/bathrooms-icon.png')}}"
                                        alt="" />2
                                </div>
                            </div>
                        </div>
                        <div class="grid-offer-back">
                            <div id="grid-map3" class="grid-offer-map"></div>
                            <div class="button">
                                <a href="estate-details-right-sidebar.html" class="button-primary">
                                    <span>read more</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="fa fa-search"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-offer-col">
                    <div class="grid-offer">
                        <div class="grid-offer-front">
                            <div class="grid-offer-photo">
                                <img class="lazy" data-src="{{ asset('public/images/grid-offer4.jpg')}}" alt="" />
                                <div class="type-container">
                                    <div class="estate-type">house</div>
                                    <div class="transaction-type">sale</div>
                                </div>
                            </div>
                            <div class="grid-offer-text">
                                <i class="fa fa-map-marker grid-offer-localization"></i>
                                <div class="grid-offer-h4">
                                    <h4 class="grid-offer-title">N. Willamette Blvd., Portland, OR 97203, USA</h4>
                                </div>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et [...]</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="price-grid-cont">
                                <div class="grid-price-label pull-left">Price:</div>
                                <div class="grid-price pull-right">
                                    $ 800 000
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="grid-offer-params">
                                <div class="grid-area">
                                    <img class="lazy" data-src="{{ asset('public/images/area-icon.png')}}"
                                        alt="" />300m<sup>2</sup>
                                </div>
                                <div class="grid-rooms">
                                    <img class="lazy" data-src="{{ asset('public/images/rooms-icon.png')}}" alt="" />8
                                </div>
                                <div class="grid-baths">
                                    <img class="lazy" data-src="{{ asset('public/images/bathrooms-icon.png')}}"
                                        alt="" />3
                                </div>
                            </div>
                        </div>
                        <div class="grid-offer-back">
                            <div id="grid-map4" class="grid-offer-map"></div>
                            <div class="button">
                                <a href="estate-details-right-sidebar.html" class="button-primary">
                                    <span>read more</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="fa fa-search"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-offer-col">
                    <div class="grid-offer">
                        <div class="grid-offer-front">
                            <div class="grid-offer-photo">
                                <img class="lazy" data-src="{{ asset('public/images/grid-offer5.jpg')}}" alt="" />
                                <div class="type-container">
                                    <div class="estate-type">apartment</div>
                                    <div class="transaction-type">sale</div>
                                </div>
                            </div>
                            <div class="grid-offer-text">
                                <i class="fa fa-map-marker grid-offer-localization"></i>
                                <div class="grid-offer-h4">
                                    <h4 class="grid-offer-title">One Brookings Drive St. Louis, Missouri 63130, USA</h4>
                                </div>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et [...]</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="price-grid-cont">
                                <div class="grid-price-label pull-left">Price:</div>
                                <div class="grid-price pull-right">
                                    $ 320 000
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="grid-offer-params">
                                <div class="grid-area">
                                    <img class="lazy" data-src="{{ asset('public/images/area-icon.png')}}"
                                        alt="" />50m<sup>2</sup>
                                </div>
                                <div class="grid-rooms">
                                    <img class="lazy" data-src="{{ asset('public/images/rooms-icon.png')}}" alt="" />2
                                </div>
                                <div class="grid-baths">
                                    <img class="lazy" data-src="{{ asset('public/images/bathrooms-icon.png')}}"
                                        alt="" />1
                                </div>
                            </div>
                        </div>
                        <div class="grid-offer-back">
                            <div id="grid-map5" class="grid-offer-map"></div>
                            <div class="button">
                                <a href="estate-details-right-sidebar.html" class="button-primary">
                                    <span>read more</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="fa fa-search"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-offer-col">
                    <div class="grid-offer">
                        <div class="grid-offer-front">
                            <div class="grid-offer-photo">
                                <img class="lazy" data-src="{{ asset('public/images/grid-offer7.jpg')}}" alt="" />
                                <div class="type-container">
                                    <div class="estate-type">house</div>
                                    <div class="transaction-type">sale</div>
                                </div>
                            </div>
                            <div class="grid-offer-text">
                                <i class="fa fa-map-marker grid-offer-localization"></i>
                                <div class="grid-offer-h4">
                                    <h4 class="grid-offer-title">One Neumann Drive Aston, Philadelphia 19014, USA</h4>
                                </div>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et [...]</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="price-grid-cont">
                                <div class="grid-price-label pull-left">Price:</div>
                                <div class="grid-price pull-right">
                                    $ 500 000
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="grid-offer-params">
                                <div class="grid-area">
                                    <img class="lazy" data-src="{{ asset('public/images/area-icon.png')}}"
                                        alt="" />210m<sup>2</sup>
                                </div>
                                <div class="grid-rooms">
                                    <img class="lazy" data-src="{{ asset('public/images/rooms-icon.png')}}" alt="" />6
                                </div>
                                <div class="grid-baths">
                                    <img class="lazy" data-src="{{ asset('public/images/bathrooms-icon.png')}}"
                                        alt="" />2
                                </div>
                            </div>
                        </div>
                        <div class="grid-offer-back">
                            <div id="grid-map6" class="grid-offer-map"></div>
                            <div class="button">
                                <a href="estate-details-right-sidebar.html" class="button-primary">
                                    <span>read more</span>
                                    <div class="button-triangle"></div>
                                    <div class="button-triangle2"></div>
                                    <div class="button-icon"><i class="fa fa-search"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}

    {{--<section class="section-dark">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-12 text-center">
                    <h5 class="subtitle-margin">latest from</h5>
                    <h1 class="">our blog<span class="special-color">.</span></h1>
                </div>

                <div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
                    <div class="title-separator-primary2"></div>
                </div>
            </div>
        </div>
        <div class="container margin-top-60">
            <div class="row">
                <div class="col-xs-12">
                    <div class="masonry-grid">
                        <!-- width of .grid-sizer used for columnWidth -->
                        <div class="masonry-grid-sizer"></div>
                        <article class="masonry-grid-item masonry-grid-item-big big-blog-grid2-item zoom-cont">
                            <figure><a href="blog-right-sidebar.html"><img
                                        src="{{ asset('public/images/big-blog-grid2.jpg')}}" alt="" class="zoom" /></a>
                            </figure>
                            <div class="blog-grid2-post-content">
                                <a href="blog-right-sidebar.html" class="blog-grid1-title">
                                    <h4>It’s much cheaper to buy than to rent</h4>
                                </a>
                                <div class="blog-grid2-separator"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et.</p>
                                <div class="blog-grid2-bottom">
                                    <div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
                                    <div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </article>
                        <article class="masonry-grid-item blog-grid2-item zoom-cont">
                            <figure><a href="blog-right-sidebar.html"><img
                                        src="{{ asset('public/images/blog-grid2a.jpg')}}" alt="" class="zoom" /></a>
                            </figure>
                            <div class="blog-grid2-post-content">
                                <a href="blog-right-sidebar.html" class="blog-grid1-title">
                                    <h4>Home prices are rising, hitting record levels</h4>
                                </a>
                                <div class="blog-grid2-separator"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                <div class="blog-grid2-bottom">
                                    <div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
                                    <div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </article>
                        <article class="masonry-grid-item blog-grid2-item zoom-cont">
                            <figure><a href="blog-right-sidebar.html"><img
                                        src="{{ asset('public/images/blog-grid2b.jpg')}}" alt="" class="zoom" /></a>
                            </figure>
                            <div class="blog-grid2-post-content">
                                <a href="blog-right-sidebar.html" class="blog-grid1-title">
                                    <h4>Real Estate Trends to Watch in 2015</h4>
                                </a>
                                <div class="blog-grid2-separator"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et.</p>
                                <div class="blog-grid2-bottom">
                                    <div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
                                    <div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </article>
                        <article class="masonry-grid-item blog-grid2-item zoom-cont">
                            <figure><a href="blog-right-sidebar.html"><img
                                        src="{{ asset('public/images/blog-grid2c.jpg')}}" alt="" class="zoom" /></a>
                            </figure>
                            <div class="blog-grid2-post-content">
                                <a href="blog-right-sidebar.html" class="blog-grid1-title">
                                    <h4>Mortgage rates are still low, but hurry up</h4>
                                </a>
                                <div class="blog-grid2-separator"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et.</p>
                                <div class="blog-grid2-bottom">
                                    <div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
                                    <div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </article>
                        <article class="masonry-grid-item blog-grid2-item zoom-cont">
                            <figure><a href="blog-right-sidebar.html"><img
                                        src="{{ asset('public/images/blog-grid2d.jpg')}}" alt="" class="zoom" /></a>
                            </figure>
                            <div class="blog-grid2-post-content">
                                <a href="blog-right-sidebar.html" class="blog-grid1-title">
                                    <h4>Why the recovery is going so slowly?</h4>
                                </a>
                                <div class="blog-grid2-separator"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et.</p>
                                <div class="blog-grid2-bottom">
                                    <div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
                                    <div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </article>
                        <article class="masonry-grid-item blog-grid2-item zoom-cont">
                            <figure><a href="blog-right-sidebar.html"><img
                                        src="{{ asset('public/images/blog-grid2e.jpg')}}" alt="" class="zoom" /></a>
                            </figure>
                            <div class="blog-grid2-post-content">
                                <a href="blog-right-sidebar.html" class="blog-grid1-title">
                                    <h4>Apartment Building Investment Loan Rate</h4>
                                </a>
                                <div class="blog-grid2-separator"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et.</p>
                                <div class="blog-grid2-bottom">
                                    <div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
                                    <div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </article>
                        <article class="masonry-grid-item blog-grid2-item zoom-cont">
                            <figure><a href="blog-right-sidebar.html"><img
                                        src="{{ asset('public/images/blog-grid2f.jpg')}}" alt="" class="zoom" /></a>
                            </figure>
                            <div class="blog-grid2-post-content">
                                <a href="blog-right-sidebar.ht  ml" class="blog-grid1-title">
                                    <h4>51% people with a mortgage can’t afford to move</h4>
                                </a>
                                <div class="blog-grid2-separator"></div>
                                <p>Lorem ipsum dolor sit amet.</p>
                                <div class="blog-grid2-bottom">
                                    <div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
                                    <div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    @include('footer')

    <script type="text/javascript" class="js-code-placeholder">
	
		$(document).ready(function() {
		  $(".js-select2").select2();
		  $(".js-select2-multi").select2();

		  $(".large").select2({
			dropdownCssClass: "big-drop",
          });
          $('.tt ,#adv-search-hide').hide();
            $('.adv-search-form .row2').hide();
            
            $('.adv-search-form .select2').click(function () {
            $('.adv-search-form .row2').show();
            });
        });
		
		$(function() {
			var minPriceInRupees = 0;
			var maxPriceInRupees = 10000000;
			var currentMinValue = 0;
			var currentMaxValue = 5000000;
			
			$( "#slider-range-price1" ).slider({				
				range: true,
				min: minPriceInRupees,
				max: maxPriceInRupees,
				values: [ currentMinValue, currentMaxValue ],
				slide: function( event, ui ) {
					$( "#slider-range-price1-value" ).val( "RS " + ui.values[ 0 ] + " - RS " + ui.values[ 1 ] );
					currentMinValue = ui.values[ 0 ];
					currentMaxValue = ui.values[ 1 ];
				},
				stop: function( event, ui ) {
					currentMinValue = ui.values[ 0 ];
					currentMaxValue = ui.values[ 1 ];
					$( "#min_price" ).val(ui.values[ 0 ]);
					$( "#max_price" ).val(ui.values[ 1 ]);
					//alert('currentMinValue = '+currentMinValue+' currentMaxValue = '+currentMaxValue);
				}
			});

			$( "#slider-range-price1-value" ).val( "RS " + $( "#slider-range-price1" ).slider( "values", 0 ) + " - RS " + $( "#slider-range-price1" ).slider( "values", 1 ));
		});
        
    </script>