<form class="" action="?controller=Charge&method=save" method="post">
  <label for="name">Cargo</label>
  <input type="text" name="name" id="name" value="">
  <label for="area_id">Area</label>
  <select class="" name="area_id" id="area_id">
    <option value="">Seleccione..</option>
    <?php
    $area = $areas;
        foreach ($area as $ar) {
            echo '<option value="'.$ar->id.'">'.$ar->name.'</option>';
        }
    ?>
  </select>
  <button type="submit">Enviar</button>
</form>
