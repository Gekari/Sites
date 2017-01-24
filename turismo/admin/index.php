<?php include("cabecera.php"); ?>




<section id="administrador">
<h1> Acceso Restringido </h1>
<p> Introduzca su usuario y su clave que no son: esteban y 12345 respectivamente ;)</p>

<form action="#" method="post">
  <input name="usuario" type="text" placeholder="usuario" required>
   <input name="clave" type="password" placeholder="clave" required>
        
 <input type="submit" name="ingresar" class="boton" value="Ingresar">
</form>

<?php include("pie.php") ?>


<?php

if(isset($_POST["ingresar"])){  

$usuario=$_POST["usuario"];
$clave=$_POST["clave"];




include("conexion.php");



$sql="SELECT * FROM usuarios WHERE usuario='$usuario' AND clave = '$clave' ";





$respuesta=$conexion->query($sql);

if($respuesta->fetch_assoc()){
	
echo "Usuario y clave correcta";
 header("location:administrar_destinos.php"); 

}

else { echo "Error de usuario y clave"; }



	



}


?>



