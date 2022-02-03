@extends('layouts.main')
@section('content')
<div>
    <!-- content  -->
    <div class="content">
        <!--  section  -->
        <section class="parallax-section hero-section hidden-section" data-scrollax-parent="true">
            <div class="bg par-elem " data-bg="images/bg/4.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
            <div class="overlay"></div>
            <div class="container">
                <div class="section-title">
                    <h4>Enjoy your time in our restaurant with pleasure.</h4>
                    <h2> Restaurant Galley</h2>
                    <div class="dots-separator fl-wrap"><span></span></div>
                </div>
            </div>
            <div class="hero-section-scroll">
                <div class="mousey">
                    <div class="scroller"></div>
                </div>
            </div>
            <div class="brush-dec"></div>
        </section>
        <!--  section  end-->
        <!--  section  -->
        <section class="hidden-section" data-scrollax-parent="true">
            <div class="container">
                <div class="gallery_filter-button btn">Show Filters <i class="fal fa-long-arrow-down"></i></div>
                <!-- gallery-filters -->
                <div class="gallery-filters gth">
                    <a href="#" class="gallery-filter gallery-filter-active" data-filter="*"><span>01.</span>All
                        Images</a>
                    <a href="#" class="gallery-filter " data-filter=".restuarant_view"><span>02.</span>Restuarant Inside View</a>
                    <a href="#" class="gallery-filter" data-filter=".meals"><span>03.</span>Meals</a>
                    <a href="#" class="gallery-filter" data-filter=".events"><span>04.</span>Events</a>
                    <a href="#" class="gallery-filter" data-filter=".trending"><span>05.</span>Trending</a>
                </div>
                <!-- gallery-filters end-->
                @foreach ($explores as $explore)

                <!-- gallery start -->
                <div class="gallery-items min-pad  lightgallery three-column fl-wrap" style="margin-bottom:50px;">
                    <!-- gallery-item-->
                    <div class="gallery-item {{$explore->filter_by}} ">
                        <div class="grid-item-holder hov_zoom">
                            <a href="/explore_image/{{$explore->image}}" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <img src="/explore_image/{{$explore->image}}" alt="">
                        </div>
                    </div>
                    <!-- gallery-item end-->

                    @endforeach
                </div>
                <!-- gallery end -->
                <div class="clearfix"></div>
                <div class="bold-separator bold-separator_dark"><span></span></div>
                <div class="clearfix"></div>
                <a href="#" class="btn show-rb">Book table now<i class="fal fa-long-arrow-right"></i></a>
            </div>
        </section>
        <!--  section end  -->
        <div class="brush-dec2 brush-dec_bottom"></div>
    </div>
    <!-- content end  -->
</div>
@endsection
