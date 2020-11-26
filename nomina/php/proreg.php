<?php
        $ident = $_POST['iden'];
        $nombre = $_POST['nom'];
        $cor = $_POST['correo'];
        $contra1 = $_POST['contra'];
        $contra2 = $_POST['contra2'];

        $conex = mysqli_connect("localhost:3306","root","","db_escuela");

        if($conex->connect_error){
            die("Conexion Fallida". $conex->connect_error);
        }
        if($contra1 == $contra2){

            if (isset($_POST['iden'])){
                $insert = "INSERT INTO tb_estudiante VALUES ($ident,'$nombre','$contra1','$cor');";
                if($conex->query($insert) == true){
                   ?>
                   <head>
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
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="icon" href="../img/nomina-de-sueldos.svg">
        <title>Empleado Agregado</title>
                   </head>
                   <div class="cont">
                   <div class="card">
                       
                        <div class="card-body m-4">
                           <h5 class="noti">Empleado agregado con exito. </h5>
                          <a href="/nomina/php/account.php" class="card-text">Terminar</a>
                </div>
              
            </div>
            </div>
                   <?php
                }else{
                    header("Location: http://localhost/nomina/pages/registrar.html");
                }

                
            }
        }else{
            
            header("Location: http://localhost/nomina/pages/registrar.html");
        }

        ?>