<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/menu.css" />
    <link rel="icon" href="../img/mundo.svg" />
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
        
        <header class="cont-header">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
                    aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="/nomina/pages/Inicio.html"> <img src="../img/nomina-de-sueldos.svg" width="60" height="60" alt=""></a>
    
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="/nomina/pages/Inicio.html">inicio <span class="sr-only">(current)</span></a>
                        </li>
                        
                    </ul>
                    
                </div>
            </nav>
           
        </header>


        <div class="cont-per">
        

            <div class="perfil">
                <ul class="menu">
                    <li> <a href="#"> <img  src="../img/avatar.svg" width="60" height="60" /> </a>
                        <ul class="submenu">  
                    <li>    <a   href="/nomina/php/perfil.php"><?php session_start(); echo $_SESSION['name']; ?> </a> </li>
                    <li>    <a   href="#"> Ajustes </a> </li>
                    <li>    <a   href="/nomina/pages/clave.php"> Cambiar clave </a> </li>
                    <li>    <a   href="/nomina/pages/login.php"> Cerrar Sesión </a> </li>
                        </ul>
                    </li>
                </ul>     
               
            </div> 

        </div>

        <div class="cont"> 
            

            <?php 
            $ide = $_POST['id'];
            $conex = mysqli_connect("localhost:3306","root","","db_escuela");
            $cont = 0;
            $sw = false;

            if ($conex){
                $consulta = "SELECT * FROM tb_estudiante";
                $resultado = mysqli_query($conex,$consulta);

                if($resultado){
                    while($row = $resultado->fetch_array()){
                        $nombre = $row['Nombre'];
                        $identifi = $row['identi'];
                        $correo = $row['correo'];
                        if($ide == $identifi){
                            $sw = "true";
                            ?>
                            <h1>Resultados:</h1>
                            <h3>Nombre:  <?php echo $nombre ?> </h3>
                            <h3>Número de Identificaión: <?php echo $identifi ?> </h3>
                            <h3>Correo: <?php echo $correo ?> </h3>
                            <a href="/nomina/php/account.php" class="btn btn-outline-dark">Regresar</a>
                            <?php
                            
                        }

                    }
                     if($sw == false){
                            ?>
                            <h1>Datos nos encontrados</h1>
                            <a href="/nomina/php/account.php" class="btn btn-outline-dark">Regresar</a>    

                            <?php
                    }
                   
                    
                }
                
            }

            ?>
            

            
        </div>


    </body>
</html>