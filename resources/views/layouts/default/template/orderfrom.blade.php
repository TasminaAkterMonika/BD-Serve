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
                                <h3>Order From</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Order From</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
        <div class="order-area area-padding">
        	<div class="container">
        		<div class="row">
        			<div class="col-md-offset-2 col-md-8 col-sm-12">
        				<div class="section-headline text-center">
						    <h3>Order From</h3>
						    <p>Please feild up our order from.</p>
						</div>
        				<!-- Start Order From -->
                        <div class="order-form">
                            <div class="row">
                                <form id="contactForm" method="POST" action="http://rockstheme.com/rocks/preview-cleanhome/contact.php" class="contact-form">
									<!-- single feilds -->
									<div class="sign-feilds">
										<div class="input-text">
											<input type="text" id="name" class="form-control width-50" placeholder="Your Name" required data-error="Please enter your name">
											<input type="text" class="form-control width-50 last-name" id="address" placeholder="Address" required data-error="Please enter your address">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<!-- single feilds -->
									<div class="sign-feilds">
										<div class="input-text">
											<input type="email" class="email form-control width-50" id="eemail" placeholder="Email" required data-error="Please enter your email">
											<input type="text" class="address form-control width-50 last-name" id="phone" placeholder="Phone Number" required data-error="Please enter your address">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<!-- single feilds -->
									<div class="sign-feilds">
										<div class="input-text">
											<select id="sel" class=" form-control width-50" name="select-services">
												<option value="0">select-services</option>
												<option value="Residential Cleaning">Residential Cleaning</option>
												<option value="Commercial Cleaning">Commercial Cleaning</option>
												<option value="Maid Services">Maid Services</option>
												<option value="House Cleaning">House Cleaning</option>
												<option value="Carpet Cleaning">Carpet Cleaning</option>
											</select>
											<select id="sele" class=" form-control width-50 last-name" name="select-member">
												<option value="0">How many person</option>
												<option value="1">1 Person</option>
												<option value="2">2 Person</option>
												<option value="3">3 Person</option>
												<option value="4">4 Person</option>
												<option value="5">5 Person</option>
												<option value="6">6 Person</option>
											</select>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<!-- single feilds -->
									<div class="sign-feilds">
										<div class="form-group form-control time-zone width-50">
										    <p class="from-slogan">Select date when start work</p>
											<div class="input-group date" id="datetimepicker1">
												<input type='date' class="form-control" />
												<span class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</span>
											</div>
										</div>
										<div class="form-group form-control time-zone width-50 last-name">
										    <p class="from-slogan">Select time when start work</p>
											<div class="input-group time" id="datetimepicker3">
												<input type='text' class="form-control" />
												<span class="input-group-addon">
													<i class="fa fa-clock-o"></i>
												</span>
											</div>
										</div>
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group">
                                        <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
									<!-- single feilds -->
									<div class="sign-feilds">
										<div class="submit-btn">
											<button type="submit" id="submit_mg" class="add-btn contact-btn">Order Now</button>
											<div id="msg_Submit" class="h3 text-center hidden"></div>
										</div>
									</div>
								</form> 
                            </div>
                        </div>
                        <!-- End Order Form -->
        			</div>
        		</div>
        	</div>
        </div>
       @include('layouts.default.footer')
