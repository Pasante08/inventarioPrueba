<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Mosquera</title>
    <link rel="stylesheet" type="text/css" href="css/StyleTable.css">
    <link rel="shortcut icon" type="image/png" href="./assets/img/Logo_peque_ferreteria.fw.png" />
</head>
<body>
    <div>
        <h2>Esquema de IP´s</h2>
    </div>
        <main class="container">
            <div class="col-sm-12">
                <a href="?controller=User&method=index" class="btn btn-return">Volver</a>
                <table>
                    <thead>
                        <th>Direccion IP</th>
                        <th>Nombre</th>
                        <th>Estación de trabajo</th>
                        <th>Area</th>
                    </thead>
                    <tbody>
                        <?php foreach ($list as $list) : ?>
                            <tr>
                                <td><?php echo "192.158.0.". + $list->ip ?></td>
                                <td><?php echo $list->user ?></td>
                                <td><?php echo $list->name ?></td>
                                <td><?php echo $list->charge ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </main>
</body>
</html>
