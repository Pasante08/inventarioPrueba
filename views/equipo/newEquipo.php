<h1>Nuevo equipo</h1>
<div class="container">
    <form action="?controller=Computer&method=save">
        <div class="form-row">
            <div class="group">
                <label for="computer">Equipo</label>
                <select name="computer" id="computer">
                    <option selected>Seleccione...</option>
                    <option value="portatil">Portatil</option>
                    <option value="escritorio">Escritorio</option>
                    <option value="todo_en_uno">Todo en uno</option>
                </select>
            </div>
            <div class="group">
                <label for="provider">Marca</label>
                <input type="text" name="provider" id="provider" placeholder="Ingrese la marca del equipo">
            </div>
        </div>
        <div class="form-row">
            <div class="group">
                <label for="model">Modelo</label>
                <input type="text" name="model" id="model" placeholder="Ingrese el modelo">
            </div>
            <div class="group">
                <label for="serial">Serial</label>
                <input type="text" name="serial" id="serial" placeholder="Ingrese el serial">
            </div>
        </div>
        <div class="form-row">
            <div class="group">
                <label for="ip">Extensión IP</label>
                <input type="number" name="ip" id="ip">
            </div>
            <div class="group">
                <label for="ipTel">Extensión IP teléfono</label>
                <input type="number" name="ipTel" id="ipTel">
            </div>
        </div>
        <div class="form-row">
            <div class="group">
                <label for="workstation">Estación de trabajo</label>
                <select name="workstation_id" id="workstation_id">
                    <option selected>Seleccione...</option>
                    <?php
                    foreach ($workstation as $workstation) {
                        echo '<option value="' . $workstation->id . '">' . $workstation->name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="group">
                <label for="user_id">Usuario</label>
                <select name="user_id" id="user_id">
                    <option selected>Seleccione...</option>
                    <?php
                    foreach ($users as $users) {
                        echo '<option value="' . $users->id . '">' . $users->name . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="group">
                <label for="win_version">Versión de S.O</label>
                <select name="win_version" id="win_version">
                    <option selected>Seleccione...</option>
                    <option value="Windows_10_x64">Windows 10 x64</option>
                    <option value="Windows_10_x32">Windows 10 x32</option>
                    <option value="Windows_7_x64">Windows 7 x64</option>
                    <option value="Windows_7_x32">Windows 7 x32</option>
                </select>
            </div>
            <div class="group">
                <label for="active">Esta versión tiene licencia?</label>
                <input type="radio" name="active" value="✔">
                <label>Si</label>
                <input type="radio" name="active" value="X">
                <label>No</label>
            </div>
        </div>
        <div class="form-row">
            <div class="group">
                <label for="comment">Observaciones</label>
                <textarea name="comment" id="comment" rows="3" placeholder="Ingrese las observaciones del equipo"></textarea>
            </div>
        </div>
        <div>
            <input type="submit" class="bc-save" value="Guardar">
            <input type="button" class="bc-cancel" onclick="history.back()" value="Cancelar">
        </div>
    </form>
</div>