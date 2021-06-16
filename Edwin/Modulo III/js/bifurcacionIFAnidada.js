function semaforoVH(){

}
function mayor(){
  var $a; var $b;
  $a=prompt("ingrese un número")
  $b=prompt("ingrese otro número")
  $a=parseInt($a);
  $b=parseInt($b);

  if ($a>$b)
      alert("El mayor es " + $a);
  else if ($a==$b)
        alert("Los números son iguales " + $a);
      else
        alert("El mayor es " + $b);
}
function saludo(){

  var $hora;
  $hora=prompt("Que hora es?");
  if ($hora<12)
    document.write("Buenos días<img src='img/mañana.png'>");
  else if ($hora<18)
    document.write("Buenas Tardes");
  else
    document.write("Buenas Noches");
}

function promedioCaritas(){
  var $prom;
  $prom=promedioNotasRetorno();
  if ($prom>=4)
    document.write("Excelente <img src='img/feliz.png'>");
  else if ($prom>=3)
    document.write("Bueno <img src='img/serio.png'>");
  else
    document.write("Deficiente <img src='img/triste.png'>");
}
