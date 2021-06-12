@if(Session::has("Cart")!=null)
<section class="shopping-cart spad" id="listCart">
    <div class="container">
        <div class="row">
            <div class="cart-table table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th class="p-name">Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Edit</th>
                            <th>Delete</th>
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
                                <div class="quantity">
                                    <div class="input-group inline-group">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-secondary btn-minus">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input class="form-control" min="0" name="quantity"
                                            id="quanty-item{{ $item['productInfo']->id }}" value="{{ $item['quanty'] }}"
                                            type="number">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary btn-plus">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="total-price first-row">${{ $item['productInfo']->price*$item['quanty'] }}</td>
                            <td class="close-td first-row"><a class="btn"
                                    onclick="UpdateItem({{ $item['productInfo']->id }})"><i class="fal fa-save"></i></a>
                            </td>
                            <td class="close-td first-row"><a class="btn"
                                    onclick="DeleteItem({{ $item['productInfo']->id }})"><i
                                        class="fas fa-times"></i></a>
                                    </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="cart-buttons">
                        <a href="{{ route('home') }}" class="primary-btn continue-shop">Continue shopping</a>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-4">
                    <div class="proceed-checkout">
                        <ul>
                            <li class="subtotal">
                                <div class="row">
                                    <div class="col-lg-6">Quantity</div>
                                    <div class="col-lg-6 d-flex justify-content-end">
                                        <span>{{ Session::get('Cart')->totalQuanty }}</span>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-total">
                                <div class="row">
                                    <div class="col-lg-6">Total</div>
                                    <div class="col-lg-6 d-flex justify-content-end">
                                        <span>${{ number_format(Session::get('Cart')->totalPrice) }}</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <a href="{{ route('checkout') }}" class="proceed-btn Ripple-effect">PROCEED TO CHECK OUT</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endif
<script>
    $('.btn-plus, .btn-minus').on('click', function (e) {
        const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
        const input = $(e.target).closest('.input-group').find('input');
        if (input.is('input')) {
            input[0][isNegative ? 'stepDown' : 'stepUp']()
        }
    })

</script>
