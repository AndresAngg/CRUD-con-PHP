<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/menu.css" />
    <link rel="icon" href="../img/nomina-de-sueldos.svg" />
    <title>Cuenta personal</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

</head>

<body>

   <script src="../js/header.js"></script>

   <div class="cont-per">


        <div class="perfil">
            <ul class="menu">
                <li> <a href="#"> <img src="../img/avatar.svg" width="60" height="60" /> </a>
                    <ul class="submenu">
                        <li> <a href="/nomina/php/perfil.php"><?php session_start(); echo $_SESSION['name']; ?> </a>
                        </li>
                        <li> <a href="#"> Ajustes </a> </li>
                        <li> <a href="/nomina/php/clave.php"> Cambiar clave </a> </li>
                        <li> <a href="/nomina/php/login.php"> Cerrar Sesión </a> </li>
                    </ul>
                </li>
            </ul>

        </div>

    </div>
    
    
    
    <?php

$contra1 = $_POST['clave1'];
$contra2 = $_POST['clave2'];
$conex = $conex = mysqli_connect("localhost:3306","root","","db_escuela");



        if($contra1 != $contra2){
 


        ?>
    <div class="cont">
        <h1>Error en la confirmación de contraseña</h1>

        <a href="/nomina/php/clave.php">Regresar</a>
    </div>
    <?php
            }else{
                if($conex){
                    
                    $resultado = mysqli_query($conex, "UPDATE tb_estudiante SET Contraseña='{$contra1}' where Nombre = '{$_SESSION['name']}' ");
                   
            ?>
    <div class="cont">
        <h1>Contraseña actualizada con exito</h1>

        <a href="/nomina/php/account.php">Volver</a>
    </div>
                <?php }
                    }?>


</body>

</html>