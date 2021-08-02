<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="">
    <title>Nuevo archivo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Nuevo archivo</h2>
            <div class="outer-container">
                <form action="?controller=categoria&method=save" method="POST" enctype="multipart/form-data">
                    <div>
                        <label for="">Elija Archivo Excel</label>
                        <input type="file" id="file" name="file" accept=".xls,.xlsx">
                        <input type="submit" value="Cargar registros" class="btn-submit">
                    </div>
                </form>
            </div>
    </div>
</body>
</html>