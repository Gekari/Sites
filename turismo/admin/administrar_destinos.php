
    <?php include("cabecera.php") ?>
    <?php include("conexion.php") ?>
    
<?php  

$sql= "SELECT * FROM destinos";

$respuesta=$conexion->query($sql);


?>
<section id="administrador">
 <h1> Mantenedor destinos </h1>
 <p class="centro"> Para modificar y eliminar  destinos ingresados </p>
<table width="90%" border="0" cellspacing="0" cellpadding="0" class="tabla">
  <tbody>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Foto</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descripción</th>
      <th scope="col">Sitio WEB</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Modificar</th>
    </tr>
    
         <?php while ($fila=$respuesta->fetch_assoc()) {?>  
    
    <tr>
      <td><?php echo $fila["id_destino"] ?></td>
      <td><img src="../imagenes/destinos/<?php echo $fila["imagen"] ?>" width="100" height="100"></td>
       <td><?php echo $fila["titulo"] ?></td>
      <td><?php echo $fila["descripcion"]?></td>
      <td><a target="_blank" href="<?php echo $fila["sitioweb"] ?>"> <?php echo $fila["sitioweb"] ?></a></td>
      <td><a href="eliminar_destinos.php?id=<?php echo $fila["id_destino"] ?>"> <img src="../imagenes/iconos/eliminar.png"></a></td>
      <td><a href="modificar_destinos.php?id=<?php echo $fila["id_destino"] ?>"> <img src="../imagenes/iconos/modificar.png"></a></td>
    </tr>

  </tbody>
    <?php } ?>  
</table>
</section>
<?php include("pie.php") ?>

</main>

</body>


</html>