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
                <h4 class="mt-2">My order</h4>
                <div class="card border-0 myorder-wrapper mt-4 p-3">
                    <table class="table myorder-table">
                        <thead class="thead-light">
                            <tr class="align-middle h-90">
                                <th scope="col">Order ID</th>
                                <th scope="col">Date</th>
                                <th scope="col">Products</th>
                                <th scope="col">Total price</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoices as $item)
                                <tr class="align-middle h-90 {{ $loop->last ? '' : 'hasborder' }}">
                                    <td>
                                        <a
                                            href="{{ route('invoice-detail', ['invoice' => $item->id]) }}">{{ $item->invoice_code }}</a>
                                    </td>
                                    <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                    <td>{{ $item->getProductText() }}</td>
                                    <td>${{ $item->total_price }}</td>
                                    <td>Giao hàng thành công</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
