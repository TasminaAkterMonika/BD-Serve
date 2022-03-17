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
                                <h3>Clients Reviews</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Reviews</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
       <!-- Start testimonials Area -->
		<div class="testimonial-area area-padding">
            <div class="test-overly"></div>
			<div class="container">
				<div class="row">
                  @foreach($reviews as $review)
                    <div class="Reviews-content">
                        <!-- start testimonial carousel -->
                        <div class="testimonial-review">
                            <div class="col-md-4 col-sm-6 col-xs-12">
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
                                        <span class="guest-rev"><a>{{$review->position}}</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     @endforeach
				</div>
			</div>
		</div>
     @include('layouts.default.footer')