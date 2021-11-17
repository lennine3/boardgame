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
                    <td>@if($invoice->status==0&&$invoice->role_cancel==3)
                                                    <button type="button" class="btn btn-danger">Order has been cancel by customer</button>
                                                    @elseif($invoice->status==0&&($invoice->role_cancel==1||$invoice->role_cancel==2||$invoice->role_cancel==null))
                                                    <button type="button" class="btn btn-danger">Order has been cancel</button>
                                                    
                                                        @elseif ($invoice->order_status==1)
                                                        <button type="button" class="btn btn-secondary">Order has been confirmed</button>
                                                        
                                                        @elseif($invoice->order_status==2)
                                                        <button type="button" class="btn btn-warning">Order are being delivered</button>
                                                        
                                                        @elseif($invoice->order_status==3)
                                                        
                                                        <button type="button" class="btn btn-success">Order has been delivered</button>
                                                        
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
                        @if($invoice->status==0 || $invoice->order_status==3)
                        <button type="button" disabled class="btn btn-primary"><i class="fal fa-lock"></i></button>
                        @else
                        <button type="button" class="btn btn-primary cancelProduct" data-toggle="modal" data-target="#exampleModal"><i class="fal fa-lock"></i></button>
                        @endif
                        <!--<a href="{{ url('admin/invoice-lock/'.$invoice->id) }}" class="btn btn-warning"><i class="fal fa-lock"></i></a>-->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cancel order</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ url('admin/invoice-lock') }}" method="GET">
                            @csrf
                            @method('GET')
      <div class="modal-body">
        Do you want to cancel your order?
        <p>
            <div class="form-floating">
                <br>
                <label for="floatingTextarea">Reason</label>
              <textarea class="form-control" rows="7" placeholder="Reason" id="floatingTextarea" name=reason></textarea>
              
            </div>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        
                            <input type="text" id="v_id" name="invoiceId" hidden>
        <button type="submit" class="btn btn-primary">Yes</button>
                        </form>
        
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function () {
        $('#table_id').DataTable(
            {"pageLength": 15,"order": [ 0, 'desc' ]}
        );
    });

</script>
<script>
    $(document).on('click', '.cancelProduct', function () {
        var _this = $(this).parents('tr');
        $('#v_id').val(_this.find('.id').text());
    });
</script>
@endsection
