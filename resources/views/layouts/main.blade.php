<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from restabook.kwst.net/light/index5.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jan 2022 01:48:48 GMT -->

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Restabook - Responsive Restaurant / Cafe / Pub Template</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/plugins.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/color.css">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="images/favicon.ico">
</head>

<body>
    <!-- lodaer  -->
    <div class="loader-wrap">
        <div class="loader-item">
            <div class="cd-loader-layer" data-frame="25">
                <div class="loader-layer"></div>
            </div>
            <span class="loader"></span>
        </div>
    </div>
    <!-- loader end  -->
    <!-- main start  -->
    <div id="main">
        <!-- header  -->
        <header class="main-header">
            <!-- header-top  -->
            <div class="header-top">
                <div class="container">
                    <div class="lang-wrap"><a href="#" class="act-lang">En</a><span>/</span><a href="#">Fr</a></div>
                    <div class="header-top_contacts"><a href="#"><span>Call now:</span> +489756412322</a><a
                            href="#"><span>Write :</span> yourmail@domain.com</a></div>
                </div>
            </div>
            <!--header-top end -->
            <!-- header-inner -->
            <div class="header-inner  fl-wrap">
                <div class="container">
                    <div class="header-container fl-wrap">
                        <a href="index.html" class="logo-holder ajax"><img src="images/logo.png" alt=""></a>
                        <div class="show-reserv_button show-rb"><span>Reservation</span> <i class="fal fa-bookmark"></i>
                        </div>
                        <div class="show-share-btn showshare htact"><i class="fal fa-bullhorn"></i> <span
                                class="header-tooltip">Share</span></div>
                        <div class="show-cart sc_btn htact"><i class="fal fa-shopping-bag"></i><span
                                class="show-cart_count">3</span><span class="header-tooltip">Your Cart</span></div>
                        <!-- nav-button-wrap-->
                        <div class="nav-button-wrap">
                            <div class="nav-button">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
                        <!-- nav-button-wrap end-->
                        <!--  navigation -->
                        <div class="nav-holder main-menu">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#" class="act-link">Home <i class="fas fa-caret-down"></i></a>
                                        <!--second level -->
                                        <ul>
                                            <li><a href="index.html">Parallax Image</a></li>
                                            <li><a href="index2.html">Slider</a></li>
                                            <li><a href="index3.html">Carousel</a></li>
                                            <li><a href="index4.html">Slideshow</a></li>
                                            <li><a href="index5.html">Video</a></li>
                                            <li><a href="onepage.html">One Page</a></li>
                                        </ul>
                                        <!--second level end-->
                                    </li>
                                    <li>
                                        <a href="#">Menu<i class="fas fa-caret-down"></i></a>
                                        <!--second level -->
                                        <ul>
                                            <li><a href="menu.html">Menu 1</a></li>
                                            <li><a href="menu2.html">Menu 2</a></li>
                                            <li><a href="menu3.html">Menu 3</a></li>
                                        </ul>
                                        <!--second level end-->
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="blog.html">News</a></li>
                                    <li>
                                        <a href="#">Pages<i class="fas fa-caret-down"></i></a>
                                        <!--second level -->
                                        <ul>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="product-single.html">Product Single</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="gallery.html">Gallery</a></li>
                                            <li><a href="blog-single.html">Blog single</a></li>
                                            <li><a href="404.html">404</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                        </ul>
                                        <!--second level end-->
                                    </li>
                                    <li>
                                        @if (Route::has('login'))
                                        @auth
                                        <a href="#">{{Auth::user()->name}}<i class="fas fa-caret-down"></i></a>
                                        <!--second level -->
                                        <ul>
                                            <li>
                                                <a href="">

                                                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                                        {{ __('Profile') }}
                                                    </x-jet-dropdown-link>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="">
                                                    <!-- Authentication -->
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf

                                                        <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                                            {{ __('Log Out') }}
                                                        </x-jet-dropdown-link>
                                                    </form>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--second level end-->
                                        @else
                                        <a href="{{ route('login') }}"
                                            class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                        @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                        @endif
                                        @endauth
                                        @endif
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- navigation  end -->
                        <!-- header-cart_wrap  -->
                        <div class="header-cart_wrap novis_cart">
                            <div class="header-cart_title">Your Cart <span>4 items</span></div>
                            <div class="header-cart_wrap_container fl-wrap">
                                <div class="box-widget-content">
                                    <div class="widget-posts fl-wrap">
                                        <ol>
                                            <li class="clearfix">
                                                <a href="#" class="widget-posts-img"><img src="images/menu/1.jpg"
                                                        class="respimg" alt=""></a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" title="">Grilled Steaks</a>
                                                    <div class="widget-posts-descr_calc clearfix">1 <span>x</span> $45
                                                    </div>
                                                </div>
                                                <div class="clear-cart_button"><i class="fal fa-times"></i></div>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#" class="widget-posts-img"><img src="images/menu/2.jpg"
                                                        class="respimg" alt=""></a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" title="">Cripsy Lobster & Shrimp Bites</a>
                                                    <div class="widget-posts-descr_calc clearfix">2 <span>x</span> $22
                                                    </div>
                                                </div>
                                                <div class="clear-cart_button"><i class="fal fa-times"></i></div>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#" class="widget-posts-img"><img src="images/menu/3.jpg"
                                                        class="respimg" alt=""></a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" title="">Chicken tortilla soup</a>
                                                    <div class="widget-posts-descr_calc clearfix">1 <span>x</span> $37
                                                    </div>
                                                </div>
                                                <div class="clear-cart_button"><i class="fal fa-times"></i></div>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="header-cart_wrap_total fl-wrap">
                                <div class="header-cart_wrap_total_item">Subtotal : <span>$147</span></div>
                            </div>
                            <div class="header-cart_wrap_footer fl-wrap">
                                <a href="cart.html"> View Cart</a>
                                <a href="checkout.html"> Checkout</a>
                            </div>
                        </div>
                        <!-- header-cart_wrap end  -->
                        <!-- share-wrapper -->
                        <div class="share-wrapper isShare">
                            <div class="share-container fl-wrap"></div>
                        </div>
                        <!-- share-wrapper-end -->
                    </div>
                </div>
            </div>
            <!-- header-inner end  -->
        </header>
        <!--header end -->
        <!-- wrapper  -->
        <div id="wrapper">
            <!-- hero-wrap-->
            <div class="hero-wrap fl-wrap full-height">
                <div class="media-container">

                    <div class="video-container">
                        <video playsinline autoplay loop muted class="bgvid">
                            <source src="video/1.mp4" type="video/mp4">
                        </video>
                    </div>
                    <!--
                            Vimeo code

                                <div class="video-holder">
                                    <div  class="background-vimeo" data-vim="34741214"> </div>
                                </div>
                        <!--
                            Youtube code

                             <div  class="background-youtube-wrapper" data-vid="Hg5iNVSp2z8" data-mv="1"> </div> -->
                    <div class="overlay"></div>
                </div>
                <div class="hero-title-wrap fl-wrap">
                    <div class="container">
                        <div class="hero-title">
                            <h4>Top Services and Premium Cuisine </h4>
                            <h2>Welcome to Restabook Restaurant</h2>
                            <a href="menu.html" class="hero_btn">Check out our Menu <i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <!--hero_promo-wrap-->
                <div class="hero_promo-wrap bot-element2">
                    <div class="hero_promo-button">
                        <a href="https://vimeo.com/10322316" class="image-popup"><i class="fas fa-play"></i></a>
                    </div>
                    <div class="hero_promo-title">
                        <h4>View Promo Video</h4>
                    </div>
                </div>
                <!--hero_promo-wrap end-->
                <!--hero-social-->
                <div class="hero-social">
                    <ul>
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                    </ul>
                </div>
                <!--hero-social end-->
                <!-- hero-bottom-container -->
                <div class="hero-bottom-container">
                    <div class="container">
                        <div class="scroll-down-wrap">
                            <div class="mousey">
                                <div class="scroller"></div>
                            </div>
                            <span>Scroll down to Discover</span>
                        </div>
                        <a href="#sec2" class="sd_btn custom-scroll-link"><i class="fal fa-chevron-double-down"></i></a>
                    </div>
                </div>
                <!-- hero-bottom-container -->
                <div class="hero-dec_top"></div>
                <div class="hero-dec_bottom"></div>
                <div class="brush-dec"></div>
            </div>
            <!-- hero-wrap  end -->
            <!-- content  -->
            <div class="content">
                <section class="hidden-section big-padding" data-scrollax-parent="true" id="sec2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="section-title text-align_left">
                                    <h4>Our story</h4>
                                    <h2>Few words about us</h2>
                                    <div class="dots-separator fl-wrap"><span></span></div>
                                </div>
                                <div class="text-block ">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium totam aperiam. Eaque ipsa quae ab illo inventore veritatis
                                        et quasi architecto beatae vitae dicta sunt.
                                        Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                                        laboriosam, nisi ut aliquid ex ea commodi consequatur.
                                    </p>
                                    <p> Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                                        molestiae consequatur.</p>
                                    <a href="menu.html" class="btn fl-btn">Explore Our Menu<i
                                            class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="image-collge-wrap fl-wrap">
                                    <div class="main-iamge">
                                        <img src="images/all/3.jpg" alt="">
                                    </div>
                                    <div class="images-collage-item" style="width:65%" data-position-left="68"
                                        data-position-top="-15" data-zindex="2" data-opacity="1.0"><img
                                            src="images/all/8.jpg" alt=""></div>
                                    <div class="images-collage-item col_par" style="width:120px"
                                        data-position-left="-23" data-position-top="-17" data-zindex="9"
                                        data-scrollax="properties: { translateY: '150px' }"><img src="images/cube.png"
                                            alt=""></div>
                                </div>
                            </div>
                        </div>
                        <div class="section-dec sec-dec_top"></div>
                        <div class="wave-bg" data-scrollax="properties: { translateY: '-150px' }"></div>
                    </div>
                </section>
                <!--  section end  -->
                <!-- section   -->
                <section class="column-section no-padding hidden-section" data-scrollax-parent="true" id="sec4">
                    <div class="column-wrap-bg left-wrap">
                        <div class="bg par-elem " data-bg="images/bg/12.jpg"
                            data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="quote-box">
                            <i class="fal fa-quote-right"></i>
                            <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                accusantium."</p>
                            <div class="signature"><img src="images/signature.png" alt=""></div>
                            <h4>Kevin Kowalsky - Restaurant�s cheaf</h4>
                        </div>
                    </div>
                    <div class="column-section-wrap dark-bg">
                        <div class="container">
                            <div class="column-text">
                                <div class="section-title">
                                    <h4>Call For Reservations</h4>
                                    <h2>Opening Hours</h2>
                                    <div class="dots-separator fl-wrap"><span></span></div>
                                </div>
                                <div class="work-time fl-wrap">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3>Sunday to Tuesday</h3>
                                            <div class="hours">
                                                09:00<br>
                                                22:00
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h3>Friday to Saturday</h3>
                                            <div class="hours">
                                                11:00<br>
                                                19:00
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="bold-separator"><span></span></div>
                                <div class="big-number"><a href="#">+7(111)123456789</a></div>
                            </div>
                        </div>
                        <div class="illustration_bg">
                            <div class="bg" data-bg="images/bg/dec/7.png"></div>
                        </div>
                    </div>
                </section>
                <!-- section end -->
                <!--  section    -->
                <section data-scrollax-parent="true">
                    <div class="container">
                        <div class="section-title">
                            <h4>Why people choose us</h4>
                            <h2>Prepare for first-class service</h2>
                            <div class="dots-separator fl-wrap"><span></span></div>
                        </div>
                        <div class="cards-wrap fl-wrap">
                            <div class="row">
                                <!--card item -->
                                <div class="col-md-4">
                                    <div class="content-inner fl-wrap">
                                        <div class="content-front">
                                            <div class="cf-inner">
                                                <div class="bg " data-bg="images/services/1.jpg"></div>
                                                <div class="overlay"></div>
                                                <div class="inner">
                                                    <h2>Daily New Fresh Menus</h2>
                                                    <h4>Start eating better</h4>
                                                </div>
                                                <div class="serv-num">01.</div>
                                            </div>
                                        </div>
                                        <div class="content-back">
                                            <div class="cf-inner">
                                                <div class="inner">
                                                    <div class="dec-icon">
                                                        <i class="fal fa-fish"></i>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                                        in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--card item end -->
                                <!--card item -->
                                <div class="col-md-4">
                                    <div class="content-inner fl-wrap">
                                        <div class="content-front">
                                            <div class="cf-inner">
                                                <div class="bg " data-bg="images/services/2.jpg"></div>
                                                <div class="overlay"></div>
                                                <div class="inner">
                                                    <h2>Fresh Ingredient, Tasty Meals</h2>
                                                    <h4>Quality is the heart</h4>
                                                </div>
                                                <div class="serv-num">02.</div>
                                            </div>
                                        </div>
                                        <div class="content-back">
                                            <div class="cf-inner">
                                                <div class="inner">
                                                    <div class="dec-icon">
                                                        <i class="fal fa-carrot"></i>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                                        in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--card item end -->
                                <!--card item -->
                                <div class="col-md-4">
                                    <div class="content-inner fl-wrap">
                                        <div class="content-front">
                                            <div class="cf-inner">
                                                <div class="bg " data-bg="images/services/3.jpg"></div>
                                                <div class="overlay"></div>
                                                <div class="inner">
                                                    <h2>Creative & Talented Chefs</h2>
                                                    <h4>Hot & ready to serve</h4>
                                                </div>
                                                <div class="serv-num">03.</div>
                                            </div>
                                        </div>
                                        <div class="content-back">
                                            <div class="cf-inner">
                                                <div class="inner">
                                                    <div class="dec-icon">
                                                        <i class="fal fa-utensils-alt"></i>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                                                        in pulvinar neque. Nulla finibus lobortis pulvinar.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--card item end -->
                            </div>
                            <div class="section-dec sec-dec_top"></div>
                            <div class="section-dec sec-dec_bottom"></div>
                        </div>
                        <a href="about.html" class="btn fl-btn border-btn">Read More About us <i
                                class="fal fa-long-arrow-right"></i></a>
                        <div class="images-collage-item col_par" style="width:120px" data-position-left="83"
                            data-position-top="87" data-zindex="1" data-scrollax="properties: { translateY: '150px' }">
                            <img src="images/cube.png" alt=""></div>
                    </div>
                    <div class="section-bg">
                        <div class="bg" data-bg="images/bg/dec/section-bg.png"></div>
                    </div>
                </section>
                <!--  section end  -->
                <!--  section  -->
                <section class="parallax-section dark-bg hidden-section" data-scrollax-parent="true">
                    <div class="brush-dec2"></div>
                    <div class="brush-dec"></div>
                    <div class="bg par-elem bg_tabs" data-bg="images/bg/4.jpg"
                        data-scrollax="properties: { translateY: '30%' }"></div>
                    <div class="cd-tabs-layer" data-frame="10">
                        <div class="tabs-layer"></div>
                    </div>
                    <div class="overlay op7"></div>
                    <div class="container">
                        <div class="section-title">
                            <h4>Special menu offers.</h4>
                            <h2>Enjoy Restaurants Specialties</h2>
                            <div class="dots-separator fl-wrap"><span></span></div>
                        </div>
                        <!--  hero-menu_header  end-->
                        <div class="hero-menu tabs-act fl-wrap">
                            <div class="row">
                                <!--  hero-menu_header-->
                                <div class="col-md-3">
                                    <div class="hero-menu_header fl-wrap">
                                        <ul class="tabs-menu     no-list-style change_bg">
                                            <li class="current"><a href="#tab-1"
                                                    data-bgtab="images/bg/4.jpg"><span>01.</span>Main dishes</a></li>
                                            <li><a href="#tab-2"
                                                    data-bgtab="images/bg/6.jpg"><span>02.</span>Starter</a></li>
                                            <li><a href="#tab-3"
                                                    data-bgtab="images/bg/7.jpg"><span>03.</span>Desserts</a></li>
                                            <li><a href="#tab-4" data-bgtab="images/bg/5.jpg"><span>04.</span>Sea
                                                    Food</a></li>
                                            <li><a href="#tab-5" data-bgtab="images/bg/9.jpg"><span>05.</span>Drinks</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--  hero-menu_header  end-->
                                <!--  hero-menu_content   -->
                                <div class="col-md-9">
                                    <div class="hero-menu_content fl-wrap">
                                        <div class="tabs-container">
                                            <div class="tab">
                                                <!--tab -->
                                                <div id="tab-1" class="tab-content first-tab">
                                                    <!-- header-menu-item-->
                                                    <div class="hero-menu-item">
                                                        <div class="hero-menu-item-title fl-wrap">
                                                            <h6><span>01.</span>Soft shell crab</h6>
                                                            <div class="hmi-dec"></div>
                                                            <span class="hero-menu-item-price">$29</span>
                                                        </div>
                                                        <div class="hero-menu-item-details">
                                                            <p>Granny help you treat yourself with a different meal
                                                                everyday</p>
                                                        </div>
                                                    </div>
                                                    <!-- header-menu-item end-->
                                                    <!-- header-menu-item-->
                                                    <div class="hero-menu-item">
                                                        <div class="hero-menu-item-title fl-wrap">
                                                            <h6><span>02.</span>Miso chicken</h6>
                                                            <div class="hmi-dec"></div>
                                                            <span class="hero-menu-item-price">$19</span>
                                                        </div>
                                                        <div class="hero-menu-item-details">
                                                            <p>Etiam tempus felis eros, id lobortis turpis</p>
                                                        </div>
                                                    </div>
                                                    <!-- header-menu-item end-->
                                                    <!-- header-menu-item-->
                                                    <div class="hero-menu-item">
                                                        <div class="hero-menu-item-title fl-wrap">
                                                            <h6><span>03.</span>Fish pie</h6>
                                                            <div class="hmi-dec"></div>
                                                            <span class="hero-menu-item-price">$12</span>
                                                        </div>
                                                        <div class="hero-menu-item-details">
                                                            <p>usce tempus tempus maximus volutpat</p>
                                                        </div>
                                                    </div>
                                                    <!-- header-menu-item end-->
                                                    <!-- header-menu-item-->
                                                    <div class="hero-menu-item">
                                                        <div class="hero-menu-item-title fl-wrap">
                                                            <h6><span>04.</span>Salmon riverland</h6>
                                                            <div class="hmi-dec"></div>
                                                            <span class="hero-menu-item-price">$105</span>
                                                        </div>
                                                        <div class="hero-menu-item-details">
                                                            <p>Fusce a tellus tellus. Praesent neque arcu, efficitur sit
                                                                amet</p>
                                                        </div>
                                                    </div>
                                                    <!-- header-menu-item end-->
                                                </div>
                                                <!--tab end -->
                                                <!--tab 2-->
                                                <div class="tab">
                                                    <div id="tab-2" class="tab-content">
                                                        <!-- header-menu-item-->
                                                        <div class="hero-menu-item">
                                                            <div class="hero-menu-item-title fl-wrap">
                                                                <h6><span>01.</span>Fried Potatoes</h6>
                                                                <div class="hmi-dec"></div>
                                                                <span class="hero-menu-item-price">$29</span>
                                                            </div>
                                                            <div class="hero-menu-item-details">
                                                                <p>Granny help you treat yourself with a different meal
                                                                    everyday</p>
                                                            </div>
                                                        </div>
                                                        <!-- header-menu-item end-->
                                                        <!-- header-menu-item-->
                                                        <div class="hero-menu-item">
                                                            <div class="hero-menu-item-title fl-wrap">
                                                                <h6><span>02.</span>Doner Burger</h6>
                                                                <div class="hmi-dec"></div>
                                                                <span class="hero-menu-item-price">$19</span>
                                                            </div>
                                                            <div class="hero-menu-item-details">
                                                                <p>Etiam tempus felis eros, id lobortis turpis</p>
                                                            </div>
                                                        </div>
                                                        <!-- header-menu-item end-->
                                                        <!-- header-menu-item-->
                                                        <div class="hero-menu-item">
                                                            <div class="hero-menu-item-title fl-wrap">
                                                                <h6><span>03.</span>Steak Filet</h6>
                                                                <div class="hmi-dec"></div>
                                                                <span class="hero-menu-item-price">$12</span>
                                                            </div>
                                                            <div class="hero-menu-item-details">
                                                                <p>usce tempus tempus maximus volutpat</p>
                                                            </div>
                                                        </div>
                                                        <!-- header-menu-item end-->
                                                        <!-- header-menu-item-->
                                                        <div class="hero-menu-item">
                                                            <div class="hero-menu-item-title fl-wrap">
                                                                <h6><span>04.</span>Cayenne Shrimp</h6>
                                                                <div class="hmi-dec"></div>
                                                                <span class="hero-menu-item-price">$37</span>
                                                            </div>
                                                            <div class="hero-menu-item-details">
                                                                <p>usce tempus tempus maximus volutpat</p>
                                                            </div>
                                                        </div>
                                                        <!-- header-menu-item end-->
                                                    </div>
                                                </div>
                                                <!--tab end -->
                                                <!--tab 3-->
                                                <div class="tab">
                                                    <div id="tab-3" class="tab-content">
                                                        <!-- header-menu-item-->
                                                        <div class="hero-menu-item">
                                                            <div class="hero-menu-item-title fl-wrap">
                                                                <h6><span>01.</span>Soft shell crab</h6>
                                                                <div class="hmi-dec"></div>
                                                                <span class="hero-menu-item-price">$29</span>
                                                            </div>
                                                            <div class="hero-menu-item-details">
                                                                <p>Granny help you treat yourself with a different meal
                                                                    everyday</p>
                                                            </div>
                                                        </div>
                                                        <!-- header-menu-item end-->
                                                        <!-- header-menu-item-->
                                                        <div class="hero-menu-item">
                                                            <div class="hero-menu-item-title fl-wrap">
                                                                <h6><span>02.</span>Tarte Tatin</h6>
                                                                <div class="hmi-dec"></div>
                                                                <span class="hero-menu-item-price">$25</span>
                                                            </div>
                                                            <div class="hero-menu-item-details">
                                                                <p>Etiam tempus felis eros, id lobortis turpis</p>
                                                            </div>
                                                        </div>
                                                        <!-- header-menu-item end-->
                                                        <!-- header-menu-item-->
                                                        <div class="hero-menu-item">
                                                            <div class="hero-menu-item-title fl-wrap">
                                                                <h6><span>03.</span>Creme Brulee</h6>
                                                                <div class="hmi-dec"></div>
                                                                <span class="hero-menu-item-price">$64</span>
                                                            </div>
                                                            <div class="hero-menu-item-details">
                                                                <p>usce tempus tempus maximus volutpat</p>
                                                            </div>
                                                        </div>
                                                        <!-- header-menu-item end-->
                                                        <!-- header-menu-item-->
                                                        <div class="hero-menu-item">
                                                            <div class="hero-menu-item-title fl-wrap">
                                                                <h6><span>04.</span>Lemon Meringue</h6>
                                                                <div class="hmi-dec"></div>
                                                                <span class="hero-menu-item-price">$12</span>
                                                            </div>
                                                            <div class="hero-menu-item-details">
                                                                <p>usce tempus tempus maximus volutpat</p>
                                                            </div>
                                                        </div>
                                                        <!-- header-menu-item end-->
                                                    </div>
                                                </div>
                                                <!--tab end -->
                                                <!--tab 4-->
                                                <div class="tab">
                                                    <div id="tab-4" class="tab-content">
                                                        <!-- header-menu-item-->
                                                        <div class="hero-menu-item">
                                                            <div class="hero-menu-item-title fl-wrap">
                                                                <h6><span>01.</span> Lobster with melted mozarella</h6>
                                                                <div class="hmi-dec"></div>
                                                                <span class="hero-menu-item-price">$156</span>
                                                            </div>
                                                            <div class="hero-menu-item-details">
                                                                <p>Granny help you treat yourself with a different meal
                                                                    everyday</p>
                                                            </div>
                                                        </div>
                                                        <!-- header-menu-item end-->
                                                        <!-- header-menu-item-->
                                                        <div class="hero-menu-item">
                                                            <div class="hero-menu-item-title fl-wrap">
                                                                <h6><span>02.</span> Butterfly fried shrimps platter
                                                                </h6>
                                                                <div class="hmi-dec"></div>
                                                                <span class="hero-menu-item-price">$98</span>
                                                            </div>
                                                            <div class="hero-menu-item-details">
                                                                <p>Etiam tempus felis eros, id lobortis turpis</p>
                                                            </div>
                                                        </div>
                                                        <!-- header-menu-item end-->
                                                    </div>
                                                </div>
                                                <!--tab end -->
                                                <!--tab 5-->
                                                <div class="tab">
                                                    <div id="tab-5" class="tab-content">
                                                        <!-- header-menu-item-->
                                                        <div class="hero-menu-item">
                                                            <div class="hero-menu-item-title fl-wrap">
                                                                <h6><span>01.</span>Kiwi Coctail</h6>
                                                                <div class="hmi-dec"></div>
                                                                <span class="hero-menu-item-price">$12</span>
                                                            </div>
                                                            <div class="hero-menu-item-details">
                                                                <p>Granny help you treat yourself with a different meal
                                                                    everyday</p>
                                                            </div>
                                                        </div>
                                                        <!-- header-menu-item end-->
                                                        <!-- header-menu-item-->
                                                        <div class="hero-menu-item">
                                                            <div class="hero-menu-item-title fl-wrap">
                                                                <h6><span>02.</span>Summer Beer</h6>
                                                                <div class="hmi-dec"></div>
                                                                <span class="hero-menu-item-price">$21</span>
                                                            </div>
                                                            <div class="hero-menu-item-details">
                                                                <p>Etiam tempus felis eros, id lobortis turpis</p>
                                                            </div>
                                                        </div>
                                                        <!-- header-menu-item end-->
                                                        <!-- header-menu-item-->
                                                        <div class="hero-menu-item">
                                                            <div class="hero-menu-item-title fl-wrap">
                                                                <h6><span>03.</span>Red Mojitos</h6>
                                                                <div class="hmi-dec"></div>
                                                                <span class="hero-menu-item-price">$17</span>
                                                            </div>
                                                            <div class="hero-menu-item-details">
                                                                <p>usce tempus tempus maximus volutpat</p>
                                                            </div>
                                                        </div>
                                                        <!-- header-menu-item end-->
                                                        <!-- header-menu-item-->
                                                        <div class="hero-menu-item">
                                                            <div class="hero-menu-item-title fl-wrap">
                                                                <h6><span>04.</span>Cabernet Sauvignon</h6>
                                                                <div class="hmi-dec"></div>
                                                                <span class="hero-menu-item-price">$40</span>
                                                            </div>
                                                            <div class="hero-menu-item-details">
                                                                <p>usce tempus tempus maximus volutpat</p>
                                                            </div>
                                                        </div>
                                                        <!-- header-menu-item end-->
                                                    </div>
                                                </div>
                                                <!--tab end -->
                                            </div>
                                            <!--tabs end -->
                                        </div>
                                    </div>
                                </div>
                                <!--  hero-menu_content end  -->
                                <div class="clearfix"></div>
                                <a href="menu.html" class="hero_btn" style="margin-left:30px;">View Full Menu <i
                                        class="fal fa-long-arrow-right"></i></a>
                                <a href="#" class="pdf-link">Dowload PDF</a>
                            </div>
                        </div>
                        <!--  hero-menu  end-->
                    </div>
                </section>
                <!--  section  end-->
                <section data-scrollax-parent="true">
                    <div class="container">
                        <div class="section-title">
                            <h4>Our awesome team</h4>
                            <h2>Met Our Chefs</h2>
                            <div class="dots-separator fl-wrap"><span></span></div>
                        </div>
                        <div class="about-wrap  fl-wrap">
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- team-item -->
                                    <div class="team-box">
                                        <div class="team-photo">
                                            <img src="images/team/1.jpg" alt="" class="respimg">
                                            <div class="overlay"></div>
                                            <div class="team-social">
                                                <span class="ts_title">Follow</span>
                                                <ul class="no-list-style">
                                                    <li><a href="#" target="_blank"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                                    </li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="team-info fl-wrap">
                                            <h3> Kevin Gray </h3>
                                            <h4>Master chef in New York</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- team-item  end-->
                                <!-- team-item -->
                                <div class="col-md-4">
                                    <div class="team-box">
                                        <div class="team-photo">
                                            <img src="images/team/2.jpg" alt="" class="respimg">
                                            <div class="overlay"></div>
                                            <div class="team-social">
                                                <span class="ts_title">Follow</span>
                                                <ul class="no-list-style">
                                                    <li><a href="#" target="_blank"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                                    </li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="team-info fl-wrap">
                                            <h3> Austin Evon </h3>
                                            <h4>Master chef in Florida</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- team-item end  -->
                                <!-- team-item -->
                                <div class="col-md-4">
                                    <div class="team-box">
                                        <div class="team-photo">
                                            <img src="images/team/3.jpg" alt="" class="respimg">
                                            <div class="overlay"></div>
                                            <div class="team-social">
                                                <span class="ts_title">Follow</span>
                                                <ul class="no-list-style">
                                                    <li><a href="#" target="_blank"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                                    </li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                                    </li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="team-info fl-wrap">
                                            <h3> Taylor Roberts </h3>
                                            <h4>Master chef in Maiami</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- team-item end  -->
                                <div class="col-md-8">
                                    <div class="align-text-block">
                                        <h4>Want to cook something tasty? Read our best recipes.</h4>
                                        <a href="blog.html" class="btn">Recipes Book <i
                                                class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="section-dec sec-dec_top"></div>
                        </div>
                        <div class="wave-bg wave-bg_right " data-scrollax="properties: { translateY: '-150px' }"></div>
                    </div>
                </section>
                <!-- section end  -->
                <!-- section   -->
                <section class="column-section no-padding hidden-section" data-scrollax-parent="true">
                    <div class="column-wrap-bg right-wrap">
                        <div class="bg par-elem " data-bg="images/bg/10.jpg"
                            data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay"></div>
                        <div class="column-wrap-bg-text">
                            <h3>Our Store</h3>
                            <h4>Want to order food home? Visit our online store.</h4>
                            <a href="about.html" class="btn  ajax">Buy online <i
                                    class="fal fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="column-section-wrap left-column-section dark-bg">
                        <div class="container">
                            <div class="column-text">
                                <div class="section-title">
                                    <h4>Book a table</h4>
                                    <h2>Upcoming Events</h2>
                                    <div class="dots-separator fl-wrap"><span></span></div>
                                </div>
                                <!-- events-carousel-wrap -->
                                <div class="events-carousel-wrap fl-wrap">
                                    <div class="events-carousel fl-wrap">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                                <!-- swiper-slide -->
                                                <div class="swiper-slide">
                                                    <div class="event-carousel-item">
                                                        <h4>Jazz Band Live Event</h4>
                                                        <span class="event-date">25 may 2020</span>
                                                        <p>Sed ut perspiciatis unde omnis iste natus error sit
                                                            voluptatem accusantium doloremque laudantium totam aperiam.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- swiper-slide end -->
                                                <!-- swiper-slide -->
                                                <div class="swiper-slide">
                                                    <div class="event-carousel-item">
                                                        <h4>Wine and Steak Day</h4>
                                                        <span class="event-date">19 June 2020</span>
                                                        <p>In ut odio libero, at vulputate urna. Nulla tristique mi a
                                                            massa convallis cursus. Nulla eu mi magna. Etiam suscipit
                                                            gravida. </p>
                                                    </div>
                                                </div>
                                                <!-- swiper-slide end -->
                                                <!-- swiper-slide -->
                                                <div class="swiper-slide">
                                                    <div class="event-carousel-item">
                                                        <h4>Freedom Day Celebration</h4>
                                                        <span class="event-date">14 October 2020</span>
                                                        <p>Lorem Ipsum generators on the Internet king this the first
                                                            true generator laudantium totam aperiam. </p>
                                                    </div>
                                                </div>
                                                <!-- swiper-slide end -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-button ec-button-prev"><i class="fas fa-caret-left"></i></div>
                                    <div class="ec-button ec-button-next"><i class="fas fa-caret-right"></i></div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="bold-separator"><span></span></div>
                                <!-- events-carousel-wrap end -->
                                <a href="#" class="hero_btn no-align show-rb">Book Table Now<i
                                        class="fal fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="illustration_bg">
                            <div class="bg" data-bg="images/bg/dec/6.png"></div>
                        </div>
                    </div>
                </section>
                <!-- section end  -->
                <!-- section   -->
                <section>
                    <div class="brush-dec2 brush-dec_bottom"></div>
                    <div class="container">
                        <div class="section-title">
                            <h4>What said about us</h4>
                            <h2>Customer Reviews</h2>
                            <div class="dots-separator fl-wrap"><span></span></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="testimonilas-carousel-wrap fl-wrap">
                        <div class="tc-button tc-button-next"><i class="fas fa-caret-right"></i></div>
                        <div class="tc-button tc-button-prev"><i class="fas fa-caret-left"></i></div>
                        <div class="testimonilas-carousel">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <!--testi-item-->
                                    <div class="swiper-slide">
                                        <div class="testi-item fl-wrap">
                                            <div class="testi-avatar"><img src="images/avatar/2.jpg" alt=""></div>
                                            <div class="testimonilas-text fl-wrap">
                                                <h3>Andy Dimasky</h3>
                                                <div class="star-rating" data-starrating="5"> </div>
                                                <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac
                                                    nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus
                                                    felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "
                                                </p>
                                                <span class="testi-number">01.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--testi-item end-->
                                    <!--testi-item-->
                                    <div class="swiper-slide">
                                        <div class="testi-item fl-wrap">
                                            <div class="testi-avatar"><img src="images/avatar/3.jpg" alt=""></div>
                                            <div class="testimonilas-text fl-wrap">
                                                <h3>Frank Dellov</h3>
                                                <div class="star-rating" data-starrating="4"> </div>
                                                <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac
                                                    nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus
                                                    felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "
                                                </p>
                                                <span class="testi-number">02.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--testi-item end-->
                                    <!--testi-item-->
                                    <div class="swiper-slide">
                                        <div class="testi-item fl-wrap">
                                            <div class="testi-avatar"><img src="images/avatar/4.jpg" alt=""></div>
                                            <div class="testimonilas-text fl-wrap">
                                                <h3>Centa Simpson</h3>
                                                <div class="star-rating" data-starrating="5"> </div>
                                                <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac
                                                    nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus
                                                    felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "
                                                </p>
                                                <span class="testi-number">03.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--testi-item end-->
                                    <!--testi-item-->
                                    <div class="swiper-slide">
                                        <div class="testi-item fl-wrap">
                                            <div class="testi-avatar"><img src="images/avatar/5.jpg" alt=""></div>
                                            <div class="testimonilas-text fl-wrap">
                                                <h3>Nicolo Svensky</h3>
                                                <div class="star-rating" data-starrating="5"> </div>
                                                <p>"Vestibulum orci felis, ullamcorper non condimentum non, ultrices ac
                                                    nunc. Mauris non ligula suscipit, vulputate mi accumsan, dapibus
                                                    felis. Nullam sed sapien dui. Nulla auctor sit amet sem non porta. "
                                                </p>
                                                <span class="testi-number">04.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--testi-item end-->
                                </div>
                            </div>
                        </div>
                        <div class="tc-pagination"></div>
                    </div>
                </section>
                <!-- section end  -->
            </div>
            <!-- content end  -->
            <!-- footer -->
            <div class="height-emulator fl-wrap"></div>
            <footer class="fl-wrap dark-bg fixed-footer">
                <div class="container">
                    <div class="footer-top fl-wrap">
                        <a href="index.html" class="footer-logo"><img src="images/logo2.png" alt=""></a>
                        <div class="lang-wrap"><a href="#" class="act-lang">En</a><span>/</span><a href="#">Fr</a></div>
                        <div class="footer-social">
                            <span class="footer-social-title">Follow us :</span>
                            <ul>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- footer-widget-wrap -->
                    <div class="footer-widget-wrap fl-wrap">
                        <div class="row">
                            <!-- footer-widget -->
                            <div class="col-md-4">
                                <div class="footer-widget">
                                    <div class="footer-widget-title">About us</div>
                                    <div class="footer-widget-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Eaque ipsa quae ab illo
                                            inventore veritatis et quasi architecto. </p>
                                        <a href="about.html" class="footer-widget-content-link">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <!-- footer-widget  end-->
                            <!-- footer-widget -->
                            <div class="col-md-4">
                                <div class="footer-widget">
                                    <div class="footer-widget-title">Contact info </div>
                                    <div class="footer-widget-content">
                                        <div class="footer-contacts footer-box fl-wrap">
                                            <ul>
                                                <li><span>Call :</span><a href="#">+489756412322</a> , <a
                                                        href="#">+56897456123</a></li>
                                                <li><span>Write :</span><a href="#">yourmail@domain.com</a></li>
                                                <li><span>Find us : </span><a href="#">USA 27TH Brooklyn NY</a></li>
                                            </ul>
                                        </div>
                                        <a href="contacts.html" class="footer-widget-content-link">Get in Touch</a>
                                    </div>
                                </div>
                            </div>
                            <!-- footer-widget  end-->
                            <!-- footer-widget -->
                            <div class="col-md-4">
                                <div class="footer-widget">
                                    <div class="footer-widget-title">Subscribe</div>
                                    <div class="footer-widget-content">
                                        <div class="subcribe-form fl-wrap">
                                            <p>Want to be notified when we launch a new template or an udpate. Just sign
                                                up and we'll send you a notification by email.</p>
                                            <form id="subscribe" class="fl-wrap">
                                                <input class="enteremail" name="email" id="subscribe-email"
                                                    placeholder="Your Email" spellcheck="false" type="text">
                                                <button type="submit" id="subscribe-button"
                                                    class="subscribe-button color-bg">Send </button>
                                                <label for="subscribe-email" class="subscribe-message"></label>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- footer-widget  end-->
                        </div>
                    </div>
                    <!-- footer-widget-wrap end-->
                    <div class="footer-bottom fl-wrap">
                        <div class="copyright">&#169; Restabook 2020 . All rights reserved. </div>
                        <div class="to-top"><span>Back To Top </span><i class="fal fa-angle-double-up"></i></div>
                    </div>
                </div>
            </footer>
            <!-- footer end-->
        </div>
        <!-- wrapper end -->
        <!-- reservation-modal-wrap-->
        <div class="reservation-modal-wrap">
            <div class="reserv-overlay crm">
                <div class="cd-reserv-overlay-layer" data-frame="25">
                    <div class="reserv-overlay-layer"></div>
                </div>
            </div>
            <div class="reservation-modal-container bot-element">
                <div class="reservation-modal-item fl-wrap">
                    <div class="close-reservation-modal crm"><i class="fal fa-times"></i></div>
                    <div class="reservation-bg"></div>
                    <div class="section-title">
                        <h4>Don't forget to book a table</h4>
                        <h2>Table Reservations</h2>
                        <div class="dots-separator fl-wrap"><span></span></div>
                    </div>
                    <div class="reservation-wrap">
                        <div id="reserv-message"></div>
                        <form class="custom-form" action="http://restabook.kwst.net/light/php/reservation.php"
                            name="reservationform" id="reservationform">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" id="name" placeholder="Your Name *" value="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="email" id="email" placeholder="Email Address *"
                                            value="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="phone" id="phone" placeholder="Phone *" value="" />
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="fl-wrap">
                                            <select name="numperson" id="persons" data-placeholder="Persons"
                                                class="chosen-select no-search-select">
                                                <option data-display="Persons">Any</option>
                                                <option value="1">1 Person</option>
                                                <option value="2">2 People</option>
                                                <option value="3">3 People</option>
                                                <option value="4">4 People</option>
                                                <option value="5">5 People</option>
                                                <option value="Banquet">Banquet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-sm-6">
                                        <div class="date-container2 fl-wrap">
                                            <input type="text" placeholder="Date" id="res_date" name="resdate"
                                                value="" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="fl-wrap">
                                            <select name="restime" id="resrv-time" data-placeholder="Time"
                                                class="chosen-select no-search-select">
                                                <option data-display="Time">Any</option>
                                                <option value="10:00am">10:00 am</option>
                                                <option value="11:00am">11:00 am</option>
                                                <option value="12:00pm">12:00 pm</option>
                                                <option value="1:00pm">1:00 pm</option>
                                                <option value="2:00pm">2:00 pm</option>
                                                <option value="3:00pm">3:00 pm</option>
                                                <option value="4:00pm">4:00 pm</option>
                                                <option value="5:00pm">5:00 pm</option>
                                                <option value="6:00pm">6:00 pm</option>
                                                <option value="7:00pm">7:00 pm</option>
                                                <option value="8:00pm">8:00 pm</option>
                                                <option value="9:00pm">9:00 pm</option>
                                                <option value="10:00pm">10:00 pm</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <textarea name="comments" id="comments" cols="30" rows="3"
                                    placeholder="Your Message:"></textarea>
                                <div class="clearfix"></div>
                                <button class="btn color-bg" id="reservation-submit">Reserve Table <i
                                        class="fal fa-long-arrow-right"></i></button>
                            </fieldset>
                        </form>
                    </div>
                    <!-- reservation-wrap end-->
                </div>
            </div>
        </div>
        <!-- reservation-modal-wrap end-->
        <!-- cursor-->
        <div class="element">
            <div class="element-item"></div>
        </div>
        <!-- cursor end-->
    </div>
    <!-- Main end -->
    <!--=============== scripts  ===============-->
    <script src="js/jquery.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/scripts.js"></script>
</body>

<!-- Mirrored from restabook.kwst.net/light/index5.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jan 2022 01:48:48 GMT -->

</html>
