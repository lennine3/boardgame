@extends('shop.layout')
@section('content')
<section class="banner-category">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-end" style="padding: 90px 120px 100px 0;">
            <div>
                <h1 class="color-w"><b>Shopping cart</b></h1>
                <nav class="d-flex align-items-center color-w">
                    <a href>
                        description
                        <span style="  display: inline-block;
                        margin: 0 10px;"><i class="fal fa-long-arrow-right"></i></span>
                    </a>
                    <a href>
                        Product detail
                    </a>
                </nav>
            </div>
        </div>
    </div>
</section>
<div class="container" style="padding-top: 20px;padding-bottom:50px">
    <div class="row">
        <div class="col-lg-6 col-mb-12">
            <img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 col-mb-12" style="color: #000;padding-left:50px">
            <div class="product_text">
                <h3>
                    Monopoly Best game for Kid
                </h3>
                <h2>$ 70</h2>
                <ul class="list">
                    <li>
                        <a href="#">
                            <span class="active">Availibilti</span>: In Stock
                        </a>
                    </li>
                </ul>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis corrupti, temporibus natus, eius
                    ullam fugiat ea sapiente recusandae
                    laudantium incidunt numquam adipisci. Fugit at atque eaque accusamus nulla dolorem aliquid.
                </p>
                <div class="product_count">
                    <label for="qty">Quantity</label>
                    <input type="number" value="1" min="1">
                </div>
                <div class="d-flex align-items-center card_area">
                    <a href="#" class="product-primary-btn">
                        ADD TO CART
                    </a>
                    <a href="#" class="icon_btn">
                        <i class="fas fa-heart-circle fa-3x addFav"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="product_description">
    <div class="container">
        <ul class="nav nav-tabs nav-pills nav-background justify-content-center pointer" id=" nav-tab" role="tablist">
            <li class="nav-items">
                <a class="nav-link active" id="nav-description-tab" data-bs-toggle="tab" data-bs-target="#description"
                    role="tab" aria-controls="nav-description" aria-selected="true">description</a>
            </li>
            <li class="nav-items">
                <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#specification" role="tab"
                    aria-controls="nav-profile" aria-selected="false">specification</a>
            </li>
            <li class="nav-items">
                <a class="nav-link" id="nav-co-tab" data-bs-toggle="tab" data-bs-target="#comment" role="tab"
                    aria-controls="nav-review" aria-selected="false">Review</a>
            </li>
        </ul>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae mollitia saepe sapiente eveniet
                    similique
                    accusantium laboriosam repellendus natus sunt a, reprehenderit voluptatem nisi, praesentium iure.
                    Voluptatem labore quasi sint vel! <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut in beatae omnis quas aspernatur officia
                    culpa impedit, amet ea assumenda
                    inventore sint quaerat praesentium reprehenderit voluptatem numquam placeat optio voluptas.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis reprehenderit adipisci repudiandae
                    eligendi nisi quam velit eius
                    necessitatibus ex? Atque illum blanditiis ex pariatur, dolorem unde! Soluta dolores maxime
                    cupiditate?
                </p>
            </div>
            <div class="tab-pane fade" id="specification" role="tabpanel">
                <div class="table-responsive">
                    <table class="table table_product">
                        <tbody>
                            <tr>
                                <td>
                                    <h5>Width</h5>
                                </td>
                                <td>
                                    <h5>128mm</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Height</h5>
                                </td>
                                <td>
                                    <h5>68mm</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Origin</h5>
                                </td>
                                <td>
                                    <h5>japanese</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Weight</h5>
                                </td>
                                <td>
                                    <h5>960g</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Age range</h5>
                                </td>
                                <td>
                                    <h5>> 8</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>>Category</h5</td> <td>
                                        <h5>Child</h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="comment" role="tabpanel">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="box_rating">
                                    <h5>
                                        Overrall
                                    </h5>
                                    <h4>
                                        4.0
                                    </h4>
                                    <h6>
                                        3 Review and Comment
                                    </h6>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="rating_list">
                                    <h3>Based on 3 Reviews</h3>
                                    <ul class="list">
                                        <li>
                                            <a href="#" class="ratings">5 Star
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> 01
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="ratings">4 Star
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> 01
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="ratings">3 Star
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> 01
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="ratings">2 Star
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> 01
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="ratings">1 Star
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i> 01
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="review_list">
                            <div class="review_item">
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="{{ asset('Img/unsigned.png') }}" alt="" class="comment_radius">
                                    </div>
                                    <div class="review_body">
                                        <h4>Blake Ruiz</h4>
                                        <span>87 </span>point
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea
                                    commodo</p>
                            </div>
                            <div class="review_item">
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="{{ asset('Img/unsigned.png') }}" alt="" class="comment_radius">
                                    </div>
                                    <div class="review_body">
                                        <h4>Blake Ruiz</h4>
                                        <span>87 </span>point
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea
                                    commodo</p>
                            </div>
                            <div class="review_item">
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="{{ asset('Img/unsigned.png') }}" alt="" class="comment_radius">
                                    </div>
                                    <div class="review_body">
                                        <h4>Blake Ruiz</h4>
                                        <span>87 </span>point
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex ea
                                    commodo</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="review-box">
                            <h4>Add a review and comment</h4>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="rating" placeholder="Your rating" min="0"
                                    max="100" style="width: 200px">
                                <label for="rating">Your rating</label>
                            </div>
                            <form class="row review_form" action="#" method="post" id="reviewForm" novalidate="">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Your Full name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" id="number" name="number"
                                            placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <textarea class="form-control" name="message" id="message"
                                            placeholder="Review"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 text-right">

                                    <button type="submit" value="submit" class="product-primary-btn">Submit Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Related-->
