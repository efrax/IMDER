	 
	 $("#boton").live("click", function() {

		var valor	  = $('#valor').val();

		var data = 'valor=' + valor;
		$.ajax({
			type : "POST",
			url : pruebaAjax,
			data : data,
			dataType : "json",
			success : function(data) {

				$('#removobible').html('<h1>Nuevo codigo HTML agregado!</h1>' + data.valor);
									 }
		      });	
		      // fin de ajax      
	 });
	 // fin de live click boton

	 $(".agregar").live("click", function(){

	 	tipo = $('.tipo').val();

	 	switch(tipo){
	 		case 'categoria':
	 			var nombre_categoria = $('.nombre_categoria').val();

	 			var data = 'nombre_categoria=' + nombre_categoria + '&tipo=' + tipo;
	 			break;

	 		case 'cancha':
	 			var nombre_cancha    = $('.nombre_cancha').val();
	 			var direccion_cancha = $('.direccion_cancha').val();

	 			var data = 'nombre_cancha=' + nombre_cancha + '&direccion_cancha=' 
	 			+ direccion_cancha + '&tipo=' + tipo;
	 			break;
	 		case 'entrenador':
	 			var nombre_entrenador     = $('.nombre_entrenador').val();
	 			var cedula_entrenador     = $('.cedula_entrenador').val();
	 			var disciplina_entrenador = $('.disciplina_entrenador').val();
	 			var direccion_entrenador  = $('.direccion_entrenador') .val();

	 			var data = 'direccion_entrenador=' + direccion_entrenador + '&disciplina_entrenador=' 
	 			+ disciplina_entrenador + '&cedula_entrenador=' + cedula_entrenador + 
	 			'&nombre_entrenador='+ nombre_entrenador + '&tipo=' + tipo;
	 			break;
	 		case 'deporte':
	 			var deporte_nombre_deporte    = $('.deporte_nombre_deporte').val();
	 			var deporte_nombre_entrenador = $('.deporte_nombre_entrenador').val();
	 			var deporte_nombre_categoria  = $('.deporte_nombre_categoria').val();
	 			var deporte_nombre_cancha     = $('.deporte_nombre_cancha').val();

	 			// console.log(deporte_nombre_cancha);
	 			// exit;

	 			var data = 'deporte_nombre_deporte='     + deporte_nombre_deporte    + 
	 					   '&deporte_nombre_entrenador=' + deporte_nombre_entrenador +
	 			           '&deporte_nombre_categoria='  + deporte_nombre_categoria  +
	 					   '&deporte_nombre_cancha='     + deporte_nombre_cancha     +
	 			           '&tipo=' + tipo;
	 	}
	 	
		$.ajax({
			type : "POST",
			url : agregarAjax,
			data : data,
			dataType : "json",
			success : function(data) {
				
				console.log('todo bien');
				var tipo = data.tipo;

				switch(tipo){
					case 'categoria':
						$('.vaciar_categoria').val("");
					break;

					case 'cancha':
						$('.vaciar_cancha').val("");
						break;

					case 'entrenador':
						$('.vaciar_entrenador').val("");
						break;

					case 'deporte':
						$('.vaciar_deporte').val("");
						break;
				}
				// fin switch tipo			
		    }	
	 	});
	 	// fin de ajax
	 });
	 // fin de live click agregar

	 $(".editar").live("click", function(){

	 	var tipo = $('#tipo').val();

	 	switch(tipo){
	 		case 'categoria':
			 	var id = $(this).parent().prev().children().attr('valor');
				document.location.href = editarProyecto + '/'+ id + '/' + tipo;
				break;
			case 'cancha':
				var id = $(this).parent().prev().prev().children().attr('valor');
				document.location.href = editarProyecto + '/'+ id + '/' + tipo;
				break;
			case 'entrenador':
				var id = $(this).parent().prev().prev().prev().prev().children().attr('valor');
				console.log(id);
				document.location.href = editarProyecto + '/'+ id + '/' + tipo;
				break;
			case 'deporte':
				var id = $(this).parent().prev().prev().prev().prev().children().attr('valor');
				console.log(id);
				document.location.href = editarProyecto + '/'+ id + '/' + tipo;
				break;

	 	}
	 });
	 // fin de live click #editar

	 $(".actualizar").live("click", function(){
	 	
	 	var tipo = $('#tipo').val();

	 	switch(tipo){
	 		case 'categoria':

	 			var id_registro      = $('#nombre_categoria').attr('id_registro');
	 			var nombre_categoria = $('#nombre_categoria').val();
	 			var data = 'id_registro=' + id_registro + '&tipo=' + tipo + '&nombre_categoria=' + nombre_categoria;
	 			break;
	 		case 'cancha':

	 			var id_registro         = $('#nombre_cancha').attr('id_registro');
	 			var nombre_cancha       = $('#nombre_cancha').val();
	 			var direccion_cancha    = $('#direccion_cancha').val();
	 			var data = 'id_registro=' + id_registro + '&tipo=' + tipo + '&nombre_cancha=' + nombre_cancha + '&direccion_cancha=' + direccion_cancha;
	 			break;			
	 		case 'entrenador':

	 			var id_registro           = $('#nombre_entrenador').attr('id_registro');
	 			var nombre_entrenador     = $('#nombre_entrenador').val();
	 			var cedula_entrenador     = $('#cedula_entrenador').val();
	 			var disciplina_entrenador = $('#disciplina_entrenador').val();
	 			var direccion_entrenador  = $('#direccion_entrenador').val();	
	 			var data ='id_registro=' + id_registro + '&nombre_entrenador=' + nombre_entrenador
	 			+ '&cedula_entrenador=' + cedula_entrenador	+ '&disciplina_entrenador=' + disciplina_entrenador
	 			+ '&direccion_entrenador=' + direccion_entrenador + '&tipo=' + tipo;
	 			break;
	 	}

		$.ajax({
			type : "POST",
			url : editarAjax,
			data : data,
			dataType : "json",
			success : function(data) {

				console.log(tipo);
				
				document.location.href = listar + '/' + data.tipo;
			
		      }	
	 	});
	 	// fin de ajax	 	
	 });

	 $(".eliminar").live("click", function(){

	 	var tipo = $('#tipo').val();
	 	switch(tipo){

	 		case 'categoria':
	 			var id = $(this).parent().prev().prev().children().attr('valor');
				data = 'id=' + id + '&tipo=' + tipo;
	 		break;

	 		case 'cancha':
	 			var id = $(this).parent().prev().prev().prev().children().attr('valor');
				break;

			case 'entrenador':
				var id = $(this).parent().prev().prev().prev().prev().prev().children().attr('valor');
			break;

			case 'deporte':
				var id = $(this).parent().prev().prev().prev().prev().prev().children().attr('valor');
			break;

	 	}
	 	// fin del switch

	 	data = 'id=' + id + '&tipo=' + tipo;
	 	
		$.ajax({
			type : "POST",
			url : eliminarAjax,
			data : data,
			dataType : "json",
			success : function(data) {

				console.log(data.id);
				var id = data.id;
				$('.fila_'+id).hide();

		      }	
	 	});
	 	// fin de ajax	 	
	 })
	 // fin del live click .eliminar

