@extends('shop.layout')
@section('content')
<div class="container ">
    <div class="row" style="padding-top: 20px">
        <div class="col-lg-4">
            <div>
                <div class="  row">
                    <div class="col-lg-8">
                        <div class="d-flex justify-content-end">
                            <img src="{{ asset('Img/unsigned.png') }}" alt="" width="25%" style="border-radius: 50px">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex justify-content-end">
                            <div class="row">
                                <div class="col-lg-12"><b> User</b></div>
                                <div class="col-lg-12"> <a href="#" class="link_1"><i class="fal fa-pencil"></i> User setting</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="padding-left:160px;padding-top:70px">
                    <div class="row" >
                        <div class="col-lg-4">
                            <div class="d-flex justify-content-end">
                                <div style="background-color: #FFc107;color:white;height:25px;width:25px;border-radius:30px;text-align:center;padding-top:3px">
                                    <i class="fal fa-user"></i>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-8">Account setting</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="d-flex justify-content-end">
                                <div style="background-color: #44B5FF;color:white;height:25px;width:25px;border-radius:30px;text-align:center;padding-top:3px">
                                    <i class="fal fa-file-invoice"></i>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-8">Invoices</div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="d-flex justify-content-end" >
                                <div style="background-color: #ec4e0f;color:white;height:25px;width:25px;border-radius:30px;text-align:center;padding-top:3px">
                                    <i class="fal fa-bell"></i>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-8">Notice</div>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-lg-8">
            <nav class="navbar navbar-expand-lg navbar-light bg-light abso">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-invoice">
                      <li class="nav-item ">
                        <a class="nav-link active_1" aria-current="page" href="#" >All</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Waiting</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            <div class="icon_in_search abso" style="padding-top: 20px">
                <input type="text" placeholder="Search by name product" class="form-control " style="padding-left: 25px">
            </div>
            <div>
                <div class="row">
                    <div style="padding-top:20px;padding-bottom:20px">
                        <div class="table-responsive" style="background-color: #F5F5F5;padding-top:20px">
                            <table class="table">
                                <tr>
                                    <td colspan="1" style="width: 40%"> <img src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                            alt="" width="50%">
                                    </td>
                                    <td colspan="2" style="width: 50%;font-size:25px">Monopoly- Smart board game for Kid
                                    </td>
                                    <td style="width: 10%;font-size:25px"> 60$ </td>
                                </tr>
                            </table>
                            <hr>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-danger"> Rebuy </button>
                                <button class="btn btn-warning"> Invoice Detail</button>
                            </div>
                        </div>
                    </div>

                    <div style="padding-top:20px;padding-bottom:20px">
                        <div class="table-responsive" style="background-color: #F5F5F5;padding-top:20px">
                            <table class="table">
                                <tr>
                                    <td colspan="1" style="width: 25%"> <img src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                            alt="" width="100%">
                                    </td>
                                    <td colspan="2" style="width: 65%;font-size:25px">Monopoly- Smart board game for Kid
                                    </td>
                                    <td style="width: 10%;font-size:25px"> 60$ </td>
                                </tr>
                            </table>
                            <hr>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-danger"> Rebuy </button>
                                <button class="btn btn-warning"> Invoice Detail</button>
                            </div>
                        </div>
                    </div>

                    <div style="padding-top:20px;padding-bottom:20px">
                        <div class="table-responsive" style="background-color: #F5F5F5;padding-top:20px">
                            <table class="table">
                                <tr>
                                    <td colspan="1" style="width: 40%"> <img src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                            alt="" width="50%">
                                    </td>
                                    <td colspan="2" style="width: 50%;font-size:25px">Monopoly- Smart board game for Kid
                                    </td>
                                    <td style="width: 10%;font-size:25px"> 60$ </td>
                                </tr>
                            </table>
                            <hr>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-danger"> Rebuy </button>
                                <button class="btn btn-warning"> Invoice Detail</button>
                            </div>
                        </div>
                    </div>

                    <div style="padding-top:20px;padding-bottom:20px">
                        <div class="table-responsive" style="background-color: #F5F5F5;padding-top:20px">
                            <table class="table">
                                <tr>
                                    <td colspan="1" style="width: 40%"> <img src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                            alt="" width="50%">
                                    </td>
                                    <td colspan="2" style="width: 50%;font-size:25px">Monopoly- Smart board game for Kid
                                    </td>
                                    <td style="width: 10%;font-size:25px"> 60$ </td>
                                </tr>
                            </table>
                            <hr>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-danger"> Rebuy </button>
                                <button class="btn btn-warning"> Invoice Detail</button>
                            </div>
                        </div>
                    </div>

                    <div style="padding-top:20px;padding-bottom:20px">
                        <div class="table-responsive" style="background-color: #F5F5F5;padding-top:20px">
                            <table class="table">
                                <tr>
                                    <td colspan="1" style="width: 40%"> <img src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                            alt="" width="50%">
                                    </td>
                                    <td colspan="2" style="width: 50%;font-size:25px">Monopoly- Smart board game for Kid
                                    </td>
                                    <td style="width: 10%;font-size:25px"> 60$ </td>
                                </tr>
                            </table>
                            <hr>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-danger"> Rebuy </button>
                                <button class="btn btn-warning"> Invoice Detail</button>
                            </div>
                        </div>
                    </div>


                </div>
                <div></div>
            </div>
        </div>
    </div>


</div>
@endsection
