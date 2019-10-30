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

    @include('header')
	

    <section class="no-padding adv-search-section">
		<!-- Slider main container -->
		<div id="swiper2" class="swiper-container">
                    <div class="container swiper2-navigation">
                        <div class="row">
                            <div class="col-xs-2">
                                <a href="#" class="navigation-box2 navigation-box-prev slide-prev"><div class="navigation-triangle"></div><div class="navigation-box-icon2"><i class="jfont">&#xe800;</i></div></a>
                            </div>
                            <div class="col-xs-2 col-xs-offset-8">
                                <a href="#" class="navigation-box2 navigation-box-next slide-next"><div class="navigation-triangle"></div><div class="navigation-box-icon2"><i class="jfont">&#xe802;</i></div></a>
                            </div>
			</div>
                    </div>
		<!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
			<!-- Slides -->
				<div class="swiper-slide swiper-lazy" data-background="{{ asset('public/images/slides/1.jpg')}}">
					<div class="container">
                        <div class="row">
							<div class="col-xs-8 col-xs-offset-2 animated fadeInDown slide2-desc slide2-desc-1">
								<h1 class="second-color">Fort Collins, Colorado 80523<span class="special-color">.</span></h1>
								<div class="clearfix"></div>									
							
								<div class="swiper2-buttons margin-top-45">
									<div class="swiper2-price-button">$320 000</div>
									
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
					<div class="slider-overlay"></div>
				</div>
				<div class="swiper-slide swiper-lazy" data-background="{{ asset('public/images/slides/2.jpg')}}">
					<div class="container">
                        <div class="row">
							<div class="col-xs-8 col-xs-offset-2 animated slide2-desc slide2-desc-2">
								<h1 class="second-color">West Fourth Street, New York 10003<span class="special-color">.</span></h1>
								<div class="clearfix"></div>									
								
								<div class="swiper2-buttons margin-top-45">
									<div class="swiper2-price-button">$550 000</div>
									
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
					<div class="slider-overlay"></div>
					<div class="video-slide">
                        <video poster="{{ asset('public/images/slides/2.jpg')}}" preload="auto" loop autoplay muted>
                             <source src="{{ asset('public/images/slides/2.mp4')}}" type='video/mp4' />
                        </video>
                    </div>
				</div>
				<div class="swiper-slide swiper-lazy" data-background="{{ asset('public/images/slides/3.jpg')}}">
					<div class="container">
                        <div class="row">
							<div class="col-xs-8 col-xs-offset-2 animated slide2-desc slide2-desc-3">
								<h1 class="second-color">E. Elwood St. Phoenix, AZ 85034<span class="special-color">.</span></h1>
								<div class="clearfix"></div>									
								
								<div class="swiper2-buttons margin-top-45">
									<div class="swiper2-price-button">$395 000</div>
									
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
					<div class="slider-overlay"></div>
				</div>
			</div>
		</div>

		<form class="simple-search-form" action="#">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="simple-search-cont">
							<select name="transaction1" class="bootstrap-select" title="Transaction:" multiple>				
								<option>For sale</option>
								<option>For rent</option>
							</select>
							<input type="text" name="simple-search" class="simple-search-input" placeholder="... Write localization, eg. New York ..." />
							<a href="estate-details-right-sidebar.html" class="button-primary pull-right">
								<span>search</span>
								<div class="button-triangle"></div>
								<div class="button-triangle2"></div>
								<div class="button-icon"><i class="fa fa-search"></i></div>
							</a>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>		
		</form>
    </section>
	
    <section class="section-light bottom-padding-45 section-both-shadow">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-4">
					<div class="feature2 wow fadeInLeft" id="feature1">
						<div class="feature2-icon"><i class="fa fa-building"></i></div>
						<div class="feature2-text">
							<h4>PIXEL PERFECT DESIGN<span class="special-color">.</span></h4>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
						</div>
					</div>
				</div>			
				<div class="col-sm-6 col-lg-4">
					<div class="feature2 wow fadeInUp" id="feature2">
						<div class="feature2-icon"><i class="fa fa-home"></i></div>
						<div class="feature2-text">
							<h4>50 HTML FILES<span class="special-color">.</span></h4>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
						</div>
					</div>
				</div>			
				<div class="col-sm-6 col-lg-4">
					<div class="feature2 wow fadeInRight" id="feature3">
						<div class="feature2-icon"><i class="fa fa-industry"></i></div>
						<div class="feature2-text">
							<h4>MASONRY, LIST &amp; GRID<span class="special-color">.</span></h4>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
						</div>
					</div>
				</div>			
				<div class="col-sm-6 col-lg-4">
					<div class="feature2 wow fadeInLeft" id="feature4">
						<div class="feature2-icon"><i class="fa fa-tree"></i></div>
						<div class="feature2-text">
							<h4>MODERN CLEAN PROJECT<span class="special-color">.</span></h4>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="feature2 wow fadeInUp" id="feature5">
						<div class="feature2-icon"><i class="fa fa-gears"></i></div>
						<div class="feature2-text">
							<h4>3 BLOG STYLES<span class="special-color">.</span></h4>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
						</div>
					</div>
				</div>			
				<div class="col-sm-6 col-lg-4">
					<div class="feature2 wow fadeInRight" id="feature6">
						<div class="feature2-icon"><i class="fa fa-pie-chart"></i></div>
						<div class="feature2-text">
							<h4>6 HOMEPAGES<span class="special-color">.</span></h4>
							
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut.</p>
						</div>
					</div>
				</div>			
			</div>
		</div>
    </section>

    <section class="featured-offers parallax">
		
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
					<h5 class="subtitle-margin second-color">highly recommended</h5>
							<h1 class="second-color">featured offers<span class="special-color">.</span></h1>
				</div>
				<div class="col-xs-12 col-sm-3 navigation-box2-cont">
					<a href="#" class="navigation-box2 navigation-box-next" id="featured-offers-owl-next"><div class="navigation-triangle"></div><div class="navigation-box-icon2"><i class="jfont">&#xe802;</i></div></a>
					<a href="#" class="navigation-box2 navigation-box-prev" id="featured-offers-owl-prev"><div class="navigation-triangle"></div><div class="navigation-box-icon2"><i class="jfont">&#xe800;</i></div></a>								
				</div>
				<div class="col-xs-8 col-xs-offset-2 col-sm-offset-4 col-sm-4">
					<div class="title-separator-secondary2"></div>
				</div>
			</div>
		</div>
		<div class="featured-offers-container">
			<div class="owl-carousel" id="featured-offers-owl">
				<div class="featured-offer-col">
					<div class="featured-offer-front">
						<div class="featured-offer-photo">
							<img src="{{ asset('public/images/featured-offer1.jpg')}}" alt="" />
							<div class="type-container">
								<div class="estate-type">apartment</div>
								<div class="transaction-type">sale</div>
							</div>
						</div>
						<div class="featured-offer-text">
							<h4 class="featured-offer-title">250 South Dr, Fort Collins, Colorado 80523, USA</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						<div class="featured-offer-params">
							<div class="featured-area">
								<img src="{{ asset('public/images/area-icon.png')}}" alt="" />54m<sup>2</sup>
							</div>
							<div class="featured-rooms">
								<img src="{{ asset('public/images/rooms-icon.png')}}" alt="" />3
							</div>
							<div class="featured-baths">
								<img src="{{ asset('public/images/bathrooms-icon.png')}}" alt="" />1
							</div>							
						</div>
						<div class="featured-price">
							$ 320 000
						</div>
					</div>
					<div class="featured-offer-back">
						<div id="featured-map1" class="featured-offer-map"></div>
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
				<div class="featured-offer-col">
					<div class="featured-offer-front">
						<div class="featured-offer-photo">
							<img src="{{ asset('public/images/featured-offer2.jpg')}}" alt="" />
							<div class="type-container">
								<div class="estate-type">apartment</div>
								<div class="transaction-type">sale</div>
							</div>
						</div>
						<div class="featured-offer-text">
							<h4 class="featured-offer-title">West Fourth Street, New York 10003, USA</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						<div class="featured-offer-params">
							<div class="featured-area">
								<img src="{{ asset('public/images/area-icon.png')}}" alt="" />70m<sup>2</sup>
							</div>
							<div class="featured-rooms">
								<img src="{{ asset('public/images/rooms-icon.png')}}" alt="" />4
							</div>
							<div class="featured-baths">
								<img src="{{ asset('public/images/bathrooms-icon.png')}}" alt="" />1
							</div>							
						</div>
						<div class="featured-price">
							$ 350 000
						</div>
					</div>
					<div class="featured-offer-back">
						<div id="featured-map2" class="featured-offer-map"></div>
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
				<div class="featured-offer-col">
					<div class="featured-offer-front">
						<div class="featured-offer-photo">
							<img src="{{ asset('public/images/featured-offer3.jpg')}}" alt="" />
							<div class="type-container">
								<div class="estate-type">house</div>
								<div class="transaction-type">sale</div>
							</div>
						</div>
						<div class="featured-offer-text">
							<h4 class="featured-offer-title">500 E. Elwood St. Phoenix, AZ 85034, USA</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						<div class="featured-offer-params">
							<div class="featured-area">
								<img src="{{ asset('public/images/area-icon.png')}}" alt="" />250m<sup>2</sup>
							</div>
							<div class="featured-rooms">
								<img src="{{ asset('public/images/rooms-icon.png')}}" alt="" />7
							</div>
							<div class="featured-baths">
								<img src="{{ asset('public/images/bathrooms-icon.png')}}" alt="" />3
							</div>							
						</div>
						<div class="featured-price">
							$ 650 000
						</div>
					</div>
					<div class="featured-offer-back">
						<div id="featured-map3" class="featured-offer-map"></div>
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
				<div class="featured-offer-col">
					<div class="featured-offer-front">
						<div class="featured-offer-photo">
							<img src="{{ asset('public/images/featured-offer4.jpg')}}" alt="" />
							<div class="type-container">
								<div class="estate-type">apartment</div>
								<div class="transaction-type">sale</div>
							</div>
						</div>
						<div class="featured-offer-text">
							<h4 class="featured-offer-title">N. Willamette Blvd., Portland, OR 97203-5798, USA</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						<div class="featured-offer-params">
							<div class="featured-area">
								<img src="{{ asset('public/images/area-icon.png')}}" alt="" />40m<sup>2</sup>
							</div>
							<div class="featured-rooms">
								<img src="{{ asset('public/images/rooms-icon.png')}}" alt="" />2
							</div>
							<div class="featured-baths">
								<img src="{{ asset('public/images/bathrooms-icon.png')}}" alt="" />1
							</div>							
						</div>
						<div class="featured-price">
							$ 299 000
						</div>
					</div>
					<div class="featured-offer-back">
						<div id="featured-map4" class="featured-offer-map"></div>
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
				<div class="featured-offer-col">
					<div class="featured-offer-front">
						<div class="featured-offer-photo">
							<img src="{{ asset('public/images/featured-offer5.jpg')}}" alt="" />
							<div class="type-container">
								<div class="estate-type">apartment</div>
								<div class="transaction-type">sale</div>
							</div>
						</div>
						<div class="featured-offer-text">
							<h4 class="featured-offer-title">One Brookings Drive St. Louis, Missouri 63130-4899, USA</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						<div class="featured-offer-params">
							<div class="featured-area">
								<img src="{{ asset('public/images/area-icon.png')}}" alt="" />80m<sup>2</sup>
							</div>
							<div class="featured-rooms">
								<img src="{{ asset('public/images/rooms-icon.png')}}" alt="" />3
							</div>
							<div class="featured-baths">
								<img src="{{ asset('public/images/bathrooms-icon.png')}}" alt="" />1
							</div>							
						</div>
						<div class="featured-price">
							$ 390 000
						</div>
					</div>
					<div class="featured-offer-back">
						<div id="featured-map5" class="featured-offer-map"></div>
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
				<div class="featured-offer-col">
					<div class="featured-offer-front">
						<div class="featured-offer-photo">
							<img src="{{ asset('public/images/featured-offer6.jpg')}}" alt="" />
							<div class="type-container">
								<div class="estate-type">apartment</div>
								<div class="transaction-type">sale</div>
							</div>
						</div>
						<div class="featured-offer-text">
							<h4 class="featured-offer-title">One Neumann Drive Aston, Philadelphia 19014-1298, USA</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						<div class="featured-offer-params">
							<div class="featured-area">
								<img src="{{ asset('public/images/area-icon.png')}}" alt="" />54m<sup>2</sup>
							</div>
							<div class="featured-rooms">
								<img src="{{ asset('public/images/rooms-icon.png')}}" alt="" />3
							</div>
							<div class="featured-baths">
								<img src="{{ asset('public/images/bathrooms-icon.png')}}" alt="" />1
							</div>							
						</div>
						<div class="featured-price">
							$ 320 000
						</div>
					</div>
					<div class="featured-offer-back">
						<div id="featured-map6" class="featured-offer-map"></div>
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
				<div class="featured-offer-col">
					<div class="featured-offer-front">
						<div class="featured-offer-photo">
							<img src="{{ asset('public/images/featured-offer7.jpg')}}" alt="" />
							<div class="type-container">
								<div class="estate-type">house</div>
								<div class="transaction-type">sale</div>
							</div>
						</div>
						<div class="featured-offer-text">
							<h4 class="featured-offer-title">200 South Dr, Fort Collins, Colorado 80523, USA</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
						<div class="featured-offer-params">
							<div class="featured-area">
								<img src="{{ asset('public/images/area-icon.png')}}" alt="" />54m<sup>2</sup>
							</div>
							<div class="featured-rooms">
								<img src="{{ asset('public/images/rooms-icon.png')}}" alt="" />3
							</div>
							<div class="featured-baths">
								<img src="{{ asset('public/images/bathrooms-icon.png')}}" alt="" />1
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

				</div>
			</div>
		</div>
    </section>
	
	<section class="team section-light section-both-shadow">
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
							<img src="{{ asset('public/images/agent1.jpg')}}" alt="" />
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
							<img src="{{ asset('public/images/agent2.jpg')}}" alt="" />
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
							<img src="{{ asset('public/images/agent3.jpg')}}" alt="" />
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
							<img src="{{ asset('public/images/agent4.jpg')}}" alt="" />
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
							<img src="{{ asset('public/images/agent5.jpg')}}" alt="" />
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
							<img src="{{ asset('public/images/agent6.jpg')}}" alt="" />
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
	</section>
	
	<section class="testimonials parallax">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
					<h5 class="subtitle-margin second-color">recommendations</h5>
							<h1 class="second-color">our clients say<span class="special-color">.</span></h1>
				</div>
				<div class="col-xs-12 col-sm-3 navigation-box2-cont">
					<a href="#" class="navigation-box2 navigation-box-next" id="testimonials-owl-next"><div class="navigation-triangle"></div><div class="navigation-box-icon2"><i class="jfont">&#xe802;</i></div></a>
					<a href="#" class="navigation-box2 navigation-box-prev" id="testimonials-owl-prev"><div class="navigation-triangle"></div><div class="navigation-box-icon2"><i class="jfont">&#xe800;</i></div></a>
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
							<img src="{{ asset('public/images/testimonials1b.jpg')}}" alt="" class="testimonials-photo img-circle" />	
							<div class="testimonials2-content">							
								<p class="lead">Smith’s Family</p>
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
							</div>

						</div>
						<div class="testimonial2">
							<img src="{{ asset('public/images/testimonials2b.jpg')}}" alt="" class="testimonials-photo img-circle" />	
							<div class="testimonials2-content">
								<p class="lead">Meggy Johnson</p>
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>						
							</div>
						</div>
						<div class="testimonial2">
							<img src="{{ asset('public/images/testimonials3b.jpg')}}" alt="" class="testimonials-photo img-circle" />
							<div class="testimonials2-content">
								<p class="lead">Paola Brown &amp; Tommy</p>
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
							</div>
						</div>
					</div>
				</div>
			</div>

	</section>
	
	<section class="section-light no-bottom-padding section-top-shadow">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
					<h5 class="subtitle-margin">hot</h5>
							<h1>new listings<span class="special-color">.</span></h1>
				</div>
				<div class="col-xs-12 col-sm-3 navigation-box2-cont">
					<a href="#" class="navigation-box2 navigation-box-next secondary" id="grid-offers-owl-next"><div class="navigation-triangle"></div><div class="navigation-box-icon2"><i class="jfont">&#xe802;</i></div></a>
					<a href="#" class="navigation-box2 navigation-box-prev secondary" id="grid-offers-owl-prev"><div class="navigation-triangle"></div><div class="navigation-box-icon2"><i class="jfont">&#xe800;</i></div></a>
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
								<img src="{{ asset('public/images/grid-offer1.jpg')}}" alt="" />
								<div class="type-container">
									<div class="estate-type">apartment</div>
									<div class="transaction-type">sale</div>
								</div>
							</div>
							<div class="grid-offer-text">
								<i class="fa fa-map-marker grid-offer-localization"></i>
								<div class="grid-offer-h4"><h4 class="grid-offer-title">34 Fort Collins, Colorado 80523, USA</h4></div>
								<div class="clearfix"></div>
								<p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
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
									<img src="{{ asset('public/images/area-icon.png')}}" alt="" />54m<sup>2</sup>
								</div>
								<div class="grid-rooms">
									<img src="{{ asset('public/images/rooms-icon.png')}}" alt="" />3
								</div>
								<div class="grid-baths">
									<img src="{{ asset('public/images/bathrooms-icon.png')}}" alt="" />1
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
								<img src="{{ asset('public/images/grid-offer2.jpg')}}" alt="" />
								<div class="type-container">
									<div class="estate-type">apartment</div>
									<div class="transaction-type">sale</div>
								</div>
							</div>
							<div class="grid-offer-text">
								<i class="fa fa-map-marker grid-offer-localization"></i>
								<div class="grid-offer-h4"><h4 class="grid-offer-title">West Fourth Street, New York 10003, USA</h4></div>
								<div class="clearfix"></div>
								<p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
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
									<img src="{{ asset('public/images/area-icon.png')}}" alt="" />48m<sup>2</sup>
								</div>
								<div class="grid-rooms">
									<img src="{{ asset('public/images/rooms-icon.png')}}" alt="" />2
								</div>
								<div class="grid-baths">
									<img src="{{ asset('public/images/bathrooms-icon.png')}}" alt="" />1
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
								<img src="{{ asset('public/images/grid-offer3.jpg')}}" alt="" />
								<div class="type-container">
									<div class="estate-type">apartment</div>
									<div class="transaction-type">sale</div>
								</div>
							</div>
							<div class="grid-offer-text">
								<i class="fa fa-map-marker grid-offer-localization"></i>
								<div class="grid-offer-h4"><h4 class="grid-offer-title">E. Elwood St. Phoenix, AZ 85034, USA</h4></div>
								<div class="clearfix"></div>
								<p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
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
									<img src="{{ asset('public/images/area-icon.png')}}" alt="" />93m<sup>2</sup>
								</div>
								<div class="grid-rooms">
									<img src="{{ asset('public/images/rooms-icon.png')}}" alt="" />4
								</div>
								<div class="grid-baths">
									<img src="{{ asset('public/images/bathrooms-icon.png')}}" alt="" />2
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
								<img src="{{ asset('public/images/grid-offer4.jpg')}}" alt="" />
								<div class="type-container">
									<div class="estate-type">house</div>
									<div class="transaction-type">sale</div>
								</div>
							</div>
							<div class="grid-offer-text">
								<i class="fa fa-map-marker grid-offer-localization"></i>
								<div class="grid-offer-h4"><h4 class="grid-offer-title">N. Willamette Blvd., Portland, OR 97203, USA</h4></div>
								<div class="clearfix"></div>
								<p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
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
									<img src="{{ asset('public/images/area-icon.png')}}" alt="" />300m<sup>2</sup>
								</div>
								<div class="grid-rooms">
									<img src="{{ asset('public/images/rooms-icon.png')}}" alt="" />8
								</div>
								<div class="grid-baths">
									<img src="{{ asset('public/images/bathrooms-icon.png')}}" alt="" />3
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
								<img src="{{ asset('public/images/grid-offer5.jpg')}}" alt="" />
								<div class="type-container">
									<div class="estate-type">apartment</div>
									<div class="transaction-type">sale</div>
								</div>
							</div>
							<div class="grid-offer-text">
								<i class="fa fa-map-marker grid-offer-localization"></i>
								<div class="grid-offer-h4"><h4 class="grid-offer-title">One Brookings Drive St. Louis, Missouri 63130, USA</h4></div>
								<div class="clearfix"></div>
								<p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
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
									<img src="{{ asset('public/images/area-icon.png')}}" alt="" />50m<sup>2</sup>
								</div>
								<div class="grid-rooms">
									<img src="{{ asset('public/images/rooms-icon.png')}}" alt="" />2
								</div>
								<div class="grid-baths">
									<img src="{{ asset('public/images/bathrooms-icon.png')}}" alt="" />1
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
								<img src="{{ asset('public/images/grid-offer7.jpg')}}" alt="" />
								<div class="type-container">
									<div class="estate-type">house</div>
									<div class="transaction-type">sale</div>
								</div>
							</div>
							<div class="grid-offer-text">
								<i class="fa fa-map-marker grid-offer-localization"></i>
								<div class="grid-offer-h4"><h4 class="grid-offer-title">One Neumann Drive Aston, Philadelphia 19014, USA</h4></div>
								<div class="clearfix"></div>
								<p>Lorem ipsum dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et [...]</p>
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
									<img src="{{ asset('public/images/area-icon.png')}}" alt="" />210m<sup>2</sup>
								</div>
								<div class="grid-rooms">
									<img src="{{ asset('public/images/rooms-icon.png')}}" alt="" />6
								</div>
								<div class="grid-baths">
									<img src="{{ asset('public/images/bathrooms-icon.png')}}" alt="" />2
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
	</section>
	
	<section class="section-dark">
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
							<figure><a href="blog-right-sidebar.html"><img src="{{ asset('public/images/big-blog-grid2.jpg')}}" alt="" class="zoom" /></a></figure>
							<div class="blog-grid2-post-content">							
								<a href="blog-right-sidebar.html" class="blog-grid1-title"><h4>It’s much cheaper to buy than to rent</h4></a>
								<div class="blog-grid2-separator"></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
								<div class="blog-grid2-bottom">
									<div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
									<div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15</div>
									<div class="clearfix"></div>
								</div>
							</div>	
						</article>
						<article class="masonry-grid-item blog-grid2-item zoom-cont">
							<figure><a href="blog-right-sidebar.html"><img src="{{ asset('public/images/blog-grid2a.jpg')}}" alt="" class="zoom" /></a></figure>
							<div class="blog-grid2-post-content">											
								<a href="blog-right-sidebar.html" class="blog-grid1-title"><h4>Home prices are rising, hitting record levels</h4></a>
								<div class="blog-grid2-separator"></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
								<div class="blog-grid2-bottom">
									<div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
									<div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</article>
						<article class="masonry-grid-item blog-grid2-item zoom-cont">
							<figure><a href="blog-right-sidebar.html"><img src="{{ asset('public/images/blog-grid2b.jpg')}}" alt="" class="zoom" /></a></figure>
							<div class="blog-grid2-post-content">											
								<a href="blog-right-sidebar.html" class="blog-grid1-title"><h4>Real Estate Trends to Watch in 2015</h4></a>
								<div class="blog-grid2-separator"></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
								<div class="blog-grid2-bottom">
									<div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
									<div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</article>
						<article class="masonry-grid-item blog-grid2-item zoom-cont">
							<figure><a href="blog-right-sidebar.html"><img src="{{ asset('public/images/blog-grid2c.jpg')}}" alt="" class="zoom" /></a></figure>
							<div class="blog-grid2-post-content">								
								<a href="blog-right-sidebar.html" class="blog-grid1-title"><h4>Mortgage rates are still low, but hurry up</h4></a>
								<div class="blog-grid2-separator"></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
								<div class="blog-grid2-bottom">
									<div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
									<div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</article>
						<article class="masonry-grid-item blog-grid2-item zoom-cont">
							<figure><a href="blog-right-sidebar.html"><img src="{{ asset('public/images/blog-grid2d.jpg')}}" alt="" class="zoom" /></a></figure>
							<div class="blog-grid2-post-content">				
								<a href="blog-right-sidebar.html" class="blog-grid1-title"><h4>Why the recovery is going so slowly?</h4></a>
								<div class="blog-grid2-separator"></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
								<div class="blog-grid2-bottom">
									<div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
									<div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</article>
						<article class="masonry-grid-item blog-grid2-item zoom-cont">
							<figure><a href="blog-right-sidebar.html"><img src="{{ asset('public/images/blog-grid2e.jpg')}}" alt="" class="zoom" /></a></figure>
							<div class="blog-grid2-post-content">									
								<a href="blog-right-sidebar.html" class="blog-grid1-title"><h4>Apartment Building Investment Loan Rate</h4></a>
								<div class="blog-grid2-separator"></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et.</p>
								<div class="blog-grid2-bottom">
									<div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
									<div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</article>
						<article class="masonry-grid-item blog-grid2-item zoom-cont">
							<figure><a href="blog-right-sidebar.html"><img src="{{ asset('public/images/blog-grid2f.jpg')}}" alt="" class="zoom" /></a></figure>
							<div class="blog-grid2-post-content">							
								<a href="blog-right-sidebar.html" class="blog-grid1-title"><h4>51% people with a mortgage can’t afford to move</h4></a>
								<div class="blog-grid2-separator"></div>
								<p>Lorem ipsum dolor sit amet.</p>
								<div class="blog-grid2-bottom">
									<div class="blog-grid1-author pull-left"><i class="fa fa-user"></i>Admin</div>
									<div class="blog-grid1-date pull-right"><i class="fa fa-calendar-o"></i>28/09/15</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</article>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!--<section class="section-light">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="price-table">
						<div class="price-table-header">
							<h5 class="second-color subtitle-margin">starter</h5>
							<h2 class="second-color">package 1<span class="third-color">.</span></h2>
							<div class="price-table-triangle"></div>
							<div class="price-table-icon">$19</div>
						</div>
						<div class="price-table-body">
							<ul class="price-table-ul">
								<li>Feature</li>
								<li>Some Feature</li>
								<li>Feature</li>
								<li>other Feature</li>
							</ul>
						</div>
						<div class="price-table-footer">
						<div class="price-table-triangle2"></div>
						<a href="#" class="button-primary button-shadow pull-right">
							<span>read more</span>
							<div class="button-triangle"></div>
							<div class="button-triangle2"></div>
							<div class="button-icon"><i class="jfont">&#xe802;</i></div>
						</a>	
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 margin-top-xs-30">
					<div class="price-table price-table-secondary">
						<div class="price-table-header">
							<h5 class="subtitle-margin">starter</h5>
							<h2 class="">package 1<span class="special-color">.</span></h2>
							<div class="price-table-triangle"></div>
							<div class="price-table-icon">$29</div>
						</div>
						<div class="price-table-body">
							<ul class="price-table-ul">
								<li>Feature</li>
								<li>Some Feature</li>
								<li>Feature</li>
								<li>other Feature</li>
								<li>Feature</li>
							</ul>
						</div>
						<div class="price-table-footer">
						<div class="price-table-triangle2"></div>
						<a href="#" class="button-secondary button-shadow pull-right">
							<span>read more</span>
							<div class="button-triangle"></div>
							<div class="button-triangle2"></div>
							<div class="button-icon"><i class="jfont">&#xe802;</i></div>
						</a>	
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-4 margin-top-xs-30 margin-top-sm-30">
					<div class="price-table">
						<div class="price-table-header">
							<h5 class="second-color subtitle-margin">starter</h5>
							<h2 class="second-color">package 1<span class="third-color">.</span></h2>
							<div class="price-table-triangle"></div>
							<div class="price-table-icon">$49</div>
						</div>
						<div class="price-table-body">
							<ul class="price-table-ul">
								<li>Feature</li>
								<li>Some Feature</li>
								<li>Feature</li>
								<li>other Feature</li>
								<li>Feature</li>
								<li>other Feature</li>
							</ul>
						</div>
						<div class="price-table-footer">
						<div class="price-table-triangle2"></div>
						<a href="#" class="button-primary button-shadow pull-right">
							<span>read more</span>
							<div class="button-triangle"></div>
							<div class="button-triangle2"></div>
							<div class="button-icon"><i class="jfont">&#xe802;</i></div>
						</a>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>-->
		@include('footer')