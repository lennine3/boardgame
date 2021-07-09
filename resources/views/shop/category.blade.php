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
        <div class="col-lg-3 " >
            <div class="affix" id="navBar">
            <div class="side_Bar_Categories">
                <div class="head">
                    Browser Category
                </div>
            </div>
            <ul class="main-categories">

                <li class="main-nav-list" style="padding:20px;20px;20px;20px">
                    <div id="slider"></div>
                    <br>
                    <div id="abc" hidden></div>
                    <div class="row">
                        <div class="col-lg-6"><button id="priceSubmit" class="primary-btn btn">Filter</button></div>
                        <div class="col-lg-6">$<span id="slider-range-value"></span></div>
                    </div>


                </li>
                <hr>
                @foreach ($productTypes as $productType)
                <li class="main-nav-list" style="padding:20px;20px;20px;20px"><a href="{{ url('category-type'.'/'.$productType->id.'/'.'0') }}">
                        <span class="lnr lnr-arrow-right"></span>{{ $productType->product_type_name }}{{-- <span class="number">(53)</span> --}}</a>
                </li>
                @endforeach
            </ul>
            </div>
        </div>
        <div class="col-lg-9">
            <div style="padding: 0 20px 10px 20px;"
                class="d-flex flex-wrap align-items-center main_color">
                <div class="sorting">
                    <select name="" class="form-select" id="sortCategory">
                        <option value="{{ url('category/0') }}" @php if(strpos($_SERVER['REQUEST_URI'], "category/0" ))
                            { {echo 'selected' ;} } @endphp>Newest</option>
                        <option value="{{ url('category/1') }}" @php if(strpos($_SERVER['REQUEST_URI'], "category/1" ))
                            { {echo 'selected' ;} } @endphp>Price: low to high</option>
                        <option value="{{ url('category/2') }}" @php if(strpos($_SERVER['REQUEST_URI'], "category/2" ))
                            { {echo 'selected' ;} } @endphp>Price: high to low</option>
                    </select>
                </div>
                <div class="sorting mr-auto">
                </div>
                {!! $products->render() !!}
            </div>
            <section style="padding-top: 10px">
                <div class="row" id="productCategory">
                    @include('shop.category.category-render')
                </div>
            </section>
        </div>
    </div>
</div>
</div>
<script src="{{ asset('FrontEnd/js/category-js.js') }}"></script>
@endsection
