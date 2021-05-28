<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/StyleForm.css">
<section>
        <h1>Editar usuario</h1>
    </section>
    <div class="card">
        <div class="card-header">
            <h2>Información usuario</h2>
        </div>
        <div class="card-body">
            <form action="?controller=User&method=update" method="POST">

                        <input type="hidden" name="id" value="<?php echo $users[0]->id; ?>">

                <div class="form-row">
                    <div class="group">
                        <label for="name">Nombres</label>
                        <input type="text" class="input-form" id="name" name="name" value="<?php echo $users[0]->name; ?>">
                    </div>
                    <div class="group">
                        <label for="userSap">Usuario SAP</label>
                        <input type="text" class="input-form" id="userSap" name="userSap" value="<?php echo $users[0]->userSap; ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="group">
                        <label for="user">Usuario</label>
                        <input type="text" name="user" id="user" class="input-form" value="<?php echo $users[0]->user; ?>">
                    </div>
                    <div class="group">
                        <label for="password">Contraseña</label>
                        <input type="text" name="password" id="password" class="input-form" value="<?php echo $users[0]->password; ?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="group">
                        <label for="ext">Ext</label>
                        <input type="text" class="input-form" id="ext" name="ext" value="<?php echo $users[0]->ext; ?>">
                    </div>
                    <div class="group">
                        <label for="sede_id">Sede</label>
                        <select name="sede_id" id="sede_id" class="input-form">
                                <option>Seleccione...</option>
                                <?php
                                    foreach ($sedes as $sedes) {
                                        if ($sedes->id == $users[0]->sede_id) {
                                            echo '<option selected value="'.$sedes->id.'">'.$sedes->name.'</option>';
                                        }else {
                                            echo '<option value="'.$sedes->id.'">'.$sedes->name.'</option>';
                                        }
                                    }
                                ?>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                <div class="group">
                    <label for="areas">Area</label>
                    <select id="areas" class="input-form" name="areas">
                    <?php
                        echo '<option selected value="'.$are[0]->id.'">'.$are[0]->name.'</option>';
                        foreach ($areas as $ar) {
                            echo '<option value="'.$ar->id.'">'.$ar->name.'</option>';
                        }
                      ?>
                    </select>
                  </div>
                <div class="group">
                      <label for="charge_id">Cargo</label>
                    <!--  <select name="charge_id" id="charge_id" class="input-form">
                      <?php
						/*echo '<option selected value="'.$charge[0]->id.'">'.$charge[0]->name.'</option>';
                        foreach ($charges as $char) {
                                echo '<option value="'.$char->id.'">'.$char->name.'</option>';
                        }*/
					    ?>
						</select>-->
											<select name="charge_id" id="charge_id" class="input-form">
												<?php
													echo '<option selected value="'.$charge[0]->id.'">'.$charge[0]->name.'</option>';
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

<script type="text/javascript">
   $(document).ready(function(){
        /*$('#areas').val(1);
				alert("Hola Mundo!");
        recargarLista();*/

        $('#areas').change(function(){
					alert("Hola Mundo2!");
            recargarLista();
        });
    })
</script>
<script type="text/javascript">
    function recargarLista(){
        $.ajax({
            type:"POST",
            url:"?controller=user&method=chargesAreas",
            data:"area=" + $('#areas').val(),
            success:function(r){
                $('#charge_id').html(r);
            }
        });
    }
</script>
