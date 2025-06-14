@extends('frontend.layouts.app')
@section('title', 'Sitemap - ')
@section('content')


<!-- site-main start -->
<div class="site-main">
    <!-- section title -->
    <div class="prt-page-title-row">
        <div class="prt-page-title-row-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="prt-page-title-row-heading">
                            <div class="banner-vertical-block"></div>
                            <div class="page-title-heading">
                                <h2 class="title">Sitemap</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a  href="{{url('/')}}">Home</a>
                                </span>

                                <span class="action">Sitemap </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="bg-page-title-overlay"></div> -->
    </div>
    <!-- section title end -->

    <div class="container">
        <div class="row   mb-40 pt-40 px-custom-xl justify-content-center">
            <div class="gray d-lg-flex align-items-center px-xl-custom">
                <div class=" col-lg-4 col-xl-3 px-0 text-lg-end">
                 <span class="title">Company Sitemap</span>
                </div>
                <div class=" col-lg-6 col-xl-7 px-0">
                 <img
                 src="{{ asset('frontend/images/bg-image/line.png') }}" alt="" class="line mx-2 w-100">

                </div>

                <div class=" col-lg-2 px-lg-3 text-lg-start">
                 <span class="profile-title ">Sitemap</span>
                </div>
             </div>
        <div class="row pt-50 pb-0 mb-0 sitemap justify-content-center justify-content-md-start text-center">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a class="prt-btn text-black prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border prt-btn-color-white" href="{{url('/')}}">Home</a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <a class="prt-btn text-black prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border prt-btn-color-white" href="{{url('company-profile')}}">Company Profile</a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <a class="prt-btn text-black prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border prt-btn-color-white" href="{{url('latest-offers')}}">Latest Offers</a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a class="prt-btn text-black prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border prt-btn-color-white" href="{{url('business-process')}}">Business Process</a>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 mt-lg-4">
                <a class="prt-btn text-black prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border prt-btn-color-white" href="{{url('exhibitions')}}">Exhibitions</a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mt-lg-4">
                <a class="prt-btn text-black prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border prt-btn-color-white" href="{{url('contact-us')}}">Contact Us</a>
            </div>


        </div>
    </div>


@endsection
