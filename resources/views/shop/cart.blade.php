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
                    </a>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="cart-area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">product</th>
                            <th></th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex"><img src="{{ asset('FrontEnd/img/monopoly-1.jpg') }}"></div>
                                    <div class="media-body">
                                        <p>Monopoly- Smart board game for Kid</p>
                                    </div>
                                </div>
                            </td>
                            <td></td>
                            <td>
                                <h5>$ 360.000</h5>
                            </td>
                            <td>
                                <div class="product_count" bis_skin_checked="1">
                                    <input type="number" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
                                        class="input-text qty">
                                </div>
                            </td>
                            <td>
                                <h5>$ 720.000</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex"><img src="{{ asset('FrontEnd/img/monopoly-1.jpg') }}"></div>
                                    <div class="media-body">
                                        <p>Monopoly- Smart board game for Kid</p>
                                    </div>
                                </div>
                            </td>
                            <td></td>
                            <td>
                                <h5>$ 360.000</h5>
                            </td>
                            <td>
                                <div class="product_count" bis_skin_checked="1">
                                    <input type="number" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
                                        class="input-text qty">
                                </div>
                            </td>
                            <td>
                                <h5>$ 720.000</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex"><img src="{{ asset('FrontEnd/img/monopoly-1.jpg') }}"></div>
                                    <div class="media-body">
                                        <p>Monopoly- Smart board game for Kid</p>
                                    </div>
                                </div>
                            </td>
                            <td></td>
                            <td>
                                <h5>$ 360.000</h5>
                            </td>
                            <td>
                                <div class="product_count" bis_skin_checked="1">
                                    <input type="number" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
                                        class="input-text qty">
                                </div>
                            </td>
                            <td>
                                <h5>$ 720.000</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex"><img src="{{ asset('FrontEnd/img/monopoly-1.jpg') }}"></div>
                                    <div class="media-body">
                                        <p>Monopoly- Smart board game for Kid</p>
                                    </div>
                                </div>
                            </td>
                            <td></td>
                            <td>
                                <h5>$ 360.000</h5>
                            </td>
                            <td>
                                <div class="product_count" bis_skin_checked="1">
                                    <input type="number" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
                                        class="input-text qty">
                                </div>
                            </td>
                            <td>
                                <h5>$ 720.000</h5>
                            </td>
                        </tr>
                        <tr class="table-bottom">
                            <td><a href="#" class="btn gray_btn"><b>UPDATE CART</b></a></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <div class="cupon_text align-items-center">
                                    <input type="text" id="coupon_code" placeholder="Coupon Code">
                                    <a href="#" class="btn primary-btn-cart"><b>Apply</b></a>
                                    <a href="#" class="btn gray_btn"><b>CLOSE COUPON</b></a>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <h5>Subtotal</h5>
                            </td>
                            <td>
                                <h5>% 259.000</h5>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <h5>Shipping</h5>
                            </td>
                            <td>
                                <ul class="cart-li">
                                    <li><label class="form-check-label" for="freeShip"><input type="radio" id="freeShip" name="Ship" class="form-check-input"> Free Ship</label></li>
                                    <li><label class="form-check-label" for="regularShip"><input type="radio" id="regularShip" name="Ship" class="form-check-input">Regular Ship</label></li>
                                    <li><label class="form-check-label" for="expressShip"><input type="radio" id="expressShip" name="Ship" class="form-check-input">Express Ship</label></li>
                                    <li><label class="form-check-label" for="fastShip"><input type="radio" id="fastShip" name="Ship" class="form-check-input">Fast Ship</label></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>

                            <td></td>
                            <td>
                                <div class="cupon_text align-items-end" style="margin-left: -390px">
                                    <a class="gray_btn btn" href="#"><b>CONTINUE SHOPPING</b>  </a><a href="#"
                                        class="primary-btn-cart btn"> <b>PROCESS TO CHECKOUT</b> </a>
                                </div>
                            </td>
            </tr>
            </tbody>
            </table>
        </div>
    </div>
    </div>
</section>


@endsection
