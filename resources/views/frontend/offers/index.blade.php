@extends('frontend.layouts.app')
@section('title', 'Latest Offers - ')
@section('content')


    <!-- section title -->
    <div class="prt-page-title-row">
        <div class="prt-page-title-row-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 m-auto">
                        <div class="prt-page-title-row-heading">
                            <div class="page-title-heading">
                                <h2 class="title">Latest Offers</h2>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a  href="{{ url('/') }}">Home</a>
                                </span>
                                <span class="action">Latest Offers</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="bg-page-title-overlay"></div> -->
        </div>
    </div>
    <!-- section title end -->

    <div class="row   mb-40 pt-40 px-custom-xl">
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
    <section class="prt-row team-section clearfix pt-0 pt-sm-0px pb-20">
        <div class="container">
            <div class="row">
                @forelse ($categories as $category)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-4">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box style1 text-start card h-100">

                            <div class="featured-icon-box-01">
                                <div class="featured-title">
                                    <h3><a href="{{ route('offer-index', $category->slug) }}">{{ $category->title }}</a>
                                    </h3>
                                    <div class="  profile  pt-40 pb-0 mb-20">
                                        <a class="offer-btn" href="{{ route('offer-index', $category->slug) }}">Read
                                            More</a>
                                    </div>
                                </div>

                            </div>

                            <div class="featured-hover-content text-center">
                                <div class="featured-title">
                                    <h3><a href="{{ route('offer-index', $category->slug) }}">{{ $category->title }}</a>
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
    <!-- service section end -->
    {{-- <div class="pagination-block mb-40 ">
        <a class="next page-numbers" href="#">
            <i class="fas fa-long-arrow-alt-left"></i></a>
        <span class="page-numbers current active">1</span>
        <a class="page-numbers" href="#">2</a>
        <a class="next page-numbers" href="#">
            <i class="fas fa-long-arrow-alt-right"></i></a>
    </div> --}}
    <div class="row text-center justify-content-center">
        <div class="col-xl-12 col-lg-12 mx-auto text-center">
            <nav aria-label="Blog Pagination" class="pagination-custom-nav text-center mx-auto">
                <ul class="pagination text-center mb-0 m-t40">
                    <li class="page-item">
                        {{ $categories->onEachSide(1)->links('pagination::bootstrap-4') }}
                    </li>
                </ul>
            </nav>
        </div>
    </div>

@endsection
