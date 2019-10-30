<footer class="large-cont">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-lg-3">
					<h4 class="second-color">contact us<span class="special-color">.</span></h4>
					<div class="footer-title-separator"></div>
					<p class="footer-p"></p>
					<address style="padding-top:0px;">
						<span><i class="fa fa-map-marker"></i>#252, 4th floor, V.K Pride Building,<br/> 14th Main, Sector 7, HSR Layout,<br />Bengaluru, Karnataka</span>
						<div class="footer-separator"></div>
						<span><i class="fa fa-envelope fa-sm"></i><a href="mailto:response@realtyfocus.info">response@realtyfocus.info</a></span>
						<div class="footer-separator"></div>
						<span><i class="fa fa-phone"></i>+91-8880564488</span>
					</address>
					<div class="clear"></div>
				</div>
				<div class="col-xs-6 col-sm-6 col-lg-2">
					<h4 class="second-color">quick links<span class="special-color">.</span></h4>
					<div class="footer-title-separator"></div>
					<ul class="footer-ul">
						<li><span class="custom-ul-bullet"></span><a href="{{ url('/')}}" class="dropdown-toggle">Home</a></li>
						<li><span class="custom-ul-bullet"></span><a href="{{ url('/about')}}" class="dropdown-toggle" >About Us</a></li>
						<li><span class="custom-ul-bullet"></span><a href="{{ url('/project')}}" class="dropdown-toggle">Projects</a></li>
						<li><span class="custom-ul-bullet"></span><a href="{{ url('/builder')}}" class="dropdown-toggle">Builders</a></li>
						<li><span class="custom-ul-bullet"></span><a href="{{ url('/contact')}}" class="dropdown-toggle">Contact Us</a></li>
						
					</ul>
				</div>
				<div class="col-xs-6 col-sm-6 col-lg-3">
					<h4 class="second-color">Follow<span class="special-color">.</span></h4>
					<div class="footer-title-separator"></div>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<ul class="footer-ul">
								<li><span class="custom-ul-bullet"></span>
								<a class="link" data-bypass="true" href="#" target="_blank" rel="nofollow">Facebook</a>
								</li>
								<li><span class="custom-ul-bullet"></span>
								<a class="link" data-bypass="true" href="#" target="_blank" rel="nofollow">Twitter</a>
								</li>
								<li><span class="custom-ul-bullet"></span>
								<a class="link" data-bypass="true" href="#" target="_blank" rel="nofollow">LinkedIn</a>
								</li>
								<li><span class="custom-ul-bullet"></span>
								<a class="link" data-bypass="true" href="#" rel="nofollow" target="_blank">Google+</a>
								</li>
							</ul>
						</div>
						<div class="col-md-6 col-sm-6">
							<ul class="footer-ul">
								<li><span class="custom-ul-bullet"></span>
								<a class="link" data-bypass="true" href="#" rel="nofollow" target="_blank">Instagram</a>
								</li>
								<li><span class="custom-ul-bullet"></span>
								<a class="link" data-bypass="true" href="#" rel="nofollow" target="_blank">Pinterest</a>
								</li>
								<li><span class="custom-ul-bullet"></span>
								<a class="link" data-bypass="true" href="#" rel="nofollow" target="_blank">Youtube</a>
								</li>
							</ul>
						</div>
						{{-- <div class="col-xs-6 col-sm-12">
							<article>
								<a href="blog-right-sidebar.html"><img src="{{ asset('public/images/footer-blog1.jpg')}}" alt=""
										class="footer-blog-image" /></a>
								<div class="footer-blog-title"><a href="blog-right-sidebar.html">This post title, lorem ipsum dolor
										sit</a></div>
								<div class="footer-blog-date"><i class="fa fa-calendar-o"></i>28/09/15</div>
								<div class="clearfix"></div>
							</article>
							<div class="footer-blog-separator hidden-xs"></div>
						</div>
						<div class="col-xs-6 col-sm-12">
							<article>
								<a href="blog-right-sidebar.html"><img src="{{ asset('public/images/footer-blog2.jpg')}}" alt=""
										class="footer-blog-image" /></a>
								<div class="footer-blog-title"><a href="blog-right-sidebar.html">This post title, lorem ipsum dolor
										sit</a></div>
								<div class="footer-blog-date"><i class="fa fa-calendar-o"></i>28/09/15</div>
								<div class="clearfix"></div>
							</article>
						</div>--}} 
						
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-lg-4">
					<h4 class="second-color">Contact Us<span class="special-color">.</span></h4>
					<div class="footer-title-separator"></div>
					<div id="footerSuccessMsg" class='footerSuccessMsg' style="margin-left: 15px;margin-bottom: 15px;margin-top: -33px;"></div><!-- End notification -->
					<form action="" id="footerform">
						<div id="fields">
							<div class="col-md-6">
								<div class="b-form-row">
									<div class="b-form-vertical__input">
										<input type="text" id="name" name="name" placeholder='Name' class="form-control">
										<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="b-form-row">
									<div class="b-form-vertical__input">
										<input type="email" id="email1" name="email" placeholder='Email' class="form-control">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="b-form-row">
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
									<div class="b-form-vertical__input">
										<input type="text" id="phone" class="form-control" placeholder='Phone' name="phone">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="b-form-row b-form--contact-size">
									<textarea name="msg" id="msg" class="form-control" height="162px" rows="3" placeholder='Message' style="margin-bottom: 5px;height: 70px;"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="g-recaptcha" data-sitekey="6LevorwUAAAAALHPfgCFcRvTUUN6_k_fPDmIEFNS" style="transform:scale(0.86);-webkit-transform:scale(0.86);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
							</div>
							<div class="clearfix col-md-6 col-xs-12 ">
								<div class="b-form-row">
									<button class="btn btn-primary" id="captchabtn">Submit</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
    </footer>
	<footer class="small-cont">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6 small-cont">
					<img src="{{ asset('public/images/footer-logo.png')}}" alt="" class="img-responsive footer-logo" style='width: 15%;' />
				</div>
				<div class="col-xs-12 col-md-6 footer-copyrights">
					&copy; Copyright 2017 Realty Focus. All Rights reserved.
				</div>
			</div>
		</div>
	</footer>
</div>	

	<!-- Move to top button -->

	<div class="move-top">
		<div class="big-triangle-second-color"></div>
		<div class="big-icon-second-color"><i class="jfont fa-lg">&#xe803;</i></div>
	</div>	