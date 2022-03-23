<body>
        <div id="preloader"></div>
        @include('layouts.default.navigation')
        <!-- header end -->
        <!-- Start Slider Area -->
        <div class="intro-area intro-area-4 ">
           <div class="main-overly"></div>
            <div class="intro-carousel">
                <div class="intro-content">
                    <div class="slider-images">
                        <img src="img/slider/s1.jpg" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- layer 1 -->
                                            <div class="layer-1">
                                                <h1 class="title2">Cleanhome <span class="color">success</span> in every projects</h1>
                                            </div>
                                            <!-- layer 2 -->
                                            <div class="layer-2 ">
                                                <p>A Cleaning company services is provides professional services.</p>
                                            </div>
                                            <!-- layer 3 -->
                                            <div class="layer-3">
                                                <a href="#" class="ready-btn left-btn" >Our Services</a>
                                                <a href="order-from.html" class="ready-btn right-btn" >Book now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-content">
                    <div class="slider-images">
                        <img src="img/slider/s2.jpg" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <!-- layer 1 -->
                                            <div class="layer-1">
                                                <h1 class="title2"><span class="color">Cleanhome</span> company is provides services</h1>
                                            </div>
                                            <!-- layer 2 -->
                                            <div class="layer-2 ">
                                                <p>A Cleaning company services is provides professional services.</p>
                                            </div>
                                            <!-- layer 3 -->
                                            <div class="layer-3">
                                                <a href="#" class="ready-btn left-btn" >Our Services</a>
                                                <a href="#" class="ready-btn right-btn" >Contact us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Appointment Area -->
        <!-- service area start -->
         <div class="welcome-area welcome-area-4 area-padding">
            <div class="container">
                <div class="row">
                     @foreach(DB::table('category')->where('status',1)->get() as $category)
                    <!-- single-well end-->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="well-services text-center">
                        @if($category->offer)
                            <span class="slugan">{{$category->offer}}% <br/>off</span>
                            @endif
                            <div class="services-img">
                                <a href="#"><i class="{{$category->icon}}"></i></a>
                            </div>
                            <div class="main-services">
                                <div class="service-content">
                                    <h4>{{$category->category}}</h4>
                                    <p>{!!$category->defination!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach  
                </div>
            </div>
        </div>
        <!-- service-area end -->
        <!-- about-area start -->
        @php 
        $about_us = DB::table('about_us')->where('status',1)->first();
        @endphp
        <div class="about-area area-padding">
            <div class="container">
                <div class="row">       
                    <div class="col-md-6 col-sm-6 col-xs-12 ">
                        <div class="about-content">
                            <h4>{!!$about_us->about_us!!}</h4>
                            <div class="about-details text-center hidden-sm">
                                <div class="single-about">
                                    <div class="icon-title">
                                    	<a href="#"><i class="{!!$about_us->certified_icon!!}"></i></a>
                                        <h5>Certified company</h5>
                                    </div>
									<p>The phrasal sequence of the Lorem Ipsum text is now so widespread</p>
                                </div>
                                <div class="single-about">
                                    <div class="icon-title">
										<a href="#"><i class="{!!$about_us->e_icon!!}"></i></a>
										<h5>Our experience</h5>
                                    </div>
                                    <p>The phrasal sequence of the Lorem Ipsum text is now so widespread</p>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                    <div class="col-md-6 col-sm-6 col-xs-12">
          
                        <div class="about-image">
                            <img src="{{ asset('uploads')}}/images/about/{{ $about_us->image }}" alt="">
                        </div>
                        
                    </div>
                     
                    <!-- column end -->
                </div>
               
            </div>
        </div>
        <!-- about-area end -->
        <!-- Start Service area -->
		<div class="services-area services-4 area-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
						    <h3>Our Services</h3>
						    <p>The world's Latest at clean cleaning service company we can clean your residential space including homes.</p>
						</div>
					</div>
				</div>
                <div class="row text-center">
                 @foreach(DB::table('our_service')->where('status',1)->get() as $our_service)
                    <div class="all-services">
                        <!-- Start services -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-service">
                               @if($category->offer)
                               <span class="slugan">{{$category->offer}}%<br/>off</span>
                                @endif
                                <a class="service-image" href="#">
                                    <img src="{{ asset('uploads') }}/images/service/{{ $our_service->image }}" alt="">
                                </a>
                                <div class="service-content">
                                    <h4>{{$our_service->title}}</h4>
                                    <p>{{$our_service->short_description}}</p>
                                    <a class="service-btn" href="#">read more</a>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                    @endforeach
				</div>
			</div>
		</div>
		<!-- End Service area -->
        <!-- Start Quote Area -->
		<div class="quote-area area-padding parallax-bg">
            <div class="container ">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="row">
                            <div class="quate-details">
                            	<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="sub-head">
										<h4>Request a  <span class="color">Call back</span></h4>
										<p>Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.</p>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="quote-locate">
										<div class="quote-icon">
											<i class="icon icon-map-marker"></i>
											<span class="info-first">House-34,22/2 avenue</span>
											<span class="info-simple">London, United Kingdom</span>
										</div>
										<div class="quote-icon">
											<i class="icon icon-phone"></i>
											<span class="info-first">+013 654 43245</span>
											<span class="info-simple">info@cleaningss.com</span>
										</div>
									</div>
								</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <form id="contactForm" method="POST" action="http://rockstheme.com/rocks/preview-cleanhome/contact.php" class="contact-form">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                            <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                            <input type="number" class="form-control" id="phone" placeholder="phone number" required data-error="Please enter your Phone number">
                                            <div class="help-block with-errors"></div>
                                            <select>
                                                <option value="position">Apartment Cleaning</option>
                                                <option value="position">Commercial Cleaning</option>
                                                <option value="position">Residential Cleaning</option>
                                                <option value="position">Carpet Cleaning</option>
                                                <option value="position">Window Cleaning</option>
                                                <option value="position">After Renovation</option>
                                                <option value="position">Maid Services</option>
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                                            <div class="help-block with-errors"></div>
                                            <button type="submit" id="submit" class="quote-btn">Submit</button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                            <div class="clearfix"></div>
                                        </div>   
                                    </form>
                                </div> 
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- End Quote -->
        <!-- start pricing area -->
        <div class="pricing-area fix area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h3>Our pricing</h3>
                            <p>The world's Latest at clean cleaning service company we can clean your residential space including homes.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                 @foreach(DB::table('services_price')->where('status',1)->get() as $services_price)
                    <div class="pricing-content">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="table-list">
                                <div class="top-price-inner">
                                    <h4>{{$services_price->package_name}}</h4>
                                    <div class="rates">
                                        <span class="prices"><span class="dolar">$</span>{{$services_price->price}}</span><span class="users">Per Hour</span>
                                    </div>
                                </div>
                                <ol>
                                    <li class="check">{!!$services_price->services!!}</li>
                                    
                                </ol>
                                <div class="price-btn">
                                    <a href="order-from.html">Book now</a>
                                </div>
                            </div>
                        </div>
                @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- End pricing table area -->
        <!-- service area start -->
        <div class="choose-area bg-color area-padding">
            <div class="container">
               <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
						    <h3>Why choose us</h3>
						    <p>The world's Latest at clean cleaning service company we can clean your residential space including homes.</p>
						</div>
					</div>
				</div>
                <div class="row">
                    <!-- single-well end-->
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="well-services text-center">
                            <div class="services-img">
                                <a href="#"><i class="flaticon-cleaning-6"></i></a>
                            </div>
                            <div class="main-services">
                                <div class="service-content">
                                    <h4>Expert Employee</h4>
                                    <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="well-services text-center">
                            <div class="services-img">
                                <a href="#"><i class="flaticon-cleaning-8"></i></a>
                            </div>
                            <div class="main-services">
                                <div class="service-content">
                                    <h4>Secure Services</h4>
                                    <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end-->
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="well-services text-center">
                            <div class="services-img">
                                <a href="#"><i class="flaticon-spray"></i></a>
                            </div>
                            <div class="main-services">
                                <div class="service-content">
                                    <h4>Low Costing</h4>
                                    <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end -->
                    <div class="col-md-3 hidden-sm col-xs-12">
                        <div class="well-services text-center">
                            <div class="services-img">
                                <a href="#"><i class="flaticon-sweeping-3"></i></a>
                            </div>
                            <div class="main-services">
                                <div class="service-content">
                                    <h4>On time Finished</h4>
                                    <p>Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet consectetu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single-well end -->
                </div>
            </div>
        </div>
        <!-- service-area end -->
       	<!-- Start portfolio Area -->
		<div class="project-area area-padding">
			<div class="container">
			    <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
						    <h3>Our Projects</h3>
						    <p>The world's Latest at clean cleaning service company we can clean your residential space including homes.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Start Portfolio -page -->
					<div class="awesome-project fix">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="awesome-menu text-center">
								<ul class="project-menu">
									<li><a href="#" class="active" data-filter="*" >All</a></li>
									<li><a href="#" data-filter=".residential">Residential Cleaning</a></li>
									<li><a href="#" data-filter=".commercial">Commercial Cleaning</a></li>
									<li><a href="#" data-filter=".apartment">Apartment Cleaning</a></li>
								</ul>				
							</div>
						</div>
					</div>
                    <div class="project-content">
                        <!-- single-awesome-project start -->
                        <div class="project-single all-padding commercial">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/project/1.jpg">
                                        <img src="img/project/1.jpg" alt="" />
                                        <div class="add-actions text-center">
                                            <div class="project-dec">
                                                <h4>Nice project</h4>
                                                <span>Commercial</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- single-awesome-project end -->
                        <!-- single-awesome-project start -->
                        <div class="project-single all-padding residential">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/project/2.jpg">
                                        <img src="img/project/2.jpg" alt="" />
                                        <div class="add-actions text-center">
                                            <div class="project-dec">
                                                <h4>Nice project</h4>
                                                <span>Residential</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- single-awesome-project end -->
                        <!-- single-awesome-project start -->
                        <div class="project-single all-padding residential">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/project/3.jpg">
                                        <img src="img/project/3.jpg" alt="" />
                                        <div class="add-actions text-center">
                                            <div class="project-dec">
                                                <h4>Nice project</h4>
                                                <span>Residential</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- single-awesome-project end -->
                        <!-- single-awesome-project start -->
                        <div class="project-single all-padding apartment">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/project/4.jpg">
                                        <img src="img/project/4.jpg" alt="" />
                                        <div class="add-actions text-center">
                                            <div class="project-dec">
                                                <h4>Nice project</h4>
                                                <span>Apartment</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- single-awesome-project end -->
                        <!-- single-awesome-project start -->
                        <div class="project-single all-padding commercial">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/project/5.jpg">
                                        <img src="img/project/5.jpg" alt="" />
                                        <div class="add-actions text-center">
                                            <div class="project-dec">
                                                <h4>Nice project</h4>
                                                <span>commercial</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- single-awesome-project end -->
                        <!-- single-awesome-project start -->
                        <div class="project-single all-padding apartment">
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/project/6.jpg">
                                        <img src="img/project/6.jpg" alt="" />
                                        <div class="add-actions text-center">
                                            <div class="project-dec">
                                                <h4>Nice project</h4>
                                                <span>Apartment</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- single-awesome-project end -->
                    </div>
				</div>	
			</div>
			<!-- End main content -->
		</div>
		<!-- End portfolio Area -->
        <!-- Start Counter area -->
		<div class="counter-area area-padding parallax-bg" data-stellar-background-ratio="0.6">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12 col-sm-12">
		                <div class="about-count">
                           <div class="fun-content">
                                <div class="fun_text">
                                    <a href="#"><i class="icon icon-diamond"></i></a>
                                    <span class="counter">13000</span>
                                    <h5>Complete Projects</h5>
                                </div>
                                <!-- fun_text  -->
                                <div class="fun_text">
                                    <a href="#"><i class="icon icon-star"></i></a>
                                    <span class="counter">4500</span>
                                    <h5>Happy Clients</h5>
                                </div>
                                <!-- fun_text  -->
                                <div class="fun_text">
                                    <a href="#"><i class="icon icon-layers"></i></a>
                                    <span class="counter">104</span>
                                    <h5>Present Projects</h5>
                                </div>
                                <!-- fun_text  -->
                                <div class="fun_text">
                                    <a href="#"><i class="icon icon-users"></i></a>
                                    <span class="counter">4300</span>
                                    <h5>Total Employee</h5>
                                </div>
                            </div>
                        </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- End Counter area -->
        <!--Blog Area Start-->
        <div class="blog-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h3>Latest News</h3>
                            <p>The world's Latest at clean cleaning service company we can clean your residential space including homes.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="blog-grid home-blog">
                        <!-- Start single blog -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a class="image-scale" href="#">
                                        <img src="img/blog/1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="blog-content">
                                   <div class="blog-title">
                                       <div class="blog-meta">
                                            <span class="date-type">
                                                20 june, 2017
                                            </span>
                                            <span class="comments-type">
                                                <i class="fa fa-comment-o"></i>
                                                21
                                            </span>
                                        </div>
                                        <a href="#">
                                            <h4>Cleaning services system</h4>
                                        </a>
                                    </div>
                                    <div class="blog-text">
                                        <p>Redug Lagre dolor sit amet, consectetur adipisicing elit. Minima in nostrum, veniam. Esse est assumenda inventore.</p>
                                        <a class="blog-btn" href="#">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->
            </div>
        </div>
        <!--End of Blog Area-->
        <!-- Start Banner Area -->
    