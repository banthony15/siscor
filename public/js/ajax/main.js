var BASE_URL = "http://localhost/siger/";
//var BASE_URL = "http://10.3.130.27/siger/";





function LoadReferencia(tabla){

	$.ajax({
		url: BASE_URL +'ajax/LoadReferencia/'+tabla,
		type: 'post',
		dataType: 'json'
	})
	.done(function(data) {

		for (var i = 0; i < data.length; i++) {
			$('#'+tabla).append('<option value='+data[i][3]+'>'+data[i][4]+'</option>');
		};
	})
	.fail(function() {
		//alert("fail");
	})
	.always(function() {
		//alert("always");
	});
}

function Loadasig(id){

	$.ajax({
		url: BASE_URL +'ajax/Loadasig/',
		type: 'post',
		dataType: 'json'
	})
	.done(function(data) {
		// console.log(data);
		for (var i = 0; i < data.length; i++) {
			$('#'+id).append('<option value='+data[i][0]+'>'+data[i][1]+'</option>');
		};
	})
	.fail(function() {
		//alert("fail");
	})
	.always(function() {
		//alert("always");
	});
}

function Loadasigsistema(id){
	$.ajax({
		url: BASE_URL +'ajax/Loadasigsistema/',
		type: 'post',
		dataType: 'json'
	})
	.done(function(data) {
		// console.log(data);
		for (var i = 0; i < data.length; i++) {
			$('#'+id).append('<option value='+data[i][0]+'>'+data[i][1]+'</option>');
		};
	})
	.fail(function() {
		//alert("fail");
	})
	.always(function() {
		//alert("always");
	});
}

function LoadDespacho(tabla,item){
	$.ajax({
		url: BASE_URL +'ajax/LoadDespacho/'+tabla+'/'+item,
		type: 'post',
		dataType: 'json'
	})
	.done(function(data) {

		$('#'+tabla).empty();
			$('#'+tabla).append('<option>Seleccione</option>');		
		for (var i = 0; i < data.length; i++) {
			$('#'+tabla).append('<option value='+data[i][0]+'>'+data[i][1]+'</option>');
		};
	})
	.fail(function() {
		//alert("fail");
	})
	.always(function() {
		//alert("always");
	});
}

function loadSystem(tabla,item){
	$.ajax({
		url: BASE_URL +'ajax/loadSystem/'+tabla+'/'+item,
		type: 'post',
		dataType: 'json'
	})
	.done(function(data) {
		$('#'+tabla).empty();
			$('#'+tabla).append('<option>Seleccione</option>');		
		for (var i = 0; i < data.length; i++) {
			$('#'+tabla).append('<option value='+data[i][0]+'>'+data[i][1]+'</option>');
		};
	})
	.fail(function() {
		//alert("fail");
	})
	.always(function() {
		//alert("always");
	});
}

function load(campo,tabla,form)
{

$.ajax({
	url: BASE_URL+'ajax/load/'+campo+'/'+tabla,
	type: 'POST',
	dataType: 'json',
})
.done(function(data) {

$('#'+campo).focusout(function(event) 
{
	var c=0;
	var valor=$("#"+campo).val();
	for (var i = 0; i < data.length; i++) 
	{
		if (data[i][0]== valor)
		{
			c=c+1;
		}
	}
		if (c==0)
		{
			$("#"+campo+'2').css("color","#ff3333");
			$("#"+campo+'1').text('Este '+campo+' no existe');
			$("#"+form).click(function(event) {

		 	});
		}
		else
		{
			$("#"+campo+'2').css("color","#3c763d");
			$("#"+campo+'1').text('Este '+campo+' es valido para la recuperacion de su contraseña');

		}
});
})
.fail(function() {
	alert("error");
})
}

