<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="?controller=User&method=ctrIngreso" method="POST">
        <h1>Inicio de sesión</h1>
        <label for="">Usuario:</label>
        <input type="text" name="user">
        <label for="">Contraseña:</label>
        <input type="password" name="password">
        <button>Ingresar</button>
    </form>
</body>
</html>