<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>files</title>
</head>
<body>
    <form action="?controller=File&method=save" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <label for="area_id">Area</label>
        <select name="area_id" id="area_id">
            <option>Seleccione...</option>
            <?php
                foreach ($areas as $areas) {
                    echo '<option value="'.$areas->id.'">'.$areas->name.'</option>';
                }
            ?>
        </select>
        <button type="submit">Cargar</button>
    </form>
</body>
</html>