function user(campo,tabla,form){

$.ajax({
	url: BASE_URL+'ajax/load/'+campo+'/'+tabla,
	type: 'POST',
	dataType: 'json',
})
.done(function(data) {

$('#'+campo).focusout(function(event) 
{
	var c=0;
	var valor=$("#"+campo).val();
	for (var i = 0; i < data.length; i++) 
	{
		if (data[i][0]== valor)
		{
			c=c+1;
		}
	}
		if (c==0)
		{
			$("#"+campo+'2').css("color","#3c763d");
			$("#"+campo+'1').text('Esta '+campo+' es valido para registrarse');
			$("#"+form).click(function(event) {

		 	});
		}
		else
		{
			$("#"+campo+'2').css("color","#ff3333");
			$("#"+campo+'1').text('Esta '+campo+' ya esta registrado');

		}
});
})
.fail(function() {
	alert("error");
})
}


function numero(campo, tabla, form){

$.ajax({
  url: BASE_URL+'ajax/load/'+campo+'/'+tabla,
  type: 'POST',
  dataType: 'json',
})
.done(function(data) {

$('#'+campo).focusout(function(event) 
{
  var c=0;
  var valor=$("#"+campo).val();
  for (var i = 0; i < data.length; i++) 
  {
    if (data[i][0]== valor)
    {
      c=c+1;
    }
  }
    if (c==0)
    {
      $("#"+campo+'2').css("color","#3c763d");
      $("#"+campo+'1').text('Este '+campo+' es valido para registrar');
      $("#"+form).click(function(event) {

      });
    }
    else
    {
      $("#"+campo+'2').css("color","#ff3333");
      $("#"+campo+'1').text('Este '+campo+' ya esta registrado');

    }
});
})
.fail(function() {
  alert("error");
})
}

function hacer_click()
{ 
if (confirm('')){ 
   document.tuformulario.submit()
    }
} 

$(function($){
$.datepicker.regional['es'] = {
    closeText: 'Cerrar',
    prevText: '<Ant',
    nextText: 'Sig>',
    currentText: 'Hoy',
    monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
    dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
    dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
    dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
    weekHeader: 'Sm',
    dateFormat: 'yy-mm-dd',
    firstDay: 7,
    isRTL: false,
    showMonthAfterYear: false,
    yearSuffix: ''
};
$.datepicker.setDefaults($.datepicker.regional['es']);
});

$(document).ready(function() {
 $('#dataTables').DataTable({
		"language": {
	"sProcessing":     "Procesando...",
	"sLengthMenu":     "Mostrar _MENU_ registros",
	"sZeroRecords":    "No se encontraron resultados",
	"sEmptyTable":     "Ningún dato disponible en esta tabla",
	"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
	"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
	"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
	"sInfoPostFix":    "",
	"sSearch":         "Buscar:",
	"sUrl":            "",
	"sInfoThousands":  ",",
	"sLoadingRecords": "Cargando...",
	"oPaginate": {
		"sFirst":    "Primero",
		"sLast":     "Ãšltimo",
		"sNext":     "Siguiente",
		"sPrevious": "Anterior"
	},
	"oAria": {
		"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
		"sSortDescending": ": Activar para ordenar la columna de manera descendente"
			}
		}	 
	});
 });

$(function () {
    $( "#reportes1" ).datepicker({
        changeMonth: true,
        changeYear: true,
        minDate: "-15Y",
        maxDate: "+0M +0D",
        showButtonPanel: true,
        dateFormat: 'mm/yy',
        onClose: function(dateText, inst) { 

                var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                $(this).datepicker('setDate', new Date(year, month, 1));
            }
    });
});

$(function () {
    $( "#datepicker" ).datepicker({
        changeMonth: true,
        changeYear: true,
        minDate: "-15Y",
        maxDate: "+0M +0D"
    });
});

$(function () {
    $( "#date" ).datepicker({
        changeMonth: true,
        changeYear: true,
        minDate: "-15Y",
        maxDate: "+0M +0D"
    });
});

$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});


