<?php include("cabecera.php") ?>


<?php



$id=$_GET["id"];


include("conexion.php");



$sql="SELECT * FROM destinos WHERE id_destino='$id'";



$respuesta=$conexion->query($sql);



$fila = $respuesta->fetch_assoc(); //sin while porque es solo UNO 


?>




<section id="administrador">
<h1>Formulario para MODIFICAR  destinos de viaje </h1>
<p>Solo los administradores del sitio podrán modificar </p>

<form action="#" method="post" enctype="multipart/form-data">
<label>Titulo Destino</label>
<input type="text" name="titulo" value= "<?php echo $fila["titulo"] ?>">

<label>Descripción </label>
<textarea name="descripcion"><?php echo $fila["descripcion"] ?></textarea>


<label>Web Oficial</label>
<input type="url" name="sitioweb" value="<?php echo $fila["sitioweb"] ?>">

<label>Imagen / Foto</label>
  <input type="file" name="imagen" value="<?php echo $fila["imagen"]?>">
<input  name="modificar" type="submit" value="modificar"  class="boton">
</form>
</section>


<?php include("pie.php")?>

</main>

</body>


</html>


<?php



$id=$_GET["id"];


include("conexion.php");



$sql="SELECT * FROM destinos WHERE id_destino='$id'";



$respuesta=$conexion->query($sql);



$fila = $respuesta->fetch_assoc(); 


?>


<?php  

if(isset($_POST["modificar"])){
	
	
 $titulo =$_POST["titulo"];
 $descripcion =$_POST["descripcion"];
 $sitioweb =$_POST["sitioweb"];

 $imagen = $_FILES["imagen"]["name"]; 
 

 
move_uploaded_file( $_FILES["imagen"]["tmp_name"],"../imagenes/destinos/$imagen"); 
 
	
	
	$sql="UPDATE destinos SET titulo='$titulo' , descripcion='$descripcion', sitioweb='$sitioweb', imagen= '$imagen' WHERE id_destino='$id'";
	
	
	
	$conexion->query($sql);
	
	
	
	header("location:administrar_destinos.php");
	
	}
?>


    