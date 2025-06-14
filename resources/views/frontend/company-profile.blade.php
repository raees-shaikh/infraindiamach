@extends('frontend.layouts.app')
@section('title','Company Profile - ')
@section('content')

            <!-- section title -->
            <div class="prt-page-title-row">
                <div class="prt-page-title-row-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 m-auto">
                                <div class="prt-page-title-row-heading">
                                    <div class="page-title-heading">
                                        <h2 class="title">Company Profile</h2>
                                    </div>
                                    <div class="breadcrumb-wrapper">
                                        <span>
                                            <a  href="{{url('/')}}">Home</a>
                                        </span>
                                        <span class="action">Company Profile</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="bg-page-title-overlay"></div> -->
                </div>
            </div>
            <!-- section title end -->
            <section class=" pb-200 cusmtom-md">
                <div class="container ">

                    <div class="row  px-xl-0 px-2">
                        <div class="gray mt-40">
                            <span class="title">Trusted Indian Company</span> <img
                                src="{{ asset('frontend/images/bg-image/line.png') }}" alt="" class="line mx-2"> <span
                                class="profile-title"> Company Profile</span>
                        </div>
                    </div>
                    <div class="row rounded20 d-flex position-relative">
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

                                        <div class="col-lg-3 d-lg-block d-none text-lg-end text-center pt-40">

                                        </div>

                                    </div>



                                </div>

                            </div>
                        </div>


                    </div>
                </div>
                </div>
            </section>

@endsection
