<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="../css/menu.css">
    <link rel="icon" href="../img/nomina-de-sueldos.svg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionar Nomina</title>

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
    <div class="resg">

        <ul>

            <li> <a href="../pages/resgistrar.html">Agregar Nuevo empleado</a> </li>
            <li> <a href="../php/mostrarno.php">Mostrar nomina de sueldo</a> </li>
        </ul>
      
    </div>

    <div class="cont">
        <div class="fm">
        <h1>Busqueda de empleado en nómina:</h1>
            <form action="resultado.php" method="POST">
                <div class="col-md-4 mb-3">
                    <label for="miid">Identificación del empleado</label>
                    <input Type="number" id="miid" class="form-control" name="id" />
                </div>
                <div class="col-md-4 mb-3">
                    <input type="submit" class="btn btn-outline-dark my-2 my-sm-0" value="Consultar">

                </div>
            </form>
        </div>
        <div class="fm">

            <h1>Eliminar empleado de la nómina:</h1>

            <form action="eliminar.php" method="POST">
                <div class="col-md-4 mb-3">
                    <label for="miid">Identificación del empleado</label>
                    <input Type="number" id="miid" class="form-control" name="id" />
                </div>
                <div class="col-md-4 mb-3">
                    <input type="submit" class="btn btn-outline-dark my-2 my-sm-0" value="Eliminar">

                </div>
            </form>

        </div>
    </div>
</body>

</html>