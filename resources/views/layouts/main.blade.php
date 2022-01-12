@php
    $cart_count = App\Models\Cart::where('user_id',Auth::id())->count();
@endphp

<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from restabook.kwst.net/light/index5.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jan 2022 01:48:48 GMT -->

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>Turvec - Food Republic Restaurant </title>
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
                        <a href="{{route('home')}}" class=""><img src="images/mylogo.jpg" alt="" height="60px"></a>
                        <div class="show-reserv_button show-rb"><span>Reservation</span> <i class="fal fa-bookmark"></i>
                        </div>
                        <div class="show-share-btn showshare htact"><i class="fal fa-bullhorn"></i> <span
                                class="header-tooltip">Share</span></div>
                        <div class="show-cart sc_btn htact">
                            <a href="{{route('show_cart')}}"><i class="fal fa-shopping-bag"></i></a>
                            @if (Route::has('login'))
                            @auth
                        <span class="show-cart_count">{{$cart_count}}</span>  
                            @endauth
                            @endif
                        <a href="{{route('show_cart')}}"> <span class="header-tooltip">Your Cart</span></a>
                        </div>
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
                                        <a href="{{route('home')}}">Home </a>
                                    </li>
                                    <li><a href="{{route('menu')}}">Food Menu</a></li>
                                    <li><a href="{{route('about')}}">About</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                    <li><a href="">News</a></li>
                                    <li>
                                        @auth
                                        <a href="#">More<i class="fas fa-caret-down"></i></a>
                                        <!--second level -->
                                        <ul>
                                                <li><a href="">Shop</a></li>
                                                <li><a href="">Cart</a></li>
                                                <li><a href="">Gallery</a></li>
                                                <li><a href="">Blog single</a></li>
                                                <li><a href="">404</a></li>
                                                <li><a href="">Coming Soon</a></li>
                                        </ul>
                                        <!--second level end-->
                                        @endauth
                                        @guest
                                        <a href="#">Gallery</a>
                                        @endguest
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
            @yield('content')
            <!-- content end  -->
            <!-- footer -->
            <div class="height-emulator fl-wrap"></div>
            <footer class="fl-wrap dark-bg fixed-footer">
                <div class="container">
                    <div class="footer-top fl-wrap">
                        <a href="{{route('home')}}" class="footer-logo"><img src="images/mylogo.jpg" alt=""></a>
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
                                        <a href="{{route('about')}}" class="footer-widget-content-link">Read more</a>
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
                                        <a href="{{route('contact')}}" class="footer-widget-content-link">Get in Touch</a>
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
                        <div class="copyright">&#169; Turvec 2022 . All rights reserved. </div>
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
                        <form class="custom-form" action=""
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
                                            <select name="tables" id="persons" data-placeholder="Tables"
                                                class="chosen-select no-search-select">
                                                <option data-display="Tables">Choose</option>
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
                                            <input type="text" placeholder="Date" id="res_date" name="date"
                                                value="" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="fl-wrap">
                                            <select name="time" id="resrv-time" data-placeholder="Time"
                                                class="chosen-select no-search-select">
                                                <option data-display="Time">choose time</option>
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
