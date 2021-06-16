function calcularArea(){
  var $txtBase; var $txtAltura; var $rectangulo;
  $txtBase=document.getElementById("txtBase");
  $txtAltura=document.getElementById("txtAltura");
  $rectangulo=document.getElementById("rectangulo");

  if (($txtBase.value>=1) && ($txtBase.value<=30))
      if (($txtAltura.value>=1) && ($txtAltura.value<=30)){
          $rectangulo.innerHTML=aRectRetornoArg($txtBase.value, $txtAltura.value);
          $rectangulo.style.width=$txtBase.value*20 + "px";
          $rectangulo.style.height=$txtAltura.value*20 + "px";
      }
      else {
          alert("Error, la altura debe estar entre 1 y 30");
          $txtAltura.focus();
      }
  else {
    alert("Error, la base debe estar entre 1 y 30");
    $txtBase.focus();
  }
}
