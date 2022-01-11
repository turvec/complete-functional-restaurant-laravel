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
                    @foreach ($foods as $food)
                    <a href="#" class="gallery-filter " data-filter=".{{$food->category->name}}"><span>01.</span>{{$food->category->name}}</a>
                    @endforeach
                </div>
                <!-- gallery-filters end-->
                <!-- gallery start -->
                <div class="gallery-items grid-big-pad  lightgallery three-column fl-wrap" style="margin-bottom:50px;">
                    @foreach ($foods as $food)
                    <!-- gallery-item-->
                <form action="{{route('add_cart',$food->id)}}" method="POST">@csrf
                    <div class="gallery-item {{$food->category->name}}">
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
                                <div class="add_cart" >
                                        Add To Cart
                                    <input type="number" name="quantity" min="1" class="form-control" value="1" style="width:45px">
                                    <button type="submit"   >
                                       add
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
