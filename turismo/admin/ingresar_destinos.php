<?php include("cabecera.php"); ?>

<section id="administrador">
<h1>Formulario para el ingreso de destinos de viaje </h1>
<p>Solo los administradores del sitio podrán publicar </p>

<form action="#" method="post" enctype="multipart/form-data">
<label>Titulo Destino</label>
<input type="text" name="titulo">

<label>Descripción </label>
<textarea name="descripcion"></textarea>


<label>Web Oficial</label>
<input type="url" name="sitioweb">

<label>Imagen / Foto</label>
<input type="file" name="imagen">
<input  name="ingresar" type="submit" value="ingresar"  class="boton">
</form>
</section>


<?php include("pie.php")?>

</main>

</body>


</html>


<?php



if( isset($_POST["ingresar"])){ 
 
 
 $titulo =$_POST["titulo"];
 $descripcion =$_POST["descripcion"];
 $sitioweb =$_POST["sitioweb"];

 $imagen = $_FILES["imagen"]["name"]; 
 
 move_uploaded_file( $_FILES["imagen"]["tmp_name"],"../imagenes/destinos/$imagen"); 


include("conexion.php");
 

 $sql="INSERT INTO destinos(titulo, descripcion,sitioweb,imagen)
           VALUES ('$titulo','$descripcion','$sitioweb','$imagen')";
 
 //5 ejecutar consulta
 $conexion->query($sql);

 //6 cerrar conexion 
 $conexion->close();
 echo "<h3>Se han ingresado correctamente los datos</h3>";
 
 header("location:administrar_destinos.php"); 
}

?>
