@extends('frontend.layouts.app')
@section('title', '')
@section('content')



    <!--  BANNER SLIDER  -->
    <div class="banner container-fluid">
        <div class="row fullwidth">
            <div class="col-md-12">
                <ul class="bannerSlider ">
                    <!--  1. slide  -->

                    <li class="slide">

                        <div class="slide__text text-start px-md-5 px-3 pt-lg-5 pt--45">
<div class="row">
    <div class="col-xl-10">
        <div class="banner-text">
            <h4>Leading suppliers of Imported Techncologies Plants & Machinerys for  RECYCLING | RENEWABLE ENERGY | POWER | STEEL | FORGING | HIGH PERFORMANCE GEOTECHNCIAL</h4>
        </div>
    </div>
</div>

                            <div class="row justify-content-center pt-lg-3 ">

                                <div class="col-lg-9  pt-sm-5 mt-sm-5">


                                    <h2 class="rail">Railways </h2>


                                    <img src="{{ asset('frontend/images/bg-image/banner-title-shape.png') }}" alt=""
                                        class="banner-title-shape rail">

                                </div>
                                <div class="col-lg-3 pt-lg-5 mt-lg-5">
                                    <div class="pt-40 d-flex">
                                        <a href="{{ url('latest-offers') }}" class="btn-banner "> Read More </a>

                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="slide__image w-100">
                            <img src="{{ asset('frontend/images/bg-image/rail.png') }}" alt=""
                                class="w-100 d-sm-block d-none rounded">
                            <img src="{{ asset('frontend/images/bg-image/rail-2.png') }}" alt=""
                                class="w-100 d-sm-none d-block rounded">
                        </div>

                    </li>
                    <!--  2. slide  -->
                    <li class="slide">

                        <div class="slide__text text-start px-md-5 px-3 pt-lg-5">
                            <div class="row justify-content-center pt-lg-5 mt-lg-5">
                                <div class="col-lg-9  pt-sm-5 mt-sm-5">
                                    <h2 class="road">Roads </h2>
                                    <img src="{{ asset('frontend/images/bg-image/banner-title-shape.png') }}" alt=""
                                        class="banner-title-shape road">
                                </div>
                                <div class="col-lg-3 pt-lg-5 mt-lg-5">


                                    <div class="pt-40 d-flex">
                                        <a href="{{ url('latest-offers') }}" class="btn-banner "> Read More </a>

                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="slide__image">
                            <img src="{{ asset('frontend/images/bg-image/road.png') }}" alt="" class="w-100">
                        </div>

                    </li>
                    <!--  3. slide  -->
                    <li class="slide ">

                        <div class="slide__text text-start px-md-5 px-3 pt-lg-5">

                            <div class="row justify-content-center pt-lg-5 mt-lg-5">

                                <div class="col-lg-9  pt-sm-5 mt-sm-5">

                                    <h2 class="air">Airports </h2>
                                    <img src="{{ asset('frontend/images/bg-image/banner-title-shape.png') }}" alt=""
                                        class="banner-title-shape air">
                                </div>
                                <div class="col-lg-3 pt-lg-5 mt-lg-5">


                                    <div class="pt-40 d-flex">
                                        <a href="{{ url('latest-offers') }}" class="btn-banner "> Read More </a>

                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="slide__image">
                            <img src="{{ asset('frontend/images/bg-image/airport.png') }}" alt="" class="w-100">
                        </div>

                    </li>
                    <!--  4. slide  -->
                    <li class="slide">

                        <div class="slide__text text-start px-md-5 px-3 pt-lg-5">

                            <div class="row justify-content-center pt-lg-5 mt-lg-5">
                                <div class="col-lg-9  pt-sm-5 mt-sm-5">
                                    <h2 class="tunnel">Tunnels </h2>
                                    <img src="{{ asset('frontend/images/bg-image/banner-title-shape.png') }}"
                                        alt="" class="banner-title-shape tunnel">
                                </div>
                                <div class="col-lg-3 pt-lg-5 mt-lg-5">


                                    <div class="pt-40 d-flex">
                                        <a href="{{ url('latest-offers') }}" class="btn-banner "> Read More </a>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="slide__image">
                            <img src="{{ asset('frontend/images/bg-image/tunnel.png') }}" alt="" class="w-100">
                        </div>
                    </li>





                    <li class="slide">

                        <div class="slide__text text-start px-md-5 px-3 pt-lg-5 ">

                            <div class="row justify-content-center pt-lg-5 mt-lg-5">
                                <div class="col-lg-9  pt-sm-5 mt-sm-5">


                                    <h2 class="energy px-3 px-xl-4">Renewable Energy Power </h2>


                                    <img src="{{ asset('frontend/images/shapes/energy.png') }}" alt=""
                                        class="banner-title-shape energy">

                                </div>
                                <div class="col-lg-3 pt-lg-5 mt-lg-5">
                                    <div class="pt-40 d-flex">
                                        <a href="{{ url('latest-offers') }}" class="btn-banner "> Read More </a>

                                    </div>

                                </div>
                            </div>



                        </div>
                        <div class="slide__image">
                            <img src="{{ asset('frontend/images/bg-image/energy.png') }}" alt="" class="w-100">
                        </div>

                    </li>
                    <!--  2. slide  -->
                    <li class="slide">

                        <div class="slide__text text-start px-md-5 px-3 pt-lg-5">
                            <div class="row justify-content-center pt-lg-5 mt-lg-5">
                                <div class="col-lg-9  pt-sm-5 mt-sm-5">
                                    <h2 class="rail">Oil & Gas </h2>
                                    <img src="{{ asset('frontend/images/bg-image/banner-title-shape.png') }}"
                                        alt="" class="banner-title-shape oilgas">
                                </div>
                                <div class="col-lg-3 pt-lg-5 mt-lg-5">


                                    <div class="pt-40 d-flex">
                                        <a href="{{ url('latest-offers') }}" class="btn-banner "> Read More </a>

                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="slide__image">
                            <img src="{{ asset('frontend/images/bg-image/oilgas.png') }}" alt="" class="w-100">
                        </div>

                    </li>
                    <!--  3. slide  -->
                    <li class="slide ">

                        <div class="slide__text text-start px-md-5 px-3 pt-lg-5">

                            <div class="row justify-content-center pt-lg-5 mt-lg-5">

                                <div class="col-lg-9  pt-sm-5 mt-sm-5">

                                    <h2 class="road">Mining </h2>
                                    <img src="{{ asset('frontend/images/bg-image/banner-title-shape.png') }}"
                                        alt="" class="banner-title-shape road">
                                </div>
                                <div class="col-lg-3 pt-lg-5 mt-lg-5">


                                    <div class="pt-40 d-flex">
                                        <a href="{{ url('latest-offers') }}" class="btn-banner "> Read More </a>

                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="slide__image">
                            <img src="{{ asset('frontend/images/bg-image/mining.png') }}" alt="" class="w-100">
                        </div>

                    </li>
                    <!--  4. slide  -->
                    <li class="slide">

                        <div class="slide__text text-start px-md-5 px-3 pt-lg-5">

                            <div class="row justify-content-center pt-lg-5 mt-lg-5">
                                <div class="col-lg-9  pt-sm-5 mt-sm-5">
                                    <h2 class="water road">Water Distribution Urban </h2>
                                    <img src="{{ asset('frontend/images/bg-image/banner-title-shape.png') }}"
                                        alt="" class="banner-title-shape urban">
                                </div>
                                <div class="col-lg-3 pt-lg-5 mt-lg-5">


                                    <div class="pt-40 d-flex">
                                        <a href="{{ url('latest-offers') }}" class="btn-banner "> Read More </a>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="slide__image">
                            <img src="{{ asset('frontend/images/bg-image/urban.png') }}" alt="" class="w-100">
                        </div>
                    </li>




                    <li class="slide">

                        <div class="slide__text text-start px-md-5 px-3 pt-lg-5 ">

                            <div class="row justify-content-center pt-lg-5 mt-lg-5">
                                <div class="col-lg-9  pt-sm-5 mt-sm-5">


                                    <h2 class="road water">Water Distribution Rural </h2>


                                    <img src="{{ asset('frontend/images/bg-image/banner-title-shape.png') }}"
                                        alt="" class="banner-title-shape urban">

                                </div>
                                <div class="col-lg-3 pt-lg-5 mt-lg-5">
                                    <div class="pt-40 d-flex">
                                        <a href="{{ url('latest-offers') }}" class="btn-banner "> Read More </a>

                                    </div>

                                </div>
                            </div>



                        </div>
                        <div class="slide__image">
                            <img src="{{ asset('frontend/images/bg-image/rural.png') }}" alt="" class="w-100">
                        </div>

                    </li>
                    <!--  2. slide  -->
                    <li class="slide">

                        <div class="slide__text text-start px-md-5 px-3 pt-lg-5">
                            <div class="row justify-content-center pt-lg-5 mt-lg-5">
                                <div class="col-lg-9  pt-sm-5 mt-sm-5">
                                    <h2 class="solar">Solar Energy Generation & Distribution </h2>
                                    <img src="{{ asset('frontend/images/bg-image/banner-title-shape.png') }}"
                                        alt="" class="banner-title-shape solar">
                                </div>
                                <div class="col-lg-3 pt-lg-5 mt-lg-5">


                                    <div class="pt-40 d-flex">
                                        <a href="{{ url('latest-offers') }}" class="btn-banner "> Read More </a>

                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="slide__image">
                            <img src="{{ asset('frontend/images/bg-image/solar.png') }}" alt="" class="w-100">
                        </div>

                    </li>
                    <!--  3. slide  -->
                    <li class="slide ">

                        <div class="slide__text text-start px-md-5 px-3 pt-lg-5">

                            <div class="row justify-content-center pt-lg-5 mt-lg-5">

                                <div class="col-lg-9  pt-sm-5 mt-sm-5">

                                    <h2 class="solar">Wind Energy Generation & Distribution</h2>
                                    <img src="{{ asset('frontend/images/bg-image/banner-title-shape.png') }}"
                                        alt="" class="banner-title-shape solar">
                                </div>
                                <div class="col-lg-3 pt-lg-5 mt-lg-5">


                                    <div class="pt-40 d-flex">
                                        <a href="{{ url('latest-offers') }}" class="btn-banner "> Read More </a>

                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="slide__image">
                            <img src="{{ asset('frontend/images/bg-image/wind.png') }}" alt="" class="w-100">
                        </div>

                    </li>
                    <!--  4. slide  -->
                    <li class="slide">

                        <div class="slide__text text-start px-md-5 px-3 pt-lg-5">

                            <div class="row justify-content-center pt-lg-5 mt-lg-5">
                                <div class="col-lg-9  pt-sm-5 mt-sm-5">
                                    <h2 class="manu">Manufacturing Infrastrcutre </h2>
                                    <img src="{{ asset('frontend/images/bg-image/banner-title-shape.png') }}"
                                        alt="" class="banner-title-shape manufacture">
                                </div>
                                <div class="col-lg-3 pt-lg-5 mt-lg-5">


                                    <div class="pt-40 d-flex">
                                        <a href="{{ url('latest-offers') }}" class="btn-banner "> Read More </a>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="slide__image">
                            <img src="{{ asset('frontend/images/bg-image/manufacture.png') }}" alt=""
                                class="w-100">
                        </div>
                    </li>


                    <!--  4. slide  -->
                    <li class="slide">

                        <div class="slide__text text-start px-md-5 px-3 pt-lg-5">

                            <div class="row justify-content-center pt-lg-5 mt-lg-5">
                                <div class="col-lg-9  pt-sm-5 mt-sm-5">
                                    <h2 class="manu infra">Engineeering Infrastructure </h2>
                                    <img src="{{ asset('frontend/images/bg-image/banner-title-shape.png') }}"
                                        alt="" class="banner-title-shape infra">
                                </div>
                                <div class="col-lg-3 pt-lg-5 mt-lg-5">


                                    <div class="pt-40 d-flex">
                                        <a href="{{ url('latest-offers') }}" class="btn-banner "> Read More </a>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="slide__image">
                            <img src="{{ asset('frontend/images/bg-image/infra.png') }}" alt="" class="w-100">
                        </div>
                    </li>
                </ul>


            </div>
        </div>
    </div>
    <a class="btn-banner-arrow d-md-inline  slick-next"><img src="{{ asset('frontend/images/bg-image/arrow.png') }}"
            alt="" class="arrow"></a>


    <section class="pt-40 pb-200 force">
        <div class="container pt-40">
            <div class="row pt-40 mt-sm-4 px-custom">
                <div class="gray mt-40">
                    <span class="title">Trusted Indian Company</span> <img
                        src="{{ asset('frontend/images/bg-image/line.png') }}" alt=""
                        class="line mx-2 profile-img"> <span class="profile-title"> Company Profile</span>
                </div>
            </div>
            <div class="row rounded20 d-flex position-relative px-custom">
                <div class="bg-about pt-40 px-0">
                    <img src="{{ asset('frontend/images/bg-image/road.png') }}" alt="" class="w-100 rounded20">

                    <div class="shape-div px-3 px-lg-5">
                        <img src="{{ asset('frontend/images/bg-image/about-shape.png') }}" alt=""
                            class="w-100 shape">
                        <div class="bg-about-gray">
                            <span class="text px-lg-5">
                                <span class="num">20+</span>Years Of Experience
                                Infrastructure India is the oldest & trusted Indian company, provide such as roads,
                                railways, bridges, airports, public transit systems, tunnels, mining, renewable energy &
                                etc.
                            </span>

                            <div class="row justify-content-center img-section pt-lg-30 pt-md-40">

                                <div class="col-lg-5 col-10">
                                    <img src="{{ asset('frontend/images/bg-image/about-new.png') }}" alt=""
                                        class="w-100">
                                </div>
                                <div class="col-lg-5 col-10">
                                    <span class="text-2 p-sm-30">
                                        <span class="num">1500+</span>
                                        Projects
                                        Infrastructure India is the oldest & trusted Indian company, provide such as roads,
                                        railways, bridges, airports, public transit systems, tunnels, mining, renewable
                                        energy & etc.
                                    </span>
                                </div>

                            </div>


                            <div class="row justify-content-center img-section d-flex align-items-center pt-lg-30 mt-xl-3">


                                <div class="col-lg-7 pt-40 px-4 col-10">
                                    <span class="text-2">
                                        <span class="num d-block mb-3">Worldwide Manufacture</span>

                                        Infrastructure India is the oldest & trusted Indian company, provide such as roads,
                                        railways, bridges, airports, public transit systems, tunnels, mining, renewable
                                        energy & etc.
                                    </span>
                                </div>

                                <div class="col-lg-3 text-lg-end text-center pt-40">
                                    <div class=" profile pt-3">
                                        <a class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border prt-btn-color-white"
                                            href="{{ url('company-profile') }}">Read More</a>
                                    </div>
                                </div>

                            </div>



                        </div>

                    </div>
                </div>


            </div>
        </div>
        </div>
    </section>
    <!-- site-main start -->
    <div class="site-main">
        <!-- about section start-->
        {{-- <section class="prt-row about-section clearfix pt-120px pt-sm-5 ">
    <div class="container pt-sm-4">
        <div class="row pt-lg-4">
                <div class="pre-title text-center" data-aos="fade-up" data-aos-duration="1400">
                    <span class="sub">Company Profile</span>
                </div>
                <div class="section-title">
                    <div class="title-heading text-center" data-aos="fade-up" data-aos-duration="1400">
                        <h2 class="title">Trusted Indian Company</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12  order-lg-1 order-2 pt-lg-0 pt-4">
                <div class="prt-about-content border-rad_20 ">
                    <div class="prt-about-content-wrap" data-aos="fade-up" data-aos-duration="1400">
                        <h3>20+ Years Of Experience</h3>
                        <p>Infrastructure India  is the oldest & trusted Indian company, provide such as roads, railways, bridges, airports, public transit systems, tunnels,  mining, renewable energy  & etc.</p>
                    </div>
                    <div class="prt-about-content-wrap" data-aos="fade-up" data-aos-duration="1400">
                        <h3>1500+ Projects</h3>
                        <p>Handling such a large number of projects  public and private physical structures such as roads, railways, bridges, airports, public transit systems, tunnels, and telecommunications</p>
                    </div>
                    <div class="prt-about-content-wrap" data-aos="fade-up" data-aos-duration="1400">
                        <h3>Worldwide Manufacture</h3>
                        <p> Roads | Railways | Airports | Tunnels | Renewable Energy | Oil & Gas | Mining | Water Distrubution Rural | Water Distrubution Urban | Rain Water Harvesting | Solar Energy Generation & Distrubution | Wind Energy Generation & Distrubution | Manufacturing Infrastrcutre | Engineeering Infrastrcutre | Many More </p>
                    </div>
                    <div class="text-center text-lg-start profile pt-3">
                        <a class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border prt-btn-color-white" href="{{url('company-profile')}}">Read More</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-md-12 order-lg-2 order-1">
                <!-- col-img-img-one -->
                <div class="prt-bg prt-col-bgimage-yes col-bg-img-one border-rad_20 ml-15 res-991-ml-0">
                    <div class="prt-col-wrapper-bg-layer prt-bg-layer border-rad_20"></div>
                    <div class="layer-content"></div>
                </div>
                <!-- col-img-bg-img-one end-->
                <img class="img-fluid prt-equal-height-image w-100 position-relative" src="{{asset('frontend/images/bg-image/about.jpg')}}" alt="bg-image">
            </div>
        </div>
    </div>
</section> --}}
        <!-- about section end-->


        <!-- service section start -->
        <div class="row   mb-40 pt-40 px-custom-xl pt-xl-00">
            <div class="gray d-lg-flex align-items-center">
                <div class="col-xl-2 col-lg-3 px-0 text-lg-end">
                    <span class="title">Latest Offers</span>
                </div>
                <div class="col-xl-8 col-lg-6 px-0">
                    <img src="{{ asset('frontend/images/bg-image/line.png') }}" alt="" class="line mx-2  w-100"
                        height="2px">
                </div>

                <div class="col-xl-2 col-lg-3 px-lg-3 text-lg-start">
                    <span class="profile-title "> Latest Offers</span>
                </div>
            </div>
        </div>

        <!-- team-section start -->
        <section class="prt-row team-section clearfix pt-0 pt-sm-0px pb-10">
            <div class="container">
                <div class="row">
                    @forelse ($categories as $category)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box style1 text-start card h-100">

                                <div class="featured-icon-box-01">
                                    <div class="featured-title">
                                        <h3><a
                                                href="{{ route('offer-index', $category->slug) }}">{{ $category->title }}</a>
                                        </h3>
                                        <div class="  profile  pt-40 pb-0 mb-20">
                                            <a class="offer-btn" href="{{ route('offer-index', $category->slug) }}">Read
                                                More</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="featured-hover-content text-center">
                                    <div class="featured-title">
                                        <h3><a
                                                href="{{ route('offer-index', $category->slug) }}">{{ $category->title }}</a>
                                        </h3>
                                        <div class="text-center  profile  pt-40 pb-0 mb-20">
                                            <a class="prt-btn offer text-black prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border prt-btn-color-white text-white"
                                                href="{{ route('offer-index', $category->slug) }}">Read More</a>
                                        </div>
                                    </div>
                                    <div class="social-media-icon text-align-center">

                                    </div>

                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>

                    @empty
                        <div class="text-center">No Offers Found</div>
                    @endforelse
                    {{-- <div class="col-lg-3 col-md-6 col-sm-6">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box  style1 text-start">

                            <div class="featured-icon-box-01">
                                <div class="featured-title">
                                    <h3><a href="">Rossy Wincent</a></h3>
                                    <div class="  profile  pt-40 pb-0 mb-20">
                                        <a class="offer-btn"
                                        href="{{ route('latest-offers') }}">Read More</a>
                                    </div>
                                </div>

                            </div>

                            <div class="featured-hover-content text-center">
                                <div class="featured-title">
                                    <h3><a href="">Rossy Wincent</a></h3>
                                    <div class="text-center  profile  pt-40 pb-0 mb-20">
                                        <a class="prt-btn text-black prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border prt-btn-color-white text-white"
                                            href="{{ route('latest-offers') }}">Read More</a>
                                    </div>
                                </div>
                                <div class="social-media-icon">

                                </div>

                            </div>
                        </div><!-- featured-icon-box end-->
                    </div> --}}
                </div>
            </div>
        </section>

        {{-- <section class="prt-row  prt-bg bg-base-dark service-section clearfix pt-30 ">
            <div class="container-fluid">
                @forelse ($categories as $category)
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="service-box">
                                <ul class="img-box-content">
                                    <li class="img-box-wrap">
                                        <div class="service-img">
                                            <img height="618" width="673" class="img-fluid"
                                                src="{{ asset('frontend/images/offers/roads.png') }}" alt="image">
                                        </div>
                                        <div class="img-box-heading-content">
                                            <div class="img-box-heading">
                                                <h4 class="img-box-title">
                                                    <a class="more-link"
                                                        href="{{ url('latest-offers') }}">{{ $category->title }}</a>
                                                </h4>
                                            </div>
                                            <div class="img-box-desc">
                                                <div class="content-wrapper">
                                                    <p>Road construction involves installing asphalt, concrete or other
                                                        materials to create a smooth surface for vehicles.</p>
                                                </div>
                                                <div class="service-btn">
                                                    <div class="img-box-btn">
                                                        <a href="{{ url('latest-offers') }}"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                @empty
                @endforelse

            </div>
        </section> --}}
        @if ($categoriesCount > 8)
            <div class="text-center  profile  pt-0 pb-0 mb-20">
                <a class="prt-btn text-black prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border prt-btn-color-white text-white"
                    href="{{ route('latest-offers') }}">View All</a>
            </div>
        @endif
        <!-- service section end -->

        <div class="row   mb-40 pt-40 px-custom-xl">
            <div class="gray d-lg-flex align-items-center pr-xl-10">
                <div class=" col-xl-4 col-lg-5 px-0 text-lg-end mx-lg-custom">
                    <span class="title">Company Exhibitions</span>
                </div>
                <div class=" col-xl-7 col-lg-5 px-0 mx-lg-custom">
                    <img src="{{ asset('frontend/images/bg-image/line.png') }}" alt="" class="line mx-2 w-100">

                </div>

                <div class=" col-lg-2 px-lg-3 text-lg-start mx-lg-custom">
                    <span class="profile-title "> Exhibitions</span>
                </div>
            </div>
        </div>
        <!-- portfolio-section start -->
        <section class=" prt-row prt-bg  portfolio-section clearfix mb-40 pt-40 pb-10 bg-base-black ">
            <div class="container-fluid">


                <!-- slick_slider -->
                <div class="row slick_slider"
                    data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":992,"settings":{"slidesToShow": 2,"arrows":false,"autoplay":true}}, {"breakpoint":778,"settings":{"slidesToShow": 1,"arrows":false}}, {"breakpoint":450,"settings":{"slidesToShow": 1}}]}'>
                    @forelse ($exhibitions as $exhibition)
                        <div class="col-lg-4">
                            <div class="prt-box prt-box-portfolio prt-portfoliobox-style2 ">
                                <div class="prt-post-item">
                                    <div class="prt-post-item-inner">
                                        <div class="prt-featured-wrapper prt-tm_portfolio-featured-wrapper">
                                            <img width="768" height="512"
                                                src="{{ asset('storage/images/exhibition/' . $exhibition->image) }}"
                                                class="img-fluid" alt="image">
                                        </div>
                                        <div class="prt-box-content overlay">
                                            <div class="prt-box-title-content">
                                                <div class="prt-desc-box">
                                                    <div class="prt-box-title">
                                                        <h3><a
                                                                href="{{ route('frontend.exhibitions.show', $exhibition->slug) }}">{{ $exhibition->title }}</a>
                                                        </h3>
                                                        <span><i class="fa fa-calendar" aria-hidden="true"></i>
                                                            {{ dd_format($exhibition->start_date, 'd-m-Y') }} To
                                                            {{ dd_format($exhibition->end_date, 'd-m-Y') }}</span>
                                                    </div>
                                                    <div class="prt-box-feac">

                                                        <a class="prt-portfolio-box-btn"
                                                            href="{{ route('frontend.exhibitions.show', $exhibition->slug) }}"
                                                            target="_self"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @empty
                        <div class="text-center">No Exhibitions Found</div>
                    @endforelse
                    {{-- <div class="col-lg-4">
                        <div class="prt-box prt-box-portfolio prt-portfoliobox-style2 ">
                            <div class="prt-post-item">
                                <div class="prt-post-item-inner">
                                    <div class="prt-featured-wrapper prt-tm_portfolio-featured-wrapper">
                                        <img width="768" height="512"
                                            src="{{ asset('frontend/images/team/team-02.jpg') }}" class="img-fluid"
                                            alt="image">
                                    </div>
                                    <div class="prt-box-content overlay">
                                        <div class="prt-box-title-content">
                                            <div class="prt-desc-box">
                                                <div class="prt-box-title">
                                                    <h3><a href="{{ url('/exhibition') }}">Pune Exhibitons</a></h3>
                                                    <span><i class="fa fa-calendar" aria-hidden="true"></i>
                                                        {{ date('Y/m/d') }} To
                                                        {{ date('Y/m/d') }}</span>
                                                </div>
                                                <div class="prt-box-feac">
                                                    <div class="prt-box-desc">
                                                            <p>A scelerisque purus semper eget. Placerat in egestas erat imperdiet. Sit facilisis magna. </p>
                                                        </div>

                                                    <a class="prt-portfolio-box-btn" href="{{ url('/exhibition') }}"
                                                        target="_self"></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="prt-box prt-box-portfolio prt-portfoliobox-style2">
                            <div class="prt-post-item">
                                <div class="prt-post-item-inner">
                                    <div class="prt-featured-wrapper prt-tm_portfolio-featured-wrapper">
                                        <img width="768" height="512"
                                            src="{{ asset('frontend/images/team/team-03.jpg') }}" class="img-fluid"
                                            alt="image">
                                    </div>
                                    <div class="prt-box-content overlay">
                                        <div class="prt-box-title-content">
                                            <div class="prt-desc-box">
                                                <div class="prt-box-title">
                                                    <h3><a href="{{ url('/exhibition') }}">Noida Exhibitions</a></h3>
                                                    <span><i class="fa fa-calendar" aria-hidden="true"></i>
                                                        {{ date('Y/m/d') }} To
                                                        {{ date('Y/m/d') }}</span>
                                                </div>
                                                <div class="prt-box-feac">
                                                    <div class="prt-box-desc">
                                                            <p>A scelerisque purus semper eget. Placerat in egestas erat imperdiet. Sit facilisis magna. </p>
                                                        </div>

                                                    <a class="prt-portfolio-box-btn" href="{{ url('/exhibition') }}"
                                                        target="_self"></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="prt-box prt-box-portfolio prt-portfoliobox-style2 ">
                            <div class="prt-post-item">
                                <div class="prt-post-item-inner">
                                    <div class="prt-featured-wrapper prt-tm_portfolio-featured-wrapper">
                                        <img width="768" height="512"
                                            src="{{ asset('frontend/images/team/team-04.jpg') }}" class="img-fluid"
                                            alt="image">
                                    </div>
                                    <div class="prt-box-content overlay">
                                        <div class="prt-box-title-content">
                                            <div class="prt-desc-box">
                                                <div class="prt-box-title">
                                                    <h3><a href="{{ url('/exhibition') }}">Delhi Exhibitions</a></h3>
                                                    <span><i class="fa fa-calendar" aria-hidden="true"></i>
                                                        {{ date('Y/m/d') }} To
                                                        {{ date('Y/m/d') }}</span>
                                                </div>
                                                <div class="prt-box-feac">
                                                    <div class="prt-box-desc">
                                                            <p>A scelerisque purus semper eget. Placerat in egestas erat imperdiet. Sit facilisis magna. </p>
                                                        </div>
                                                    <a class="prt-portfolio-box-btn" href="{{ url('/exhibition') }}"
                                                        target="_self"></a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}


                </div>
            </div>

        </section>
        @if ($exhibitionsCount > 6)
            <div class="text-center  profile  pt-10 pb-0 mb-40">
                <a class="prt-btn text-black prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border prt-btn-color-white text-white"
                    href="{{ url('exhibitions') }}">View All</a>
            </div>
        @endif
        <!-- portfolio-section end -->


        @if ($data)
            <section class="py-40 bg-base-black mb-40 ">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-6 order-2">
                            <div class="data text-center">
                                <h2>Technical Data</h2>

                                <div class="text-center  profile ">
                                    <a class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border prt-btn-color-white text-white"
                                        href="{{ asset('storage/data/' . $data->filename) }}">Open PDF</a>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-md-6 order-1">
                    <div class="widget widget_text footer-widget-box">
                        <h3 class="widget-title-h3 text-capitalize text-center text-md-start">Sign up here for regular
                            updates</h3>
                        <form id="subscribe-form" class="newsletter-form" action="#" data-mailchimp="true">
                            <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                                <div class="prt-contact-link-icon d-flex">
                                    <i class="flaticon flaticon-email-1"></i>
                                    <p class="px-4 input-text"><input type="email" name="email"
                                            placeholder="Your email" required=""></p>
                                </div>

                                <p><button class="submit" type="submit" aria-label="name"><span>Send now</span><i
                                            class="icon-right"></i></button></p>
                            </div>
                        </form>
                    </div>
                </div> --}}
                    </div>
            </section>
        @endif

    @endsection


    @section('js')
        <script>
            $(".bannerSlider").slick({
                dots: false,
                autoplay: true,
                infinite: true,
                dots: false,
                slidesToShow: 1,
                slideswToScroll: 1,
                arrows: true,
                prevArrow: $('.slick-prev'),
                nextArrow: $('.slick-next'),
            });
        </script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
            integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.2.228/pdf.min.js"></script>


        <script>
            var _PDF_DOC,
                _CURRENT_PAGE,
                _TOTAL_PAGES,
                _PAGE_RENDERING_IN_PROGRESS = 0,
                _CANVAS = document.querySelector('#pdf-canvas');





            var _PDF_DOC,
                _CURRENT_PAGE,
                _TOTAL_PAGES,
                _PAGE_RENDERING_IN_PROGRESS = 0,
                _CANVAS = document.querySelector('#pdf-canvas');

            // initialize and load the PDF
            async function showPDF(pdf_url) {
                document.querySelector("#pdf-loader").style.display = 'block';

                // get handle of pdf document
                try {
                    _PDF_DOC = await pdfjsLib.getDocument({
                        url: pdf_url
                    });
                } catch (error) {
                    alert(error.message);
                }

                // total pages in pdf
                _TOTAL_PAGES = _PDF_DOC.numPages;

                // Hide the pdf loader and show pdf container
                document.querySelector("#pdf-loader").style.display = 'none';
                document.querySelector("#pdf-contents").style.display = 'block';
                document.querySelector("#pdf-total-pages").innerHTML = _TOTAL_PAGES;

                // show the first page
                showPage(1);
            }

            // load and render specific page of the PDF
            async function showPage(page_no) {
                _PAGE_RENDERING_IN_PROGRESS = 1;
                _CURRENT_PAGE = page_no;

                // disable Previous & Next buttons while page is being loaded
                document.querySelector("#pdf-next").disabled = true;
                document.querySelector("#pdf-prev").disabled = true;

                // while page is being rendered hide the canvas and show a loading message
                document.querySelector("#pdf-canvas").style.display = 'none';
                document.querySelector("#page-loader").style.display = 'block';

                // update current page
                document.querySelector("#pdf-current-page").innerHTML = page_no;

                // get handle of page
                try {
                    var page = await _PDF_DOC.getPage(page_no);
                } catch (error) {
                    alert(error.message);
                }

                // original width of the pdf page at scale 1
                var pdf_original_width = page.getViewport(1).width;

                // as the canvas is of a fixed width we need to adjust the scale of the viewport where page is rendered
                var scale_required = _CANVAS.width / pdf_original_width;

                // get viewport to render the page at required scale
                var viewport = page.getViewport(scale_required);

                // set canvas height same as viewport height
                _CANVAS.height = viewport.height;

                // setting page loader height for smooth experience
                document.querySelector("#page-loader").style.height = _CANVAS.height + 'px';
                document.querySelector("#page-loader").style.lineHeight = _CANVAS.height + 'px';

                var render_context = {
                    canvasContext: _CANVAS.getContext('2d'),
                    viewport: viewport
                };

                // render the page contents in the canvas
                try {
                    await page.render(render_context);
                } catch (error) {
                    alert(error.message);
                }

                _PAGE_RENDERING_IN_PROGRESS = 0;

                // re-enable Previous & Next buttons
                document.querySelector("#pdf-next").disabled = false;
                document.querySelector("#pdf-prev").disabled = false;

                // show the canvas and hide the page loader
                document.querySelector("#pdf-canvas").style.display = 'block';
                document.querySelector("#page-loader").style.display = 'none';
            }

            // click on "Show PDF" buuton
            document.querySelector("#show-pdf-button").addEventListener('click', function() {
                this.style.display = 'block';
                showPDF('pdf/Saturn-Technical-Data.pdf');
            });

            // click on the "Previous" page button
            document.querySelector("#pdf-prev").addEventListener('click', function() {
                if (_CURRENT_PAGE != 1)
                    showPage(--_CURRENT_PAGE);
            });

            // click on the "Next" page button
            document.querySelector("#pdf-next").addEventListener('click', function() {
                if (_CURRENT_PAGE != _TOTAL_PAGES)
                    showPage(++_CURRENT_PAGE);
            });
        </script>

    @endsection
