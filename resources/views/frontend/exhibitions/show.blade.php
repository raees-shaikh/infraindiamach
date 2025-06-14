@extends('frontend.layouts.app')
@section('title', ucfirst($exhibition->title . ' - Exhibitions -'))
@section('content')

    <!-- section title -->
    <div class="prt-page-title-row">
        <div class="prt-page-title-row-inner">
            <div class="container">
                <div class="row">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="prt-page-title-row-heading">
                                <div class="page-title-heading">
                                    <h2 class="title">{{ ucfirst($exhibition->title) }}</h2>
                                </div>
                                <div class="breadcrumb-wrapper">
                                    <span>
                                        <a  href="{{ url('/') }}">Home </a></span>
                                    <span>
                                        <a  href="{{ route('frontend.exhibitions.index') }}" class="action">Exhibitions </a></span>
                                    {{-- <span class="action">{{ ucfirst($exhibition->title) }}</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="bg-page-title-overlay"></div> -->
        </div>
    </div>
    <!-- section title end -->

    <!-- site-main start -->
    <div class="site-main">

        <!-- team-detail section start -->
        <section class="prt-row team-detail-section clearfix pt-4  pb-40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-lg-2 order-1">
                        <div class="team-member-single-content px-lg-3 res-991-pr-0">
                            <div class=" mt-lg-1 mt-4 mb-0 mb-lg-4">
                                <span><i class="fa fa-calendar text-black" aria-hidden="true"></i>
                                    {{ dd_format($exhibition->start_date, 'd-m-Y') }} To
                                    {{ dd_format($exhibition->end_date, 'd-m-Y') }}</span>
                            </div>
                            <div class="row pt-10">
                                <div class="col">
                                    <h3 class="team-member-single-title-h3 mt-0">{{ ucfirst($exhibition->title) }}
                                    </h3>
                                </div>

                            </div>


                            <h4 class=" h4 mt-0 mb-0">Description</h4>

                            <div class="team-member-desc pt-0">
                                <p class="mt-0">{!! $exhibition->descriptions !!}
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="team-detail-feac">
                            <div class="res-991-mt-30">
                                <img class="img-fluid w-100 exhi-img"
                                    src="{{ asset('storage/images/exhibition/' . $exhibition->image) }}" loading="lazy"
                                    alt="detail-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-detail section end -->
        @if ($medias->count() > 0)
            <div class="container">
                <h3 class="team-member-single-title-h3 mt-4 text-center">Gallery</h3>
                <div id="lightgallery">
                    <div class="grid-row justify-content-center">
                        @forelse ($medias as $media)
                            <a href="{{ asset('storage/images/exhibition/' . $media->filename) }}" data-lg-size="1600-2400">
                                <img alt="img1" src="{{ asset('storage/images/exhibition/' . $media->filename) }}">
                            </a>

                            {{-- <a href="frontend/images/portfolio-img-02.jpg" data-lg-size="1024-800">
                    <img alt="img2" src="{{ asset('frontend/images/portfolio-img-02.jpg') }}" />
                </a>

                <a href="frontend/images/portfolio-img-03.jpg" data-lg-size="1600-2400">
                    <img alt="img1" src="{{ asset('frontend/images/portfolio-img-03.jpg') }}">
                </a>
                <a href="frontend/images/portfolio-img-04.jpg" data-lg-size="1024-800">
                    <img alt="img2" src="{{ asset('frontend/images/portfolio-img-04.jpg') }}" />
                </a> --}}
                        @empty
                            <div class="text-center pb-4">
                                No Gallery Found
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        @endif


    </div>
    <!-- site-main end -->

@endsection
