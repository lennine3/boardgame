@extends('shop.layout')

@section('css')
    <style>
        body {
            background: #f5f5f5;
        }

    </style>
@endsection

@section('content')
    <div class="p-5">
        <div class="row">
            <div class="col-3">
                <div class="d-flex align-items-center ">
                    <img src="@php
                        if (!empty($customer->avatar)) {
                            echo asset('Img/customer-avatar/' . $customer->avatar);
                        } elseif (!empty($staff->avatar)) {
                            echo asset('Img/user-img/' . $staff->avatar);
                        } else {
                            echo asset('Img/unsigned.png');
                        }
                    @endphp" class="profile_edit mr-2">

                    <p class="mb-0">
                        {{ auth()->user()->name }}
                    </p>
                </div>

                <div class="d-flex align-items-center mt-3 user-info">
                    <i class="fas fa-user"></i>
                    <p class="mb-0">
                        <a href="{{ route('profile-user') }}">My account</a>
                    </p>
                </div>

                <div class="d-flex align-items-center order-info active">
                    <i class="far fa-credit-card"></i>
                    <p class="mb-0">
                        <a href="{{ route('invoice-shop') }}">My order</a>
                    </p>
                </div>
            </div>
            <div class="col-9 mb-5">
                <h4 class="mt-2" style="font-size: 20px">Order details #{{ $invoice->invoice_code }}</h4>

                <div class="d-flex align-items-center justify-content-start mt-4 order-detail-info">
                    <div class="col-12">
                        <h6 style="font-size: 15px">RECEIVER'S ADDRESS</h6>
                        <div class="card border-0 p-2">
                            <p class="mb-0">
                                <b>{{ auth()->user()->name }}</b>
                            </p>
                            <span class="d-block">
                                Address: {{ $invoice->address }}
                            </span>
                            <span class="d-block">
                                Phone number: {{ $invoice->phone }}
                            </span>
                        </div>
                    </div>
                </div>

                <div class="card border-0 myorder-wrapper mt-4 p-3">
                    <table class="table myorder-table">
                        <thead class="thead-light">
                            <tr class="align-middle h-90">
                                <th scope="col">Products</th>
                                <th scope="col">Price</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Provisional price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoice->details as $item)
                                @php
                                    $product = @$item->product;
                                @endphp
                                <tr class="hasborder align-middle h-90">
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ @$product->image[0]->image }}">
                                            <p>{{ @$product->name }}</p>
                                        </div>
                                    </td>
                                    <td>${{ $item->price }}</td>
                                    <td>{{ $item->unit }}</td>
                                    <td>${{ $item->amount }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td>Provisional price</td>
                                <td>${{ $invoice->total_price }}</td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td>Shipping price</td>
                                <td>${{ $invoice->total_price }}</td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td>Total price</td>
                                <td class="text-danger">${{ $invoice->total_price }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
