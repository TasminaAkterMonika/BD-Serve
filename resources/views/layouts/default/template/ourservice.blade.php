
@include('layouts.default.header')
<body>
<div class="boxed_wrapper">
@include('layouts.default.navigation')
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb">
                            <div class="section-headline white-headline text-center">
                                <h3>Services</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>All Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
        <!-- service area start -->
        <div class="welcome-area welcome-area-4 area-padding">
            <div class="container">
                <div class="row">
                    <!-- single-well end-->
                    @foreach(DB::table('category')->where('status',1)->get() as $category)
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
                    <div class="all-services">
                        <!-- Start services -->
                      @foreach(DB::table('our_service')->where('status',1)->get() as $our_service)
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
                        <!-- Start services -->
                 @endforeach
                    </div>
				</div>
			</div>
		</div>
		<!-- End Service area -->
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
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End pricing table area -->
 @include('layouts.default.footer')

