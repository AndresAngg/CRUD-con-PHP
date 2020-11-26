document.write(`
<div class="cont-per">
        

<div class="perfil">
    <ul class="menu">
        <li> <a> <img  src="../img/avatar.svg" width="60" height="60" /> </a>
            <ul class="submenu">  
        <li>    <a  href="/nomina/php/perfil.php"><?php session_start(); echo $_SESSION['name']; ?> </a> </li>
        <li>    <a  href="#"> Ajustes </a> </li>
        <li>    <a  href="/nomina/pages/clave.php"> Cambiar clave </a> </li>
        <li>    <a  href="/nomina/pages/login.php"> Cerrar Sesión </a> </li>
            </ul>
        </li>
    </ul>     
   
</div>

</div>
<div class="resg">

<ul>

    <li> <a href="http://localhost/nomina/pages/registrar.php">Agregar Nuevo empleado</a> </li>
</ul>

</div>

<div class="cont"> 
<h1>Busqueda de empleado en nómina:</h1>
<div class="fm">
<form action="resultado.php" method="POST">
<div class="col-md-4 mb-3">
    <label for="miid">Identificación del empleado</label>
    <input Type="number" id="miid" class="form-control" name="id"  />
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
    <input Type="number" id="miid" class="form-control" name="id"  />
</div>
<div class="col-md-4 mb-3">
    <input type="submit" class="btn btn-outline-dark my-2 my-sm-0" value="Eliminar">
    
</div>
</form>

</div>
</div>
`);