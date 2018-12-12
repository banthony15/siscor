LoadReferencia('jerarquia');
LoadReferencia('tipo_de_solicitud');
LoadReferencia('perfil');

user('usuario','usuario');
user('cedula','persona');




LoadDespacho('areaa','false');
$('#areaa').change(function(event) {	
	LoadDespacho('areab',$('#areaa').val());
});
$('#areab').change(function(event) {	
	LoadDespacho('areac',$('#areab').val());
});

$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});