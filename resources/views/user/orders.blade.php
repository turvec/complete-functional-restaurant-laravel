@extends('layouts.main')
@section('content')
<!-- content  -->
<div class="content">
    <!--  section  -->
    <section class="parallax-section hero-section hidden-section" data-scrollax-parent="true">
        <div class="bg par-elem " data-bg="images/bg/17.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay"></div>
        <div class="container">
            <div class="section-title">
                <h4>View all Past orders</h4>
                <h2>Your order</h2>
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
    <section class="hidden-section">
        <div class="container">
            <!-- CHECKOUT TABLE -->
            <div class="row">
                <div class="col-md-12">

                    <h4 class="cart-title">Your Order <span>{{$order_count}} items</span></h4>
                    <table class="table table-border checkout-table">
                        <tbody>
                            <tr>
                                <th>Status</th>
                                <th>Food Name</th>
                                <th>Food Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Reveceived at/Delivery Address</th>
                                <th>Payment Reference</th>
                            </tr>
                            @foreach ($orders as $order)



                            <tr>
                                @if ($order->payment->status == 'success')
                                <td>
                                    <h5 class="order-money">{{$order->payment->status}}</h5>
                                </td>
                                <td>
                                    <h5 class="order-money">{{$order->food_name}}</h5>
                                </td>
                                <td>
                                    <h5 class="order-money">{{$order->init_price}}</h5>
                                </td>
                                <td>
                                    <h5 class="order-money">{{$order->food_quantity}}</h5>
                                </td>
                                <td>
                                    <h5 class="order-money">{{$order->total_price}}</h5>
                                </td>
                                @if ($order->delivery_address)
                                <td>
                                    <h5 class="order-money">{{$order->delivery_address}}</h5>
                                </td>
                                @else
                                <td>
                                    <h5 class="order-money">Closest Food Republic Around You</h5>
                                </td>
                                @endif
                                <td>
                                    <h5 class="order-money">{{$order->payment->reference}}</h5>
                                </td>
                                @endif
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <!-- COUPON -->
                    <div class="coupon-holder">
                        <button type="button" class="btn-a">Want to cancel a order?</button>
                    </div>
                    <!-- /COUPON -->

                </div>
            </div>
            <!-- /CHECKOUT TABLE -->
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