$("#marca_procesador").prop('disabled', true);
$( "#tipo_equipo").change(function() {
  var selector = $("#tipo_equipo  option:selected").val();
  switch(selector){
    case "95":
      $("#marca_procesador").prop('disabled', false);
      break;
    case "96":
      $("#marca_procesador").prop('disabled', true);
      break;
    case "97":
      $("#marca_procesador").prop('disabled', true);
      break;
    case "99":
      $("#marca_procesador").prop('disabled', true);
      break;
  }
});


$("#tipo_de_ram").prop('disabled', true);
$( "#tipo_equipo").change(function() {
  var selector = $("#tipo_equipo  option:selected").val();
  switch(selector){	
    case "95":
      $("#tipo_de_ram").prop('disabled', false);
      break;
    case "96":
      $("#tipo_de_ram").prop('disabled', true);
      break;
    case "97":
      $("#tipo_de_ram").prop('disabled', true);
      break;
    case "99":
      $("#tipo_de_ram").prop('disabled', true);
      break;
  }
});


$("#capacidad_ram").prop('disabled', true);
$( "#tipo_equipo").change(function() {
  var selector = $("#tipo_equipo  option:selected").val();
  switch(selector){
    case "95":
      $("#capacidad_ram").prop('disabled', false);
      break;
    case "96":
      $("#capacidad_ram").prop('disabled', true);
      break;
    case "97":
      $("#capacidad_ram").prop('disabled', true);
      break;
    case "99":
      $("#capacidad_ram").prop('disabled', true);
      break;
  }
});

$("#cantidad_memoria_ram").prop('disabled', true);
$( "#tipo_equipo").change(function() {
  var selector = $("#tipo_equipo  option:selected").val();
  switch(selector){
    case "95":
      $("#cantidad_memoria_ram").prop('disabled', false);
      break;
    case "96":
      $("#cantidad_memoria_ram").prop('disabled', true);
      break;
    case "97":
      $("#cantidad_memoria_ram").prop('disabled', true);
      break;
    case "99":
      $("#cantidad_memoria_ram").prop('disabled', true);
      break;
  }
});


$("#tipo_disco_duro").prop('disabled', true);
$( "#tipo_equipo").change(function() {
  var selector = $("#tipo_equipo  option:selected").val();
  switch(selector){
    case "95":
      $("#tipo_disco_duro").prop('disabled', false);
      break;
    case "96":
      $("#tipo_disco_duro").prop('disabled', true);
      break;
    case "97":
      $("#tipo_disco_duro").prop('disabled', true);
      break;
    case "99":
      $("#tipo_disco_duro").prop('disabled', true);
      break;
  }
});


$("#capacidad_disco_duro").prop('disabled', true);
$( "#tipo_equipo").change(function() {
  var selector = $("#tipo_equipo  option:selected").val();
  switch(selector){
    case "95":
      $("#capacidad_disco_duro").prop('disabled', false);
      break;
    case "96":
      $("#capacidad_disco_duro").prop('disabled', true);
      break;
    case "97":
      $("#capacidad_disco_duro").prop('disabled', true);
      break;
    case "99":
      $("#capacidad_disco_duro").prop('disabled', true);
      break;
  }
});

$("#cantidad_disco_duro").prop('disabled', true);
$( "#tipo_equipo").change(function() {
  var selector = $("#tipo_equipo  option:selected").val();
  switch(selector){
    case "95":
      $("#cantidad_disco_duro").prop('disabled', false);
      break;
    case "96":
      $("#cantidad_disco_duro").prop('disabled', true);
      break;
    case "97":
      $("#cantidad_disco_duro").prop('disabled', true);
      break;
    case "99":
      $("#cantidad_disco_duro").prop('disabled', true);
      break;
  }
});

$("#fan_cooler").prop('disabled', true);
$( "#tipo_equipo").change(function() {
  var selector = $("#tipo_equipo  option:selected").val();
  switch(selector){
    case "95":
      $("#fan_cooler").prop('disabled', false);
      break;
    case "96":
      $("#fan_cooler").prop('disabled', true);
      break;
    case "97":
      $("#fan_cooler").prop('disabled', true);
      break;
    case "99":
      $("#fan_cooler").prop('disabled', true);
      break;
  }
});

