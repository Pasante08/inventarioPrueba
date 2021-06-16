function capa(opc){
  var $enc1; var $prf;
  $enc1=document.getElementById("enc1");
  $prf=document.getElementById("prf");

  if (opc==1){
    $enc1.innerHTML="HTML";
    $enc1.style.fontFamily="Impact";
    $prf.innerHTML="Contenido";
    $prf.style.backgroundColor="steelblue";
  }
  else if (opc==2){
    $enc1.innerHTML="CSS";
    $enc1.style.fontFamily="Helvetica";
    $prf.innerHTML="Presentación";
    $prf.style.backgroundColor="sandyBrown";
  }
  else {
    $enc1.innerHTML="JS";
    $enc1.style.fontFamily="Arial";
    $prf.innerHTML="Comportamiento";
    $prf.style.backgroundColor="aqua";
  }
}
