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
        <div>
            <div>
                <form action="?controller=categoria&method=save" method="POST">
                    <div>
                        <label for=""></label>
                        <input type="file" id="file" name="file" accept=".xls,.xlsx">
                        <input type="submit" value="Cargar registros">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>