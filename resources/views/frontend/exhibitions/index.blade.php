@extends('frontend.layouts.app')
@section('title', 'Exhibitions - ')
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
                                    <h2 class="title">Exhibitions</h2>
                                </div>
                                <div class="breadcrumb-wrapper">
                                    <span>
                                        <a  href="{{ url('/') }}">Home</a>
                                    </span>
                                    <span class="action">Exhibitions</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="bg-page-title-overlay"></div> -->
        </div>

        <!-- section title end -->
        <div class="row   mb-40 pt-40 px-custom-xl">
            <div class="gray d-lg-flex align-items-center pr-xl-10">
                <div class=" col-xl-4 col-lg-5 px-0 text-lg-end mx-lg-custom">
                    <span class="title">Company Exhibitions</span>
                </div>
                <div class=" col-lg-5 col-xl-7 px-0 mx-lg-custom">
                    <img src="{{ asset('frontend/images/bg-image/line.png') }}" alt="" class="line mx-2 w-100">
                </div>

                <div class=" col-lg-2 px-lg-3 text-lg-start mx-lg-custom">
                    <span class="profile-title "> Exhibitions</span>
                </div>
            </div>
        </div>
        <!-- portfolio-section start -->
        <section class=" prt-row prt-bg  portfolio-section clearfix mt-lg-4 pt-40 pb-10 index px-xl-2 mb-0 pt-0">
            <div class="container-fluid">
                <!-- slick_slider -->
                <div class="row">
                    @forelse($exhibitions as $exhibition)
                        <div class="col-lg-4 col-md-6">
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
                                                        <h3><a href="{{ route('frontend.exhibitions.show', $exhibition->slug) }}">{{ ucfirst($exhibition->title)  }}</a>
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
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 m-b10">
                            <p class="text-center mb-0">No Exhibitions Found</p>
                        </div>
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
                    </div> --}}
                    {{-- <div class="col-lg-4">
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
                    </div> --}}
                    {{-- <div class="col-lg-4">
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



        </section>


        {{-- <div class="pagination-block mb-40">
            <a class="next page-numbers" href="#">
                <i class="fas fa-long-arrow-alt-left"></i></a>
            <span class="page-numbers current active">1</span>
            <a class="page-numbers" href="#">2</a>
            <a class="next page-numbers" href="#">
                <i class="fas fa-long-arrow-alt-right"></i></a>
        </div> --}}
        <div class="row text-center">
            <div class="col-xl-12 col-lg-12">
                <nav aria-label="Blog Pagination">
                    <ul class="pagination text-center m-b30 m-t40">
                        <li class="page-item">
                            {{ $exhibitions->onEachSide(1)->links('pagination::bootstrap-4') }}
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

@endsection
