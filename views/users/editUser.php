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
																echo
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
                    <label for="area_id">Area</label>
                    <select class="area_id" name="area_id">
                    <?php
										$charge = $charges;
                        foreach ($charge as $charge1) {
                            if($charge1->id == $users[0]->charge_id){
                                foreach ($areas as $areas) {
                                    if($charge1->area_id == $areas->id){
                                        echo '<option selected value="'.$areas->id.'">'.$areas->name.'</option>';
                                    }else{
                                        echo '<option value="'.$areas->id.'">'.$areas->name.'</option>';
                                    }
                                }
                            }
                        }
                      ?>
                    </select>
                  </div>
                <div class="group">
                      <label for="charge_id">Cargo</label>
                      <select name="charge_id" id="charge_id" class="input-form">
                      <?php

											foreach ($charges as $char) {
													if($char->id == $users[0]->charge_id){
															echo '<option selected value="'.$char->id.'">'.$char->name.'</option>';
														}else{
															echo '<option value="'.$char->id.'">'.$char->name.'</option>';
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
    <script>
      /*  $(document).ready(function(){
        $('#area_id').val(1);
        listaCargos();

        $('#area_id').change(function(){
            listaCargos();
        });
    })

    function listaCargos(){
        $.ajax({
            type:"POST",
            url:"?controller=User&method=chargeArea",
            data:"area=" + $('#area_id').val(),
            success:function(s){
                $('#charge_id').html(s);
            }
        });
    }*/
    </script>
