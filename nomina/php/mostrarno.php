<!DOCTYPE html>
<html>
<head>
	

    <link rel="icon" href="../img/nomina-de-sueldos.svg" />
    <title>Cuenta</title>
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

    <link rel="stylesheet" href="../css/menu.css">
  

</head>
<body>
	<script src="../js/header.js"></script>
		<div class="cont">
			
	<?php 


	$conex = mysqli_connect("localhost:3306","root","","db_escuela");



		if ($conex){
		    $consulta = "SELECT * FROM tb_estudiante";
		    $resultado = mysqli_query($conex,$consulta);
    		if($resultado){
    			?>
    			<a href="/nomina/php/account.php" class="btn btn-outline-dark m-3">Regresar</a>
    			<div class="card-columns m-3">
    			<?php
        		while($row = $resultado->fetch_array()){
		            

        			?>
        			 <div class="card">
		                 <img class="card-img-top" src="../img/avatar.svg" width="60" height="60" alt="">
		                 <div class="card-body">
                     			<h4 class="card-title"> <?php echo $row['Nombre']; ?> </h4>
                     			<form action="eliminar.php" method="POST" accept-charset="utf-8">
                     				
                     			<p class="card-text"> <b>Contraseña:</b> <?php echo $row['Contraseña']; ?></p>
                     			<p class="card-text"> <b>Identificaión:</b> <?php echo $row['identi']; ?></p>
                     			<input type="hidden" name="id" value="<?php echo $row['identi'];?>">
                     			<p class="card-text"><b>Correo:</b> <?php echo $row['correo']; ?></p>
                     			<button class="btn btn-outline-dark" type="submit">Eliminar</button>
                     			
                     			</form>
              			  </div>
             		  </div>
      
        			<?php

					  	         
        }
       ?>
       </div>
       <?php
        
    }
    
}



	?>
	
		</div>
</body>
</html>