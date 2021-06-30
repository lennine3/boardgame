@extends('shop.layout')
@section('content')
<section class="banner-category">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-end" style="padding: 90px 120px 100px 0;">
            <div>
                <h1 class="color-w"><b>Shop Category page</b></h1>
                <nav class="d-flex align-items-center color-w">
                    <a href>
                        Home
                        <span style="    display: inline-block;
                        margin: 0 10px;"><i class="fal fa-long-arrow-right"></i></span>
                    </a>
                    <a href>
                        Shop
                        <span style="    display: inline-block;
                        margin: 0 10px;"><i class="fal fa-long-arrow-right"></i></span>
                    </a>
                    <a href>
                        Category
                    </a>
                </nav>
            </div>
        </div>
    </div>
</section>
<div class="container" style="padding-bottom: 30px">
    <div class="row">
        <div class="col-lg-3">
            <div class="side_Bar_Categories">
                <div class="head">
                    Browser Category
                </div>
            </div>
            <ul class="main-categories">

                <li class="main-nav-list" style="padding:20px;20px;20px;20px">
                    {{-- <label for="customRange1" class="form-label">Filter Price</label>
                    <input type="range" class="form-range" id="slider"> --}}
                    <div id="slider"></div>
                    <br>
                    <div id="abc" hidden></div>
                    $<span id="slider-range-value"></span><br><br>
                    <button id="priceSubmit" class="primary-btn btn">Find</button>
                </li>
                @foreach ($productTypes as $productType)
                <li class="main-nav-list" style="padding:20px;20px;20px;20px"><a href="">
                        <span class="lnr lnr-arrow-right"></span>{{ $productType->product_type_name }}{{-- <span class="number">(53)</span> --}}</a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="col-lg-9">
            <div style="background-color: #828bb3;padding: 0 20px 10px 20px;"
                class="d-flex flex-wrap align-items-center">
                <div class="sorting">
                    <select name="" class="form-select" id="sortCategory">
                        <option value="{{ url('category-type'.'/'.$id.'/'.'0') }}" @php if(strpos($_SERVER['REQUEST_URI'], "category-type/1/0" ))
                            { {echo 'selected' ;} } @endphp>Newest</option>
                        <option value="{{ url('category-type'.'/'.$id.'/'.'1') }}" @php if(strpos($_SERVER['REQUEST_URI'], "category-type/1/1" ))
                            { {echo 'selected' ;} } @endphp>Price: low to high</option>
                        <option value="{{ url('category-type'.'/'.$id.'/'.'2') }}" @php if(strpos($_SERVER['REQUEST_URI'], "category-type/1/2" ))
                            { {echo 'selected' ;} } @endphp>Price: high to low</option>
                    </select>
                </div>
                <div class="sorting mr-auto">
                </div>
                {{-- <div class="sorting mr-auto">
                    <select name="" class="form-select">
                        <option value="">Show 3</option>
                        <option value="">Show 6</option>
                        <option value="">Show 9</option>
                        <option value="">Show 12</option>
                    </select>
                </div> --}}
                {!! $products->render() !!}
            </div>
            <section>
                <div class="row" id="productCategory">
                    @include('shop.category.category-render')

                </div>
            </section>
            <div style="background-color: #828bb3;padding: 0 20px 10px 20px;"
                class="d-flex flex-wrap align-items-center">
                <div class="sorting mr-auto">
                    <select name="" class="form-select">
                        <option value="">Show 3</option>
                        <option value="">Show 6</option>
                        <option value="">Show 9</option>
                        <option value="">Show 12</option>
                    </select>
                </div>
                {!! $products->render() !!}
            </div>
        </div>
    </div>
</div>
</div>
<script>
    var slider = document.getElementById('slider');

    noUiSlider.create(slider, {
        start: [1750],
        connect: true,
        range: {
            'min': 0,
            'max': 1750
        }
    });

    var rangeSliderValueElement = document.getElementById('slider-range-value');
    var test = document.getElementById('abc');
    var a = 0;
    var delay = 500;
    slider.noUiSlider.on('update', function (values, handle) {
        rangeSliderValueElement.innerHTML = values.join(' - ');

        test.innerHTML = values[handle];
        /* $.ajax({
            url: '/category-render/'+values[handle],
            type: 'GET',
            data: {
                "_token": "{{ csrf_token() }}",
            }
        }).done(function (response) {
            setTimeout(function(){
            $("#productCategory").empty();
            $("#productCategory").html(response);
        }, delay);
        }); */
    });

</script>
<script>
    $(document).ready(function () {
        var priceValue = $("#abc");
        $("#priceSubmit").click(function () {
            $.ajax({
                url: '/category-render/' + priceValue.text(),
                type: 'GET',
                data: {
                    "_token": "{{ csrf_token() }}",
                    /* comment: comment_value.val(), */
                }
            }).done(function (response) {
                $("#productCategory").empty();
                $("#productCategory").html(response);
            });
        });
    });

</script>
<script>
    $(document).ready(function () {
        var priceValue = $("#abc");
        var categorySort = $("#sortCategory");
        $("#sortCategory").change(function () {
            var url = $(this).val(); // get selected value
            if (url) { // require a URL
                window.location = url; // redirect
            }
            return false;
        });
    });

</script>
@endsection
