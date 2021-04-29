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
        <h2>Esquema de IP´s Bogotá</h2>
    </div>
        <main class="container">
            <div class="col-sm-12">
                <a href="?controller=User&method=index" class="btn btn-return">Volver</a>
                <table id="miTable">
                    <thead>
                        <th>Direccion IP</th>
                        <th>Nombre</th>
                        <th>Estación de trabajo</th>
                        <th>Area</th>
                        <th>Funciones</th>
                    </thead>
                    <tbody>
                        <?php foreach ($usersBog as $user) : ?>
                            <tr>
                                <td><?php echo "192.158.0.". + $user->ip ?></td>
                                <td><?php echo $user->name ?></td>
                                <td><?php echo $user->workstation ?></td>
                                <td><?php echo $user->area ?></td>
                                <td><a href="?controller=User&method=edit&id=<?php echo $user->id; ?>" class="btn btn-edit">Editar</a>
                                    <a href="?controller=User&method=delete&id=<?php echo $user->id; ?>" class="btn btn-delete" onclick="return confirm('Esta seguro de eliminar ?')">Eliminar</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </main>
</body>
</html>