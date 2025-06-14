@extends('frontend.layouts.app')
@section('title', ucfirst($category->title . ' - Latest Offers -'))
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
                                    <h2 class="title">{{ $category->title }}</h2>
                                </div>
                                <div class="breadcrumb-wrapper">
                                    <span>
                                        <a  href="{{ route('frontend.index') }}">Home</a>
                                    </span>
                                    <span>
                                        <a  href="{{ route('latest-offers') }}">Latest Offers</a>
                                    </span>
                                    <span class="action">{{ $category->title }}</span>
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
        <div class="prt-row sidebar prt-sidebar-right clearfix  pt-45 pb-0">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-8 content-area">
                        <div class="row">
                            @forelse($offers as $offer)
                                <div class="col-md-6">
                                    <!-- post -->
                                    <div class="post prt-blog-classic clearfix w-100">
                                        <!-- post-featured-wrapper -->
                                        <div class="prt-post-featured-wrapper prt-featured-wrapper w-100 ">
                                            <div class="prt-post-featured w-100">
                                                {{-- <img width="894" height="596" class="img-fluid"
                                                    src="{{ asset('storage/images/offers/' . $offer->image) }}"
                                                    alt="blog-img"> --}}
                                            </div>
                                        </div><!-- post-featured-wrapper end -->
                                        <!-- prt-blog-classic-content -->
                                        <div class="prt-blog-classic-content card h-100 w-100">
                                            <div class="prt-post-entry-header">

                                                <header class="entry-header">
                                                    <h2 class="entry-title"><a
                                                            href="{{ route('offer-show', ['category' => $category->slug, 'offer' => $offer->slug]) }}">{{ $offer->title }}</a>
                                                    </h2>
                                                </header>
                                            </div>
                                            <div class="entry-content">

                                                <div class="prt-blogbox-footer-readmore">
                                                    <a class="prt-btn prt-btn-size-md prt-btn-color-darkgrey btn-inline prt-icon-btn-right"
                                                        href="{{ route('offer-show', ['category' => $category->slug, 'offer' => $offer->slug]) }}">Read
                                                        More</a>
                                                </div>
                                            </div>
                                        </div><!-- prt-blog-classic-content end -->
                                    </div><!-- post end -->
                                    <!-- post -->
                                    <div class="post prt-blog-classic clearfix">
                                        <!-- post-featured-wrapper -->
                                        <div class="prt-post-featured-wrapper prt-featured-wrapper">
                                        </div><!-- post-featured-wrapper end -->
                                    </div><!-- post end -->
                                    <!-- post -->
                                    <div class="post prt-blog-classic clearfix">
                                    </div><!-- post end -->


                                </div>
                            @empty
                                <div class="text-center">No Offers Found</div>
                            @endforelse
                        </div>
                        {{-- <div class="pagination-block mt-0">
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
                                        <li>
                                            {{ $offers->onEachSide(1)->links('pagination::bootstrap-4') }}
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 widget-area sidebar-right pb-30">
                        <div class="widget widget-Categories with-title">
                            <h3 class="widget-title">Related Categories</h3>
                            <ul>
                                @forelse ($relatedCategories as $rCategory)
                                    <li><a href="{{ route('offer-index', $rCategory->slug) }}">{{ $rCategory->title }}</a>
                                    </li>
                                @empty
                                    <div class="text-center">No Related Categories Found</div>
                                @endforelse
                                {{-- <li><a href="{{ url('show') }}">Industry Insight</a></li>
                                <li><a href="{{ url('show') }}">News & Analysis</a></li>
                                <li><a href="{{ url('show') }}">Textile World</a></li>
                                <li><a href="{{ url('show') }}">Trade & Business</a></li>
                                <li><a href="{{ url('show') }}">Traditional</a></li> --}}
                            </ul>
                        </div>


                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar-end -->

    </div>
    <!-- site-main end -->
@endsection
