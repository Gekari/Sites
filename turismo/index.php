<!doctype html>


<?php 


include ("admin/conexion.php");
//2 crear una consulta para seleccionar y mostrar los

$sql= "SELECT * FROM destinos";


$respuesta=$conexion->query($sql);

//4 mostrar los datos ordenados (respuesta de la base de datos)

?>




<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Turismo</title>
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" type="text/css" href="css/consulta-medios.css">
<link rel="stylesheet" type="text/css" href="lightbox2/src/css/lightbox.css">

</head>

<body>
	<main id="pagina" class="contenedor-full">
    <header id="cabecera" class="contenedor-full">
      <section class="contenedor">
    <img src="imagenes/logo_turismo.png" alt="logo empresa turismo" class="logo">
    	<nav>
        <ul>
        <li><a href="javascript:;" id="ir_inicio">Inicio</a></li>
        <li><a href="javascript:;" id="ir_revista">Nuestra Revista</a></li>
        <li><a href="javascript:;" id="ir_destinos">Destinos</a></li>
        <li><a href="javascript:;" id="buscar">Buscar</a></li> <!--vinculo buscar -->
         <form id="cajabuscar"> <!--buscador -->
          <input type="search" placeholder="que necesitas buscar?...">
          <input type="submit" value="buscar">
         </form>
    
        </ul>
    	</nav>
        </section>
    </header>
   	  <section id="banner" class="contenedor-full">
        <article> 
        <h2>Subtitulo de esta zona</h2>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui   officia deserunt Excepteur
        </p>
        
         <p id="masinfo" >Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui   officia deserunt Excepteur
        </p>
         <a href="#" class="boton" > Ver más </a>
        </article>
        </section>
      <section id="revista"  class="contenedor-70">
        <h1> Nuestra Revista </h1>
        <figure class="columna3">
        <img src="imagenes/nuestra_revista.jpg">
         </figure>
        
         <article class="columna2">
        <p class="destacado"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.   </p>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Contactenos en <a href="mailto:someone@example.com">correo@hola.cl </a> o al teléfono  <a href="tel:+56780906958">+56780906958</a></p>
          </article>
        

   
        </section>
	  <!--Fin seccion revista-->
       <section id="destinos" class="contenedor">   
        <h1> Destinos </h1>  
        <?php while ($fila=$respuesta->fetch_assoc()) {?>      
        
        <article class="columna4">
       <a href="imagenes/destinos/<?php echo $fila["imagen"] ?>" data-lightbox= "image-1">  
      <img src="imagenes/destinos/<?php echo $fila["imagen"] ?>" title="Destino" width="400" height="400">
      
      </a>
      
     <h3><?php echo $fila["titulo"] ?></h3>
     <p><?php echo $fila["descripcion"] ?> </p>
     <a href="<?php echo $fila["sitioweb"] ?>" class="boton"> Ver más </a>
        </article>
        
            <?php } ?>  
        
        
         <!--<article class="columna4">
        <a href="imagenes/f2_640.jpg" data-lightbox="galeria" data-title="foto Marruecos">
        <img src="imagenes/destinos/no-foto.jpg">
        </a>
        <h3> Marruecos </h3>
        <p> Minimalist Donec sed odio dui. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia sem </p>
        <a href="#" class="boton"> Ver más </a>
        </article> -->
        
        


		</section>

       <footer id="pie">
       <p>Todos los derechos reservados </p>
        <a href="#" > 
          <img id="facebook" src="imagenes/iconos/facebook_bn.png" width="48" height="48" alt=""/>
        </a>
        <a href="#" >
          <img id="twitter" src="imagenes/iconos/twitter_bn.png" width="48" height="48" alt=""/>
        </a>  
       </footer>           
	</main>
   
   <script src="js/jquery-3.1.1.min.js"></script> <!--librería -->
   <script src="lightbox2/src/js/lightbox.js"></script> <!--plugin lightbox -->
   <script src="js/navegacion.js"></script> <!--mi plugin de navegacion -->
  <script>
  $('#facebook').mouseenter(function(e) {
    /*metodo .attr()  permite cambiar un atributo
	en una etiqueta html, por ejemplo el src, href, alt*/
	$('#facebook').attr('src','imagenes/iconos/facebook.png');
 });


$('#facebook').mouseleave(function(e) {
    $('#facebook').attr('src','imagenes/iconos/facebook_bn.png');
});  
  
  
   $('#twitter').mouseenter(function(e) {
    /*metodo .attr()  permite cambiar un atributo
	en una etiqueta html, por ejemplo el src, href, alt*/
	$('#twitter').attr('src','imagenes/iconos/twitter.png');
});

$('#twitter').mouseleave(function(e) {
    $('#twitter').attr('src','imagenes/iconos/twitter_bn.png');

});  
  
  



  
  
   $('#cajabuscar').hide(); /*oculto más info*/
  $('#masinfo').hide(); /*oculto más info*/
  
  /*al hacer click en boton, ver más informacion*/
  $('#banner .boton').click(function(e) {
     $('#masinfo').slideDown(1000); /*aparece mas info*/  
  });
  
  /*al salir el mouse de la zona #banner (mouseleave() ) */
  $('#banner').mouseleave(function(e) {
    /*   ocultar parrafo #masinfo  slideUp()*/
   $('#masinfo').slideUp(1000);
        $('#cajabuscar').slideUp(500); /*aparece mas info*/  
   });
  
  
   /*ocultar banner*/
   $('#pagina').hide(); /*sin velocidad oculta como si fuese display:none*/
   /*banner aparezca mediante efecto fadeIn()*/
  $('#pagina').fadeIn(2000);
  </script>


</body>
</html>
