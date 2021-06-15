<h1>Nuevo usuario</h1>
<div class="container">
    <form action="?controller=user&method=save" method="POST">
        <div class="form-row">
            <div class="group">
                <label for="name">Nombres:</label>
                <input type="text" name="name" id="name" placeholder="Ingrese el nombre completo" autofocus>
            </div>
            <div class="group">
                <label for="userSap">Usuario SAP</label>
                <input type="text" name="userSap" id="userSap" placeholder="Ingrese el usuario">
            </div>
        </div>
        <div class="form-row">
            <div class="group">
                <label for="user">Usuario</label>
                <input type="text" name="user" id="user" class="input-form" placeholder="Ingrese el usuario">
            </div>
            <div class="group">
                <label for="password">Contraseña</label>
                <input type="text" name="password" id="password" placeholder="Ingrese la contraseña">
            </div>
        </div>
        <div class="form-row">
            <div class="group">
                <label for="ext">Extensión</label>
                <input type="number" name="ext" id="ext" placeholder="Ingrese la extensión del teléfono">
            </div>
            <div class="group">
                <label for="sede_id">Sede</label>
                <select name="sede_id" class="input-form">
                    <option>Seleccione...</option>
                    <?php
                    foreach ($sedes as $sedes) {
                        echo '<option value="' . $sedes->id . '">' . $sedes->name . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="group">
                <label for="areasList">Area</label>
                <select name="areasList" id="areasList" class="input-form">
                    <option>Seleccione...</option>
                    <?php
                    foreach ($areas as $areas) {
                        echo '<option value="'.$areas->id.'">'.$areas->name.'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="group">
                <label for="charge_id">Cargo</label>
                <select name="charge_id" id="charge_id">
                </select>
            </div>
        </div>
        <div>
            <input type="submit" class="bc-save" value="Guardar">
            <input type="button" class="bc-cancel" onclick="history.back()" value="Cancelar">
            
        </div>
    </form>
</div>