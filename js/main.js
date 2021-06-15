$(document).ready(function(){
    $('#areasList').val(1);
    recargarLista();

    $('#areasList').change(function(){
        recargarLista();
    });
})


function recargarLista(){
    $.ajax({
        type:"POST",
        url:"?controller=user&method=chargesAreas",
        data:"area=" + $('#areasList').val(),
        success:function(r){
            $('#charge_id').html(r);
        }
    });
}
  