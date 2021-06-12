@extends('shop.layout')
@section('content')
<section class="banner-category">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-end" style="padding: 90px 120px 100px 0;">
            <div>
                <h1 class="color-w"><b>Shopping cart</b></h1>
                <nav class="d-flex align-items-center color-w">
                    <a href>
                        Home
                        <span style="  display: inline-block;
                        margin: 0 10px;"><i class="fal fa-long-arrow-right"></i></span>
                    </a>
                    <a href>
                        Cart
                    </a>
                </nav>
            </div>
        </div>
    </div>
</section>
@include('shop.ListCart')


<script>
    function DeleteItem(id){
        $.ajax({
            url: 'remove-Listitem-cart/'+id,
            type: 'GET',
        }).done(function(response){
            RenderListCart(response)
            alertify.success('Product deleted successful');
        });
    }


    function UpdateItem(id){
        var quanty = $("#quanty-item"+id).val();
        $.ajax({
            url: 'update-Listitem-cart/'+id+'/'+quanty,
            type: 'GET',
        }).done(function(response){
            RenderListCart(response)
            alertify.success('Product updated successful');
        });
    }
    function RenderListCart(response){
        $("#listCart").empty();
        $("#listCart").html(response);
        $("#quanty-show").text($("#quanty-cart").val());
    }
</script>
{{-- <script>
    $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
method: "DELETE",
data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
dataType: 'json',
success: function (response) {
$("#product_id_"+ele.attr("data-id")).empty();
$(".subtotal").val()=$(".subtotal").val()-$(".Amount"+ele.attr("data-id")).val();
},
});
}
});

$(".update-cart").click(function (e) {
e.preventDefault();
var ele = $(this);
$.ajax({
url: '{{ url('update-cart') }}',
method: "patch",
data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
success: function (response) {
window.location.reload();
}
});
});
</script> --}}
@endsection
@section('scripts')

@endsection
