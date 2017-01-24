<?php

$id=$_GET["id"];



include ("conexion.php");



$sql="Delete FROM destinos WHERE id_destino='$id'";



$conexion->query($sql);


header("location:administrar_destinos.php");

?>