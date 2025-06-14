@extends('frontend.layouts.app')
@section('title', 'Contact Us - ')
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
                                    <h2 class="title">Contact Us</h2>
                                </div>
                                <div class="breadcrumb-wrapper">
                                    <span>
                                        <a title="Homepage" href="{{ url('/') }}">Home</a>
                                    </span>

                                    <span class="action">Contact Us </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="bg-page-title-overlay"></div> -->
        </div>
        <!-- section title end -->
        <!-- contact-us-section start -->
        <section class="prt-row contact-us-section clearfix pt-0 pb-0">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 prt-sticky-column h-100">
                        <div class="single-img-wrapper  " id="contactimg">
                            <img class="img-fluid" src="{{ asset('frontend/images/single-img-04.jpg') }}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 bg-gray">
                        <div class="contact-us-detail-feac pt-0 mt-0">
                            <div>
                                <h3 class="team-member-single-title-h3 mt-0 pt-4 text-center">Get In Touch</h3>

                                <form action="{{ route('frontend.contact.submit') }}" method="post">
                                    @csrf
                                    <input type="hidden" class="form-control" name="page_name" value="Contact">
                                    <div class="response"></div>
                                    <p class="comment-form-author">
                                        <input id="name" class="username" name="name" type="text"
                                            value="{{ old('name') }}" placeholder="Full Name" required="required"
                                            minlength="3" maxlength="30">
                                        @if ($errors->has('name'))
                                            <div class="text-danger" role="alert">{{ $errors->first('name') }}</div>
                                        @endif
                                    </p>
                                    <p class="comment-form-email">
                                        <input id="email" class="email" name="email" type="text"
                                            value="{{ old('email') }}" placeholder="Email Address " required="required"
                                            minlength="5" maxlength="40">
                                        @if ($errors->has('email'))
                                            <div class="text-danger" role="alert">{{ $errors->first('email') }}</div>
                                        @endif
                                    </p>
                                    <p class="comment-form-number">
                                        <input id="phone" class="phone" name="phone" type="text"
                                            value="{{ old('phone') }}" placeholder="Phone Number" required="required"
                                            minlength="10" maxlength="10">
                                        @if ($errors->has('phone'))
                                            <div class="text-danger" role="alert">{{ $errors->first('phone') }}</div>
                                        @endif
                                    </p>
                                    <p class="comment-form-number">
                                        <input id="sub" class="phone" name="subject" type="text"
                                            value="{{ old('subject') }}" placeholder="Subject" required="required"
                                            minlength="3" maxlength="100">
                                        @if ($errors->has('subject'))
                                            <div class="text-danger" role="alert">{{ $errors->first('subject') }}</div>
                                        @endif
                                    </p>
                                    <p class="comment-form-comment">
                                        <textarea id="comment" class="message" name="message" cols="4" rows="4" placeholder="Message"
                                            required="required" minlength="5" maxlength="250">{{ old('message') }}</textarea>
                                        @if ($errors->has('message'))
                                            <div class="text-danger" role="alert">{{ $errors->first('message') }}</div>
                                        @endif
                                    </p>
                                    <p class="form-submit mt-20 mb-0 text-center">
                                        <button class="text-black w-auto d-inline-block prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border prt-btn-color-white"
                                            href="">Submit Now</button>

                                    </p>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-us-section end -->

    @endsection
