@extends('shop.layout')
@section('content')
<section class="banner-category">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-end" style="padding: 90px 120px 100px 0;">
            <div>
                <h1 class="color-w"><b>Shopping cart</b></h1>
                <nav class="d-flex align-items-center color-w">
                    <a href>
                        Home
                        <span style="  display: inline-block;
                        margin: 0 10px;"><i class="fal fa-long-arrow-right"></i></span>
                    </a>
                    <a href>
                        Cart
                        <span style="  display: inline-block;
                        margin: 0 10px;"><i class="fal fa-long-arrow-right"></i></span>
                    </a>
                    <a href>
                        Checkout
                    </a>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="section_gap">
    <div class="container">
        <div class="cupon_area">
            <div class="check_title">
                <h2>
                    Have a Coupon?
                    <a href="#">Click here to enter your coupon</a>
                </h2>
            </div>
            <input type="text" placeholder="Enter your coupon here" style="margin-left: 30px"> <br> <br>
            <a href="#" class="tp_btn">Apply Counpon</a>
        </div>
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Billing Details</h3>
                    <form action="#">

                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Your Order</h2>
                        <ul></ul>
                        <ul></ul>
                        <div></div>
                        <div></div>
                        <div></div>
                        <a href="#">Process to Paypal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
