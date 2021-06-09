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
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total = 0 ?>
                        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
            <?php $total += $details['price'] * $details['quantity'] ?>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex"><img src="{{ asset('FrontEnd/img/monopoly-1.jpg') }}"></div>
                                    <div class="media-body">
                                        <p>{{ $details['name'] }}</p>
                                    </div>
                                </div>
                            </td>
                            <td></td>
                            <td>
                                <h5>${{ $details['price'] }}</h5>
                            </td>
                            <td>
                                <div class="product_count" bis_skin_checked="1">
                                    <input type="number" name="qty" id="sst" maxlength="12" value="{{ $details['quantity'] }}" title="Quantity:"
                                        class="input-text qty">
                                </div>
                            </td>
                            <td>
                                <h5>${{ $details['price'] * $details['quantity'] }}</h5>
                            </td>
                            <td>
                                <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fas fa-times"></i></button>

                            </td>

                        </tr>
                        @endforeach
                        @endif
                        {{-- <tr>
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
                        </tr> --}}
                        <tr class="table-bottom">
                            {{-- <td><a href="#" class="btn gray_btn"><b>UPDATE CART</b></a></td> --}}
                        <tr>
                            <td>
                                <h5>Subtotal</h5>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <h5>${{ $total }}</h5>
                            </td>
                        </tr>

            </tbody>
            </table>
        </div>
        {{-- <div class="row d-flex justify-content-end">
            <div class="col-lg-8"><h5>Shipping</h5></div>
            <div class="col-lg-4"><ul class="cart-li">
                <li><label class="form-check-label" for="freeShip"><input type="radio" id="freeShip" name="Ship" class="form-check-input"> Free Ship</label></li>
                <li><label class="form-check-label" for="regularShip"><input type="radio" id="regularShip" name="Ship" class="form-check-input">Regular Ship</label></li>
                <li><label class="form-check-label" for="expressShip"><input type="radio" id="expressShip" name="Ship" class="form-check-input">Express Ship</label></li>
                <li><label class="form-check-label" for="fastShip"><input type="radio" id="fastShip" name="Ship" class="form-check-input">Fast Ship</label></li>
            </ul></div>
        </div> --}}
       {{--  <div class="p-b-25">
            <div class="row">
                <div class="cupon_text align-items-center d-flex justify-content-end">
                    <input type="text" id="coupon_code" placeholder="Coupon Code">
                    <a href="#" class="btn primary-btn-cart"><b>Apply</b></a>
                    <span class="cart-btn">
                    <a href="#" class="btn gray_btn"><b>CLOSE COUPON</b></a></span>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class=" d-flex justify-content-end align-items-end col-lg-12" >
                <a class="gray_btn btn" href="{{ route('category') }}"><b>CONTINUE SHOPPING</b>  </a>
                <a href="{{ route('checkout') }}" class="primary-btn-cart btn"> <b>PROCESS TO CHECKOUT</b> </a>
            </div>
        </div>
    </div>
    </div>
</section>

<script>
    $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        console.log(response);
                        location.reload();
                    },
                });
            }
        });
</script>
@endsection
@section('scripts')

@endsection
