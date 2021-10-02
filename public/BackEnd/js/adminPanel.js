$('#userChoose').css('width', '100%');
$(document).ready(function() {
    $('#userChoose').select2({dropdownParent: $('#todoModal')});
});



function CheckDone(id){
    $.ajax({
        url: 'admin/to-do-check/'+id,
        type: 'GET',
    }).done(function(response){
        RenderListCart(response);
        alertify.success('Status updated');
    });
}

function RenderListCart(response){
    $("#todoList").empty();
    $("#todoList").html(response);
}
