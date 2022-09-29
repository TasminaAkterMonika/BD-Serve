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
                                <h3>Projects</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Project</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
       <!-- Start portfolio Area -->
		<div class="project-area project-column-4 area-padding">
			<div class="container">
				<div class="row">
					<!-- Start Portfolio -page -->
					<div class="awesome-project fix">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="awesome-menu text-center">
								<ul class="project-menu">
									<li><a href="#" class="active" data-filter="*" >All</a></li>
                                    
									<li><a href="#" data-filter=".residential">Residential Cleaning</a></li>
								</ul>				
							</div>
						</div>
					</div>
                    <div class="project-content">
                        <!-- single-awesome-project start -->
                     <div class="project-single all-padding commercial">
                         @foreach($projects as $project)
                            <div class="single-awesome-project">
                                <div class="awesome-img">
                                    <a class="venobox" data-gall="myGallery" href="{{ asset('uploads')}}/images/project/{{ $project->image }}">
                                        <img src="{{ asset('uploads')}}/images/project/{{ $project->image}}" alt=""/>
                                        <div class="add-actions text-center">
                                            <div class="project-dec">
                                              <a href="{{ route('single.project',$project->id)}}">  <h4>{!! $project->title!!}</h4></a>
                                                <span>{!! $project->category!!}</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
				</div>	
			</div>
			<!-- End main content -->
		</div>
		<!-- End portfolio Area -->
       @include('layouts.default.footer')
