@include('layouts.default.header')
<body>
<div class="boxed_wrapper">
@include('layouts.default.navigation')

    
        <!-- Start Bottom Header -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb">
                            <div class="section-headline white-headline text-center">
                                <h3>About us</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>About us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
        <!-- about-area start -->
        <div class="about-page-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-image">
                            <img src="{{ asset('uploads') }}/images/about/{{ $about->image }}" alt="">
                        </div>
                    </div>
                    <!-- column end -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="about-content">
                           {!! $about->about_us !!}
                            <div class="about-details text-center hidden-sm">
                                <div class="single-about">
                                    <div class="icon-title"> 
                                    	<a href="#"><i class="{!!$about->certified_icon!!}"></i></a>
                                        <h5>Certified company</h5> 
                                    </div>
									{!!$about->certified!!}
                                </div>
                                <div class="single-about">
                                    <div class="icon-title">
										<a href="#"><i class="{!!$about->e_icon	!!}"></i></a>
										<h5>Our experience</h5>
                                    </div>
                                    <p>{!!$about->experience!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about-area end -->
        <!-- Start-About-feature-area -->
         <div class="about-feature area-padding">
             <div class="container">
                 <div class="row">
                    <div class="about-feature">
                        <!-- Start column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-feature">
                                <div class="feature-icon">
                                    <i class="{!!$about->m_icon!!}"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Our <span class="color">Mission</span></h4>
                                    <p>{!!$about->mission!!}</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-feature">
                                <div class="feature-icon">
                                    <i class="{!!$about->v_icon!!}"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Our <span class="color">Vision</span></h4>
                                    <p>{!!$about->vision!!}</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-feature">
                                <div class="feature-icon">
                                    <i class="{!!$about->e_icon!!}"></i>
                                </div>
                                <div class="feature-text">
                                    <h4>Our <span class="color">Experience</span></h4>
                                    <p>{!!$about->experience!!}</p>
                                </div>
                            </div>
                        </div>
                        <!-- End column -->
                    </div>
                </div>
             </div>
         </div>
        <!-- End-About-feature-area -->
        <!-- Team area start -->	
        <div class="team-area area-padding">
            <div class="container">
                <!-- section head -->
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
						    <h3>Our Team</h3>
						      
                            <p>{!!$our_team->title!!}</p>
						</div>
					</div>
				</div>
                <div class="row">
              
                    <div class="team-member text-center">
                        <!-- Single team member -->
                           @foreach($teams as $team)
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="{{ asset('uploads')}}/images/team/{{ $team->image }}" alt=""></a>
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h4><a href="#">Jackobs</a></h4>
                                    <p>Clean Expert</p>
                                    <ul class="team-hover">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single team member -->
                   
                        @endforeach<!-- Single team member -->
                    </div>
                 

                </div>
            </div>
        </div>
        <!-- team area end -->
        <!-- Start testimonials Area -->
		<div class="testimonial-area area-padding">
            <div class="test-overly"></div>
			<div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
						    <h3>Testimonial</h3>
						    <p>The world's Latest at clean cleaning service company we can clean your residential space including homes.</p>
						</div>
					</div>
				</div>
				<div class="row">
               
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      
						<div class="Reviews-content">
							<!-- start testimonial carousel -->
							<div class="testimonial-carousel item-indicator">
                             @foreach($reviews as $review)
                                <div class="single-testi text-center">
                                    <div class="testi-img ">
                                        <img src="{{ asset('uploads') }}/images/review/{{ $review->image }}" alt="">
                                    </div>
                                    <div class="client-rating">
                                        <a href="{{ $review->star}}"><i class="icon icon-star"></i></a>
                                        <a href="{{ $review->star}}"><i class="icon icon-star"></i></a>
                                        <a href="{{ $review->star}}"><i class="icon icon-star"></i></a>
                                        <a href="{{ $review->star}}"><i class="icon icon-star"></i></a>
                                        <a href="{{ $review->star}}"><i class="icon icon-star"></i></a>
                                    </div>
                                    <div class="testi-text">
                                        <p>{!!$review->description!!}</p>
                                        <h4>{!!$review->name!!}</h4>
                                        <span class="guest-rev"><a href="#">{!!$review->position!!}</a></span>
                                    </div>
                                </div>
                                  @endforeach
							</div>
						</div>
                         
					</div>
                 
				</div>
			</div>
		</div>
		<!-- End testimonials end -->
               <!-- Start About Area -->
         <div class="video-area area-padding">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
						    <h3>More About Cleaning Services</h3>
						    <p>The world's Latest at clean cleaning service company we can clean your residential space including homes.</p>
						</div>
					</div>
				</div>
                <div class="row">
                
                   <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="video-inner text-center">
                            <div class="video-content">
                                <a href="https://www.youtube.com/watch?v=W6Mda_M6hxQ&t=24s&ab_channel=5-MinuteCraftsPLAY" class="video-play vid-zone">
                                <i class="fa fa-play"></i>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="video-text">
                           <h4>{!! $about->description!!}</h4>
                        </div>
                    </div>
                </div>
                <!-- end Row -->
            </div>
        </div>
@include('layouts.default.footer')