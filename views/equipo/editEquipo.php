<link rel="stylesheet" type="text/css" href="css/StyleForm.css">
<section>
        <h1>Editar equipo</h1>
    </section>
    <div class="card">
        <div class="card-header">
            <h2>Información equipo</h2>
        </div>
        <div class="card-body">
            <form action="?controller=User&method=update" method="POST">

                        <input type="hidden" name="id" value="<?php echo $equipo[0]->id; ?>">

                <div class="form-row">
                    <div class="group">
                        <label for="name">Nombres</label>
                        <input type="text" class="input-form" id="name" name="name" value="<?php echo $equipo[0]->name; ?>">
                    </div>
                    <div class="group">
                        <label for="userSap">Usuario SAP</label>
                        <input type="text" class="input-form" id="userSap" name="userSap" value="<?php echo $equipo[0]->userSap; ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="group">
                        <label for="user">Usuario</label>
                        <input type="text" name="user" id="user" class="input-form" value="<?php echo $equipo[0]->user; ?>">
                    </div>
                    <div class="group">
                        <label for="password">Contraseña</label>
                        <input type="text" name="password" id="password" class="input-form" value="<?php echo $equipo[0]->password; ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="group">
                        <label for="ext">Ext</label>
                        <input type="text" class="input-form" id="ext" name="ext" value="<?php echo $equipo[0]->ext; ?>">
                    </div>
                    <div class="group">
                        <label for="charge_id">Cargo</label>
                        <select name="charge_id" id="charge_id" class="input-form">
                            <option>Seleccione...</option>
                            <?php
                                foreach ($charges as $charges) {
                                    if ($charges->id == $users[0]->charge_id) {
                                        echo '<option selected value="'.$charges->id.'">'.$charges->name.'</option>';
                                    }else {
                                        echo '<option value="'.$charges->id.'">'.$charges->name.'</option>';
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="group">
                        <label for="sede_id">Sede</label>
                        <select name="sede_id" id="sede_id" class="input-form">
                                <option>Seleccione...</option>
                                <?php
                                    foreach ($sedes as $sedes) {
                                        if ($sedes->id == $user[0]->sede_id) {
                                            echo '<option selected value="'.$sedes->id.'">'.$sedes->name.'</option>';
                                        }else {
                                            echo '<option value="'.$sedes->id.'">'.$sedes->name.'</option>';
                                        }
                                    }
                                ?>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <a href="?controller=User" class="btn btn-return">Cancelar</a>
                    <button class="btn btn-save">Guardar</button>
                </div>
            </form>
        </div>
    </div>