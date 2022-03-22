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
                                <h3>Contact us</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
        <!-- Start contact Area -->
        <div class="contact-page area-padding">
            <div class="container">
                <div class="row">
                  
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      @foreach($contacts as $contact)
                        <div class="contact-head">
                            <h3>Request a  <span class="color">Contact us</span></h3>
                            <p>{{$contact->description}}</p>
                            <div class="project-share">
                                <h5>Our Social Link :</h5>
                                <ul class="project-social">
                                    <li>
                                        <a href="{{$contact->fb}}">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$contact->twitter}}">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$contact->email}}">
                                            <i class="fa fa-google"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$contact->linkdin}}">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$contact->insta}}">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                          @endforeach
                    </div>
                    <!-- End contact icon -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-form">
                            <div class="row">
                                <form id="contactForm" method="POST" action="http://rockstheme.com/rocks/preview-cleanhome/contact.php" class="contact-form">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" class="email form-control" id="eemail" placeholder="Email" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit" id="submit" class="contact-btn">Submit</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div> 
                                        <div class="clearfix"></div>
                                    </div>   
                                </form>  
                            </div>
                        </div>
                    </div>
                    <!-- End contact Form -->
                </div>
            </div>
        </div>
        <!-- Start contact Area -->
       <div class="map-area-top">
            <div class="container-full">
                <div class="row">
                    <!-- Start contact icon column -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- Start Map -->
                        <div class="map-area">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14605.207691368267!2d90.35496461941824!3d23.77226064046293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0a880f7909d%3A0xe8d7d2484b62becc!2sShyamoli%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1647761748921!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <!-- End Map -->
                    </div>
                </div>
            </div>
        </div>	
        
@include('layouts.default.footer')
