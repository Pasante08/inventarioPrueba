function concatenar(){
  var $txtNombre=document.getElementById("txtNombre");
  var $txtApellido=document.getElementById("txtApellido");
  var $txtConcatenar=document.getElementById("txtConcatenar");
  if ($txtNombre.value==""){
    alert("Error, escriba un nombre");
    $txtNombre.style.backgroundColor="red";
    $txtNombre.focus();
  }
  else if ($txtApellido.value==""){
    alert("Error, escriba apellido nombre");
    $txtApellido.focus();
  }
  else
    $txtConcatenar.value=$txtNombre.value
    + " " + $txtApellido.value;
}
//******************************************************
function navegar(){
  var $txtSite;
  $txtSite=document.getElementById("txtSite");
  if ($txtSite.value==""){
    alert("Error, escriba un site");
    $txtSite.focus();
  }
  else
    document.location.href="http://www."
    + $txtSite.value + ".com";
}
//************************************************************
function traducir(){
  var $cmbPalabras; var $txtPalabra;
  $cmbPalabras=document.getElementById("cmbPalabras");
  $txtPalabra=document.getElementById("txtPalabra");
  if ($cmbPalabras.value=="1")
    $txtPalabra.value="Árbol";
  else if ($cmbPalabras.value=="2")
    $txtPalabra.value="Dios";
  else if ($cmbPalabras.value=="3")
    $txtPalabra.value="Cafe";
  else
    $txtPalabra.value="-";
}
