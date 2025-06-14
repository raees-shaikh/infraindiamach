@extends('frontend.layouts.app')
@section('title', ucfirst($offer->title . ' - ' . $category->title . ' - Latest Offers - '))
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
                                    <h2 class="title">{{ $offer->title }}</h2>
                                </div>
                                <div class="breadcrumb-wrapper">
                                    <span>
                                        <a  href="{{ url('/') }}">Home</a>
                                    </span>
                                    <span>
                                        <a  href="{{ route('latest-offers') }}">Latest Offers</a>
                                    </span>
                                    <span>
                                        <a  href="{{ route('offer-index', $category->slug) }}"
                                            class="">{{ $category->title }}</a>
                                    </span>
                                    <span class="action">{{ $offer->title }} </span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="bg-page-title-overlay"></div> -->

        </div>
        <!-- section title end -->
        <!--  sidebar-start -->
        <div class="prt-row sidebar prt-sidebar-right clearfix pt-45 pt-20-after-md pb-0">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-8 content-area">
                        <!-- post -->
                        <div class="post prt-blog-classic clearfix">
                            <!-- post-featured-wrapper -->
                            <header class="entry-header">
                                <h2 class="entry-title bb-none">{{ $offer->title }}</h2>
                            </header>
                            <div class="prt-post-featured-wrapper prt-featured-wrapper">
                                @if ($offer->image)
                                    <div class="prt-post-featured">
                                        <img class="img-fluid offer-show-img"
                                            src="{{ asset('storage/images/offers/' . $offer->image) }}" alt="blog-img">

                                    </div>
                                @endif
                            </div><!-- post-featured-wrapper end -->
                            <!-- prt-blog-classic-content -->
                            <div class="prt-blog-classic-content pb-5 box-shadow-none">
                                <div class="prt-post-entry-header">

                                </div>
                                <div class="entry-content">
                                    <div class="prt-box-desc-text">
                                        {!! $offer->body !!}
                                    </div>

                                </div>
                            </div><!-- prt-blog-classic-content end -->
                        </div><!-- post end -->
                        <!-- post -->
                        <div class="post prt-blog-classic clearfix">
                            <!-- post-featured-wrapper -->
                            <div class="prt-post-featured-wrapper prt-featured-wrapper">

                            </div><!-- post-featured-wrapper end -->
                            <!-- prt-blog-classic-content -->

                        </div><!-- post end -->
                        <!-- post -->
                        <div class="post prt-blog-classic clearfix">

                            <!-- prt-blog-classic-content -->

                        </div><!-- post end -->


                    </div>
                    <div class="col-lg-4 widget-area sidebar-right">

                        <div class="widget widget-Categories with-title">
                            <h3 class="widget-title"> Related Offers</h3>
                            <ul>
                                @forelse ($relatedOffers as $ro)
                                    <li><a
                                            href="{{ route('offer-show', ['category' => $category->slug, 'offer' => $ro->slug]) }}">{{ $ro->title }}</a>
                                    </li>
                                @empty
                                    <div class="text-start">No Related Offers Found</div>
                                @endforelse
                            </ul>
                        </div>


                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar-end -->

    </div>
@endsection
