<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nurueña SAS</title>
    <link rel="stylesheet" href="css/StyleIndex.css">
  </head>
  <body>
    <nav>
    		<ul>
          <li><a href="?controller=User&method=listArchive">Cartera</a></li>
          <li><a href="views/contabilidad/contabilidad.php">Contabilidad</a></li>
          <li><a href="views/documentacion/documentacion.php">Documentación</a></li>
          <li><a href="views/administracion/administracion.php">Administración</a></li>
          <li><a href="views/ventas/ventas.php">Ventas</a></li>
          <li><a href="views/logistica/logistica.php">Logística</a></li>
          <li><a href="views/mercadeo/mercadeo.php">Mercadeo</a></li>
          <li><a href="views/tesoreria/tesoreria.php">Tesorería</a></li>
          <li><a href="views/mostrador/mostrador.php">Mostrador</a></li>
    			<li class="dropdown">
    				<a href="" class="dropbtn">Sistemas</a>
    				<ul class="dropdown-content">
    					<a href="?controller=User&method=newUser">Nuevo usuario</a>
              <a href="?controller=Computer&method=newEquipo">Nuevo Equipo</a>
    					<a href="?controller=User&method=listGeneral">Usuarios bogotá</a>
    					<a href="?controller=File&method=new">nuevo archivo</a>
              <a href="?controller=File&method=Index">lista archivo</a>
    				</ul>
          <li><a href="#"></a></li>
    			<li class="rightli"><a href="?controller=User&method=close">Cerrar sesión</a></li>
    		</ul>
  	</nav>
  </body>
</html>