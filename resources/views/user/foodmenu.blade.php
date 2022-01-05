@extends('layouts.main')
@section('content')
<div>
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
                    <a href="#" class="gallery-filter gallery-filter-active" data-filter="*"><span>01.</span>All
                        Dishes</a>
                    <a href="#" class="gallery-filter " data-filter=".starter"><span>02.</span>Starter</a>
                    <a href="#" class="gallery-filter" data-filter=".desserts"><span>03.</span>Desserts</a>
                    <a href="#" class="gallery-filter" data-filter=".seafood"><span>04.</span>Sea Food</a>
                    <a href="#" class="gallery-filter" data-filter=".drinks"><span>05.</span>Drinks</a>
                </div>
                <!-- gallery-filters end-->
                <!-- gallery start -->
                <div class="gallery-items grid-big-pad  lightgallery three-column fl-wrap" style="margin-bottom:50px;">
                    <!-- gallery-item-->
                    <div class="gallery-item desserts">
                        <div class="grid-item-holder hov_zoom">
                            <a href="images/menu/1.jpg" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <img src="images/menu/1.jpg" alt="">
                        </div>
                        <div class="grid-item-details">
                            <h3>Soft shell crab <span>Sale -30%</span></h3>
                            <p>Seasoned with an herb crust, served with au jus and handcarved to order. </p>
                            <div class="grid-item_price">
                                <span>$29</span>
                                <div class="add_cart">Add To Cart</div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item seafood">
                        <div class="grid-item-holder hov_zoom">
                            <a href="images/menu/2.jpg" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <img src="images/menu/2.jpg" alt="">
                        </div>
                        <div class="grid-item-details">
                            <h3>Fish pie</h3>
                            <p>Our tender, juicy filet paired with a steamed tempor lobster tail. </p>
                            <div class="grid-item_price">
                                <span>$62</span>
                                <div class="add_cart">Add To Cart</div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item drinks">
                        <div class="grid-item-holder hov_zoom">
                            <a href="images/menu/3.jpg" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <img src="images/menu/3.jpg" alt="">
                        </div>
                        <div class="grid-item-details">
                            <h3>Victoria's Filet Mignon <span>Chef selection</span></h3>
                            <p>Pellentesque eros mi, faucibus tempor scelerisque nec, efficitur nec nunc.</p>
                            <div class="grid-item_price">
                                <span>$18</span>
                                <div class="add_cart">Add To Cart</div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item seafood">
                        <div class="grid-item-holder hov_zoom">
                            <a href="images/menu/4.jpg" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <img src="images/menu/4.jpg" alt="">
                        </div>
                        <div class="grid-item-details">
                            <h3>Prime Cuts of Beef</h3>
                            <p>Granny help you treat yourself with a empor scelerisque different meal everyday.</p>
                            <div class="grid-item_price">
                                <span>$31</span>
                                <div class="add_cart">Add To Cart</div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item starter">
                        <div class="grid-item-holder hov_zoom">
                            <a href="images/menu/5.jpg" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <img src="images/menu/5.jpg" alt="">
                        </div>
                        <div class="grid-item-details">
                            <h3>Miso chicken <span>Sale -20%</span></h3>
                            <p>Seasoned with an herb crust, served with au empor scelerisque jus and handcarved to
                                order. </p>
                            <div class="grid-item_price">
                                <span>$67</span>
                                <div class="add_cart">Add To Cart</div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item drinks desserts">
                        <div class="grid-item-holder hov_zoom">
                            <a href="images/menu/10.jpg" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <img src="images/menu/10.jpg" alt="">
                        </div>
                        <div class="grid-item-details">
                            <h3>Salmon Riverland</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                            <div class="grid-item_price">
                                <span>$22</span>
                                <div class="add_cart">Add To Cart</div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item seafood starter">
                        <div class="grid-item-holder hov_zoom">
                            <a href="images/menu/7.jpg" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <img src="images/menu/7.jpg" alt="">
                        </div>
                        <div class="grid-item-details">
                            <h3>Slow-Roasted Prime Rib</h3>
                            <p>Seasoned with an herb crust, served with au jus and handcarved to order, crust, served .
                            </p>
                            <div class="grid-item_price">
                                <span>$44</span>
                                <div class="add_cart">Add To Cart</div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item desserts">
                        <div class="grid-item-holder hov_zoom">
                            <a href="images/menu/8.jpg" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <img src="images/menu/8.jpg" alt="">
                        </div>
                        <div class="grid-item-details">
                            <h3>Meatball tagliatelle <span>Sale -10%</span></h3>
                            <p>Granny help you treat yourself with a empor scelerisque different meal everyday.</p>
                            <div class="grid-item_price">
                                <span>$39</span>
                                <div class="add_cart">Add To Cart</div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
                    <!-- gallery-item-->
                    <div class="gallery-item starter">
                        <div class="grid-item-holder hov_zoom">
                            <a href="images/menu/9.jpg" class="box-media-zoom   popup-image"><i
                                    class="fal fa-search"></i></a>
                            <img src="images/menu/9.jpg" alt="">
                        </div>
                        <div class="grid-item-details">
                            <h3>Fried Potatoes</h3>
                            <p>Our tender, juicy filet paired with a steamed tempor lobster tail.</p>
                            <div class="grid-item_price">
                                <span>$12</span>
                                <div class="add_cart">Add To Cart</div>
                            </div>
                        </div>
                    </div>
                    <!-- gallery-item end-->
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
</div>
@endsection
