@include('layouts.default.header')
<body>
< class="boxed_wrapper">
@include('layouts.default.navigation')
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb">
                            <div class="section-headline white-headline text-center">
                                <h3>FAQ</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>FAQ</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
        <!-- Start FAQ -->
        <div class="faq-page area-padding">
            <div class="container">
               <div class="row">
                 @foreach(DB::TABLE('faq_description')->WHERE('status', 1)->GET() as $row)
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center"> 
						    <h3>Some important FAQ</h3>
						    <p>{{$faq_description->description}}</p> 
						</div>
					</div>
                  @endforeach
				</div>
                <div class="row">
                    <!-- Start FAQ Start -->
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="faq-full">
                         @foreach($faqs as $faq)
                            <div class="faq-details">              
                                <div class="panel-group" id="accordion">
                                    <!-- Panel Default -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" class="active" data-parent="#accordion" href="#check{{ $loop->iteration }}" >
                                                    <span class="acc-icons"></span>{{$faq->question}}
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check{{ $loop->iteration}}" class="panel-collapse collapse @if($loop->iteration == 1) in @endif">
                                            <div class="panel-body">
                                                <p>{{$faq->Answer}}</p>		
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                    <!-- Panel Default -->                 
                                    <!-- End Panel Default -->													
                                </div>       
                            </div>
                      @endforeach
                        </div>  
                    </div>
                    <!-- Start Column Start -->
                </div>
            </div>
        </div>
       @include('layouts.default.footer')
