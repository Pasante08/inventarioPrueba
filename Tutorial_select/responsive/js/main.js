
//Abrir y cerrar el menu 
function menuResponsive() {
    var x = document.getElementById("myNav");
    if (x.className === "mytopNav") {
        x.className += " responsive";
    } else {
        x.className = "mytopNav";
    }
}

window.onload = function() {
    var modal = document.getElementById("wModal");
    var btn = document.getElementById("btnModal");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = abrirModal;
    function abrirModal() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if(event.target == modal) {
            modal.style.display = "none";
        }
    }
}

