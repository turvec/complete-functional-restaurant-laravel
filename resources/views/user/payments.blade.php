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
                <h4>View all Past Payments</h4>
                <h2>Your payment</h2>
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

                    <h4 class="cart-title">Your payment <span>{{$payment_count}} items</span></h4>
                    <table class="table table-border checkout-table">
                        <tbody>
                            <tr>
                                <th>Status</th>
                                <th>Amount</th>
                                <th>Reference</th>
                            </tr>
                            @foreach ($payments as $payment)
                                <tr>
                                    <td>
                                        <h5 class="order-money">{{$payment->status}}</h5>
                                    </td>
                                    <td>
                                        <h5 class="order-money">{{$payment->amount}}</h5>
                                    </td>
                                    <td>
                                        <h5 class="order-money">{{$payment->reference}}</h5>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <!-- COUPON -->
                    <div class="coupon-holder">
                        <button type="button" class="btn-a">Want to cancel a payment?</button>
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
