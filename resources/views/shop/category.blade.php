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
                    <a data-bs-toggle="collapse" href="#demo" aria-expanded="false" aria-controls="action"
                        class="action">
                        <span class="lnr lnr-arrow-right"></span>Action gameboard<span class="number">(53)</span></a>
                    <ul id="demo" class="collapse" aria-expanded="false">
                        <li class="main-nav-list child "> <a href>Action board game</a></li>
                        <li class="main-nav-list child "> <a href>Action board game</a></li>
                        <li class="main-nav-list child "> <a href>Action board game</a></li>
                        <li class="main-nav-list child "> <a href>Action board game</a></li>
                    </ul>
                </li>
                <li class="main-nav-list" style="padding:20px;20px;20px;20px">
                    <a data-bs-toggle="collapse" href="#Tragedy" aria-expanded="false" aria-controls="Tragedy"
                        class="Tragedy">
                        <span class="lnr lnr-arrow-right"></span>Tragedy gameboard<span class="number">(53)</span></a>
                    <ul id="Tragedy" class="collapse" aria-expanded="false">
                        <li class="main-nav-list child "> <a href>Tragedy boardgame</a></li>
                        <li class="main-nav-list child "> <a href>Tragedy boardgame</a></li>
                        <li class="main-nav-list child "> <a href>Tragedy boardgame</a></li>
                        <li class="main-nav-list child "> <a href>Tragedy boardgame</a></li>
                    </ul>
                </li>
                <li class="main-nav-list" style="padding:20px;20px;20px;20px">
                    <a data-bs-toggle="collapse" href="#Roleplay" aria-expanded="false" aria-controls="Roleplay"
                        class="Roleplay">
                        <span class="lnr lnr-arrow-right"></span>Roleplay gameboard<span class="number">(53)</span></a>
                    <ul id="Roleplay" class="collapse" aria-expanded="false">
                        <li class="main-nav-list child "> <a href>Roleplay boardgame</a></li>
                        <li class="main-nav-list child "> <a href>Roleplay boardgame</a></li>
                        <li class="main-nav-list child "> <a href>Roleplay boardgame</a></li>
                        <li class="main-nav-list child "> <a href>Roleplay boardgame</a></li>
                    </ul>
                </li>
                <li class="main-nav-list" style="padding:20px;20px;20px;20px"><a href="#">
                        <span class="lnr lnr-arrow-right"></span>Customer choose<span class="number">(53)</span></a>
                </li>
                <li class="main-nav-list" style="padding:20px;20px;20px;20px">
                    <a data-bs-toggle="collapse" href="#RPG" aria-expanded="false" aria-controls="RPG" class="RPG">
                        <span class="lnr lnr-arrow-right"></span>RPG gameboard<span class="number">(53)</span></a>
                    <ul id="RPG" class="collapse" aria-expanded="false">
                        <li class="main-nav-list child "> <a href>RPG boardgame</a></li>
                        <li class="main-nav-list child "> <a href>RPG boardgame</a></li>
                        <li class="main-nav-list child "> <a href>RPG boardgame</a></li>
                        <li class="main-nav-list child "> <a href>RPG boardgame</a></li>
                    </ul>
                </li>
                <li class="main-nav-list" style="padding:20px;20px;20px;20px"><a href="#">F
                        <span class="lnr lnr-arrow-right"></span>Fun gameboard<span class="number">(53)</span></a></li>
                <li class="main-nav-list" style="padding:20px;20px;20px;20px"><a href="#">
                        <span class="lnr lnr-arrow-right"></span>Best of month<span class="number">(53)</span></a></li>
                <li class="main-nav-list" style="padding:20px;20px;20px;20px">
                    <a data-bs-toggle="collapse" href="#family" aria-expanded="false" aria-controls="family"
                        class="family">
                        <span class="lnr lnr-arrow-right"></span>Family gameboard<span class="number">(53)</span></a>
                    <ul id="family" class="collapse" aria-expanded="false">
                        <li class="main-nav-list child "> <a href>Family boardgame</a></li>
                        <li class="main-nav-list child "> <a href>Family boardgame</a></li>
                        <li class="main-nav-list child "> <a href>Family boardgame</a></li>
                        <li class="main-nav-list child "> <a href>Family boardgame</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-lg-9">
            <div style="background-color: #828bb3;padding: 0 20px 10px 20px;"
                class="d-flex flex-wrap align-items-center">
                <div class="sorting">
                    <select name="" class="form-select">
                        <option value="">Default sorting</option>
                        <option value="">Default sorting</option>
                        <option value="">Default sorting</option>
                        <option value="">Default sorting</option>
                    </select>
                </div>
                <div class="sorting mr-auto">
                    <select name="" class="form-select">
                        <option value="">Show 3</option>
                        <option value="">Show 6</option>
                        <option value="">Show 9</option>
                        <option value="">Show 12</option>
                    </select>
                </div>
                <div class="pagination">
                    <a href="" style="padding-top:13px"><i class="fal fa-long-arrow-left"></i></a>
                    <a href="" class="active">1</a>
                    <a href="">2</a>
                    <a href="">3</a>
                    <a href="" class="dot-dot">...</a>
                    <a href="">8</a>
                    <a href="" style="padding-top:13px"><i class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
            <section>
                <div class="row">
                    <div class="col-lg-4 col-md-6 p-b-20">
                        <div class="single-product">
                            <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="">
                            <div class="product-details">
                                <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                <div class="price">
                                    <h6>$60</h6>
                                </div>
                                <hr>
                                <div class="prd-bottom">
                                    <div class="row">
                                        <div class="d-flex justify-content-center">
                                            <div class="tooltip col-lg-6">
                                                <a href="#">
                                                    <i class="fal fa-shopping-bag fa-3x addCart"></i>
                                                </a><span class="tooltiptext">Add Cart</span>
                                            </div>
                                            <div class="tooltip col-lg-6">
                                                <a href="#">
                                                    <i class="fas fa-heart-circle fa-3x addFav"></i>
                                                </a><span class="tooltiptext">Favortire</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-b-20">
                        <div class="single-product">
                            <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="">
                            <div class="product-details">
                                <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                <div class="price">
                                    <h6>$60</h6>
                                </div>
                                <hr>
                                <div class="prd-bottom">
                                    <div class="row">
                                        <div class="d-flex justify-content-center">
                                            <div class="tooltip col-lg-6">
                                                <a href="#">
                                                    <i class="fal fa-shopping-bag fa-3x addCart"></i>
                                                </a><span class="tooltiptext">Add Cart</span>
                                            </div>
                                            <div class="tooltip col-lg-6 ">
                                                <a href="#">
                                                    <i class="fas fa-heart-circle fa-3x addFav"></i>
                                                </a><span class="tooltiptext">Favortire</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-b-20">
                        <div class="single-product">
                            <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="">
                            <div class="product-details">
                                <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                <div class="price">
                                    <h6>$60</h6>
                                </div>
                                <hr>
                                <div class="prd-bottom">
                                    <div class="row">
                                        <div class="d-flex justify-content-center">
                                            <div class="tooltip col-lg-6">
                                                <a href="#">
                                                    <i class="fal fa-shopping-bag fa-3x addCart"></i>
                                                </a><span class="tooltiptext">Add Cart</span>
                                            </div>
                                            <div class="tooltip col-lg-6">
                                                <a href="#">
                                                    <i class="fas fa-heart-circle fa-3x addFav"></i>
                                                </a><span class="tooltiptext">Favortire</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-b-20">
                        <div class="single-product">
                            <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="">
                            <div class="product-details">
                                <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                <div class="price">
                                    <h6>$60</h6>
                                </div>
                                <hr>
                                <div class="prd-bottom">
                                    <div class="row">
                                        <div class="d-flex justify-content-center">
                                            <div class="tooltip col-lg-6">
                                                <a href="#">
                                                    <i class="fal fa-shopping-bag fa-3x addCart"></i>
                                                </a><span class="tooltiptext">Add Cart</span>
                                            </div>
                                            <div class="tooltip col-lg-6">
                                                <a href="#">
                                                    <i class="fas fa-heart-circle fa-3x addFav"></i>
                                                </a><span class="tooltiptext">Favortire</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-b-20">
                        <div class="single-product">
                            <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="">
                            <div class="product-details">
                                <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                <div class="price">
                                    <h6>$60</h6>
                                </div>
                                <hr>
                                <div class="prd-bottom">
                                    <div class="row">
                                        <div class="d-flex justify-content-center">
                                            <div class="tooltip col-lg-6">
                                                <a href="#">
                                                    <i class="fal fa-shopping-bag fa-3x addCart"></i>
                                                </a><span class="tooltiptext">Add Cart</span>
                                            </div>
                                            <div class="tooltip col-lg-6">
                                                <a href="#">
                                                    <i class="fas fa-heart-circle fa-3x addFav"></i>
                                                </a><span class="tooltiptext">Favortire</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-b-30">
                        <div class="single-product">
                            <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="">
                            <div class="product-details">
                                <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                <div class="price">
                                    <h6>$60</h6>
                                </div>
                                <hr>
                                <div class="prd-bottom">
                                    <div class="row">
                                        <div class="d-flex justify-content-center">
                                            <div class="tooltip col-lg-6">
                                                <a href="#">
                                                    <i class="fal fa-shopping-bag fa-3x addCart"></i>
                                                </a><span class="tooltiptext">Add Cart</span>
                                            </div>
                                            <div class="tooltip col-lg-6">
                                                <a href="#">
                                                    <i class="fas fa-heart-circle fa-3x addFav"></i>
                                                </a><span class="tooltiptext">Favortire</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-b-30">
                        <div class="single-product">
                            <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="">
                            <div class="product-details">
                                <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                <div class="price">
                                    <h6>$60</h6>
                                </div>
                                <hr>
                                <div class="prd-bottom">
                                    <div class="row">
                                        <div class="d-flex justify-content-center">
                                            <div class="tooltip col-lg-6">
                                                <a href="#">
                                                    <i class="fal fa-shopping-bag fa-3x addCart"></i>
                                                </a><span class="tooltiptext">Add Cart</span>
                                            </div>
                                            <div class="tooltip col-lg-6 ">
                                                <a href="#">
                                                    <i class="fas fa-heart-circle fa-3x addFav"></i>
                                                </a><span class="tooltiptext">Favortire</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-b-30">
                        <div class="single-product">
                            <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="">
                            <div class="product-details">
                                <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                <div class="price">
                                    <h6>$60</h6>
                                </div>
                                <hr>
                                <div class="prd-bottom">
                                    <div class="row">
                                        <div class="d-flex justify-content-center">
                                            <div class="tooltip col-lg-6">
                                                <a href="#">
                                                    <i class="fal fa-shopping-bag fa-3x addCart"></i>
                                                </a><span class="tooltiptext">Add Cart</span>
                                            </div>
                                            <div class="tooltip col-lg-6">
                                                <a href="#">
                                                    <i class="fas fa-heart-circle fa-3x addFav"></i>
                                                </a><span class="tooltiptext">Favortire</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 p-b-30">
                        <div class="single-product">
                            <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="">
                            <div class="product-details">
                                <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                <div class="price">
                                    <h6>$60</h6>
                                </div>
                                <hr>
                                <div class="prd-bottom">
                                    <div class="row">
                                        <div class="d-flex justify-content-center">
                                            <div class="tooltip col-lg-6">
                                                <a href="#">
                                                    <i class="fal fa-shopping-bag fa-3x addCart"></i>
                                                </a><span class="tooltiptext">Add Cart</span>
                                            </div>
                                            <div class="tooltip col-lg-6">
                                                <a href="#">
                                                    <i class="fas fa-heart-circle fa-3x addFav"></i>
                                                </a><span class="tooltiptext">Favortire</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <div class="pagination">
                    <a href="" style="padding-top:13px"><i class="fal fa-long-arrow-left"></i></a>
                    <a href="" class="active">1</a>
                    <a href="">2</a>
                    <a href="">3</a>
                    <a href="" class="dot-dot">...</a>
                    <a href="">8</a>
                    <a href="" style="padding-top:13px"><i class="fal fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
