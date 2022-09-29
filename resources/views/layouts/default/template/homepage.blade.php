<body>
        <div id="preloader"></div>
        @include('layouts.default.navigation')
        <!-- header end -->
        <!-- Start Slider Area -->
        <div class="intro-area intro-area-4 ">
           <div class="main-overly"></div>
            <div class="intro-carousel">
            @foreach(DB::table('banner')->where('status',1)->get() as $banner)
                <div class="intro-content">
                    <div class="slider-images">
                        <img src="{{ asset('uploads') }}/images/banner/{{ $banner->image }}" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- layer 1 -->
                                            <div class="layer-1">
                                                <h1>{!!$banner->title!!}</h1>
                                            </div>
                                            <!-- layer 2 -->
                                            <div class="layer-2 ">
                                                <p>{!!$banner->short_title!!}</p>
                                            </div>
                                            <!-- layer 3 -->
                                            <div class="layer-3">
                                                <a href="{{ route('services',$our_service->id)}}" class="ready-btn left-btn" >Our Services</a>
                                                <a href="{{route('order.from')}}" class="ready-btn right-btn" >Book now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 @endforeach
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
									<p>{!!$about_us->certified!!}</p>
                                </div>
                                <div class="single-about">
                                    <div class="icon-title">
										<a href="#"><i class="{!!$about_us->e_icon!!}"></i></a>
										<h5>Our experience</h5>
                                    </div>
                                    <p>{!!$about_us->experience!!}</p>
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
                                    <a class="service-btn" href="{{route('service.details',$our_service->id)}}">read more</a>
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
											<span class="info-first">{!!$setting->address!!}</span>
											
										</div>
										<div class="quote-icon">
											<i class="icon icon-phone"></i>
											<span class="info-first">{!!$setting->phone!!}</span>
											<span class="info-simple">{!!$setting->email!!}</span>
										</div>
									</div>
								</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <form id="contactForm" method="POST" action="" class="contact-form">
                                        @csrf
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                            <input type="email" name="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                            <input type="number" name="phone_number" class="form-control" id="phone" placeholder="phone number" required data-error="Please enter your Phone number">
                                            <div class="help-block with-errors"></div>
                                            <select name="subject">
                                                @foreach(DB::TABLE('our_service')->WHERE('status',1)->GET() as $row)
                                                <option value="{{$row->title}}">{{$row->title}}</option>
                                                @endforeach
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea id="message" name="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                                            <div class="help-block with-errors"></div>
                                            {{-- <input type="submit" class="quote-btn" name="submit" value="Submit" /> --}}
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
                 @foreach(DB::table('why_us')->where('status',1)->get() as $why_us)
                    <!-- single-well end-->
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="well-services text-center">
                            <div class="services-img">
                                <a href="#"><i class="{{$why_us->icon}}"></i></a>
                            </div>
                            <div class="main-services">
                                <div class="service-content">
                                    <h4>{{$why_us->title}}</h4>
                                    <p>{!!$why_us->description!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
       	<!-- Start portfolio Area -->
		{{-- <div class="project-area area-padding">
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
                        @foreach(DB::table('projectdetails')->where('status',1)->get() as $projectdetails)
                        <!-- single-awesome-project start -->
                        <div class="project-single all-padding commercial">
                         
                            <div class="single-awesome-project">

                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="img/project/1.jpg">
                                        <img src="{{ asset('uploads')}}/images/project/{{ $projectdetails->image}}" alt="" />
                                        <div class="add-actions text-center">
                                            <div class="project-dec">
                                                <h4>{{ $projectdetails->title}}</h4>
                                                <span>{{ $projectdetails->category}}</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                          @endforeach
                    </div>
				</div>	
			</div>
			<!-- End main content -->
		</div> --}}
        </div>
		<!-- End portfolio Area -->
       
		<div class="counter-area area-padding parallax-bg" data-stellar-background-ratio="0.6">
		    <div class="container-fluid">
		        <div class="row">
		            <div class="col-md-12 col-sm-12">
		                <div class="about-count">
                           <div class="fun-content">
                           @foreach(DB::table('counter')->where('status',1)->get() as $counter)
                                <div class="fun_text">
                                    <a href="#"><i class="{{$counter->icon}}"></i></a>
                                    <span class="counter">{{$counter->number}}</span>
                                    <h5>{{$counter->title}}</h5>
                                </div>
                                <!-- fun_text  -->
                                 @endforeach
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
                 @foreach(DB::table('blogdetails')->where('status',1)->get() as $blogdetails)
                    <div class="blog-grid home-blog">
                        <!-- Start single blog -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a class="image-scale" href="{{ route('single.blog',$blogdetails->id)}}">
                                        <img src="{{ asset('uploads')}}/images/blog/{{ $blogdetails->image }}" alt="">
                                    </a>
                                </div>
                                <div class="blog-content">
                                   <div class="blog-title">
                                       <div class="blog-meta">
                                            <span class="date-type">
                                                 {{$blogdetails->date}}
                                            </span>
                                            <span class="comments-type">
                                                <i class="fa fa-comment-o"></i>
                                                {{$blogdetails->comment}}
                                            </span>
                                        </div>
                                        <a href="#">
                                            <h4>{!!$blogdetails->title!!}</h4>
                                        </a>
                                    </div>
                                    <div class="blog-text">
                                        <p>{{$blogdetails->short_description}}</p>
                                        <a class="blog-btn" href="{{ route('single.blog',$blogdetails->id)}}">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- End row -->
            </div>
        </div>
        </div>
       
    