$("#floppy").prop('disabled', true);
$( "#tipo_equipo").change(function() {
  var selector = $("#tipo_equipo  option:selected").val();
  switch(selector){
    case "95":
      $("#floppy").prop('disabled', false);
      break;
    case "96":
      $("#floppy").prop('disabled', true);
      break;
    case "97":
      $("#floppy").prop('disabled', true);
      break;
    case "99":
      $("#floppy").prop('disabled', true);
      break;
  }
});

$("#unidad_dvd_cd").prop('disabled', true);
$( "#tipo_equipo").change(function() {
  var selector = $("#tipo_equipo  option:selected").val();
  switch(selector){
    case "95":
      $("#unidad_dvd_cd").prop('disabled', false);
      break;
    case "96":
      $("#unidad_dvd_cd").prop('disabled', true);
      break;
    case "97":
      $("#unidad_dvd_cd").prop('disabled', true);
      break;
    case "99":
      $("#unidad_dvd_cd").prop('disabled', true);
      break;
  }
});

$("#tarjeta_red").prop('disabled', true);
$( "#tipo_equipo").change(function() {
  var selector = $("#tipo_equipo  option:selected").val();
  switch(selector){
    case "95":
      $("#tarjeta_red").prop('disabled', false);
      break;
    case "96":
      $("#tarjeta_red").prop('disabled', true);
      break;
    case "97":
      $("#tarjeta_red").prop('disabled', true);
      break;
    case "99":
      $("#tarjeta_red").prop('disabled', true);
      break;
  }
});

$("#tarjeta_video").prop('disabled', true);
$( "#tipo_equipo").change(function() {
  var selector = $("#tipo_equipo  option:selected").val();
  switch(selector){
    case "95":
      $("#tarjeta_video").prop('disabled', false);
      break;
    case "96":
      $("#tarjeta_video").prop('disabled', true);
      break;
    case "97":
      $("#tarjeta_video").prop('disabled', true);
      break;
    case "99":
      $("#tarjeta_video").prop('disabled', true);
      break;
  }
});

$("#tarjeta_sonido").prop('disabled', true);
$( "#tipo_equipo").change(function() {
  var selector = $("#tipo_equipo  option:selected").val();
  switch(selector){
    case "95":
      $("#tarjeta_sonido").prop('disabled', false);
      break;
    case "96":
      $("#tarjeta_sonido").prop('disabled', true);
      break;
    case "97":
      $("#tarjeta_sonido").prop('disabled', true);
      break;
    case "99":
      $("#tarjeta_sonido").prop('disabled', true);
      break;
  }
});

function selectequipo(sel) {
      if (sel.value=="95"){
           divC = document.getElementById("mp");
           divC.style.display = "";

           divC = document.getElementById("mpp");
           divC.style.display = "";           

           divC = document.getElementById("mr");
           divC.style.display = "";

           divC = document.getElementById("mr1");
           divC.style.display = "";         

           divC = document.getElementById("dd");
           divC.style.display = "";  

           divC = document.getElementById("cp1");
           divC.style.display = ""; 

           divC = document.getElementById("cp2");
           divC.style.display = "";                               

           divT = document.getElementById("nTargeta");
           divT.style.display = "none";

      }else{

           divC = document.getElementById("mp");
           divC.style.display="none";

           divC = document.getElementById("mpp");
           divC.style.display="none";           

           divC = document.getElementById("mr");
           divC.style.display = "none";

           divC = document.getElementById("mr1");
           divC.style.display = "none";         

           divC = document.getElementById("dd");
           divC.style.display = "none";  

           divC = document.getElementById("cp1");
           divC.style.display = "none"; 

           divC = document.getElementById("cp2");
           divC.style.display = "none";                         

           divT = document.getElementById("nTargeta");
           divT.style.display = "";
      }
}