 <div id="loading">
      <div id="loading-center">
        <img src="{{ asset('assets') }}/images/loader.gif" alt="loder">
      </div>
    </div>
    <!-- loading End -->
    <!-- Header-->
    <header>

      <div class="container-fluid main-header">
        <div class="row">
          <div class="col-sm-12">
            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="index.html">
                <img src="{{ asset('uploads/images/'.config('sximo')['cnf_logo'])}}" class="img-fluid logo" alt="img">
                <img src="{{ asset('uploads/images/'.config('sximo')['cnf_logo'])}}" class="img-fluid logo-white" alt="img">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.html">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="services.html">Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact Us</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Pages
                    </a>
                    <div class="dropdown-menu drop-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="login.html">Login</a>
                      <a class="dropdown-item" href="register.html">Register</a>
                      <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                      <a class="dropdown-item" href="pricing.html">Pricing</a>
                      <a class="dropdown-item" href="404-error.html">404 Error</a>
                      <a class="dropdown-item" href="comingsoon.html">Coming Soon</a>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- <div class="sub-main">
                <ul class="shop_list">
                    <li class="cart-btn list-inline-item">
                        <div class="cart_count">
                            <a class="parents mini-cart-count" href="javascript:void(0)">
                                <i class="fa fa-shopping-cart"></i>
                                <div id="mini-cart-count">
                                    0
                                </div>
                            </a>
                        </div>
                    </li>
                  <li class="cart-btn list-inline-item">
                    <div class="cart_count">
                        <a class="parents mini-cart-count" href="javascript:void(0)">
                            <i class="fa fa-heart" ></i>
                            <div id="mini-cart-count">
                                    0
                            </div>
                      </div>
                  </li>
                </ul>
            </div> -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Header-->
   