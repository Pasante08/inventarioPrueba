<?php
require "layout.php";
?>

<h1>Formulario</h1>
<div class="container">
    <form action="table.html">
        <div class="form-row">
            <div class="group">
                <label for="">Nombre</label>
                <input type="text">
            </div>
            <div class="group">
                <label for="">Doc</label>
                <input type="text">
            </div>
        </div>
        <div class="form-row">
            <div class="group">
                <label for="">Apellido</label>
                <input type="text">
            </div>
            <div class="group">
                <label for="">ext</label>
                <input type="text">
            </div>
        </div>
        <div class="form-row">
            <div class="group">
                <label for="">Area</label>
                <input type="text">
            </div>
            <div class="group">
                <label for="">Cargo</label>
                <input type="text">
            </div>
        </div>
        <div>
            <input type="submit" value="save">
            <input type="submit" value="Hola">
        </div>
    </form>
</div>