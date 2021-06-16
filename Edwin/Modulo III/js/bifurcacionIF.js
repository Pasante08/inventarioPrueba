function semaforo(){
  var $color;
  $color=prompt("De que color está el semáforo");
  if  (($color=="VERDE")  || ($color=="verde"))
    alert("Puede pasar");
  else
    alert("debe esperar");
}
function mayor(){
  var $a; var $b;
  $a=prompt("Ingrese un número");
  $b=prompt("Ingrese otro número");

  if ($a>$b)
    alert("El num mayor es " + $a);
  else
    alert("El num mayor es " + $b);
}
function analizarEdad(){
   var $edad;
   $edad=prompt("cuántos años tienes?");
   $edad=parseInt($edad);
   if ($edad>18)
       alert("Eres mayor de edad");
   else
        alert("Eres menor de edad");
}
 function subsidio(){
   var $salBasico;
   $salBasico=prompt("cuánto es su salário?");
   if ($salBasico<=2*680000)
      alert("Tiene derecho a subsidio");
  else
     alert("No Tiene derecho a subsidio");
 }

function figura(){
  var $num;
  $num=prompt("seleccione:\n\n 1.Circulo\n2.Cuadrado");
  if ($num=="1")
    document.write('<div class="circulo">circulo</div>');
  else
    document.write('<div class="cuadrado">cuadrado</div>');
}
