<form class="" action="?controller=File&method=save" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" id="file">
    <label for="area_id">Area<?php echo"Hola"; ?></label>
    <select name="area_id" id="area_id">
            <option>Seleccione</option>
            <?php
            $area = $areas;
                foreach ($area as $ar) {
                    echo '<option value="'.$ar->id.'">'.$ar->name.'</option>';
                }
            ?>
        </select>
    <button type="submit">Cargar</button>
  </form>