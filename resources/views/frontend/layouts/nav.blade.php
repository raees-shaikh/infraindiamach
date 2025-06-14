<div class="page">

    <div class="main-box">
        <!-- header start -->
        <header id="masthead" class="header prt-header-style-01">
            <!-- site-header-menu -->
            <div id="site-header-menu" class="site-header-menu bgnav">
                <div class="site-header-menu-inner prt-stickable-header  bgnav">
                    <div class="container">
                        <div class="row header-row px-xl-3">
                            <div class="col-lg-12 p-0">
                                <!--site-navigation -->
                                <div class="site-navigation d-flex align-items-center justify-content-between">
                                    <div class="site-branding-wrap">
                                        <!-- site-branding -->
                                        <div class="site-branding">
                                            <h1><a class="home-link" href="{{url('/')}}"  rel="home">
                                                <img id="logo-img"  class="img-fluid auto_size " src="{{asset('frontend/logo.jpeg')}}" alt="logo-img">
                                                {{-- <img src="{{asset('frontend/images/shapes/nav-shape.png')}}" alt="" class="shapenav"> --}}
                                            </a></h1>
                                        </div>
                                        <!-- site-branding end -->
                                    </div>
                                    <div class="sitemenu-main d-flex align-items-center justify-content-between">
                                        <!-- menu-link -->
                                        <div class="menu-link">
                                            <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                                <span class="menubar-box">
                                                    <span class="menubar-inner"></span>
                                                </span>
                                            </div>
                                            <!-- menu -->
                                            <nav class="main-menu menu-mobile" id="menu">
                                                <ul class="menu">
                                                    <li class="mega-menu-item {{URL::current()==url('/')? 'active' : ''}}"><a href="{{url('/')}}">Home</a></li>
                                                    {{-- <li class="mega-menu-item">
                                                        <a href="#" class="mega-menu-link">Pages</a>
                                                        <ul class="mega-submenu">
                                                            <li><a href="about-us.html">About us</a></li>
                                                            <li><a href="service.html">Services</a></li>
                                                            <li><a href="team.html">Our team</a></li>
                                                           <li><a href="team-detail.html">Team details</a></li>
                                                           <li><a href="contact-us.html">Contact us</a></li>
                                                           <li><a href="error.html">Error Page</a></li>
                                                         </ul>
                                                    </li> --}}
                                                    <li class="mega-menu-item {{URL::current()==url('company-profile')? 'active' : ''}}"><a href="{{url('company-profile')}}">Company Profile</a></li>
                                                    <li class="mega-menu-item {{URL::current()==url('latest-offers')? 'active' : ''}}"><a href="{{url('latest-offers')}}">Latest Offers</a></li>
                                                    <li class="mega-menu-item {{URL::current()==url('business-process')? 'active' : ''}}"><a href="{{url('business-process')}}">Business Process</a></li>
                                                    <li class="mega-menu-item {{URL::current()==url('exhibitions')? 'active' : ''}}"><a href="{{url('exhibitions')}}">Exhibitions</a></li>
                                                    <li class="mega-menu-item d-xl-block d-none"><a href="{{url('contact-us')}}" class="contact-btn">Contact Us</a></li>
                                                    <li class="mega-menu-item d-xl-none d-block {{URL::current()==url('contact-us')? 'active' : ''}}"><a href="{{url('contact-us')}}" class="contact-btn">Contact Us</a></li>
                                                </ul>
                                            </nav><!-- menu end -->
                                        </div>
                                        <!-- menu-link end-->
                                        {{-- <!-- header_extra -->
                                        <div class="header_extra d-flex align-items-center">
                                            <div class="prt-contact-link d-flex text-align-center">
                                                <div class="prt-contact-link-icon">
                                                    <i class="flaticon flaticon-email-2"></i>
                                                </div>
                                                <div>
                                                    <a href="tel:1234567890" class="hotline-link"> +18 - 2222 - 3555</a><br>
                                                    <a href="mailto:infraindiamach.com" class="hotline-link"> infraindiamach.com</a>
                                                </div>

                                            </div>
                                            <div class="header-btn">
                                                <a class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border prt-btn-color-white" href="contact-us.html">Let's Talk</a>
                                            </div>
                                        </div>
                                        <!-- header_extra --> --}}
                                    </div>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- site-header-menu end-->
        </header>
        <!-- header end -->
