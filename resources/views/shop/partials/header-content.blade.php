    <div class="d-flex border-bottom header-color">
        <div class="container">
            <div class="row d-flex justify-content-end ">
                <div style="color: #fff" class="col-lg-6 col-sm-6 col-mb-6 ">
                    @guest
                    <a data-bs-toggle="modal" data-bs-target="#modalRegister" class="link"><i
                            class="fas fa-sign-in-alt fa-2x"></i></a>
                    @else
                    <div class="dropdown">
                        <a class="btn btn-outline-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('admin') }}">Admin Dashboard</a></li>
                            <li><a href="{{ route('invoice') }}" class="dropdown-item" style="padding-left: 20px"><i
                                        class="far fa-file-invoice"></i><span
                                        style="padding-left: 10px">Invoice</span></a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>


                        </ul>
                    </div>
                    @endguest{{--
                </div>
                <div style="color: #fff" class="col-lg-6 col-sm-6 col-mb-6 d-flex cart"> --}}
                    <div class="dropdown">
                        <a href="{{ route('cart') }}" class=" link dropdown-toggle btn-outline" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown"><i class="fal fa-bags-shopping fa-2x"></i></a>
                        <ul class="dropdown-menu  cart" aria-labelledby="dropdownMenuButton1">
                            <li>
                                <div>
                                    <div class="row total-header-section">
                                        <div class="col-lg-6 col-sm-6 col-6">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">3</span>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                            <p>Total: <span class="text-info">$2,978.24</span></p>
                                        </div>
                                  </div>
                                    <div style="padding-top: 15px;padding-bototm:15px">
                                        <div class="row cart-detail">
                                            <div class="col-lg-4 col-sm-4 col-4 cart-detail-img" >
                                                <img src="https://images-na.ssl-images-amazon.com/images/I/811OyrCd5hL._SX425_.jpg">
                                            </div>
                                            <div class="col-lg-8 col-sm-8 col-8 cart-detail-product" style="padding-left: 40px">
                                                <p>Sony DSC-RX100M..</p>
                                                <span class="price text-info"> $250.22</span> <span class="count"> Quantity:01</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding-top: 15px;padding-bototm:15px">
                                        <div class="row cart-detail">
                                            <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                                <img src="https://images-na.ssl-images-amazon.com/images/I/811OyrCd5hL._SX425_.jpg">
                                            </div>
                                            <div class="col-lg-8 col-sm-8 col-8 cart-detail-product" style="padding-left: 40px">
                                                <p>Sony DSC-RX100M..</p>
                                                <span class="price text-info"> $250.22</span> <span class="count"> Quantity:01</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding-top: 15px;padding-bototm:15px">
                                        <div class="row cart-detail">
                                            <div class="col-lg-4 col-sm-4 col-4 cart-detail-img" >
                                                <img src="https://images-na.ssl-images-amazon.com/images/I/811OyrCd5hL._SX425_.jpg">
                                            </div>
                                            <div class="col-lg-8 col-sm-8 col-8 cart-detail-product" style="padding-left: 40px">
                                                <p>Sony DSC-RX100M..</p>
                                                <span class="price text-info"> $250.22</span> <span class="count"> Quantity:01</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-12 text-center checkout d-flex justify-content-end">
                                        <a href="{{ route('cart') }}" class="btn btn-primary">Checkout</a>
                                        
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!--Nav Bar-->
    <div id="navBar" class="container_banner">
        <div>
            <nav class="navbar navbar-expand-lg nav-index navbar-light ">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('home') }}"><img
                            src="{{ asset('FrontEnd/img/logo-new.png') }}" class="logo" alt=""></a>
                    <button class="navbar-toggler " style="background-color: #3735b6" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown ">
                                <div class="menu-background">
                                    <a class="nav-link dropbtn nav-link" href="{{ route('category') }}" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                                    <div class="dropdown-content" aria-labelledby="navbarDropdown"
                                        style="background-color: #EEEBE4;width:250px!important">
                                        <a class="link nav-link" style="color: #000!important" href="#">Family
                                            Boardgame</a>
                                        <a class=" nav-link" href="#" style="color: #000!important">Action Boardgame</a>
                                        <hr class="dropdown-divider">
                                        <a class="nav-link" href="#" style="color: #000!important">RPG Boardgame</a>
                                    </div>
                                </div>
                            </li>
                            <li class=" nav-item">
                                <div class="menu-background"><a class="nav-link" href="{{ route('about-us') }}">About
                                        Us</a>
                                </div>
                            </li>
                            <li class=" nav-item">
                                <div class="menu-background"><a class="nav-link" href="#">News</a>
                                </div>
                            </li>
                            <li class=" nav-item">
                                <div class="menu-background"><a class="nav-link" href="#">News</a>
                                </div>
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
                <form action="#" class="d-flex justify-content-between">
                    <input type="text" class="form-control-search" id="search_input" placeholder="Search Here">
                    <button class="btn_search" type="submit"></button>
                    <span id="close_search" title="Close Search" onclick="searchHidden()"><i
                            class="fal fa-times"></i></span>
                </form>
            </div>

        </div>
    </div>

    <!--//Nav Bar-->
