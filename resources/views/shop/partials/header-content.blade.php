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
                                            <div id="change-item-cart">
                                                @if (Session::has('Cart') != null)
                                                <div style="padding-top: 15px;padding-bototm:15px">
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
                                                    @endforeach
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
                        <li style="float: right;line-height:50px;padding-left:20px;padding-right:20px">
                                <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="color: #fff">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    @hasanyrole('admin|staff')
                                    <li><a class="dropdown-item" href="{{ route('admin') }}">Admin Dashboard</a>
                                    </li>
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
                        </li>
                        <li style="float: right;line-height:50px;padding-left:20px;padding-right:20px">
                                <div class="btn-group">
                                    <a type="button" class="btn " data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-bell" style="color: #fff"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            @php
                                            $number=0;
                                            @endphp
                                            @foreach ($notifications as $notification)
                                            @if ($notification->user_id==Auth::user()->id&&$notification->user_id!=null)
                                            <a class="dropdown-item"
                                                href="{{ url('notification-status/'.$notification->id) }}"
                                                onclick="notificationStatus({{ $notification->id }})">
                                                @php
                                                $number++;
                                                @endphp
                                                <div class="row">
                                                    <div class="col align-self-start">
                                                        {{ $notification->content }}
                                                    </div>
                                                    <div class="col align-self-start">
                                                        {{ date('d/m/Y', strtotime($notification->created_at))}}
                                                    </div>
                                                </div>
                                            </a>
                                            <hr>
                                            @endif
                                            @endforeach
                                        </li>
                                        <div class="container" style="width: 210px;">
                                            You have {{ $number }} notification
                                        </div>
                                        @if ($number!=0)
                                        <div class="d-grid gap-2">
                                            <a href="{{ url('notification-all-status') }}"
                                                class="btn btn-info btn-block" style="color: #fff">Mark all
                                                notifications</a>
                                        </div>
                                        @endif

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
                    <input type="text" class="form-control-search" id="search_input" placeholder="Search Here"
                        name="keyword">
                    <button class="btn_search" type="submit"></button>
                    <span id="close_search" title="Close Search" onclick="searchHidden()"><i
                            class="fal fa-times"></i></span>
                </form>
            </div>
        </div>
    </div>

    <!--//Nav Bar-->
