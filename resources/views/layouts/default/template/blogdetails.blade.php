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
                                <h3>Blog Grid</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Header -->
        <!--Blog Area Start-->
        <div class="blog-page area-padding">
            <div class="container">
                <div class="row">
                    <div class="blog-grid">
                        <!-- Start single blog -->
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="row">
                              @foreach($blogs as $blog)
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="single-blog">
                                        <div class="blog-image">
                                            <a class="image-scale" href="{{ route('single.blog',$blog->id)}}">
                                                <img src="{{ asset('uploads')}}/images/blog/{{ $blog->image }}" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-content">
                                           <div class="blog-title">
                                               <div class="blog-meta">
                                                    <span class="date-type">
                                                       {{$blog->date}}
                                                    </span>
                                                    <span class="comments-type">
                                                        <i class="fa fa-comment-o"></i>
                                                        {{$blog->comment}}
                                                    </span>
                                                </div>
                                                <a href="#">
                                                    <h4>{!!$blog->title!!}</h4>
                                                </a>
                                            </div>
                                            <div class="blog-text">
                                                <p>{{$blog->short_description}}</p>
                                                <a class="blog-btn" href="{{ route('single.blog',$blog->id)}}">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End single blog -->
                               @endforeach
                            </div>
                            <!-- End row -->
                        </div>
                        <!-- End main column -->
                        {{-- <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="left-head-blog">
                                <div class="left-blog-page">
                                    <!-- search option start -->
                                    <form action="#">
                                        <div class="blog-search-option">
                                            <input type="text" placeholder="Search...">
                                            <button class="button" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </form>
                                    <!-- search option end -->
                                </div>
                                <div class="left-blog-page">
                                    <!-- recent start -->
                                    <div class="left-blog">
                                        <h4>recent post</h4>
                                        <div class="recent-post">
                                            <!-- start single post -->
                                            <div class="recent-single-post">
                                                <div class="post-img">
                                                    <a href="#">
                                                        <img src="img/blog/1.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="pst-content">
                                                    <p><a href="#">There are many variations of passages of Lorem.</a></p>
                                                </div>
                                            </div>
                                            <!-- End single post -->
                                            <!-- start single post -->
                                            <div class="recent-single-post">
                                                <div class="post-img">
                                                    <a href="#">
                                                        <img src="img/blog/2.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="pst-content">
                                                    <p><a href="#">There are many variations of passages of Lorem.</a></p>
                                                </div>
                                            </div>
                                            <!-- End single post -->
                                            <!-- start single post -->
                                            <div class="recent-single-post">
                                                <div class="post-img">
                                                    <a href="#">
                                                        <img src="img/blog/3.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="pst-content">
                                                    <p><a href="#">There are many variations of passages of Lorem.</a></p>
                                                </div>
                                            </div>
                                            <!-- End single post -->
                                            <!-- start single post -->
                                            <div class="recent-single-post">
                                                <div class="post-img">
                                                    <a href="#">
                                                        <img src="img/blog/4.jpg" alt="">
                                                    </a>
                                                </div>
                                                <div class="pst-content">
                                                    <p><a href="#">There are many variations of passages of Lorem.</a></p>
                                                </div>
                                            </div>
                                            <!-- End single post -->
                                        </div>
                                    </div>
                                    <!-- recent end -->
                                </div>
                                <div class="left-blog-page">
                                    <div class="left-blog">
                                        <h4>categories</h4>
                                        <ul>
                                            <li>
                                                <a href="#">Residential</a>
                                            </li>
                                            <li>
                                                <a href="#">Commercial</a>
                                            </li>
                                            <li>
                                                <a href="#">Cleaning</a>
                                            </li>
                                            <li>
                                                <a href="#">Carpet cleaning</a>
                                            </li>
                                            <li>
                                                <a href="#">Maid services</a>
                                            </li>
                                            <li>
                                                <a href="#">Maintenence</a>
                                            </li>
                                            <li>
                                                <a href="#">Floor cleaning</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="left-blog-page">
                                    <div class="left-blog">
                                        <h4>archive</h4>
                                        <ul>
                                            <li>
                                                <a href="#">10 Dec 2017</a>
                                            </li>
                                            <li>
                                                <a href="#">12 Dec 2017</a>
                                            </li>
                                            <li>
                                                <a href="#">13 Nov 2017</a>
                                            </li>
                                            <li>
                                                <a href="#">20 Nov 2017</a>
                                            </li>
                                            <li>
                                                <a href="#">09 Fabruary 2017</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="left-blog-page">
                                    <div class="left-tags blog-tags">
                                        <div class="popular-tag left-side-tags left-blog">
                                            <h4>popular tags</h4>
                                            <ul>
                                                <li>
                                                   <a href="#">Residential</a>
                                                </li>
                                                <li>
                                                    <a href="#">Commercial</a>
                                                </li>
                                                <li>
                                                    <a href="#">Floor</a>
                                                </li>
                                                <li>
                                                    <a href="#">Maid</a>
                                                </li>
                                                <li>
                                                    <a href="#">Maintenence</a>
                                                </li>
                                                <li>
                                                    <a href="#">cleaning</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <!-- End left sidebar -->
                    </div>
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- Start Footer bottom Area -->
     @include('layouts.default.footer')