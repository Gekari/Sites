// JavaScript Document


// * Programación scroll para barra de navegación tipo one page *  Egonzalez//

// En mi caso mi barra de navegación cuenta con el inicio de id ir_inicio, revista de id ir_revista y destinos de id ir_detinos //


	$('#ir_biografia').click(function(e){
		
		$('body').animate({scrollTop:$('#biografia').offset().top},2000);
		
		
	});
	
	
	$('#ir_discografia').click(function(e){
		
		$('body').animate({scrollTop:$('#discos').offset().top},2000);
		
		
		
	});


	$('#ir_tours').click(function(e){
		
		$('body').animate({scrollTop:$('#conciertos').offset().top},2000);
		
		
		
	});


	$('#ir_galeria').click(function(e){
		
		$('body').animate({scrollTop:$('#galeria').offset().top},2000);
		
		
		
	});


	$('#ir_contacto').click(function(e){
		
		$('body').animate({scrollTop:$('#contacto').offset().top},2000);
		
		
		
	});



	
	
