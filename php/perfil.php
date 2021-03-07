<!DOCTYPE html>
<html>
    <head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="icon" href="../img/mundo.svg">
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

    <div class="cont">
    
        <div class="img1">
            <img src="../img/avatar.svg" height="150" width="150" alt="avatar">
        </div>
        <div>
            <h2> <?php session_start(); echo $_SESSION['name']; ?> </h2>

            <h3>Identificación: <?php echo $_SESSION['miIden']; ?> </h3>
            <h3>Correo: <?php echo $_SESSION['corredo']; ?> </h3>
            

            <a href="clave.php" class="btn btn-outline-dark">Cambiar Contraseña</a><br><br>
            <a href="account.php" class="btn btn-outline-dark">Atras</a>
        </div>
       
        </div>  
     </body>
</html>
