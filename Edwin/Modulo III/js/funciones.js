function promedioNotas(){
  var $n1; var $n2; var $n3; var $prom;
  $n1=prompt("Ingrese nota1");
  $n2=parseInt(prompt("Ingrese nota2"));
  $n3=prompt("Ingrese nota3");
  $n3=parseInt($n3);
  $prom=(parseInt($n1)+$n2+$n3)/3;
  document.write("El promedio de " + $n1 + ", " + $n2
  + " y " + $n3 + " es <strong style='color:red;'>"
  + $prom + "</strong>");
}
//Ejercicio hallar el área de un rectángulo
function areaRectangulo(){
  var $base; var $altura; var $area;
  $base=prompt("Digite la base");
  $altura=prompt("Digite la altura");
  $area=parseInt($base)*parseInt($altura);
  alert ("El área es: " + $area);
}
//*****************************************
//FUNCIONES QUE RETORNAN UN VALOR;
function promedioNotasRetorno(){
  var $n1; var $n2; var $n3; var $prom;
  $n1=prompt("Ingrese nota1");
  $n2=parseInt(prompt("Ingrese nota2"));
  $n3=prompt("Ingrese nota3");
  $n3=parseInt($n3);
  $prom=(parseInt($n1)+$n2+$n3)/3;
  return $prom;
}
function areaRectanguloRetorno(){
  var $base; var $altura; var $area;
  $base=prompt("Digite la base");
  $altura=prompt("Digite la altura");
  $area=parseInt($base)*parseInt($altura);
  return $area;
}
function gravedad(){
  return 9.8;
}
// FUNCIONES CON ARGUMENTOS Y RETORNO DE VALOR
function promedioNotasRetornoArg($n1, $n2, $n3){
  var $prom;
  $prom=($n1+$n2+$n3)/3;
  return $prom;
}
function aRectRetornoArg($base, $altura){
  var $area;
  $area=parseInt($base)*parseInt($altura);
  return $area;
}
