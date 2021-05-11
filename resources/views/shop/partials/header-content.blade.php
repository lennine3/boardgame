    <div class="d-flex border-bottom header-color">
        <div class="container">
            <div class="row">
                <div style="color: #fff" class="col-lg-6 col-sm-6 col-mb-6 d-flex"><a data-bs-toggle="modal"
                        data-bs-target="#modalRegister" class="link"><i class="fas fa-sign-in-alt fa-2x"></i></a></div>
                <div style="color: #fff" class="col-lg-6 col-sm-6 col-mb-6 d-flex justify-content-end cart"><a
                        href="{{ route('cart') }}" class="link"><i class="fal fa-bags-shopping fa-2x"></i></a>
                    <a href="{{ route('invoice') }}" class="link" style="padding-left: 20px"><i
                            class="far fa-file-invoice fa-2x"></i></a></div>
            </div>
        </div>
    </div>


    <!--Nav Bar-->
    <div id="navBar" class="container_banner">
        <div>
            <nav class="navbar navbar-expand-lg nav-index navbar-light " {{-- style="background-color: #2F323A" --}}>
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('FrontEnd/img/logo-new.png') }}" class="logo"
                        alt=""></a>
                <button class="navbar-toggler " style="background-color: #3735b6" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown ">
                            <div class="menu-background">
                                <a class="nav-link dropbtn nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">Category </a>
                                <div class="dropdown-content" aria-labelledby="navbarDropdown"
                                    style="background-color: #EEEBE4;width:250px!important">
                                    <a class="link nav-link" style="color: #000!important"
                                        href="{{ route('category') }}">All Product</a>
                                    <a class=" nav-link" href="#" style="color: #000!important">Another action</a>
                                    <hr class="dropdown-divider">
                                    <a class="nav-link" href="#" style="color: #000!important">Something else here</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="menu-background">
                                <a class="nav-link disabled nav-link" href="#" tabindex="-1"
                                    aria-disabled="true">Disabled</a>
                            </div>
                        </li>
                        <li class=" nav-item">
                            <div class="menu-background"><a class="nav-link" href="{{ route('about-us') }}">About Us</a>
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
                                    {{-- <input class="form-control" type="search" placeholder="Search" aria-label="Search"> --}}
                                    <button class="btn search_button" onclick="searchVisible()"><i class="fal fa-search"></i></button>
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
                    <span id="close_search" title="Close Search" onclick="searchHidden()"><i class="fal fa-times"></i></span>
                </form>
            </div>

        </div>
    </div>

<!--//Nav Bar-->
