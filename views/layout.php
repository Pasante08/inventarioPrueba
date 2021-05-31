<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nurueña SAS</title>
    <link rel="stylesheet" href="css/StyleIndex.css">
    <script type="text/javascript" src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
  </head>
  <body>
    <nav>
    		<ul>
            <li class="dropdown">
    				      <a href="#" class="dropbtn">Sistemas</a>
                    <ul class="dropdown-content">
                      <a href="?controller=User&method=newUser">Nuevo usuario</a>
                      <a href="?controller=Computer&method=newEquipo">Nuevo Equipo</a>
                      <a href="?controller=User&method=listGeneral">Usuarios bogotá</a>
                      <a href="?controller=User&method=listArchiveAdmin&id=Sistemas">lista archivo</a>
                      <a id="BtnCargo">Nuevo cargo</a>
                      <a id="BtnSede">Nueva sede</a>
                      <a id="BtnArea">Nueva area</a>
                      <a id="BtnFile">Nuevo archivo</a>
                      <a id="BtnET">Nueva E.T</a>
                      <a href="?controller=Computer">Lista Equipos</a>
                    </ul>
                </li>
                <li><a href="?controller=User&method=listArchiveAdmin&id=Cartera">Cartera</a></li>
                <li><a href="?controller=User&method=listArchiveAdmin&id=Contabilidad">Contabilidad</a></li>
                <li><a href="?controller=User&method=listArchiveAdmin&id=Documentacion">Documentación</a></li>
                <li><a href="?controller=User&method=listArchiveAdmin&id=Administracion">Administración</a></li>
                <li><a href="?controller=User&method=listArchiveAdmin&id=Ventas">Ventas</a></li>
                <li><a href="?controller=User&method=listArchiveAdmin&id=Logistica">Logística</a></li>
                <li><a href="?controller=User&method=listArchiveAdmin&id=Mercadeo">Mercadeo</a></li>
                <li><a href="?controller=User&method=listArchiveAdmin&id=Tesoreria">Tesorería</a></li>
                <li><a href="?controller=User&method=listArchiveAdmin&id=Mostrador">Mostrador</a></li>
                <li class="rightli"><a href="?controller=User&method=close">Cerrar sesión</a></li>
    		</ul>
  	</nav>

    <!-- Ventana modal Cargo -->
    <div id="ModalCargo" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <div class="modal-header">
    <span class="close">&times;</span>
    <h2>Nuevo Cargo</h2>
  </div>
  <div class="modal-body">
    <?php
    //include('views/modales/modalCargo.php');
    ?>
    <form class="" action="?controller=Charge&method=save" method="post">
  <label for="name">Cargo</label>
  <input type="text" name="name" id="name" value="">
  <label for="area_id">Area</label>
  <select class="" name="area_id" id="area_id">
    <option value="">Seleccione..</option>
    <?php
    $area = $areas;
        foreach ($area as $ar) {
            echo '<option value="'.$ar->id.'">'.$ar->name.'</option>';
        }
    ?>
  </select>
  <button type="submit">Enviar</button>
</form>
  </div>
</div>
</div>

    <!-- Ventana modal Sede -->
    <div id="ModalSede" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Nueva sede</h2>
    </div>
    <div class="modal-body">
    <?php
      include('views/modales/modalSede.php');
    ?>
    </div>
    <!--<div class="modal-footer">
    </div>-->
    </div>
    </div>

        <!-- Ventana modal Area -->
        <div id="ModalArea" class="modal">

<!-- Modal content -->
<div class="modal-content">
<div class="modal-header">
  <span class="close">&times;</span>
  <h2>Nueva Area</h2>
</div>
<div class="modal-body">
<?php
      include('views/modales/modalArea.php');
    ?>
</div>
<!--<div class="modal-footer">
</div>-->
</div>
</div>

        <!-- Ventana modal Archivo -->
        <div id="ModalFile" class="modal">

<!-- Modal content -->
<div class="modal-content">
<div class="modal-header">
  <span class="close">&times;</span>
  <h2>Nuevo Archivo</h2>
</div>
<div class="modal-body">
<?php
      //include('views/modales/modalFile.php');
    ?>
    <form class="" action="?controller=File&method=save" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" id="file">
    <label for="area_id">Area <?php print_r($areas); ?></label>
    <select name="area_id" id="area_id">
            <option>Seleccione...</option>
            <?php
            $are = $areas;
                foreach ($are as $areas) {
                    echo '<option value="'.$areas->id.'">'.$areas->name.'</option>';
                }
            ?>
        </select>
    <button type="submit">Cargar</button>
  </form>
</div>
<!--<div class="modal-footer">
</div>-->
</div>
</div>

        <!-- Ventana modal Estacion de trabajo -->
        <div id="ModalET" class="modal">

<!-- Modal content -->
<div class="modal-content">
<div class="modal-header">
  <span class="close">&times;</span>
  <h2>Nueva Estacion de trabajo</h2>
</div>
<div class="modal-body">
<?php
      include('views/modales/modalET.php');
    ?>
</div>
<!--<div class="modal-footer">
</div>-->
</div>
</div>

<script>
  //Botones ventanas
var btn = document.getElementById("BtnCargo");
var btnSede = document.getElementById("BtnSede");
var btnArea = document.getElementById("BtnArea");
var btnFile = document.getElementById("BtnFile");
var btnET = document.getElementById("BtnET");
// Get the modal
var modal = document.getElementById("ModalCargo");
var modalSede = document.getElementById("ModalSede");
var modalArea = document.getElementById("ModalArea");
var modalFile = document.getElementById("ModalFile");
var modalET = document.getElementById("ModalET");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var spanSede = document.getElementsByClassName("close")[1];
var spanArea = document.getElementsByClassName("close")[2];
var spanFile = document.getElementsByClassName("close")[3];
var spanET = document.getElementsByClassName("close")[4];

// modal visible
btn.onclick = function() {
    modal.style.display = "block";
    $(document).ready(function(){
    recargarLista();
    })
}
btnSede.onclick = function() {
modalSede.style.display = "block";
}
btnArea.onclick = function() {
  modalArea.style.display = "block";
}
btnFile.onclick = function() {
  modalFile.style.display = "block";
  $(document).ready(function(){
    recargarLista();
  })
}
btnET.onclick = function() {
  modalET.style.display = "block";
}

// Cerrar ventana X
span.onclick = function() {
modal.style.display = "none";
}
spanSede.onclick = function() {
modalSede.style.display = "none";
}
spanArea.onclick = function() {
  modalArea.style.display = "none";
}
spanFile.onclick = function() {
  modalFile.style.display = "none";
}
spanET.onclick = function() {
  modalET.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  switch(event.target){
    case modal:
      modal.style.display = "none";
      break;
    case modalSede:
      modalSede.style.display = "none";
      break;
    case modalArea:
      modalArea.style.display = "none";
      break;
    case modalFile:
      modalFile.style.display = "none";
      break;
    case modalET:
      modalET.style.display = "none";
      break;
  }
/*if (event.target == modal) {
  modal.style.display = "none";
}*/
}

function recargarLista(){
$.ajax({
  type:"POST",
  url:"?controller=charge&method=newCharge",
  success:function(r){
    $('#area_id').html(r);
  }
});
}

</script>
  </body>
</html>
