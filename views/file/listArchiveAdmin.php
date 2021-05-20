<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Bogotá</title>
    <link rel="stylesheet" type="text/css" href="css/StyleTable.css">
    <link rel="stylesheet" href="css/StyleIndex.css">
    <link rel="shortcut icon" type="image/png" href="./assets/img/Logo_peque_ferreteria.fw.png" />
</head>
<body>
    <div>
        <h2>Archivos <?php echo $id; ?></h2>
    </div>
        <main class="container">
            <div class="col-sm-12">
                <table id="miTable">
                    <thead>
                        <th>id</th>
                        <th>Nombre del archivo</th>
                        <th>Funciones</th>
                    </thead>
                    <tbody>
                        <?php foreach ($files as $file) : ?>
                        <tr>
                            <td><?php echo $file->id ?></td>
                            <td><?php echo $file->name ?></td>
                            <td>
                                <a href="Doc/<?php echo $file->name; ?>" download="<?php echo $file->name?>">Descargar</a>
                                <a href="?controller=File&method=delete&id=<?php echo $file->id ?>&name=Doc/<?php echo $file->name?>">Eliminar</a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </main>
</body>
</html>