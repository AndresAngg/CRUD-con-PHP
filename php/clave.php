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
                    <li> <a href="#"> <img  src="../img/avatar.svg" width="60" height="60" /> </a>
                        <ul class="submenu">  
                    <li>    <a  href="/nomina/php/perfil.php"><?php session_start(); echo $_SESSION['name']; ?> </a> </li>
                    <li>    <a  href="#"> Ajustes </a> </li>
                    <li>    <a  href="/nomina/php/clave.php"> Cambiar clave </a> </li>
                    <li>    <a  href="/nomina/php/login.php"> Cerrar Sesión </a> </li>
                        </ul>
                    </li>
                </ul>     
               
            </div>

        </div>

        <div class="cont"> 
            <h1>Cambiar clave:</h1>

            <form action="vericlave.php" method="POST">
            <div class="col-md-4 mb-3">
                <label for="miid">Clave:</label>
                <input Type="password" id="miid" class="form-control" name="clave1"  />
            </div>
            <div class="col-md-4 mb-3">
                <label for="miid">Confirmar Clave:</label>
                <input Type="password" id="conf" class="form-control" name="clave2"  />
            </div>
            <div class="col-md-4 mb-3">
                <input type="submit" class="btn btn-outline-dark my-2 my-sm-0" value="Realizar">
                
            </div>
            </form>
        </div>


    </body>
</html>