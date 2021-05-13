<?php
include 'conexion.php';

$id_colonia = filter_input(INPUT_POST, 'id_colonia'); 


$conf = new Configuracion();
$conf->conectarBD();

$consulta = "SELECT id_calle,nombre_calle FROM calles WHERE id_colonia = $id_colonia";
$datos = $conf->consulta($consulta);




$conf->desconectarDB();

if(count($datos)==0){
        echo '<option value="0">No hay registros en esta colonia</option>';
    }
                   
for($i=0;$i<count($datos);$i++){


      echo '<option value="'.$datos[$i]["id_calle"].'">'.$datos[$i]["nombre_calle"].'</option>';
    
}


?>


	
