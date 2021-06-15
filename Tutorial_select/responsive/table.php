<?php
require "layout.php";
?>

<div>
    <h1>Prueba</h1>
</div>
<div class="return">
    <a href="#" class="btnReturn">Volver</a>
</div>
<table>
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Correo</th>
        <th>funciones</th>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>miguelangel fabio</td>
            <td>Perez Garcia</td>
            <td>juanperezgarcia08976@correo.com</td>
            <td><a href="" class="bc-cancel">Eliminar</a>
                <a href="form.php" class="bc-save">Editar</a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Lola</td>
            <td>Lopez</td>
            <td>corre@correo.com</td>
            <td><a href="#"  class="bc-cancel">Eliminar</a>
                <a href="form.php" class="bc-save">Editar</a>
            </td>
        </tr>
    </tbody>
</table>