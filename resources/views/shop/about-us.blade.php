@extends('shop.layout')
@section('content')
<section class="banner-category">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-end" style="padding: 90px 120px 100px 0;">
            <div>
                <h1 class="color-w"><b>About us</b></h1>
            </div>
        </div>
    </div>
</section>
<div class=" container-fluid" style="padding-top: 20px;padding-bottom:20px">
    <div class="row">
        <div class="col-lg-6  d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('Img/khoa.jpg') }}" class="card-img-top" alt="..." width="100%">
                <div class="card-body">
                  <h5 class="card-title"><b>TRẦN VÕ ĐĂNG KHOA</b></h5>
                  <p class="card-text">STUDENT'ID: 0306181328 <br> STUDENT'S CLASS: CĐTH 18PMA </p>
                  <a href="#" class="btn btn-primary">Detail</a>
                </div>
              </div>
        </div>
        <div class="col-lg-6  d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('Img/Thinh.jpg') }}" class="card-img-top" alt="..." width="100%">
                <div class="card-body">
                  <h5 class="card-title"><b>HÀ QUỐC THỊNH</b></h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">DETAIL</a>
                </div>
              </div>
        </div>
    </div>
</div>
<div class="container" style="padding-bottom: 35px">
    <div class="row" style="border: 1.1px black solid;border-radius:15px">
        <div class="col-lg-4 contactLeft">
            <div class="container" style="padding-top: 100px;padding-bottom:100px">
                <h1>Contact with us</h1>
            please fill all the information and we will contact you as soon as possible <br> <br>
            <i class="fal fa-phone"></i> +08 3282024592<br>
            <i class="far fa-envelope"></i> tvdkhoa1801@gmail.com<br>
            <i class="fal fa-map-marker-check"></i> 65 Huỳnh Khúc Kháng, P. Bến Nghé, Q.1, Tp.HCM.<br> <br>
            <img src="{{ asset('Img/contact.jpg') }}" alt="" width="100%">
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row d-flex justify-content-center container" style="padding-top: 85px;padding-left:100px;padding-right:100px">
                <div class="mb-3 col-lg-12">
                    <label for="inputName" class="form-label">Full Name</label>
                    <input type="email" class="form-control" id="inputName" placeholder="Full name">
                  </div>
                <div class="col-lg-12 mb-3">
                    <label for="inputPhone" class="form-label">Phone*</label>
                    <input type="text" class="form-control" id="inputPhone" placeholder="Phone">
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="inputPhone" class="form-label">Email*</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                </div>
                <div class="col-lg-12 mb-3">
                    <label for="inputPhone" class="form-label">Address*</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Address">
                </div>
                <div class="col-lg-12">
                    <label for="textareaNote">Note*</label>
                    <textarea name="" class="form-control" id="textareaNote" cols="20" rows="5" placeholder="Note"></textarea>
                </div>
                <div class="d-flex justify-content-end" style="padding-top: 20px">
                    <button class="btn primary-btn">SEND CONTACT</button>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
