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
                                <h3>Project Details</h3>
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
        <!-- Start project Area -->
        <div class="project-Details-page area-padding">
            <div class="container">
              <div class="row">
                 @foreach($projects as $project)
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="project-inner">
                            <div class="project-image">
                                <img src="{{ asset('uploads')}}/images/project/{{ $project->image }}" alt="" >
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="project-inner">
                            <div class="project-image">
                                <img src="{{ asset('uploads')}}/images/project/{{ $project->image }}" alt="">
                            </div>
                        </div>
                    </div>
                     --}}
                     @endforeach
                </div>
               <div class="row mar-row">
                   <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="project-history">
                            <h3>Residential Cleaning</h3>
                            <div class="project-name">
                                <ul>
                                    <li><span>Client Name</span> : {!! $project->name!!}</li>
                                    <li><span>Categories</span>  : {!! $project->category!!}</li>
                                    <li><span>Start Date</span>  : {!! $project->start_date!!}</li>
                                    <li><span>Status</span>  : {!! $project->status1!!}</li>
                                    <li><span>Result</span>  : {!! $project->result!!}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <div class="project-details">
                            <h3>Residential cleaning project.</h3>
                            <p>The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words. This ancient dummy text is also incomprehensible, but it imitates the rhythm of most European languages in Latin script. The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout.</p>
                            <ul class="marker-list">
                                <li>Lares dolor sit amet.</li>
                                <li>Animi vero excepturi magnam.</li>
                                <li>ducimus adipisci voluptas.</li>
                                <li>consectetur adipisicing elit.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End main content -->
        </div>
        <!-- Start project Area -->
        <div class="project-area gray-bg area-padding">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
						    <h3>Related Projects</h3>
						    <p>The world's Latest at clean cleaning service company we can clean your residential space including homes.</p>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="project-related">
                        <!-- single-awesome-project start -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="project-single">
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
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="project-single">
                                <div class="single-awesome-project">
                                    <div class="awesome-img">
                                        <a class="venobox" data-gall="myGallery" href="img/project/2.jpg">
                                            <img src="img/project/2.jpg" alt="" />
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
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="project-single">
                                <div class="single-awesome-project">
                                    <div class="awesome-img">
                                        <a class="venobox" data-gall="myGallery" href="img/project/3.jpg">
                                            <img src="img/project/3.jpg" alt="" />
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
                        </div>
                    </div>		
                </div>	
            </div>
            <!-- End main content -->
        </div>
       @include('layouts.default.footer')
