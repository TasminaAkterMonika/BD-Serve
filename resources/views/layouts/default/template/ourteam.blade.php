@include('layouts.default.header')
<body>
<div class="boxed_wrapper">
@include('layouts.default.navigation')

<body>

        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb">
                            <div class="section-headline white-headline text-center">
                                <h3>Our team</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>team</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
        <!-- Team area start -->	
        <div class="team-page-area area-padding">
            <div class="container">
                <div class="row">
                @foreach($teams as $team)
                    <div class="team-member text-center">
                        <!-- Single team member -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="{{ asset('uploads')}}/images/team/{{ $team->image }}" alt=""></a>
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h4>{{ $team->name }}</h4>
                                    <p>{{ $team->position }}</p>
                                    <ul class="team-hover">
                                        <li><a href="{{ $team->facebook }}"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="{{ $team->twitter }}"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="{{ $team->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
       
         
	@include('layouts.default.footer')


