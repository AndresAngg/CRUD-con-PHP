<?php
$ide = $_POST['iden'];
$sena = $_POST['contra'];
$sw = "false";
$conex = mysqli_connect("localhost:3306","root","","db_escuela");



if ($conex){
    $consulta = "SELECT * FROM tb_estudiante";
    $resultado = mysqli_query($conex,$consulta);
    if($resultado){
        while($row = $resultado->fetch_array()){
            $identi = $row['identi'];
            $nombre = $row['Nombre'];
            $contra = $row['Contraseña'];
            $correo = $row['correo'];
            if($identi == $ide && $contra == $sena){
                $sw = "true";
                session_start();
                $_SESSION['miIden'] = $identi; 
                $_SESSION['name'] = $nombre; 
                $_SESSION['contras'] = $contra; 
                $_SESSION['corredo'] = $correo; 

                header("Location: http://localhost/nomina/php/account.php");
            }
        }
        if($sw == "false"){
    
            header("Location: http://localhost/nomina/php/login.php");
        }
        
    }
    
}
 
?>