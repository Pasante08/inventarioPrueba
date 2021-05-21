<link rel="stylesheet" type="text/css" href="css/StyleTable.css">
    <div>
        <h2>Equipos</h2>
    </div>
        <main class="container">
            <div class="col-sm-12">
                <table>
                    <thead>
                        <th>ID</th>
                        <th>Equipo</th>
                        <th>Dirección IP</th>
                        <th>Usuario</th>
                        <th>Funciones</th>
                    </thead>
                    <tbody>
                        <?php foreach ($equipos as $equipos) : ?>
                            <tr>
                                <td><?php echo $equipos->id ?></td>
                                <td><?php echo $equipos->computer ?></td>
                                <td><?php echo "192.158.0.". + $equipos->ip ?></td>
                                <td><?php echo $equipos->users ?></td>
                                <td><a href="?controller=Computer&method=edit&id=<?php echo $equipos->id; ?>" class="btn btn-edit">Editar</a>
                                    <a href="?controller=Computer&method=delete&id=<?php echo $equipos->id; ?>" class="btn btn-delete" onclick="return confirm('Esta seguro de eliminar ?')">Eliminar</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </main>