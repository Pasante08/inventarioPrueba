//Abrir y cerrar el menu 
function menuResponsive() {
    var x = document.getElementById("nav");
    if (x.className === "topNav") {
        x.className += " responsive";
    } else {
        x.className = "topNav";
    }
}

$(document).ready(function () {
    $('#areasList').val(1);
    recargarLista();
    
    $('#areasList').change(function () {
        recargarLista();
    });
})

$(document).ready(function(){
    $('#areas').change(function(){
        recargarListaEdit();
    });
})

function recargarLista() {
    $.ajax({
        type: "POST",
        url: "?controller=user&method=chargesAreas",
        data: "area=" + $('#areasList').val(),
        success: function (r) {
            $('#charge_id').html(r);
        }
    });
}

function recargarListaEdit(){
    $.ajax({
        type:"POST",
        url:"?controller=user&method=chargesAreas",
        data:"area=" + $('#areas').val(),
        success:function(r){
            $('#charge_id').html(r);
        }
    });
}

window.onload = function () {

    var modal = document.getElementById("wModal");
    var btn = document.getElementById("btnModal");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = abrirModal;
    function abrirModal() {
        modal.style.display = "block";
        
    }

    span.onclick = function () {
        modal.style.display = "none";
    }

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
}
