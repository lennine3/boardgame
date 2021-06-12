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
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Billing Details</h3>
                    @if(Session::has("Cart")!=null)
                    <div class="cart-table table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (Session::get("Cart")->products as $item)
                                <tr>
                                    <td class="cart-pic first-row"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                            style="width: 90%"></td>
                                    <td class="cart-title first-row">
                                        <h5>{{ $item['productInfo']->name }}</h5>
                                    </td>
                                    <td class="p-price first-row">${{ $item['productInfo']->price }}</td>
                                    <td class="qua-col first-row">
                                        <div class="quantity" style="text-align: end">
                                            <div>
                                                {{ $item['quanty'] }}
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">${{ $item['productInfo']->price*$item['quanty'] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Your Order</h2>
                        <ul class="list">
                            <li>
                                <div class="row">
                                    <div class="col-lg-6">Customer name:</div>
                                    <div class="col-lg-6">
                                        <div class="d-flex justify-content-end">
                                            Trần Võ Đăng Khoa
                                        </div>
                                        </div>
                                </div>

                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-lg-6">Phone:</div>
                                    <div class="col-lg-6"><div class="d-flex justify-content-end">
                                        0382024592
                                    </div></div>
                                </div>
                                <a> <span class="middle"></span>
                            <li>
                                <div class="row">
                                    <div class="col-lg-12"><label for="addressSelect">Address</label></div>
                                    <div class="col-lg-12">

                                        <select name="address" id="addressSelect" class="form-select">
                                            <option value="">Address 1</option>
                                            <option value="">Address 2</option>
                                            <option value="">Address 3</option>
                                        </select>
                                    </div>
                                </div>
                                </span></a>
                            </li>
                        </ul>
                        <ul class="list list_2">
                            <li>
                                <div class="row">
                                    <div class="col-lg-6">Tax:</div>
                                    <div class="col-lg-6"><div class="d-flex justify-content-end">
                                        $20000
                                    </div></div>
                                </div>
                                </li>
                            <li>
                                <div class="row">
                                    <div class="col-lg-6">Shipping:</div>
                                    <div class="col-lg-6"><div class="d-flex justify-content-end">
                                        $20000
                                    </div></div>
                                    <div class="col-lg-12">
                                        <div class="justify-content-end d-flex">
                                            <a href="#">Change</a>
                                        </div>

                                    </div>
                                </div>
                               </li>
                            <li>
                                <div class="row">
                                    <div class="col-lg-6">Total:</div>
                                    <div class="col-lg-6"><div class="d-flex justify-content-end">
                                        $20000.00
                                    </div></div>
                                </div></li>
                        </ul>
                        <div class="payment_item">
                            <div class="radion_btn">
                                <input type="radio" id="f-option5" name="selector">
                                <label for="f-option5">Check payments</label>
                                <div class="check"></div>
                            </div>
                            <p>Please send a check to Store Name, Store Street, Store Town, Store State / County,
                                Store Postcode.</p>
                        </div>
                        <div class="payment_item active">
                            <div class="radion_btn">
                                <input type="radio" id="f-option6" name="selector">
                                <label for="f-option6">Paypal </label>
                                <img src="{{ asset('FrontEnd/img/i_atm.png') }}" alt="">
                                <img src="{{ asset('FrontEnd/img/onepay.png') }}" alt="">
                                <img src="{{ asset('FrontEnd/img/visa.png') }}" alt="">
                                <img src="{{ asset('FrontEnd/img/master.png') }}" alt="">
                                <div class="check"></div>
                            </div>
                            <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal
                                account.</p>
                        </div>
                        <div class="creat_account">
                            <input type="checkbox" id="f-option4" name="selector">
                            <label for="f-option4">I’ve read and accept the </label>
                            <a href="#">terms & conditions*</a>
                        </div>
                        <a class="primary-btn" href="{{ route('confirmation') }}">Proceed to Paypal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
