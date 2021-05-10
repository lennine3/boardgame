@extends('shop.layout')
@section('content')
<div class="container" style="padding-top: 20px">
    <div class="row">
        <div class="col-lg-9">
            <div class="table-responsive">
                <table class="table ">
                    <thead style="color: #fff">
                        <tr style="background-color: #ec4e0f">
                            <th colspan="1">Product</th>
                            <th colspan="2">Name</th>
                            <th>Unit price</th>
                            <th>Unit</th>
                            <th>Amount</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="1"> <img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" width="50%">
                            </td>
                            <td colspan="2">Monopoly- Smart board game for Kid</td>
                            <td> 60$ </td>
                            <td> <input type="number" value="1" style="width:45px"> </td>
                            <td>60</td>
                            <td colspan="2" style="display: flex">
                                <div style="padding-right: 5px">
                                    <button class="btn btn-warning"> <i class="fal fa-repeat-alt"></i> </button>
                                </div>
                                <div>
                                    <button class="btn btn-danger"> <i class="far fa-trash-alt"></i> </button>
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <td colspan="1"> <img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" width="50%">
                            </td>
                            <td colspan="2">Monopoly- Smart board game for Kid</td>
                            <td> 60$ </td>
                            <td> <input type="number" value="1" style="width:45px"> </td>
                            <td>60</td>
                            <td colspan="2" style="display: flex">
                                <div style="padding-right: 5px">
                                    <button class="btn btn-warning"> <i class="fal fa-repeat-alt"></i> </button>
                                </div>
                                <button class="btn btn-danger"> <i class="far fa-trash-alt"></i> </button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="1"> <img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" width="50%">
                            </td>
                            <td colspan="2">Monopoly- Smart board game for Kid</td>
                            <td> 60$ </td>
                            <td> <input type="number" value="1" style="width:45px"> </td>
                            <td>60</td>
                            <td colspan="2" style="display: flex">
                                <div style="padding-right: 5px">
                                    <button class="btn btn-warning"> <i class="fal fa-repeat-alt"></i> </button>
                                </div>
                                <button class="btn btn-danger"> <i class="far fa-trash-alt"></i> </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>

            </div>
        </div>
        <div class="col-lg-3 ">
            <div class="border border-primary" style="padding:10px 10px 10px 10px">
                <div>
                    Please choose payment
                </div>
                <div>
                    <div><input type="radio" id="cod" name="payment"> <label for="cod">COD</label></div>
                    <div><input type="radio" id="bank" name="payment"> <label for="bank">Bank Tranfer</label>
                    </div>
                </div>

            </div>
            <div style="padding-top: 10px">
                <a href="#" class="btn btn-info">NEXT STEP</a>
            </div>
        </div>
    </div>
</div>


@endsection
