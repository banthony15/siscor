//esto captura el ID del formulario al cual se le aplicaran las validaciones.
//dichas validaciones son al campo por nombre 
$('#micro').bootstrapValidator({
	 feedbackIcons: {
		 valid: 'glyphicon glyphicon-ok',
		 invalid: 'glyphicon glyphicon-remove',
		 validating: 'glyphicon glyphicon-refresh'
	 },
	 fields: {

	 	cedula: { // campo cedula

			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'La Cedula es requerida'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[1234567890]+$/,
					 message: 'El Formato de la cedula es incorrecto'
				 },
				 between: { //rango entre 1 y 40 millones
				 			   min: 1,
                        	   max: 90000000,

				 	 message: 'El Rango de la Cedula es de 1 a 90 Millones'
				 	 	
				 }
			 } 
		 },

	 	credencial: { // campo cedula

			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'La credencial es requerida'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[1234567890]+$/,
					 message: 'El Formato de la credencia es incorrecto'
				 },
				 between: { //rango entre 1 y 40 millones
				 				min:1,
				 			   	max: 900000,
				 	 message: 'El Rango de la credencial es incorrecto'
				 	 	
				 }
			 } 
		 },

		 nombre_1: {
			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'El nombre es requerido'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz \s]+$/,
					 message: 'El Nombre Solo Puede Contener Letras'
				 }
			 }
		 },

		 nombre_2: {
			 validators: {
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz \s]+$/,
					 message: 'El Nombre Solo Puede Contener Letras'
				 }
			 }
		 },

		 apellido_1: {
			 validators: {
				 notEmpty: { // Solo estos caracteres pueden ser usados
					 message: 'El apellido es requerido'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz \s]+$/,
					 
					 message: 'El Apellido Solo Puede Contener Letras'

				 }
			 }
		 },

		 apellido_2: {
			 validators: {
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz \s]+$/,
					 message: 'El Apellido Solo Puede Contener Letras'
				 }
			 }
		 },

		 cargo: {
			 validators: {
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[ABCDEFGHIJKLMNÑOPQRSTUVWXYZabcdefghijklmnñopqrstuvwxyz \s]+$/,
					 message: 'El Cargo Solo Puede Contener Letras'
				 }
			 }
		 },

		 jerarquia: { 
			 message: 'El teléfono no es valido',
			 validators: {
				 notEmpty: {
					 message: 'El teléfono es requerido y no puede ser vacio'
				 },
				 regexp: {// valida solo numeros del 0 a 9
					 regexp: /^[0-9]+$/,
					 message: 'seleccione'

				 }
			 }
		 },	

		 correo: {
			 validators: {
				 notEmpty: {
					 message: 'El correo es requerido y no puede ser vacio'
				 },
				 emailAddress: {//valida que sea tipo correo
					 message: 'El correo electronico no es valido'
				 }
			 }
		 },	

		 // areaa: { 
			//  message: 'El teléfono no es valido',
			//  validators: {
			// 	 notEmpty: {
			// 		 message: 'El teléfono es requerido y no puede ser vacio'
			// 	 },
			// 	 regexp: {// valida solo numeros del 0 a 9
			// 		 regexp: /^[0-9]+$/,
			// 		 message: 'seleccione'
			// 	 }
			//  }
		 // },
	
		 areab: { 
			 message: 'No es valido',
			 validators: {
				 notEmpty: {
					 message: 'Es requerido y no puede ser vacio'
				 },
				 regexp: {// valida solo numeros del 0 a 9
					 regexp: /^[0-9]+$/,
					 message: 'seleccione'
				 }
			 }
		 },	

		 areac: { 
			 message: 'No es valido',
			 validators: {
				 notEmpty: {
					 message: 'Es requerido y no puede ser vacio'
				 },
				 regexp: {// valida solo numeros del 0 a 9
					 regexp: /^[0-9]+$/,
					 message: 'seleccione'
				 }
			 }
		 },		 	

		 numero_tel: {
			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'el numero de telefono es requerido'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[0-9]+$/,
					 message: 'el numero de telefono es requerido'
				 }
			 }
		 },

		 numero_micro: {
			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'el numero de telefono es requerido'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[0-9]+$/,
					 message: 'el numero de telefono es requerido'
				 }
			 }
		 },		 

		 cod_area: {
			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'el codigo de area es requerido'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[0-9]+$/,
					 message: 'el codigo de area es requerido'
				 }
			 }
		 },		 

		 tipo_equipo: {
			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'el tipo de equipo es requerido'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[0-9]+$/,
					 message: 'El tipo de equipo es requerido'
				 }
			 }
		 },

		 marca_del_equipo: {
			 validators: {
				 notEmpty: {
					 message: 'la marca del equipo es requerida y no puede ser vacio'
				 },
			 }
		 },	

		 modelo_del_equipo: {
			 validators: {
				 notEmpty: {
					 message: 'el modelo del equipo es requerida y no puede ser vacio'
				 },
			 }
		 },
		 serial_del_equipo: {
			 validators: {
				 notEmpty: {
					 message: 'el serial del equipo es requerida y no puede ser vacio'
				 },
			 }
		 },

		 pieza_danada: {
			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'es requerida esta informacion'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[0-9]+$/,
					 message: 'es requerida esta informacion'
				 }
			 }
		 },

		 rayado: {
			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'es requerida esta informacion'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[0-9]+$/,
					 message: 'es requerida esta informacion'
				 }
			 }
		 },

		 pieza_suelta: {
			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'es requerida esta informacion'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[0-9]+$/,
					 message: 'es requerida esta informacion'
				 }
			 }
		 },	 

		 descripcion: {
			 validators: {
				 notEmpty: {
					 message: 'describa el incoveniente del requerimiento'
				 },
			 }
		 },	

		 solucion: {
			 validators: {
				 notEmpty: {
					 message: 'especifique la solucion de este requerimiento'
				 },
			 }
		 },

		 observacion: {
			 validators: {
				 notEmpty: {
					 message: 'describa alguna observacion del requerimiento'
				 },
			 }
		 },

		 marca_procesador: {
			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'es requerida esta informacion'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[0-9]+$/,
					 message: 'es requerida esta informacion'
				 }
			 }
		 },

		 tipo_ram: {
			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'es requerida esta informacion'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[0-9]+$/,
					 message: 'es requerida esta informacion'
				 }
			 }
		 },

		 capacidad_ram: {
			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'es requerida esta informacion'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[0-9]+$/,
					 message: 'es requerida esta informacion'
				 }
			 }
		 },


	 	cantidad_memoria_ram: { // campo cantidad_memoria_ram

			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'La cantidad_memoria_ram es requerida'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[1234567890]+$/,
					 message: 'El Formato  es incorrecto'
				 },
				 between: { //rango entre 1 y 40 millones
				 			   min: 1,
                        	   max: 90000000,

				 	 message: 'El Rango es incorrecto'
				 	 	
				 }
			 } 
		 },

		 tipo_disco_duro: {
			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'es requerida esta informacion'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[0-9]+$/,
					 message: 'es requerida esta informacion'
				 }
			 }
		 },

		 capacidad_disco_duro: {
			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'es requerida esta informacion'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[0-9]+$/,
					 message: 'es requerida esta informacion'
				 }
			 }
		 },

	 	cantidad_disco_duro: { // campo cantidad_disco_duro

			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'La cantidad_disco_duro es requerida'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[1234567890]+$/,
					 message: 'El Formato es incorrecto'
				 },
				 between: { //rango entre 1 y 40 millones
				 			   min: 1,
                        	   max: 90000000,

				 	 message: 'El Rango es incorrecto'
				 	 	
				 }
			 } 
		 },	

	 	fan_cooler: { // campo fan_cooler

			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'La fan_cooler es requerida'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[1234567890]+$/,
					 message: 'El Formato es incorrecto'
				 },
				 between: { //rango entre 1 y 40 millones
				 			   min: 1,
                        	   max: 90000000,

				 	 message: 'El Rango es incorrecto'
				 	 	
				 }
			 } 
		 },

	 	unidad_dvd_cd: { // campo unidad_dvd_cd

			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'La unidad_dvd_cd es requerida'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[1234567890]+$/,
					 message: 'El Formato es incorrecto'
				 },
				 between: { //rango entre 1 y 40 millones
				 			   min: 1,
                        	   max: 90000000,

				 	 message: 'El Rango es incorrecto'
				 	 	
				 }
			 } 
		 },

	 	tarjeta_red: { // campo tarjeta_red

			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'La tarjeta_red es requerida'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[1234567890]+$/,
					 message: 'El Formato es incorrecto'
				 },
				 between: { //rango entre 1 y 40 millones
				 			   min: 1,
                        	   max: 90000000,

				 	 message: 'El Rango es incorrecto'
				 	 	
				 }
			 } 
		 },

	 	tarjeta_video: { // campo tarjeta_video

			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'La tarjeta_video es requerida'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[1234567890]+$/,
					 message: 'El Formato es incorrecto'
				 },
				 between: { //rango entre 1 y 40 millones
				 			   min: 1,
                        	   max: 90000000,

				 	 message: 'El Rango es incorrecto'
				 	 	
				 }
			 } 
		 },	


	 	tarjeta_sonido: { // campo tarjeta_sonido

			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'La tarjeta_sonido es requerida'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[1234567890]+$/,
					 message: 'El Formato es incorrecto'
				 },
				 between: { //rango entre 1 y 40 millones
				 			   min: 1,
                        	   max: 90000000,

				 	 message: 'El Rango es incorrecto'
				 	 	
				 }
			 } 
		 },

		 tipo_de_rt: {
			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'es requerida esta informacion'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[0-9]+$/,
					 message: 'es requerida esta informacion'
				 }
			 }
		 },

		 status_equipo: {
			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'es requerida esta informacion'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[0-9]+$/,
					 message: 'es requerida esta informacion'
				 }
			 }
		 },

		 tipo_de_ram: {
			 validators: {
			 	 notEmpty: { // No puede ser vacio
					 message: 'es requerida esta informacion'
				 },
				 regexp: { // Solo estos caracteres pueden ser usados
					 regexp: /^[0-9]+$/,
					 message: 'es requerida esta informacion'
				 }
			 }
		 },			 	 

	 }
});
