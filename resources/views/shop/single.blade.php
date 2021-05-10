@extends('shop.layout')
@section('content')
<div class="container" style="padding-top: 20px;padding-bottom:50px">
    <div class="row">
        <div class="col-lg-4 col-mb-12">
            <img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-5 col-mb-12" style="color: #000;padding-left:50px">
            <h1 style="font-size:30px">Monopoly - Traditional board game to play with friend</h1>
            <hr>
            <div style="padding:15px;15px;15px;15px">
                <div style="display: inline-flex">
                    <span>price:</span>
                    <h3 style="color:orange;padding-left:25px">650.000 vnd</h3>
                </div>

            </div>
            <div>
                <div>
                    <label>Number player:</label> 2-4 players <br>
                    <label>Idea participant:</label> 4 players <br>
                    <label>Playing time:</label> 30+ minutes
                    <label>Age:</label> 4+
                </div>

                <hr>
                <div style="display: inline-flex">
                    <label>Amout:</label>
                    <div style="padding-left: 10px">
                        <select name="" id="">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div>

            </div>
            <div style="padding-top: 20px">
                <button class="btn btn-primary">
                    <i class="far fa-cart-plus"></i>
                    Add to cart
                </button>
            </div>
        </div>
        <div class="col-lg-3 col-mb-12 col-sm-12">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> <img src="{{ asset('FrontEnd/img/shipPolicy.png') }}"
                            style="width: 15%" alt=""> Shipping Policy
                        <hr>
                    </li>
                    <li class="list-group-item"> <img src="{{ asset('FrontEnd/img/Payment.png') }}" style="width: 15%"
                            alt=""> Easy payment
                        <hr>
                    </li>
                    <li class="list-group-item"> <img src="{{ asset('FrontEnd/img/Trusted.png') }}" style="width: 15%"
                            alt=""> Trusted seller
                        <hr>
                    </li>
                    <li class="list-group-item"> <img src="{{ asset('FrontEnd/img/Contact.png') }}" style="width: 15%"
                            alt=""> Contact Us now <div class="d-flex justify-content-center">
                            <hr width="75%">
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-center">Tel: +123456789 </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row" style="padding-top: 20px">
        <div style="padding-bottom:20px;padding-top:20px">
            <div class="trapezoid">
                <div style="padding-left: 5px;padding-top:13px">
                    <h4 style="color: #fff" style="padding-top: 30px"><i>Related</i></h4>
                </div>
            </div>
            <div style="background-color: #ec4e0f;width:100%;height:2.5px">
            </div>
        </div>

        <div>
            <div id="latesrPreview" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('FrontEnd/img/dragomino-1.jpg') }}" class="col-lg-3 col-sm-6 col-mb-3"
                            style="width: 32%">
                        <img src="{{ asset('FrontEnd/img/foldscope.jpg') }}" class="col-lg-3 col-sm-6 col-mb-3"
                            style="width: 32%">
                        <img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" class="col-lg-3 col-sm-6 col-mb-3"
                            style="width:32%">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('FrontEnd/img/dragomino-1.jpg') }}" class="col-lg-3 col-sm-6 col-mb-3"
                            style="width: 32%">
                        <img src="{{ asset('FrontEnd/img/foldscope.jpg') }}" class="col-lg-3 col-sm-6 col-mb-3"
                            style="width: 32%">
                        <img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" class="col-lg-3 col-sm-6 col-mb-3"
                            style="width:32%">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('FrontEnd/img/dragomino-1.jpg') }}" class="col-lg-3 col-sm-6 col-mb-3"
                            style="width: 32%">
                        <img src="{{ asset('FrontEnd/img/foldscope.jpg') }}" class="col-lg-3 col-sm-6 col-mb-3"
                            style="width: 32%">
                        <img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" class="col-lg-3 col-sm-6 col-mb-3"
                            style="width:32%">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#latesrPreview"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#latesrPreview"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="row" style="padding-top: 20px">
        <div>
            <div style="padding-bottom:20px;padding-top:20px">
                <div class="trapezoid">
                    <div style="padding-left: 5px;padding-top:13px">
                        <h4 style="color: #fff" style="padding-top: 30px"><i>Detail</i></h4>
                    </div>
                </div>
                <div style="background-color: #ec4e0f;width:100%;height:2.5px">
                </div>
            </div>

            <div style="color: #000">
                <h2>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium ipsum magnam nobis laborum quia
                    nemo quisquam animi
                    illo sequi odit? Voluptas debitis perspiciatis ex ipsam quam molestias praesentium dolorem esse.
                </h2>
                <h2>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium ipsum magnam nobis laborum quia
                    nemo quisquam animi
                    illo sequi odit? Voluptas debitis perspiciatis ex ipsam quam molestias praesentium dolorem esse.
                </h2>
                <h2>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium ipsum magnam nobis laborum quia
                    nemo quisquam animi
                    illo sequi odit? Voluptas debitis perspiciatis ex ipsam quam molestias praesentium dolorem esse.
                </h2>
            </div>
        </div>
    </div>
        <div>
            <div style="padding-bottom:20px;padding-top:20px">
                <div class="trapezoid">
                    <div style="padding-left: 5px;padding-top:13px">
                        <h4 style="color: #fff" style="padding-top: 30px"><i>Image detail</i></h4>
                    </div>
                </div>
                <div style="background-color: #ec4e0f;width:100%;height:2.5px">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" width="100%" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-4"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" width="100%" class="img-fluid"></div>
                        <div class="col-lg-4"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" width="100%" class="img-fluid"></div>
                        <div class="col-lg-4"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" width="100%" class="img-fluid"></div>
                    </div>
                </div>
            </div>
        </div>


        <div>
            <div style="padding-bottom:20px;padding-top:20px">
                <div class="trapezoid">
                    <div style="padding-left: 5px;padding-top:13px">
                        <h4 style="color: #fff" style="padding-top: 30px"><i>Rule</i></h4>
                    </div>
                </div>
                <div style="background-color: #ec4e0f;width:100%;height:2.5px">
                </div>
            </div>
            <div style="color: #000">
                <h2>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium ipsum magnam nobis laborum quia
                    nemo quisquam animi
                    illo sequi odit? Voluptas debitis perspiciatis ex ipsam quam molestias praesentium dolorem esse.
                </h2>
                <h2>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium ipsum magnam nobis laborum quia
                    nemo quisquam animi
                    illo sequi odit? Voluptas debitis perspiciatis ex ipsam quam molestias praesentium dolorem esse.
                </h2>
                <h2>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium ipsum magnam nobis laborum quia
                    nemo quisquam animi
                    illo sequi odit? Voluptas debitis perspiciatis ex ipsam quam molestias praesentium dolorem esse.
                </h2>
            </div>
        </div>
        <div>
            <div style="padding-bottom:20px;padding-top:20px">
                <div class="trapezoid">
                    <div style="padding-left: 5px;padding-top:13px">
                        <h4 style="color: #fff" style="padding-top: 30px"><i>Rule</i></h4>
                    </div>
                </div>
                <div style="background-color: #ec4e0f;width:100%;height:2.5px">
                </div>
            </div>
            <div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Comments</label>
                  </div>
            </div>
        </div>


</div>
@endsection
