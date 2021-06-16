function serie(){
  var $prf=document.getElementById("prf");
  var $contador=0;
  while ($contador<10){
    $contador=$contador+1;
    $prf.innerHTML=$prf.innerHTML + " " + $contador;
  }
}
function analizar(){
  var $rta="";
  while($rta!="HTML" ){
    $rta=prompt("Escriba el acrónimo del lenguaje de marcado");
  }
  alert("Ya te puedes graduar!");
}
