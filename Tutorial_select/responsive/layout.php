<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
</head>

<body>
    <nav>
        <ul id="myNav" class="mytopNav">
            <li><a class="active">Bienvenido</a></li>
            <li><a href="#" class="icon" onclick="menuResponsive();">M</a></li>
            <li class="dropdown">
                <a href="#" class="dropbtn">Sistemas <i class="fas fa-angle-down"></i></a>
                <ul class="dropdown-content opacity">
                    <a href="form.php">Nuevo usuario</a>
                    <a href="">Nuevo equipo</a>
                    <a href="table.php">Usuarios</a>
                    <a href="#" id="btnModal">Ventana Modal</a>
                </ul>
            </li>
            <li><a href="tableArchive.php">Mercadeo</a></li>
            <li><a href="tableArchive.php">Cartera</a></li>
            <li><a href="tableArchive.php">Contabilidad</a></li>
            <li><a href="tableArchive.php">Logistica</a></li>
            <li class="rightli"><a href="login.php">cerrar sesion</a></li>
        </ul>
    </nav>
    <?php
        include_once "index.php";
    ?>
    <script>
        //Abrir y cerrar submenu 
        if (innerWidth <= 600) {
            $(".dropdown .dropbtn").click(function (event) {

                var dropdown = $(this).parents(".dropdown");
                var dropdownContent = $(dropdown).find(".dropdown-content");

                $(".dropdown-content").not($(dropdownContent)).slideUp("slow").addClass("opacity");
                $(".open").not($(dropdown)).removeClass("open");

                $(dropdown).toggleClass("open");
                $(dropdownContent).slideToggle("slow").toggleClass("opacity");


            })
        }
    </script>
</body>

</html>