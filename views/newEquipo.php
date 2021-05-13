<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/StyleForm.css">
    <link rel="shortcut icon" type="image/png" href="./assets/img/Logo_peque_ferreteria.fw.png" />
    <title>Nuevo equipo</title>
</head>
<body>
    <section>
        <h1>Nuevo equipo</h1>
    </section>
    <div class="card">
        <div class="card-header">
            <h2>Información</h2>
        </div>
        <div class="card-body">
            <form action="?controller=User&method=save" method="POST">
                    <div class="form-row">
                        <div class="group">
                            <label for="computer">Equipo</label>
                            <select name="computer" id="computer" class="input-form" >
                                <option selected>Seleccione...</option>
                                <option value="portatil">Portatil</option>
                                <option value="escritorio">Escritorio</option>
                                <option value="todo_en_uno">Todo en uno</option>
                            </select>
                        </div>
                        <div class="group">
                            <label for="provider">Marca</label>
                            <input type="text" name="provider" id="provider" class="input-form" placeholder="Ingrese la marca del equipo" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="group">
                            <label for="model">Modelo</label>
                            <input type="text" name="model" id="model" class="input-form" placeholder="Ingrese el modelo" >
                        </div>
                        <div class="group">
                            <label for="serial">Serial</label>
                            <input type="text" name="serial" id="serial" class="input-form" placeholder="Ingrese el serial" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="group">                                                                                                                                                                                                                                                     
                            <label for="ip">Extension IP Equipo</label>
                            <div class="join">
                                <input type="text" value="192.158.0." class="input-form-join col-3" readonly>
                                <input type="number" name="ip" id="ip" class="input-form-join col-2" placeholder="" required>
                            </div>
                        </div>
                        <div class="group">
                            <label for="ipTel">Extension IP teléfono</label>
                            <div class="join">
                                <input type="text" value="10.10.1." class="input-form-join col-2A" readonly>
                                <input type="number" name="ipTel" id="ipTel" class="input-form-join col-2" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="group">
                            <label for="workstation_id">Estación de trabajo</label>
                            <select name="workstation_id" id="workstation_id" class="input-form">
                                <option>Seleccione...</option>
                                <?php
                                    foreach ($workstation as $workstation) {
                                        echo '<option value="'.$workstation->id.'">'.$workstation->name.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="group">
                            <label for="user_id">Usuario</label>
                            <select name="user_id" id="user_id" class="input-form">
                                <option>Seleccione...</option>
                                <?php
                                    foreach ($users as $users) {
                                        echo '<option value="'.$users->id.'">'.$users->name.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="group">
                            <label for="win_Version">Versión de S.O</label>
                            <select name="win_Version" id="win_Version" class="input-form" required>
                                <option selected>Seleccione...</option>
                                <option value="Windows_10_x64">Windows 10 x64</option>
                                <option value="Windows_10_x32">Windows 10 x32</option>
                                <option value="Windows_7_x64">Windows 7 x64</option>
                                <option value="Windows_7_x32">Windows 7 x32</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="group">
                            <label class="label-check" for="active">Esta versión tiene licencia?</label>
                            <div>
                                <input type="radio" name="active" value="✔"/>
                                <label>Si</label>
                            </div>
                            <div>
                                <input type="radio" name="active" value="X"/>
                                <label>No</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="group">
                            <label for="comment">Observaciones</label>
                            <textarea name="comment" id="comment" class="input-textArea" rows="3" placeholder="Ingrese las observaciones del equipo"></textarea>
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <a href="?controller=User&method=index" class="btn btn-return">Volver</a>
                        <button type="submit" class="btn btn-save">Guardar</button>
                        <!-- <button type="submit" class="btn btn-return">Cancelar</button> Hola-->
                    </div>
            </form>
        </div>
    </div>
</body>
</html>