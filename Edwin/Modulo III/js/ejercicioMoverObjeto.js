var $peter;
var $peter=document.getElementById("peter");
$peter.style.left="400px";
$peter.style.top="250px";
function moverPeter(direccion){
  if (direccion=="der")
     $peter.style.left=parseInt($peter.style.left)
                      + 20 + "px";
  else if (direccion=="izq")
     $peter.style.left=parseInt($peter.style.left)
                      - 20 + "px";
  else if (direccion=="abj")
     $peter.style.top=parseInt($peter.style.top)
                      + 20 + "px";
  else if (direccion=="arr")
     $peter.style.top=parseInt($peter.style.top)
                      - 20 + "px";
}
