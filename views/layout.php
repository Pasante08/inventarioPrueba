<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nurueña SAS</title>
    <link rel="stylesheet" href="css/StyleIndex.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
  </head>
  <body>
    <nav>
    		<ul>
            <li class="dropdown">
    				      <a href="" class="dropbtn">Sistemas</a>
                    <ul class="dropdown-content">
                      <a href="?controller=User&method=newUser">Nuevo usuario</a>
                      <a href="?controller=Computer&method=newEquipo">Nuevo Equipo</a>
                      <a href="?controller=User&method=listGeneral">Usuarios bogotá</a>
                      <a href="?controller=File&method=new">nuevo archivo</a>
                      <a href="?controller=User&method=listArchive&id=Sistemas">lista archivo</a>
                      <a id="myBtn">Nuevo cargo</a>
                      <a id="myBtnSede">Nueva sede</a>
                    </ul>
                </li>
                <li><a href="?controller=User&method=listArchive&id=Cartera">Cartera</a></li>
                <li><a href="?controller=User&method=listArchive&id=Contabilidad">Contabilidad</a></li>
                <li><a href="?controller=User&method=listArchive&id=Documentacion">Documentación</a></li>
                <li><a href="?controller=User&method=listArchive&id=Administracion">Administración</a></li>
                <li><a href="?controller=User&method=listArchive&id=Ventas">Ventas</a></li>
                <li><a href="?controller=User&method=listArchive&id=Logistica">Logística</a></li>
                <li><a href="?controller=User&method=listArchive&id=Mercadeo">Mercadeo</a></li>
                <li><a href="?controller=User&method=listArchive&id=Tesoreria">Tesorería</a></li>
                <li><a href="?controller=User&method=listArchive&id=Mostrador">Mostrador</a></li>
                <li class="rightli"><a href="?controller=User&method=close">Cerrar sesión</a></li>
    		</ul>
  	</nav>
    <!-- Ventana modal Cargo -->
    <div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Nuevo Cargo</h2>
    </div>
    <div class="modal-body">
      <form class="" action="?controller=Charge&method=save" method="post">
        <label for="name">Cargo</label>
        <input type="text" name="name" id="name" value="">
        <label for="area_id">Area</label>
        <select class="" name="area_id" id="area_id">
          <option value="">Seleccione..</option>
        </select>
        <button type="submit">Enviar</button>
      </form>
    </div>
    <!--<div class="modal-footer">
    </div>-->
  </div>
</div>

<!-- Ventana modal Cargo -->
<div id="myModalSede" class="modal">

<!-- Modal content -->
<div class="modal-content">
<div class="modal-header">
  <span class="close">&times;</span>
  <h2>Nueva sede</h2>
</div>
<div class="modal-body">
  <form class="" action="?controller=Sede&method=save" method="POST">
    <label for="name">Sede</label>
    <input type="text" name="name" id="name" value="">
    <button type="submit">Enviar</button>
  </form>
</div>
<!--<div class="modal-footer">
</div>-->
</div>
</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");
var modalSede = document.getElementById("myModalSede");
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btnSede = document.getElementById("myBtnSede");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
  $(document).ready(function(){
    recargarLista();
  })
}

btnSede.onclick = function() {
  modalSede.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
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
