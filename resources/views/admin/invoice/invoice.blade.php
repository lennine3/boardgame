@extends('admin.layout')
@section('content')
<div class="container-fluid" style="padding-top: 20px">
    <div class="table-responsive table-admin">
        <table class="table">
            <thead>
                <th>Invoice Id</th>
                <th>Customer ID</th>
                <th>Total Money</th>
                <th>Date Create</th>
                <th>Order Status</th>
                <th>Edit</th>
                <th>Lock</th>
            </thead>
            <tbody>
                @foreach ($invoices as $invoice)
                <tr>
                    <td>{{ $invoice->invoice_code }}</td>
                    <td>{{ $invoice->getCustomer->name }}</td>
                    <td>$ {{ $invoice->price }}</td>
                    <td>{{ $invoice->created_at }}</td>
                    <td>
                        @if ($invoice->order_status==1)
                        Your order is being shipped
                        @elseif($invoice->order_status==2)
                        Your order has arrived
                        @endif
                    </td>

                    <td>
                        @if ($invoice->status==0)
                        <a href="{{ url('admin/invoice-order-status/'.$invoice->id) }}" class="btn btn-success" style="pointer-events: none"><i class="far fa-times"></i></a>
                        @else
                        <a href="{{ url('admin/invoice-order-status/'.$invoice->id) }}" class="btn btn-success"><i class="far fa-pencil"></i></a>
                        @endif

                    </td>
                    <td>
                        <a href="{{ url('admin/invoice-lock/'.$invoice->id) }}" class="btn btn-warning"><i class="fal fa-lock"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
