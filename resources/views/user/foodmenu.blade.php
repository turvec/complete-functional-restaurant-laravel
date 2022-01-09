@extends('layouts.main')
@section('content')
    <!-- content  -->
    <div class="content">
        <!--  section  -->
        <section class="parallax-section hero-section hidden-section" data-scrollax-parent="true">
            <div class="bg par-elem " data-bg="images/bg/12.jpg" data-scrollax="properties: { translateY: '30%' }">
            </div>
            <div class="overlay"></div>
            <div class="container">
                <div class="section-title">
                    <h4>Enjoy your time in our restaurant with pleasure.</h4>
                    <h2>Discover Our Menu</h2>
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
        <section class="hidden-section" data-scrollax-parent="true" id="sec2">
            <div class="container">
                <div class="gallery_filter-button btn">Show Filters <i class="fal fa-long-arrow-down"></i></div>
                <!-- gallery-filters -->
                <div class="gallery-filters gth">
                    <a href="#" class="gallery-filter gallery-filter-active"  data-filter="*"><span>01.</span>All Dishes</a>
                    <a href="#" class="gallery-filter " data-filter=".3"><span>02.</span>Starter</a>
                    <a href="#" class="gallery-filter" data-filter=".2"><span>03.</span>Desserts</a>
                    <a href="#" class="gallery-filter" data-filter=".1"><span>04.</span>Sea Food</a>
                </div>
                <!-- gallery-filters end-->
                <!-- gallery start -->
                <div class="gallery-items grid-big-pad  lightgallery three-column fl-wrap" style="margin-bottom:50px;">
                    @foreach ($foods as $food)
                    <!-- gallery-item-->
                    <form action="" method="POST">@csrf
                    <div class="gallery-item {{$food->category_id}}">
                        <div class="grid-item-holder hov_zoom">
                        <a href="/foodimage/{{$food->image}}" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <img src="/foodimage/{{$food->image}}" alt="">
                        </div>
                        <div class="grid-item-details">
                            <h3>{{$food->title}} <span></span></h3>
                            <p>{{$food->description}} </p>
                            <div class="grid-item_price">
                                <span>${{$food->price}} </span>
                                <div >
                                    <button type="submit" class="add_cart" >
                                        <input type="number" min="1" class="form-control" value="1" style="width:60px">
                                        Add To Cart
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <!-- gallery-item end-->
                    @endforeach
                </div>
                <!-- gallery end -->
                <div class="clearfix"></div>
                <div class="bold-separator bold-separator_dark"><span></span></div>
                <div class="clearfix"></div>
                <a href="#" class="btn  ">Download menu in PDF<i class="fal fa-long-arrow-right"></i></a>
            </div>
            <div class="section-bg">
                <div class="bg" data-bg="images/bg/dec/section-bg.png"></div>
            </div>
        </section>
        <!--  section end  -->
        <div class="brush-dec2 brush-dec_bottom"></div>
    </div>
    <!-- content end  -->
@endsection