<section style="padding-bottom: 30px">
    <div class="container product-more">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center" style="padding-bottom: 35px">
                <div class="section-title">
                    <h1>Related Product</h1>
                </div>
            </div>
        </div>
        <div>
            <div class="owl-product-more owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">
                        <div class="owl-item">
                            {{-- <img src="{{ asset('FrontEnd/img/monopoly-1.jpg') }}" alt=""> --}}
                            <div class="single-product">
                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt=""
                                    style="width: 250px;height:250px">
                                <div class="product-details">
                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a>
                                    </h6>
                                    <div class="price">
                                        <h6>$60</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="single-product">
                                <img src="{{ asset('FrontEnd/img/foldscope.jpg') }}" alt=""
                                    style="width: 250px;height:250px">
                                <div class="product-details">
                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a>
                                    </h6>
                                    <div class="price">
                                        <h6>$60</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item">
                            <div class="single-product">
                                <img src="{{ asset('FrontEnd/img/conan.png') }}" alt="" style="width: 250px;height:250px">
                                <div class="product-details">
                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a>
                                    </h6>
                                    <div class="price">
                                        <h6>$60</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav">
                    <div class="btn-left-related">
                        <div class="owl-prev-related"><img src="{{ asset('FrontEnd/img/prev-black.png') }}"
                                alt="" class="img-fluid"></div>
                    </div>
                    <div class="btn-right-related">
                        <div class="owl-next-related"><img src="{{ asset('FrontEnd/img/next-black.png') }}"
                                alt="" class="img-fluid"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--Related-->

<!--Deal start-->
<section class="related-product-area section_gap_bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center" style="padding-bottom: 35px">
                <div class="section-title">
                    <h1>Deals of the Week</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20" style="padding-bottom: 35px">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="height: 75px;weight:75px"></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20" style="padding-bottom:35px"">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="height: 75px;weight:75px"></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20" style="padding-bottom:35px"">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="height: 75px;weight:75px"></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20" style="padding-bottom:35px"">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="height: 75px;weight:75px"></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20" style="padding-bottom:35px"">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="height: 75px;weight:75px"></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20" style="padding-bottom:35px"">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="height: 75px;weight:75px"></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6" style="padding-bottom:35px"">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="height: 75px;weight:75px"></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6" style="padding-bottom:35px"">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="height: 75px;weight:75px"></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6" style="padding-bottom:35px"">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="height: 75px;weight:75px"></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="ctg-right">
                    <a href="#" target="_blank">
                        <img class="img-fluid d-block mx-auto" src="{{ asset('FrontEnd/img/deal.png') }}"
                            alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Deal end-->
<!--Deal end-->


<!--js product more-->
<script src="{{ asset('FrontEnd/js/single_slider.js') }}"></script>
<!--js product more-->
@endsection
