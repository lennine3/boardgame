@extends('admin.layout.layout')
@section('adminContent')
<div class="inner-block-other">
    <div class="table-responsive table-admin">
        <table class="table table-responsive overflow-auto row-border hover todo-table" id="table_id">
            <thead>
                <th hidden>Id</th>
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
                    <td  class="id" hidden>{{ $invoice->id}}</td>
                    <td>{{ $invoice->invoice_code }}</td>
                    <td>{{ $invoice->getCustomer->name }}</td>
                    <td>$ {{ $invoice->price }}</td>
                    <td>{{ $invoice->created_at }}</td>
                    <td>@if($invoice->status==0)
                                                    <button type="button" class="btn btn-danger">Your order has been cancel</button>
                                                    
                                                        @elseif ($invoice->order_status==1)
                                                        <button type="button" class="btn btn-secondary">Your order has been confirmed</button>
                                                        
                                                        @elseif($invoice->order_status==2)
                                                        <button type="button" class="btn btn-warning">Your order are being delivered</button>
                                                        
                                                        @elseif($invoice->order_status==3)
                                                        
                                                        <button type="button" class="btn btn-success">Your order has been delivered</button>
                                                        
                                                        @endif</td>

                    <td>
                        @if ($invoice->status==0||$invoice->order_status==3)
                        <a href="{{ url('admin/invoice-order-status/'.$invoice->id) }}" class="btn btn-success"
                            style="pointer-events: none"><i class="far fa-times"></i></a>
                        @else
                        <a href="{{ url('admin/invoice-order-status/'.$invoice->id) }}" class="btn btn-success"><i
                                class="far fa-pencil"></i></a>
                        @endif

                    </td>
                    <td>
                        <a href="{{ url('admin/invoice-lock/'.$invoice->id) }}" class="btn btn-warning"><i
                                class="fal fa-lock"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#table_id').DataTable(
            {"pageLength": 15,"order": [ 0, 'desc' ]}
        );
    });

</script>
@endsection
