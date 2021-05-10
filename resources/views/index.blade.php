@extends('shop.layout')
@section('content')

<!--Banner-->
<div class="banner">
    <div class="container" style="padding-bottom:50px;padding-top:50px">
        <div class="owl-banner owl-carousel owl-theme col-lg-12">
            <div class="item">
                <div class="row">
                    <div class="col-lg-5" style="text-align: left">
                        <h1>Title</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae praesentium dignissimos natus
                            ullam itaque obcaecati,
                            vero iusto cum adipisci perferendis, quo deleniti aperiam laboriosam! Repellendus vero
                            mollitia reprehenderit explicabo debitis.</p>
                        <div>
                            <a class="btn"><i class="far fa-plus-circle fa-3x add-btn"></i></a>Add to Cart
                        </div>
                    </div>
                    <div class="col-lg-7"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" class="card-img-top">
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-lg-5" style="text-align: left">
                        <h1>Title</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae praesentium dignissimos natus
                            ullam itaque obcaecati,
                            vero iusto cum adipisci perferendis, quo deleniti aperiam laboriosam! Repellendus vero
                            mollitia reprehenderit explicabo debitis.</p>
                        <div>
                            <a class="btn"><i class="far fa-plus-circle fa-3x add-btn"></i></a>Add to Cart
                        </div>
                    </div>
                    <div class="col-lg-7"><img src="{{ asset('FrontEnd/img/dragomino-1.jpg') }}" class="card-img-top">
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-lg-5" style="text-align: left">
                        <h1>Title</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae praesentium dignissimos natus
                            ullam itaque obcaecati,
                            vero iusto cum adipisci perferendis, quo deleniti aperiam laboriosam! Repellendus vero
                            mollitia reprehenderit explicabo debitis.</p>
                        <div>
                            <a class="btn"><i class="far fa-plus-circle fa-3x add-btn"></i></a>Add to Cart
                        </div>
                    </div>
                    <div class="col-lg-7"><img src="{{ asset('FrontEnd/img/foldscope.jpg') }}" class="card-img-top">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//Banner-->

<!--Content-->
<div class="container-fluid" style="padding-bottom:100px">
    <div class="container">
        <!--Newest-->
        <div class="row" style="padding-top: 20px">
            <div class="col-lg-12" style="padding-top: 20px">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 text-center">
                                    <div style="padding-left: 5px;padding-top:13px">
                                        <h1 style="color: #000" style="padding-top: 30px"><b>Family</b></h1>
                                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum harum iusto
                                            corrupti
                                            repudiandae rerum excepturi fugiat blanditiis ducimus voluptas sint, saepe
                                            illum adipisci <br>
                                            officiis est nostrum incidunt soluta dolor commodi.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6>The Best borad game to play with friend</h6>
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
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6>The Best borad game to play with friend</h6>
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
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6>The Best borad game to play with friend</h6>
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
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6>The Best borad game to play with friend</h6>
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
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6>The Best borad game to play with friend</h6>
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
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6>The Best borad game to play with friend</h6>
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
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6>The Best borad game to play with friend</h6>
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
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6>The Best borad game to play with friend</h6>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 text-center">
                                    <div style="padding-left: 5px;padding-top:13px">
                                        <h1 style="color: #000" style="padding-top: 30px"><b>Family</b></h1>
                                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum harum iusto
                                            corrupti
                                            repudiandae rerum excepturi fugiat blanditiis ducimus voluptas sint, saepe
                                            illum adipisci <br>
                                            officiis est nostrum incidunt soluta dolor commodi.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6>The Best borad game to play with friend</h6>
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
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6>The Best borad game to play with friend</h6>
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
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6>The Best borad game to play with friend</h6>
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
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6>The Best borad game to play with friend</h6>
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
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6>The Best borad game to play with friend</h6>
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
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6>The Best borad game to play with friend</h6>
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
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6>The Best borad game to play with friend</h6>
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
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6>The Best borad game to play with friend</h6>
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 text-center">
                                    <div style="padding-left: 5px;padding-top:13px">
                                        <h1 style="color: #000" style="padding-top: 30px"><b>Family</b></h1>
                                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum harum iusto
                                            corrupti
                                            repudiandae rerum excepturi fugiat blanditiis ducimus voluptas sint, saepe
                                            illum adipisci <br>
                                            officiis est nostrum incidunt soluta dolor commodi.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6>The Best borad game to play with friend</h6>
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
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6>The Best borad game to play with friend</h6>
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
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6>The Best borad game to play with friend</h6>
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
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6>The Best borad game to play with friend</h6>
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
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6>The Best borad game to play with friend</h6>
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
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6>The Best borad game to play with friend</h6>
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
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6>The Best borad game to play with friend</h6>
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
                                        <div class="col-lg-3 col-md-6">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6>The Best borad game to play with friend</h6>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//Content-->

<!--exclusive start-->
<section class="exclusive-deal-area">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 exclusive-left">
                    <div class="row exclusive-slogan" style="padding-bottom: 30px">
                        <div class="col-lg-12">
                            <h1>Exclusive Hot Deal End Soon!</h1>
                            <p>Get it now before it End.</p>
                        </div>
                        <div class="col-lg-12 d-flex justify-content-center">
                            <div class="row clock-wrap">
                                <div  class="col clockinner">
                                    <h1 id="days"></h1>
                                    <span>Days</span>
                                </div>
                                <div  class="col clockinner">
                                    <h1 id="hours"></h1>
                                    <span>Hours</span>
                                </div>
                                <div  class="col clockinner">
                                    <h1 id="minutes"></h1>
                                    <span>Minnutes</span>
                                </div>
                                <div  class="col clockinner">
                                    <h1 id="seconds"></h1>
                                    <span>Second</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href class="primary-btn"> Shop Now</a>
            </div>
            <div class="col-lg-6 exclusive-right">
                <div>
                    <div class="active-exclusive-product-slider owl-carousel owl-exclusive owl-theme owl-loaded">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <div class="owl-item"><img src="{{ asset('FrontEnd/img/conan.png') }}" alt=""></div>
                                <div class="owl-item"><img src="{{ asset('FrontEnd/img/conan.png') }}" alt=""></div>
                                <div class="owl-item"><img src="{{ asset('FrontEnd/img/conan.png') }}" alt=""></div>
                            </div>
                        </div>
                        <div class="owl-nav">
                            <div class="btn-left-exclusive">
                                <div class="owl-prev-custome"><img src="{{ asset('FrontEnd/img/prev-black.png') }}" alt="" class="img-fluid"></div>
                            </div>
                            <div class="btn-right-exclusive">
                                <div class="owl-next-custome"><img src="{{ asset('FrontEnd/img/next-black.png') }}" alt="" class="img-fluid"></div>
                            </div>
                        </div>
                        {{-- <div class="owl-dots">
                            <div class="owl-dot active"><span></span></div>
                            <div class="owl-dot"><span></span></div>
                            <div class="owl-dot"><span></span></div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!--exclusive end-->
@endsection
