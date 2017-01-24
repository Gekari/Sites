/*programacion de navegación con efecto scroll
version 1.0
desarrollado en curso DUOC*/

 $('#ir_inicio').click(function(e) {/*inicio de evento*/
     $('body').animate({scrollTop:0},2000);
    }); /*fin evento click*/
   
   
   $('#ir_revista').click(function(e) {/*inicio de evento*/
   /*$('#revista').offset().top -> posicion top del elemento #revista*/
     $('body').animate({scrollTop:$('#revista').offset().top},1000);
    
   });/*fin evento click*/
   
   
   $('#ir_destinos').click(function(e) {
         $('body').animate({scrollTop:$('#destinos').offset().top},1000);

});