@extends('layouts.main')
@section('content')
<div>
    <!-- content  -->
    <div class="content">
        <!--  section  -->
        <section class="parallax-section hero-section hidden-section" data-scrollax-parent="true">
            <div class="bg par-elem "  data-bg="images/bg/4.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
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
                    <a href="#" class="gallery-filter gallery-filter-active"  data-filter="*"><span>01.</span>All Images</a>
                    <a href="#" class="gallery-filter " data-filter=".dishes"><span>02.</span>Dishes</a>
                    <a href="#" class="gallery-filter" data-filter=".resta_img"><span>03.</span>Restaurant</a>
                    <a href="#" class="gallery-filter" data-filter=".events"><span>04.</span>Events</a>
                    <a href="#" class="gallery-filter" data-filter=".video_links"><span>05.</span>Video</a>
                </div>
                <!-- gallery-filters end-->
                <!-- gallery start -->
                <div class="gallery-items min-pad  lightgallery three-column fl-wrap" style="margin-bottom:50px;">
                    <!-- gallery-item-->
                    <div class="gallery-item dishes">
                        <div class="grid-item-holder hov_zoom">
                            <a href="images/all/1.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                            <img  src="images/all/1.jpg"    alt="">
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item resta_img events">
                        <div class="grid-item-holder hov_zoom">
                            <a href="images/all/14.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                            <img  src="images/all/14.jpg"    alt="">
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item gallery-item-second dishes">
                        <div class="grid-item-holder hov_zoom">
                            <a href="images/all/9.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                            <img  src="images/all/9.jpg"    alt="">
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item resta_img events">
                        <div class="grid-item-holder hov_zoom">
                            <a href="images/all/10.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                            <img  src="images/all/10.jpg"    alt="">
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item resta_img video_links">
                        <div class="grid-item-holder hov_zoom">
                            <a href="https://vimeo.com/10322316" class="box-media-zoom   popup-image"><i class="fal fa-play"></i></a>
                            <img  src="images/all/11.jpg"    alt="">
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item dishes">
                        <div class="grid-item-holder hov_zoom">
                            <a href="images/all/17.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                            <img  src="images/all/17.jpg"    alt="">
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item resta_img events video_links">
                        <div class="grid-item-holder hov_zoom">
                            <a href="https://www.youtube.com/watch?v=GlrxcuEDyF8" class="box-media-zoom   popup-image"><i class="fal fa-play"></i></a>
                            <img  src="images/all/16.jpg"    alt="">
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item resta_img dishes">
                        <div class="grid-item-holder hov_zoom">
                            <a href="images/all/13.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                            <img  src="images/all/13.jpg"    alt="">
                        </div>
                    </div>
                    <!-- gallery-item end-->
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
