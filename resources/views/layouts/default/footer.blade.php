 <div class="banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-content">
                            <h4>Are you looking for professional Cleaning Services for your House?</h4>
                            <div class="banner-contact">
                                <span class="call-us"><i class="icon icon-phone-handset"></i>Call us:  +1313-4325432 </span><span>Or</span>
                                <a class="banner-btn" href="{{ route('contacts',$contact->id)}}">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<footer class="footer-1">
            <div class="footer-area area-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12">
							<div class="footer-content">
								<div class="footer-head">
									<div class="footer-logo">
										<a href="#"><img src="{{ asset('uploads/images/'.$setting->logo )}}" alt=""></a>
									</div>
									<p>We help agencies to define their new business objectives and then create the road map to get them there by devising a business.We help agencies to define their new business.</p>

									<div class="footer-contacts">
										<p><span>Tel:</span> {!!$setting->phone!!}</p>
                                        <p><span>Email:</span> {!!$setting->email!!}</p>
                                        <p><span>Location:</span> {!!$setting->address!!}</p>
									</div>
								</div>
							</div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Services Link</h4>
                                    <div class="footer-services-link">
                                    	<ul class="footer-list">
											<li><a href="#">Apartment</a></li>
                                            <li><a href="#">Commercial </a></li>
                                            <li><a href="#">Residential</a></li>
                                            <li><a href="#">Move in </a></li>
                                            <li><a href="#">Move out</a></li>
										</ul>
										<ul class="footer-list hidden-sm">
											<li><a href="#">Window Cleaning</a></li>
                                            <li><a href="#">Maid Services</a></li>
                                            <li><a href="#">Carpet </a></li>
                                            <li><a href="#">Garden </a></li>
                                            <li><a href="#">Bedroom </a></li>
										</ul>
                                    </div>
                                    <div class="footer-icons">
                                        <h5>Follow us</h5>
										<ul>
											<li>
												<a href="{!!$setting->facebook!!}">
													<i class="fa fa-facebook"></i>
												</a>
											</li>
											<li>
												<a href="{!!$setting->twitter!!}">
													<i class="fa fa-twitter"></i>
												</a>
											</li>
											<li>
												<a href="{!!$setting->google!!}">
													<i class="fa fa-google"></i>
												</a>
											</li>
											<li>
												<a href="{!!$setting->twitter!!}">
													<i class="fa fa-pinterest"></i>
												</a>
											</li>
											<li>
												<a href="{!!$setting->twitter!!}">
													<i class="fa fa-instagram"></i>
												</a>
											</li>
										</ul>
									</div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Subscribe</h4>
                                    <p>
                                        We help agencies to define their new business objectives and then create the road map to get them there by devising a business.
                                    </p>
                                    <div class="subs-feilds">
                                        <div class="suscribe-input">
                                            <input type="email" class="email form-control width-80" id="sus_email" placeholder="Type Email">
                                            <button type="submit" id="sus_submit" class="add-btn">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                    </div>
                </div>
            </div>
            <!-- End footer area -->
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>
                                  {{$setting->copyright_text}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
		
		
		<!-- all js here -->

		<!-- jquery latest version -->
		<script src="{{ asset('assets') }}/js/vendor/jquery-1.12.4.min.js"></script>
		<!-- bootstrap js -->
		<script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
		<script src="{{ asset('assets') }}/js/owl.carousel.min.js"></script>
		<!-- Counter js -->
		<script src="{{ asset('assets') }}/js/jquery.counterup.min.js"></script>
		<!-- waypoint js -->
		<script src="{{ asset('assets') }}/js/waypoints.js"></script>
		<!-- isotope js -->
        <script src="{{ asset('assets') }}/js/isotope.pkgd.min.js"></script>
        <!-- stellar js -->
        <script src="{{ asset('assets') }}/js/jquery.stellar.min.js"></script>
		<!-- magnific js -->
        <script src="{{ asset('assets') }}/js/magnific.min.js"></script>
		<!-- venobox js -->
		<script src="{{ asset('assets') }}/js/venobox.min.js"></script>
        <!-- meanmenu js -->
        <script src="{{ asset('assets') }}/js/jquery.meanmenu.js"></script>
		<!-- Form validator js -->
		{{-- <script src="{{ asset('assets') }}/js/form-validator.min.js"></script> --}}
		<!-- plugins js -->
		<script src="{{ asset('assets') }}/js/plugins.js"></script>
		<!-- main js -->
		<script src="{{ asset('assets') }}/js/main.js"></script>
	</body>

</html>