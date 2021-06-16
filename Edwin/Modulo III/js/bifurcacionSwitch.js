function cambiarImg(){
  var $cmbEstacion; var $imag;
  $cmbEstacion=document.getElementById("cmbEstacion");
  $imag=document.getElementById("imag");
  switch ($cmbEstacion.value) {
    case "1":
      $imag.setAttribute("src", "img/serio.png");
      break;
    case "2":
      $imag.setAttribute("src", "img/feliz.png");
      break;
    case "3":
      $imag.setAttribute("src", "img/triste.png");
      break;
    default:
    $imag.setAttribute("src", "img/peter.gif");
    break;
  }
}
