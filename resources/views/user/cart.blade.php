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
                <h4>Order food with home delivery</h4>
                <h2>Your Cart</h2>
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
                <div class="col-md-8">

                    <h4 class="cart-title">Your cart <span>{{$cart_count}} items</span></h4>
                    <table class="table table-border checkout-table">
                        <tbody>
                            <tr>
                                <th class="hidden-xs">Item</th>
                                <th>Name</th>
                                <th class="hidden-xs">Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Update</th>
                                <th></th>
                            </tr>
                            @foreach ($carts as $cart)
                            <form action="{{route('update_cart',$cart->id)}}" method="POST">
                                @csrf
                                <tr>

                                    <td class="hidden-xs">
                                        <a href="#"><img src="/foodimage/{{$cart->food->image}}" alt=""
                                                class="respimg"></a>
                                    </td>
                                    <td>
                                        <h5 class="product-name">{{$cart->food->title}}</h5>
                                    </td>
                                    <td class="hidden-xs">
                                        <h5 class="order-money">#{{ number_format($cart->food->price)}}</h5>
                                    </td>
                                    <td>
                                        <input type="number" name="quantity" value="{{$cart->quantity}}" max="50"
                                            min="1" class="order-count">
                                    </td>
                                    <td>
                                        <h5 class="order-money">
                                            #{{ number_format($cart->food->price * $cart->quantity)}}</h5>
                                    </td>
                                    <td class="pr-remove">
                                        <div class="coupon-holder">
                                            <button type="submit" class="pull-right btn-uc">Update Cart</button>
                                        </div>

                                    </td>

                                    <td class="pr-remove">
                                        <a href="{{route('delete_cart',$cart->id)}}" title="Remove"><i
                                                class="fal fa-times"></i></a>
                                    </td>

                                </tr>

                            </form>
                            @endforeach

                        </tbody>
                    </table>
                    <!-- COUPON -->
                    <div class="coupon-holder">
                        <input type="text" name="cartcoupon" placeholder="Coupon code">
                        <button type="button" class="btn-a">Apply</button>
                    </div>
                    <!-- /COUPON -->

                </div>
                <div class="col-md-4">
                    <!-- CART TOTALS  -->
                    <div class="cart-totals dark-bg fl-wrap">
                        <h3>Cart totals</h3>
                        <form action="{{route('pay')}}" method="post">@csrf

                            <table class="total-table">
                                <tbody>
                                    <tr>
                                        <th>Cart Subtotal:</th>
                                        <td>#{{number_format($total)}}</td>
                                    </tr>
                                    <tr>
                                        <th>Refunded Payments Total:</th>
                                        <td>#12.00 -</td>
                                    </tr>
                                    <tr>
                                        <th>Total:</th>
                                        <td>#{{number_format($total - 12)}}</td>
                                    </tr>
                                    <tr>
                                        <th>Want a Delivery? </th>
                                        <td>
                                            <p class="text-white">Add delivery address Here</p>
                                            <input type="text" name="delivery_address" class="form-control">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <input type="hidden" name="email" value="{{Auth::user()->email}}"> {{-- required --}}
                            <input type="hidden" name="phone" value="{{Auth::user()->phone}}"> {{-- required --}}
                            <input type="hidden" name="amount" value="{{$total - 12}}"> {{-- required in kobo --}}
                            <input type="hidden" name="orderID" value="345">
                            <input type="hidden" name="quantity" value="100">
                            <input type="hidden" name="currency" value="NGN">
                            <input type="hidden" name="metadata"
                                value="{{ json_encode($array = ['key_name' => 'value',]) }}">
                            {{-- For other necessary things you want to add to your payload. it is optional though --}}
                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}">
                            {{-- required --}}
                            <input type="hidden" name="callback_url" value="{{ route('payment_callback') }}">

                            <button type="submit" class="cart-totals_btn color-bg">Proceed to Checkout</button>
                        </form>
                    </div>
                    <!-- /CART TOTALS  -->
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
