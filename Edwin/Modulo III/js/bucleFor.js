function serie(){
  var $contador;
  for ($contador=1; $contador<=10;$contador+=1)
    document.write($contador + " ");
}
function poblarSelect(vrInicial, vrFinal){
var $i;
  for ($i=vrInicial;$i<=vrFinal;$i++)
    document.write("<option value='" + $i +
    "'>" +  $i + "</option>");
}
