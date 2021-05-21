<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/StyleForm.css">
    <link rel="shortcut icon" type="image/png" href="./assets/img/Logo_peque_ferreteria.fw.png" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
    <title>Nuevo usuario</title>
</head>
<body>
    <section>
        <h1>Nuevo usuario</h1>
    </section>
    <div class="card">
        <div class="card-header">
            <h2>Información</h2>
        </div>
        <div class="card-body">
            <form action="?controller=User&method=save" method="POST">
                    <div class="form-row">
                        <div class="group">
                            <label for="name">Nombres</label>
                            <input type="text" name="name" id="name" class="input-form" placeholder="Ingrese el nombre completo" autofocus>
                        </div>
                        <div class="group">
                            <label for="userSap">Usuario SAP</label>
                            <input type="text" name="userSap" id="userSap" class="input-form" placeholder="Ingrese el usuario">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="group">
                            <label for="user">Usuario</label>
                            <input type="text" name="user" id="user" class="input-form" placeholder="Ingrese el usuario">
                        </div>
                        <div class="group">
                            <label for="password">password</label>
                            <input type="text" name="password" id="password" class="input-form" placeholder="Ingrese la extension">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="group">
                            <label for="ext">Ext</label>
                            <input type="number" name="ext" id="ext" class="input-form" placeholder="Ingrese la extension">
                        </div>
                        <div class="group">
                            <label for="sede_id">Sede</label>
                            <select name="sede_id" class="input-form">
                                <option>Seleccione...</option>
                                <?php
                                    foreach ($sedes as $sedes) {
                                        echo '<option value="'.$sedes->id.'">'.$sedes->name.'</option>';
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
                            <select name="charge_id" id="charge_id" class="input-form">
                            </select>
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
<script type="text/javascript">
    $(document).ready(function(){
        $('#areasList').val(1);
        recargarLista();

        $('#areasList').change(function(){
            recargarLista();
        });
    })
</script>
<script type="text/javascript">
    function recargarLista(){
        $.ajax({
            type:"POST",
            url:"?controller=user&method=chargesAreas",
            data:"area=" + $('#areasList').val(),
            success:function(r){
                $('#charge_id').html(r);
            }
        });
    }
</script>
