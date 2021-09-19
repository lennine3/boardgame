    <div class=" border-bottom header-color header-nav">
        <div class="container">
            <div class="row">
                <div class="md-12">
                    <ul>
                        <li style="float: left;line-height:50px">
                            <i class="far fa-envelope"></i> tvdkhoa1801@gmail.com
                        </li>
                        <li style="padding-left: 40px;padding-right: 40px;">
                            <div class="dropdown" id="keep-open">
                                <a href="{{ route('cart') }}" class=" link dropdown-toggle" id="dropdownCart"
                                    data-bs-toggle="dropdown"><i class="fal fa-bags-shopping fa-2x"></i>
                                    @if (Session::has('Cart') != null)
                                        <span class="badge badge-pill badge-danger" style="color: #000"
                                            id="quanty-show">{{ Session::get('Cart')->totalQuanty }}</span>
                                    @else
                                        <span class="badge badge-pill badge-danger" id="quanty-show">0</span>
                                    @endif
                                </a>
                                <ul class="dropdown-menu  cart" aria-labelledby="dropdownCart" role="menu">
                                    <li>
                                        <div style="padding: 15px 0px 15px 0px">
                                            {{-- <div class="row total-header-section">
                                                <div class="col-lg-6 col-sm-6 col-6" style="padding-bottom:10px">
                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                </div>
                                            </div> --}}
                                            <div id="change-item-cart">
                                                @if (Session::has('Cart') != null)
                                                    <div style="padding-top: 15px;padding-bototm:15px">
                                                        {{-- <table class="table"> --}}
                                                        {{-- <tbody> --}}
                                                        @foreach (Session::get('Cart')->products as $item)
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <div class="cart-detail-img">
                                                                    <img
                                                                        src="{{ asset('Img/product-img/' . $item['productInfo']->image) }}">
                                                                </div>
                                                                <div>
                                                                    <div class="text-info">
                                                                        ${{ $item['productInfo']->promotion_price }}
                                                                        x
                                                                        {{ $item['quanty'] }}
                                                                    </div>
                                                                    <div>
                                                                        <b>{{ $item['productInfo']->name }}</b>
                                                                    </div>
                                                                </div>
                                                                <div class="cart-close">
                                                                    <button data-id="{{ $item['productInfo']->id }}"
                                                                        class="btn">
                                                                        <i class="fas fa-times"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            {{-- <tr style="border-bottom: 1px solid #fff!important">
                                                                <td>
                                                                    <div class="cart-detail-img">
                                                                        <img
                                                                            src="{{ asset('Img/product-img/'.$item['productInfo']->image) }}">
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="row">
                                                                        <div class="col-lg-12 text-info">
                                                                            ${{ $item['productInfo']->promotion_price }}
                                                                            x
                                                                            {{ $item['quanty'] }}
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <b>{{ $item['productInfo']->name }}</b>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="cart-close">
                                                                        <button data-id="{{ $item['productInfo']->id }}"
                                                                            class="btn"><i
                                                                                class="fas fa-times"></i></button>
                                                                    </div>
                                                                </td>
                                                            </tr> --}}
                                                        @endforeach
                                                        {{-- </tbody> --}}
                                                        {{-- </table> --}}
                                                    </div>

                                                    <div class="total-section text-center checkout row">
                                                        <div class="col-lg-6">
                                                            Total:
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <span
                                                                class="text-info">${{ Session::get('Cart')->totalPrice }}</span>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div style="padding: 15px 15px 15px 15px">There no product in your
                                                        Cart.
                                                        Please
                                                        choose some thing.</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div
                                                class="col-lg-12 col-sm-12 col-12 text-center checkout d-flex justify-content-end">
                                                <a href="{{ route('cart') }}" class="btn btn-primary">CART</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li style="padding-left: 20px;margin-right: 20px;border-left: 1px solid #353940;">
                            @guest
                            <li>
                                <div class="dropdown">
                                    <a data-bs-toggle="modal" data-bs-target="#modalRegister" class="link"><i
                                            class="fas fa-sign-in-alt fa-2x"></i></a>
                                </div>
                            </li>

                        @else
                            <li>
                                <div class="dropdown">
                                    <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        @hasanyrole('admin|staff')
                                        <li><a class="dropdown-item" href="{{ route('admin') }}">Admin Dashboard</a></li>
                                        @endhasanyrole
                                        <li><a class="dropdown-item" href="{{ route('profile-user') }}"><i
                                                    class="fal fa-user"></i>
                                                <span style="padding-left: 10px">Profile</span></a></li>
                                        <li><a href="{{ route('invoice-shop') }}" class="dropdown-item"><i
                                                    class="far fa-file-invoice"></i><span
                                                    style="padding-left: 15px">Invoice</span></a>
                                        </li>
                                        <li>
                                            <a href="{{ route('favorite') }}" class="dropdown-item">
                                                <i class="far fa-heart"></i>
                                                <span style="padding-left: 15px">Favorite</span>
                                            </a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();"><i
                                                    class="fal fa-portal-exit"></i>
                                                <span style="padding-left: 8px">{{ __('Logout') }}</span>
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        @endguest
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--Nav Bar-->
    <div class="container">
        <div style="margin: auto;
        text-align:center;">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('FrontEnd/img/logo-new.png') }}"
                    class="logo" alt="">
                <span
                    style="text-align: center;vertical-align: middle;padding-top:35px;font-size: 45px;font-family: 'Otomanopee One', sans-serif;font-weight:600;color:#0000008c">KT
                    Board Game Store</span></a>
        </div>
        <hr>
        <div>
            <nav class="navbar navbar-expand-lg nav-index navbar-light ">
                <div class="container">
                    <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <div class="menu-background"><a class="nav-link" href="{{ route('home') }}">Home</a>
                                </div>
                            </li>
                            <li class=" nav-item">
                                <div class="menu-background"><a class="nav-link"
                                        href="{{ url('category/0') }}">Category</a>
                                </div>
                            </li>
                            <li class=" nav-item">
                                <div class="menu-background"><a class="nav-link" href="{{ route('about-us') }}">About
                                        Us</a>
                                </div>
                            </li>
                            <li class=" nav-item">

                            </li>
                            <li class="nav-item">

                            </li>
                            <li class="nav-item">
                                <div style="padding-top: 15px">
                                    <button class="btn search_button" onclick="searchVisible()"><i
                                            class="fal fa-search"></i></button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div id="search_input_box" class="visible_hidden">
            <div class="container">
                <form action="{{ route('search') }}" class="d-flex justify-content-between">
                    <input type="text" class="form-control-search" id="search_input" placeholder="Search Here" name="keyword">
                    <button class="btn_search" type="submit"></button>
                    <span id="close_search" title="Close Search" onclick="searchHidden()"><i
                            class="fal fa-times"></i></span>
                </form>
            </div>
        </div>
    </div>

    <!--//Nav Bar-->
