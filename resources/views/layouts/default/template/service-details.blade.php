@include('layouts.default.header')
<body>
<div class="boxed_wrapper">
@include('layouts.default.navigation')
<body>
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
                                        <li class="active"><a href="#">Residential Cleaning</a></li>
                                        <li><a href="#">Commercial Cleaning</a></li>
                                        <li><a href="#">Carpet Cleaning</a></li>
                                        <li><a href="#">Window Cleaning</a></li>
                                        <li><a href="#">Move in & Move out</a></li>
                                        <li><a href="#">Maid Services</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-page-head">
                                <div class="download-btn">
                                    <h4>Download</h4>
                                    <div class="about-btn">
                                        <a href="#" class="down-btn">Download Brochure</a>
                                        <a href="#" class="down-btn apli">Download Aplication</a>
                                    </div>
                                </div>
                            </div>
                            <!-- strat single area -->
                            <div class="single-page-head">
                                <div class="clients-testi">
                                    <div class="single-review text-center">
                                        <div class="review-img ">
                                            <img src="img/review/1.jpg" alt="">
                                        </div>
                                        <div class="review-text">
                                            <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection.</p>
                                            <h4>Arnold russel</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- strat single area -->
                            <div class="single-page-head">
                                <div class="clients-support">
                                    <div class="support-img">
                                        <img src="img/service/ser1.jpg" alt="">
                                        <div class="support-text">
                                            <h4>Online Support</h4>
                                            <a><i class="icon icon-phone"></i>+1313-5454652</a>
                                            <p>24 hours online support our customer.replacing a multi-lined selection of text.</p>
                                        </div>
                                    </div>
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
                                        <img src="{{ asset('uploads') }}/images/service/{{ $our_service->image }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- strat single page -->
                            <!-- single-well end-->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="single-well">
                                    <a href="#">
                                        <h3>Residential Cleaning</h3>
                                    </a>
                                    <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.When the replaced text selection consists fully of lower-cased or capital letters or begins with a capital letter, that previous casing is maintained. Furthermore, the presence or absence of a trailing punctuation mark of a replaced text selection is being maintained.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end Row -->
                        <div class="row mar-row">
                           <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="single-page">
                                    <div class="page-img elec-page">
                                        <img src="img/service/2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="single-well">
                                    <a href="#">
                                        <h4>How to cleaning perfectly</h4>
                                    </a>
                                    <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines.</p>
                                    <ul class="marker-list">
                                        <li>Words is roughly being maintained</li>
                                        <li>Letters or begins with a capital letter</li>
                                        <li>Previous casing is maintained</li>
                                        <li>Maintains the amount of lines</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End single page -->
                        </div>
                        <!-- end Row -->
                        <div class="row mar-row">
                            <!-- End single page -->
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="single-well">
                                    <a href="#">
                                        <h4>Complete cleaning</h4>
                                    </a>
                                    <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines.</p>
                                    <ul class="marker-list">
                                        <li>Words is roughly being maintained</li>
                                        <li>Letters or begins with a capital letter</li>
                                        <li>Previous casing is maintained</li>
                                        <li>Maintains the amount of lines</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="single-page">
                                    <div class="page-img elec-page">
                                        <img src="img/service/3.jpg" alt="">
                                    </div>
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