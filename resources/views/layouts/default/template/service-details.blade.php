@include('layouts.default.header')
<body>
<div class="boxed_wrapper">
@include('layouts.default.navigation')
<div class="boxed_wrapper">
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb">
                            <div class="section-headline white-headline text-center">
                                <h3>Services Details</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Services Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
        <!-- End services Area -->
        <div class="single-services-page area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="page-head-left">
                           <!-- strat single area -->
                            <div class="single-page-head">
                                <div class="left-menu">
                                    <ul>
                                        @foreach(DB::TABLE('our_service')->where('status', 1)->orderBy('id', 'DESC')->get() AS $row)
                                        <li><a href="{{route('service.details',$row->id)}}">{{ $row->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End left sidebar -->
                    <!-- Start service page -->
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-page">
                                    <div class="page-img elec-page">
                                        <img src="{{ asset('uploads')}}/images/service/{{$service->image}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- strat single page -->
                            <!-- single-well end-->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-well">
                                    <a href="#">
                                        <h3>{{$service->title}}</h3>
                                    </a>
                                    <p>{!!$service->description!!}</p>
                                </div>
                            </div>   
                        </div>
                        <!-- end Row -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End page Area -->
     @include('layouts.default.footer')