
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
    btn.onclick = abrirModal;
    function abrirModal() {
        modal.style.display = "block";
    }
}

