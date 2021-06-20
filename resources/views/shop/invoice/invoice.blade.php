@extends('shop.layout')
@section('content')
<div style="padding-top: 50px;padding-bottom:50px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="d-flex justify-content-end">
                                <img src="@php
                                    if(!empty($customer->avatar))
                                    echo asset('Img/customer-avatar/'.$customer->avatar);
                                    elseif(!empty($staff->avatar))
                                    echo asset('Img/user-img/'.$staff->avatar);
                                    else
                                    echo asset('Img/unsigned.png');
                                @endphp" alt="" class="profile_edit">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="d-flex justify-content-end">
                                <div class="row">
                                    <div class="col-lg-12"><b> User</b></div>
                                    <div class="col-lg-12"> <a href="{{ route('profile-user') }}" class="link_1"><i
                                                class="fal fa-pencil"></i> User
                                            setting</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="padding-left:160px;padding-top:70px">
                        <ul class="main-categories">
                            <li class="main-nav-list">
                                <a data-bs-toggle="collapse" href="#account" aria-expanded="false"
                                    aria-controls="action" class="action">
                                    <i class="fal fa-user" style="color: #FFc107"></i><span
                                        style="padding-left:10px">Account</span>
                                </a>
                                <ul id="account" class="collapse" aria-expanded="false">
                                    <li class="main-nav-list child ">
                                        <a style="cursor: pointer" id="change-profile-page">Profile</a></li>
                                </ul>
                            </li>
                            <li class="main-nav-list">
                                <a style="cursor: pointer" id="change-invoice-page">
                                    <i class="fal fa-file-invoice" style="color: #44B5FF;"></i><span
                                        style="padding-left:10px">Invoice</span></a>
                            </li>
                            <li class="main-nav-list">
                                <a style="cursor: pointer" {{--  id="change-invoice-page" --}}>
                                    <i class="fal fa-bell" style="color: #ec4e0f;"></i><span
                                        style="padding-left:10px">Notice</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8" id="profile">
                <nav class="navbar navbar-expand-lg navbar-light bg-light abso">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-invoice">
                                <li class="nav-item ">
                                    <a class="nav-link active_1" aria-current="page" href="#">All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link">Waiting</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="icon_in_search abso" style="padding-top: 20px">
                    <input type="text" placeholder="Search by name product" class="form-control "
                        style="padding-left: 25px">
                </div>
                <div>
                    <div class="row">
                        <div style="padding-top:20px;padding-bottom:20px">
                            <div class="table-responsive" style="background-color: #F5F5F5;padding-top:20px">
                                <table class="table">
                                    <tr>
                                        <td colspan="1" style="width: 40%"> <img
                                                src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" width="50%">
                                        </td>
                                        <td colspan="2" style="width: 50%;font-size:25px">Monopoly- Smart board game for
                                            Kid
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
                                        <td colspan="1" style="width: 25%"> <img
                                                src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" width="100%">
                                        </td>
                                        <td colspan="2" style="width: 65%;font-size:25px">Monopoly- Smart board game for
                                            Kid
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
                                        <td colspan="1" style="width: 40%"> <img
                                                src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" width="50%">
                                        </td>
                                        <td colspan="2" style="width: 50%;font-size:25px">Monopoly- Smart board game for
                                            Kid
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
                                        <td colspan="1" style="width: 40%"> <img
                                                src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" width="50%">
                                        </td>
                                        <td colspan="2" style="width: 50%;font-size:25px">Monopoly- Smart board game for
                                            Kid
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
                                        <td colspan="1" style="width: 40%"> <img
                                                src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" width="50%">
                                        </td>
                                        <td colspan="2" style="width: 50%;font-size:25px">Monopoly- Smart board game for
                                            Kid
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
</div>


<script>
    $(document).ready(function () {
        $("#change-profile-page").click(function () {
            $.ajax({
                url: 'profile-user',
                type: 'GET',
            }).done(function (response) {
                RenderProfilepage(response)
                /* history.pushState(null, null, 'profile'); */
            });
        });
    });

    $(document).ready(function () {
        $("#change-invoice-page").click(function () {
            $.ajax({
                url: 'invoice-user',
                type: 'GET',
            }).done(function (response) {
                RenderProfilepage(response)
                /* history.pushState(null, null, 'invoice'); */
            });
        });
    });


    function RenderProfilepage(response) {
        $("#profile").empty();
        $("#profile").html(response);
    }

</script>
@endsection
