<?php 
include 'conexion.php';
 ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tutorial MiangoroTV</title>
</head>
<body>

<h2>Cargar select mediante otro select | MySQL y JQuery</h2>
	<select id="id_colonia">
        <option value="0">Seleccione colonia</option>
        <?php  
             
            $conf = new Configuracion();
			$conf->conectarBD();                                                                             
            $consulta = "SELECT id_colonia,nombre_colonia FROM colonias";
            $rst1 = $conf->consulta($consulta);
            for($i = 0; $i < count($rst1); $i++)
            {                                                   
                echo '<option value="'.$rst1[$i]["id_colonia"].'">'.$rst1[$i]["nombre_colonia"].'</option>';                                                    
            }
             $conf->desconectarDB();
        ?>
      </select>	

      <select id="id_calle">
          <option value="0">Selecciones una colonia</option>
      </select>
	
</body>
</html>	


<script src="js/jquery-1.10.2.min.js"></script>
<script>
    
    $(document).ready(function(){
    
        var calle = $('#id_calle');
       
        $('#id_colonia').change(function(){
          var id_colonia = $(this).val();        

            $.ajax({
              data: {id_colonia:id_colonia}, 
              dataType: 'html', 
              type: 'POST', 
              url: 'get_calles.php', 

              }).done(function(data){   
                calle.html(data);       
              });      
            
        });

    });
</script>