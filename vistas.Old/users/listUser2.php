    <div>
        <h1>Usuarios</h1>
    </div>
        <main class="container">
            <div class="col-sm-12">
                <table>
                    <thead>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Usuario SAP</th>
                        <th>Cargo</th>
                        <th>Funciones</th>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $users) : ?>
                            <tr>
                                <td><?php echo $users->id ?></td>
                                <td><?php echo $users->name ?></td>
                                <td><?php echo $users->userSap ?></td>
                                <td><?php echo $users->charge ?></td>
                                <td><a href="?controller=User&method=edit&id=<?php echo $users->id; ?>" class="btn btn-edit">Editar</a>
                                    <a href="?controller=User&method=delete&id=<?php echo $users->id; ?>" class="btn btn-delete" onclick="return confirm('Esta seguro de eliminar ?')">Eliminar</a></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </main>