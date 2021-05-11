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
            <ul class="list-group" style="padding-top: 20px">
                <li class="list-group-item active" style="padding:20px;20px;20px;20px">An item</li>
                <li class="list-group-item" style="padding:20px;20px;20px;20px">A second item</li>
                <li class="list-group-item" style="padding:20px;20px;20px;20px">A third item</li>
                <li class="list-group-item" style="padding:20px;20px;20px;20px">A fourth item</li>
                <li class="list-group-item" style="padding:20px;20px;20px;20px">And a fifth one</li>
                <li class="list-group-item" style="padding:20px;20px;20px;20px">A third item</li>
                <li class="list-group-item" style="padding:20px;20px;20px;20px">A fourth item</li>
                <li class="list-group-item" style="padding:20px;20px;20px;20px">And a fifth one</li>
              </ul>
        </div>
        <div class="col-lg-9">
            <div class="row" style="padding-top: 20px">
                <div class="col-lg-4 col-mb-6"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="width: 100%"></div>
                <div class="col-lg-4 col-mb-6"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="width: 100%"></div>
                <div class="col-lg-4 col-mb-6"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="width: 100%"></div>
            </div>
            <div class="row" style="padding-top: 20px">
                <div class="col-lg-4 col-mb-6"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="width: 100%"></div>
                <div class="col-lg-4 col-mb-6"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="width: 100%"></div>
                <div class="col-lg-4 col-mb-6"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="width: 100%"></div>
            </div>
            <div class="row" style="padding-top: 20px">
                <div class="col-lg-4 col-mb-6"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="width: 100%"></div>
                <div class="col-lg-4 col-mb-6"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="width: 100%"></div>
                <div class="col-lg-4 col-mb-6"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="width: 100%"></div>
            </div>
            <div class="row" style="padding-top: 20px">
                <div class="col-lg-4"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="width: 100%"></div>
                <div class="col-lg-4"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="width: 100%"></div>
                <div class="col-lg-4"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="width: 100%"></div>
            </div>
            <div class="row" style="padding-top: 20px">
                <div class="col-lg-4"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="width: 100%"></div>
                <div class="col-lg-4"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="width: 100%"></div>
                <div class="col-lg-4"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="width: 100%"></div>
            </div>
            <div class="row" style="padding-top: 20px">
                <div class="col-lg-4"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="width: 100%"></div>
                <div class="col-lg-4"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="width: 100%"></div>
                <div class="col-lg-4"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="width: 100%"></div>
            </div>
        </div>
    </div>
</div>

@endsection
