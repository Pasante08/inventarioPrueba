<?php
include('dbconect.php');
require_once('vendor/php-excel-reader/excel_reader2.php');
require_once('vendor/SpreadsheetReader.php');

if (isset($_POST["import"]))
{
    
$allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
  
  if(in_array($_FILES["file"]["type"],$allowedFileType)){

        $targetPath = 'subidas/'.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
        
        $Reader = new SpreadsheetReader($targetPath);
        
        $sheetCount = count($Reader->sheets());
        for($i=0;$i<$sheetCount;$i++)
        {
            
            $Reader->ChangeSheet($i);
            
            foreach ($Reader as $Row)
            {
          
              $idsubCategoria = "";
              if(isset($Row[0])) {
                  $idsubCategoria = mysqli_real_escape_string($con,$Row[0]);
              }

              $nombreSubcategoria = "";
              if(isset($Row[1])) {
                  $nombreSubcategoria = mysqli_real_escape_string($con,$Row[1]);
              }

              $categoria_id = "";
              if(isset($Row[2])) {
                  $categoria_id = mysqli_real_escape_string($con,$Row[2]);
              }
                
                if (!empty($idsubCategoria) || !empty($nombreSubcategoria) || !empty($categoria_id) ) {
                  $query = "insert into subcategoria(idsubCategoria, nombreSubcategoria, categoria_id) values('".$idsubCategoria."','".$nombreSubcategoria."','".$categoria_id."')";
                    $resultados = mysqli_query($con, $query);
                
                    if (! empty($resultados)) {
                        $type = "success";
                        $message = "Excel importado correctamente";
                    } else {
                        $type = "error";
                        $message = "Hubo un problema al importar registros";
                    }
                }
             }
        
         }
  }
  else
  { 
        $type = "error";
        $message = "El archivo enviado es invalido. Por favor vuelva a intentarlo";
  }
}
?>
<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="favicon.ico">
<title>subir subcategoria</title>

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
<link href="assets/style.css" rel="stylesheet">

</head>

<body>
<header> 
  <!-- Fixed navbar -->

<!-- Begin page content -->

<div class="container">
  <h3 class="mt-5">subir subcategoria</h3>
  <hr>
  <div class="row">
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->
    
    <div class="outer-container">
        <form action="" method="post"
            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <div>
                <label>Elija Archivo Excel</label> <input type="file" name="file"
                    id="file" accept=".xls,.xlsx">
                <button type="submit" id="submit" name="import"
                    class="btn-submit">Importar Registros</button>
        
            </div>
        </form>
    </div>
    <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    
         
<?php
    $sqlSelect = "SELECT * FROM subcategoria";
    $result = mysqli_query($con, $sqlSelect);

if (mysqli_num_rows($result) > 0)
{
?>
        
    <table class='tutorial-table'>
        <thead>
            <tr>
              <th>ID</th>
              <th>Nombre subcategoria</th>
              <th>Categoria</th>
            </tr>
        </thead>
<?php
    while ($row = mysqli_fetch_array($result)) {
?>                  
        <tbody>
        <tr>
          <td><?php  echo $row['idsubCategoria']; ?></td>
          <td><?php  echo $row['nombreSubcategoria']; ?></td>
          <td><?php  echo $row['categoria_id']; ?></td>
        </tr>
<?php
    }
?>
        </tbody>
    </table>
<?php 
} 
?>
      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 

  
</div>
<!-- Fin container -->
<footer class="footer">
  <div class="container"> <span class="text-muted">
    <p>Códigos <a href="https://www.baulphp.com/importar-archivo-de-excel-a-mysql-usando-php" target="_blank">BaulPHP</a></p>
    </span> </div>
</footer>
<script src="assets/jquery-1.12.4-jquery.min.js"></script> 

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>