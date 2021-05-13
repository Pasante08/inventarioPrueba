<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Bogotá</title>
    <link rel="stylesheet" type="text/css" href="css/StyleTable.css">
    <link rel="shortcut icon" type="image/png" href="./assets/img/Logo_peque_ferreteria.fw.png" />
</head>
<body>
    <div>
        <h2>Archivos</h2>
    </div>
        <main class="container">
            <div class="col-sm-12">
                <a href="?controller=User&method=index" class="btn btn-return">Volver</a>
                <table id="miTable">
                    <thead>
                        <th>id</th>
                        <th>Nombre del archivo</th>
                        <th>descargar</th>
                    </thead>
                    <tbody>
                        <?php foreach ($files as $file) : ?>
                        <tr>
                            <td><?php echo $file->id ?></td>
                            <td><?php echo $file->name ?></td>
                            <td><a href="Doc/<?php echo $file->name; ?>" download="<?php echo $file->name ?>">download</a></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </main>
</body>
</html>