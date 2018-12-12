<?php 

	class reportesModel extends Model{
		
		
		
		public function __construct(){
			parent::__construct();
		}
		public function __destruct(){
			;
		}

	function reportes_periodo_sistemas(){

	$this->_query= "SELECT id, year(hora) AS periodo, COUNT(year(hora)) as total FROM `requerimiento`
 					GROUP BY  year(hora) ORDER by year(hora) ASC";
 	return $this->read();
	}

// REPORTES POR DESPACHO EN LA DIVISION DE SISTEMAS


	function reportes_mes_sistemas($periodo){

		$this->_query= "SELECT id, year(hora) AS periodo, month(hora) AS mes, COUNT(month(hora)) as total, 
		CASE month(hora) WHEN '01' THEN 'Enero' WHEN '02' THEN 'Febrero' 
								WHEN '03' THEN 'Marzo' WHEN '04' THEN 'Abril' 
								WHEN '05' THEN 'Mayo' WHEN '06' THEN 'Junio' 
								WHEN '07' THEN 'Julio' WHEN '08' THEN 'Agosto' 
								WHEN '09' THEN 'Septiembre' WHEN '10' THEN 'Octubre' 
								WHEN '11' THEN 'Noviembre' WHEN '12' THEN 'Diciembre' 
		end  as resultado FROM `requerimiento` 
		where year(hora) = $periodo
	 	GROUP BY  month(hora) ORDER by month(hora) ASC";

		return $this->read();
	}

	function reportes_pdf_sistemas_detallados($mes, $periodo){
	
	$this->_query= "SELECT requerimiento.id, descripcion_depen, year(hora) as periodo, month(hora) as mes, COUNT(month(hora)) AS total ,CASE month(hora)WHEN '01' THEN 'ENERO' WHEN '02' THEN 'FEBRERO' 
								WHEN '03' THEN 'MARZO' WHEN '04' THEN 'ABRIL' 
								WHEN '05' THEN 'MAYO' WHEN '06' THEN 'JUNIO' 
								WHEN '07' THEN 'JULIO' WHEN '08' THEN 'AGOSTO' 
								WHEN '09' THEN 'SEPTIEMBRE' WHEN '10' THEN 'OCTUBRE' 
								WHEN '11' THEN 'NOVIEMBRE' WHEN '12' THEN 'DICIEMBRE' 
		end  as resultado FROM `requerimiento`
	
	inner join dependencias on dependencias.id = requerimiento.areac_id
	where month(hora) = $mes and year(hora) = $periodo
	GROUP by descripcion_depen ORDER by descripcion_depen";

		return $this->read();
	}


		function total_reportes_pdf_sistemas($mes, $periodo){

			$this->_query= "SELECT requerimiento.id, year(hora) as periodo, month(hora) as mes, COUNT(month(hora)) AS total 
			FROM `requerimiento`	
				INNER JOIN dependencias on dependencias.id = requerimiento.areac_id
				where month(hora) = $mes and year(hora) = $periodo";

			return $this->Read();
		}	


// REPORTES POR DESPACHO EN LA DIVISION DE SISTEMAS

// REPORTES POR SUPERVISOR EN LA DIVISION DE SISTEMAS

		function reportes_sin_procesar ($periodo){

			$this->_query="SELECT id, year(hora) AS periodo, month(hora) AS mes, COUNT(month(hora)) as total, status_id, 
		CASE month(hora) WHEN '01' THEN 'Enero' WHEN '02' THEN 'Febrero' 
								WHEN '03' THEN 'Marzo' WHEN '04' THEN 'Abril' 
								WHEN '05' THEN 'Mayo' WHEN '06' THEN 'Junio' 
								WHEN '07' THEN 'Julio' WHEN '08' THEN 'Agosto' 
								WHEN '09' THEN 'Septiembre' WHEN '10' THEN 'Octubre' 
								WHEN '11' THEN 'Noviembre' WHEN '12' THEN 'Diciembre' 
		end  as resultado FROM `requerimiento` 
		where year(hora) = $periodo and status_id = 68
	 	GROUP BY  month(hora) ORDER by month(hora) ASC";

			return $this->Read();
		}


		function reportes_en_proceso ($periodo){

			$this->_query="SELECT id, year(hora) AS periodo, month(hora) AS mes, COUNT(month(hora)) as total, status_id, 
		CASE month(hora) WHEN '01' THEN 'Enero' WHEN '02' THEN 'Febrero' 
								WHEN '03' THEN 'Marzo' WHEN '04' THEN 'Abril' 
								WHEN '05' THEN 'Mayo' WHEN '06' THEN 'Junio' 
								WHEN '07' THEN 'Julio' WHEN '08' THEN 'Agosto' 
								WHEN '09' THEN 'Septiembre' WHEN '10' THEN 'Octubre' 
								WHEN '11' THEN 'Noviembre' WHEN '12' THEN 'Diciembre' 
		end  as resultado FROM `requerimiento` 
		where year(hora) = $periodo and status_id = 78
	 	GROUP BY  month(hora) ORDER by month(hora) ASC";

			return $this->Read();
		}

		function reportes_procesado ($periodo){

			$this->_query="SELECT id, year(hora) AS periodo, month(hora) AS mes, COUNT(month(hora)) as total, status_id, 
		CASE month(hora) WHEN '01' THEN 'Enero' WHEN '02' THEN 'Febrero' 
								WHEN '03' THEN 'Marzo' WHEN '04' THEN 'Abril' 
								WHEN '05' THEN 'Mayo' WHEN '06' THEN 'Junio' 
								WHEN '07' THEN 'Julio' WHEN '08' THEN 'Agosto' 
								WHEN '09' THEN 'Septiembre' WHEN '10' THEN 'Octubre' 
								WHEN '11' THEN 'Noviembre' WHEN '12' THEN 'Diciembre' 
		end  as resultado FROM `requerimiento` 
		where year(hora) = $periodo and status_id = 67
	 	GROUP BY  month(hora) ORDER by month(hora) ASC";

			return $this->Read();
		}

		function pdf_reporte_supervisor_sistemas($mes, $periodo, $status){

			$this->_query= "SELECT requerimiento.id, persona_s_id, count(persona_s_id), credencial, CONCAT(nombre_1, ' ', apellido_1) as tecnico, ref_status.referencia as st_requerimiento,  year(hora) as periodo, month(hora) as mes, COUNT(month(hora)) AS total , 
	CASE month(hora)WHEN '01' THEN 'ENERO' WHEN '02' THEN 'FEBRERO' 
								WHEN '03' THEN 'MARZO' WHEN '04' THEN 'ABRIL' 
								WHEN '05' THEN 'MAYO' WHEN '06' THEN 'JUNIO' 
								WHEN '07' THEN 'JULIO' WHEN '08' THEN 'AGOSTO' 
								WHEN '09' THEN 'SEPTIEMBRE' WHEN '10' THEN 'OCTUBRE' 
								WHEN '11' THEN 'NOVIEMBRE' WHEN '12' THEN 'DICIEMBRE' 
	end  as resultado FROM `requerimientos_supervisor`
    inner join usuario on usuario. id = requerimientos_supervisor.persona_s_id
    inner join persona on persona.id = usuario.persona_id
	inner join requerimiento on requerimiento.id = requerimientos_supervisor.requerimiento_id   
	inner join referencia as ref_status on ref_status.id = status_id
	inner join dependencias on dependencias.id = requerimiento.areac_id	
	where month(hora) = $mes and year(hora) = $periodo and status_id = $status
	GROUP by nombre_1 ORDER by nombre_1";

			return $this->Read();

		}

		function pdf_total_sistemas_supervisor($mes, $periodo, $status){

			$this->_query= "SELECT requerimiento.id, ref_status.referencia as st_requerimiento, year(hora) as periodo, month(hora) as mes, COUNT(month(hora)) AS total , 
	CASE month(hora)WHEN '01' THEN 'ENERO' WHEN '02' THEN 'FEBRERO' 
								WHEN '03' THEN 'MARZO' WHEN '04' THEN 'ABRIL' 
								WHEN '05' THEN 'MAYO' WHEN '06' THEN 'JUNIO' 
								WHEN '07' THEN 'JULIO' WHEN '08' THEN 'AGOSTO' 
								WHEN '09' THEN 'SEPTIEMBRE' WHEN '10' THEN 'OCTUBRE' 
								WHEN '11' THEN 'NOVIEMBRE' WHEN '12' THEN 'DICIEMBRE' 
	end  as resultado FROM `requerimientos_supervisor`
    inner join usuario on usuario. id = requerimientos_supervisor.persona_s_id
    inner join persona on persona.id = usuario.persona_id
	inner join requerimiento on requerimiento.id = requerimientos_supervisor.requerimiento_id 
	inner join referencia as ref_status on ref_status.id = status_id  
	inner join dependencias on dependencias.id = requerimiento.areac_id	
	where month(hora) = $mes and year(hora) = $periodo and status_id = $status";

			return $this->Read();

		}


// FIN REPORTES POR SUPERVISOR EN LA DIVISION DE SISTEMAS

	function rperiodo(){

	$this->_query= "SELECT id, year(fecha_micro) AS periodo, COUNT(year(fecha_micro)) as total FROM `micro_tickets`
 					GROUP BY  year(fecha_micro) ORDER by year(fecha_micro) ASC";
 	return $this->read();
	}

// REPORTES POR DESPACHO DEL AREA SE SOPORTE DE EQUIPOS TECNOLOGICOS

	function rmesdesp($periodo){

		$this->_query= "SELECT id, year(fecha_micro) AS periodo, month(fecha_micro) AS mes, COUNT(month(fecha_micro)) as total, 
		CASE month(fecha_micro) WHEN '01' THEN 'Enero' WHEN '02' THEN 'Febrero' 
								WHEN '03' THEN 'Marzo' WHEN '04' THEN 'Abril' 
								WHEN '05' THEN 'Mayo' WHEN '06' THEN 'Junio' 
								WHEN '07' THEN 'Julio' WHEN '08' THEN 'Agosto' 
								WHEN '09' THEN 'Septiembre' WHEN '10' THEN 'Octubre' 
								WHEN '11' THEN 'Noviembre' WHEN '12' THEN 'Diciembre' 
		end  as resultado FROM `micro_tickets` 
		where year(fecha_micro) = $periodo
	 	GROUP BY  month(fecha_micro) ORDER by month(fecha_micro) ASC";

		return $this->read();
	}


	function rdetalladodesp($mes, $periodo){
	
	$this->_query= "SELECT micro_tickets.id, descripcion_depen, year(fecha_micro) as periodo, month(fecha_micro) as mes, COUNT(month(fecha_micro)) AS total ,CASE month(fecha_micro)WHEN '01' THEN 'ENERO' WHEN '02' THEN 'FEBRERO' 
								WHEN '03' THEN 'MARZO' WHEN '04' THEN 'ABRIL' 
								WHEN '05' THEN 'MAYO' WHEN '06' THEN 'JUNIO' 
								WHEN '07' THEN 'JULIO' WHEN '08' THEN 'AGOSTO' 
								WHEN '09' THEN 'SEPTIEMBRE' WHEN '10' THEN 'OCTUBRE' 
								WHEN '11' THEN 'NOVIEMBRE' WHEN '12' THEN 'DICIEMBRE' 
		end  as resultado FROM `micro_tickets`
	
	inner join dependencias on dependencias.id = micro_tickets.areac_id
	where month(fecha_micro) = $mes and year(fecha_micro) = $periodo
	GROUP by descripcion_depen ORDER by descripcion_depen";

		return $this->read();
	}


		function totalrdetalladodesp($mes, $periodo){

			$this->_query= "SELECT micro_tickets.id, year(fecha_micro) as periodo, month(fecha_micro) as mes, COUNT(month(fecha_micro)) AS total 
			FROM `micro_tickets`	
				INNER JOIN dependencias on dependencias.id = micro_tickets.areac_id
				where month(fecha_micro) = $mes and year(fecha_micro) = $periodo";

			return $this->Read();
		}

	

// FIN DE LOS REPORTES POR DESPACHO DEL AREA DE SOPORTE DE EQUIPOS TECNOLOGICOS

// REPORTES POR TECNICO Y ANALISTA DEL AREA DE  TECNOLOGICOS


		function reequiposreparar ($periodo){

			$this->_query="SELECT id, year(fecha_micro) AS periodo, month(fecha_micro) AS mes, COUNT(month(fecha_micro)) as total, status_equipo_id, 
		CASE month(fecha_micro) WHEN '01' THEN 'Enero' WHEN '02' THEN 'Febrero' 
								WHEN '03' THEN 'Marzo' WHEN '04' THEN 'Abril' 
								WHEN '05' THEN 'Mayo' WHEN '06' THEN 'Junio' 
								WHEN '07' THEN 'Julio' WHEN '08' THEN 'Agosto' 
								WHEN '09' THEN 'Septiembre' WHEN '10' THEN 'Octubre' 
								WHEN '11' THEN 'Noviembre' WHEN '12' THEN 'Diciembre' 
		end  as resultado FROM `micro_tickets` 
		where year(fecha_micro) = $periodo and status_equipo_id = 163
	 	GROUP BY  month(fecha_micro) ORDER by month(fecha_micro) ASC";

			return $this->Read();
		}

		function reequiposreparados ($periodo){

			$this->_query="SELECT id, year(fecha_micro) AS periodo, month(fecha_micro) AS mes, COUNT(month(fecha_micro)) as total, status_equipo_id,
		CASE month(fecha_micro) WHEN '01' THEN 'Enero' WHEN '02' THEN 'Febrero' 
								WHEN '03' THEN 'Marzo' WHEN '04' THEN 'Abril' 
								WHEN '05' THEN 'Mayo' WHEN '06' THEN 'Junio' 
								WHEN '07' THEN 'Julio' WHEN '08' THEN 'Agosto' 
								WHEN '09' THEN 'Septiembre' WHEN '10' THEN 'Octubre' 
								WHEN '11' THEN 'Noviembre' WHEN '12' THEN 'Diciembre' 
		end  as resultado FROM `micro_tickets` 
		where year(fecha_micro) = $periodo and status_equipo_id = 164
	 	GROUP BY  month(fecha_micro) ORDER by month(fecha_micro) ASC";

			return $this->Read();
		}

		function reequiposretirados ($periodo){

			$this->_query="SELECT id, year(fecha_micro) AS periodo, month(fecha_micro) AS mes, COUNT(month(fecha_micro)) as total, status_equipo_id, 
		CASE month(fecha_micro) WHEN '01' THEN 'Enero' WHEN '02' THEN 'Febrero' 
								WHEN '03' THEN 'Marzo' WHEN '04' THEN 'Abril' 
								WHEN '05' THEN 'Mayo' WHEN '06' THEN 'Junio' 
								WHEN '07' THEN 'Julio' WHEN '08' THEN 'Agosto' 
								WHEN '09' THEN 'Septiembre' WHEN '10' THEN 'Octubre' 
								WHEN '11' THEN 'Noviembre' WHEN '12' THEN 'Diciembre' 
		end  as resultado FROM `micro_tickets` 
		where year(fecha_micro) = $periodo and status_equipo_id = 165
	 	GROUP BY  month(fecha_micro) ORDER by month(fecha_micro) ASC";

			return $this->Read();
		}

		function pdfreportedetallado($mes, $periodo, $status){

			$this->_query= "SELECT micro_tickets.id, persona_t_id, count(persona_t_id), credencial, CONCAT(nombre_1, ' ', apellido_1) as tecnico,  ref_status_equipo.referencia as st_equipo, year(fecha_micro) as periodo, month(fecha_micro) as mes, COUNT(month(fecha_micro)) AS total , 
	CASE month(fecha_micro)WHEN '01' THEN 'ENERO' WHEN '02' THEN 'FEBRERO' 
								WHEN '03' THEN 'MARZO' WHEN '04' THEN 'ABRIL' 
								WHEN '05' THEN 'MAYO' WHEN '06' THEN 'JUNIO' 
								WHEN '07' THEN 'JULIO' WHEN '08' THEN 'AGOSTO' 
								WHEN '09' THEN 'SEPTIEMBRE' WHEN '10' THEN 'OCTUBRE' 
								WHEN '11' THEN 'NOVIEMBRE' WHEN '12' THEN 'DICIEMBRE' 
	end  as resultado FROM `micro_tecnico`
    inner join usuario on usuario.id = micro_tecnico.persona_t_id
    inner join persona on persona.id = usuario.persona_id
	inner join micro_tickets on micro_tickets.id = micro_tecnico.micro_tickets_idmt
    inner join referencia as ref_status_equipo on ref_status_equipo.id = status_equipo_id
	inner join dependencias on dependencias.id = micro_tickets.areac_id
	where month(fecha_micro) = $mes and year(fecha_micro) = $periodo and status_equipo_id = $status
	GROUP by nombre_1 ORDER by nombre_1";

			return $this->Read();

		}

			function pdftotaltec($mes, $periodo, $status){

			$this->_query= "SELECT micro_tickets.id, ref_status_equipo.referencia as st, year(fecha_micro) as periodo, month(fecha_micro) as mes, COUNT(month(fecha_micro)) AS total , 
	CASE month(fecha_micro)WHEN '01' THEN 'ENERO' WHEN '02' THEN 'FEBRERO' 
								WHEN '03' THEN 'MARZO' WHEN '04' THEN 'ABRIL' 
								WHEN '05' THEN 'MAYO' WHEN '06' THEN 'JUNIO' 
								WHEN '07' THEN 'JULIO' WHEN '08' THEN 'AGOSTO' 
								WHEN '09' THEN 'SEPTIEMBRE' WHEN '10' THEN 'OCTUBRE' 
								WHEN '11' THEN 'NOVIEMBRE' WHEN '12' THEN 'DICIEMBRE' 
	end  as resultado FROM `micro_tecnico`
    inner join usuario on usuario.id = micro_tecnico.persona_t_id
    inner join persona on persona.id = usuario.persona_id
	inner join micro_tickets on micro_tickets.id = micro_tecnico.micro_tickets_idmt
    inner join referencia as ref_status_equipo on ref_status_equipo.id = status_equipo_id
	inner join dependencias on dependencias.id = micro_tickets.areac_id
	where month(fecha_micro) = $mes and year(fecha_micro) = $periodo and status_equipo_id = $status";

			return $this->Read();

		}

// FIN DE LOS REPORTES POR ANALISTA Y TECNICO DEL AREA DE SOPORTE TECNICO




// REPORTES POR TIPOS DE EQUIPO EN EL AREA DE SOPORTE TECNICO


	function reportes_aset_tipo_eq(){

	$this->_query= "SELECT id, year(fecha_micro) AS periodo, COUNT(year(fecha_micro)) as total FROM `micro_tickets`
 					GROUP BY  year(fecha_micro) ORDER by year(fecha_micro) ASC";
 	return $this->read();
	}

function reportes_aset_tipo_eq_p_mes($periodo){

	$this->_query= "SELECT id, year(fecha_micro) AS periodo, month(fecha_micro) AS mes, COUNT(month(fecha_micro)) as total, 
		CASE month(fecha_micro) WHEN '01' THEN 'Enero' WHEN '02' THEN 'Febrero' 
								WHEN '03' THEN 'Marzo' WHEN '04' THEN 'Abril' 
								WHEN '05' THEN 'Mayo' WHEN '06' THEN 'Junio' 
								WHEN '07' THEN 'Julio' WHEN '08' THEN 'Agosto' 
								WHEN '09' THEN 'Septiembre' WHEN '10' THEN 'Octubre' 
								WHEN '11' THEN 'Noviembre' WHEN '12' THEN 'Diciembre' 
		end  as resultado FROM `micro_tickets` 
		where year(fecha_micro) = $periodo
	 	GROUP BY  month(fecha_micro) ORDER by month(fecha_micro) ASC";

	return $this->read();

}

function reportes_aset_tipo_eq_detallado($mes, $periodo){

	$this->_query= "SELECT micro_tickets.id, ref_tipo_de_eq.referencia as tipo_de_eq, year(fecha_micro) as periodo, month(fecha_micro) as mes, COUNT(month(fecha_micro)) AS total ,CASE month(fecha_micro)WHEN '01' THEN 'ENERO' WHEN '02' THEN 'FEBRERO' 
								WHEN '03' THEN 'MARZO' WHEN '04' THEN 'ABRIL' 
								WHEN '05' THEN 'MAYO' WHEN '06' THEN 'JUNIO' 
								WHEN '07' THEN 'JULIO' WHEN '08' THEN 'AGOSTO' 
								WHEN '09' THEN 'SEPTIEMBRE' WHEN '10' THEN 'OCTUBRE' 
								WHEN '11' THEN 'NOVIEMBRE' WHEN '12' THEN 'DICIEMBRE' 
		end  as resultado FROM `micro_tickets`
	
	inner join referencia as ref_tipo_de_eq on ref_tipo_de_eq.id = tipo_equipo_id
	where month(fecha_micro) = $mes and year(fecha_micro) = $periodo
	GROUP by tipo_de_eq ORDER by tipo_de_eq";

	return $this->read();

}

function r_total_eq_detallado($mes, $periodo){

	$this->_query="SELECT micro_tickets.id, year(fecha_micro) as periodo, month(fecha_micro) as mes, COUNT(month(fecha_micro)) AS total 
			FROM `micro_tickets`	
			where month(fecha_micro) = $mes and year(fecha_micro) = $periodo";

	return $this->read();
}

// FIN REPORTES POR TIPOS DE EQUIPOS EN EL AREA DE SOPORTE TECNICO


	function r_aserv_periodo(){

	$this->_query= "SELECT id, year(fecha_inicio) AS periodo, COUNT(year(fecha_inicio)) as total FROM `soporte`
 					GROUP BY  year(fecha_inicio) ORDER by year(fecha_inicio) ASC";
 	return $this->read();
	}

// REPORTES POR DESPACHO EN EL AREA DE SERVICIO

	function r_aserv_p_d_mes($periodo){

		$this->_query= "SELECT id, year(fecha_inicio) AS periodo, month(fecha_inicio) AS mes, COUNT(month(fecha_inicio)) as total, 
		CASE month(fecha_inicio) WHEN '01' THEN 'Enero' WHEN '02' THEN 'Febrero' 
								WHEN '03' THEN 'Marzo' WHEN '04' THEN 'Abril' 
								WHEN '05' THEN 'Mayo' WHEN '06' THEN 'Junio' 
								WHEN '07' THEN 'Julio' WHEN '08' THEN 'Agosto' 
								WHEN '09' THEN 'Septiembre' WHEN '10' THEN 'Octubre' 
								WHEN '11' THEN 'Noviembre' WHEN '12' THEN 'Diciembre' 
		end  as resultado FROM `soporte` 
		where year(fecha_inicio) = $periodo
	 	GROUP BY  month(fecha_inicio) ORDER by month(fecha_inicio) ASC";

		return $this->read();
	}

	function reportes_detallado_p_despacho($mes, $periodo){
	
	$this->_query= "SELECT soporte.id, descripcion_depen, year(fecha_inicio) as periodo, month(fecha_inicio) as mes, COUNT(month(fecha_inicio)) AS total ,CASE month(fecha_inicio)WHEN '01' THEN 'ENERO' WHEN '02' THEN 'FEBRERO' 
								WHEN '03' THEN 'MARZO' WHEN '04' THEN 'ABRIL' 
								WHEN '05' THEN 'MAYO' WHEN '06' THEN 'JUNIO' 
								WHEN '07' THEN 'JULIO' WHEN '08' THEN 'AGOSTO' 
								WHEN '09' THEN 'SEPTIEMBRE' WHEN '10' THEN 'OCTUBRE' 
								WHEN '11' THEN 'NOVIEMBRE' WHEN '12' THEN 'DICIEMBRE' 
		end  as resultado FROM `soporte`
	
	inner join dependencias on dependencias.id = soporte.areac_id
	where month(fecha_inicio) = $mes and year(fecha_inicio) = $periodo
	GROUP by descripcion_depen ORDER by descripcion_depen";

		return $this->read();
	}

	function total_reportes_detallado_p_desp($mes, $periodo){

			$this->_query= "SELECT soporte.id, year(fecha_inicio) as periodo, month(fecha_inicio) as mes, COUNT(month(fecha_inicio)) AS total 
			FROM `soporte`	
				INNER JOIN dependencias on dependencias.id = soporte.areac_id
				where month(fecha_inicio) = $mes and year(fecha_inicio) = $periodo";

			return $this->Read();
		}	

// FIN DE LOS REPORTES POR DESPACHO EN EL AREA DE SERVICIO

//REPORTES POR TECNICO EN EL AREA DE SERVICIO

		function reportes_tecnico_caso_abierto ($periodo){

			$this->_query="SELECT id, year(fecha_inicio) AS periodo, month(fecha_inicio) AS mes, COUNT(month(fecha_inicio)) as total, status_del_caso_id, 
		CASE month(fecha_inicio) WHEN '01' THEN 'Enero' WHEN '02' THEN 'Febrero' 
								WHEN '03' THEN 'Marzo' WHEN '04' THEN 'Abril' 
								WHEN '05' THEN 'Mayo' WHEN '06' THEN 'Junio' 
								WHEN '07' THEN 'Julio' WHEN '08' THEN 'Agosto' 
								WHEN '09' THEN 'Septiembre' WHEN '10' THEN 'Octubre' 
								WHEN '11' THEN 'Noviembre' WHEN '12' THEN 'Diciembre' 
		end  as resultado FROM `soporte` 
		where year(fecha_inicio) = $periodo and status_del_caso_id = 167
	 	GROUP BY  month(fecha_inicio) ORDER by month(fecha_inicio) ASC";

			return $this->Read();
		}

		function reportes_tecnico_caso_cerrado ($periodo){

			$this->_query="SELECT id, year(fecha_inicio) AS periodo, month(fecha_inicio) AS mes, COUNT(month(fecha_inicio)) as total, status_del_caso_id, 
		CASE month(fecha_inicio) WHEN '01' THEN 'Enero' WHEN '02' THEN 'Febrero' 
								WHEN '03' THEN 'Marzo' WHEN '04' THEN 'Abril' 
								WHEN '05' THEN 'Mayo' WHEN '06' THEN 'Junio' 
								WHEN '07' THEN 'Julio' WHEN '08' THEN 'Agosto' 
								WHEN '09' THEN 'Septiembre' WHEN '10' THEN 'Octubre' 
								WHEN '11' THEN 'Noviembre' WHEN '12' THEN 'Diciembre' 
		end  as resultado FROM `soporte` 
		where year(fecha_inicio) = $periodo and status_del_caso_id = 168
	 	GROUP BY  month(fecha_inicio) ORDER by month(fecha_inicio) ASC";

			return $this->Read();
		}

		function reporte_aserv_detallado_tecnico($mes, $periodo, $status){

			$this->_query= "SELECT soporte.id, persona_sp_id, count(persona_sp_id), credencial, CONCAT(nombre_1, ' ', apellido_1) as tecnico,  ref_status_caso.referencia as st_caso, year(fecha_inicio) as periodo, month(fecha_inicio) as mes, COUNT(month(fecha_inicio)) AS total , 
	CASE month(fecha_inicio)WHEN '01' THEN 'ENERO' WHEN '02' THEN 'FEBRERO' 
								WHEN '03' THEN 'MARZO' WHEN '04' THEN 'ABRIL' 
								WHEN '05' THEN 'MAYO' WHEN '06' THEN 'JUNIO' 
								WHEN '07' THEN 'JULIO' WHEN '08' THEN 'AGOSTO' 
								WHEN '09' THEN 'SEPTIEMBRE' WHEN '10' THEN 'OCTUBRE' 
								WHEN '11' THEN 'NOVIEMBRE' WHEN '12' THEN 'DICIEMBRE' 
	end  as resultado FROM `soporte_tecnico`
    inner join usuario on usuario.id = soporte_tecnico.persona_sp_id   
    inner join persona on persona.id = usuario.persona_id
	inner join soporte on soporte.id = soporte_tecnico.soporte_id
    inner join referencia as ref_status_caso on ref_status_caso.id = status_del_caso_id
	inner join dependencias on dependencias.id = soporte.areac_id
	where month(fecha_inicio) = $mes and year(fecha_inicio) = $periodo and status_del_caso_id = $status
	GROUP by nombre_1 ORDER by nombre_1";

			return $this->Read();

		}

		function total_reporte_aserv_detallado_tecnico($mes, $periodo, $status){

			$this->_query= "SELECT soporte.id, ref_status_caso.referencia as st, year(fecha_inicio) as periodo, month(fecha_inicio) as mes, COUNT(month(fecha_inicio)) AS total , 
	CASE month(fecha_inicio)WHEN '01' THEN 'ENERO' WHEN '02' THEN 'FEBRERO' 
								WHEN '03' THEN 'MARZO' WHEN '04' THEN 'ABRIL' 
								WHEN '05' THEN 'MAYO' WHEN '06' THEN 'JUNIO' 
								WHEN '07' THEN 'JULIO' WHEN '08' THEN 'AGOSTO' 
								WHEN '09' THEN 'SEPTIEMBRE' WHEN '10' THEN 'OCTUBRE' 
								WHEN '11' THEN 'NOVIEMBRE' WHEN '12' THEN 'DICIEMBRE' 
	end  as resultado FROM `soporte_tecnico`
    inner join usuario on usuario.id = soporte_tecnico.persona_sp_id   
    inner join persona on persona.id = usuario.persona_id
	inner join soporte on soporte.id = soporte_tecnico.soporte_id
    inner join referencia as ref_status_caso on ref_status_caso.id = status_del_caso_id
	inner join dependencias on dependencias.id = soporte.areac_id
	where month(fecha_inicio) = $mes and year(fecha_inicio) = $periodo and status_del_caso_id = $status";

			return $this->Read();

		}				

// FIN DEL REPORTES POR TECNICO EN EL AREA DE SERVICIO		

// REPORTES POR TIPO DE REQUERIMIENTO

function reportes_aserv_tipo_req(){

	$this->_query="SELECT id, year(fecha_inicio) AS periodo, COUNT(year(fecha_inicio)) as total FROM `soporte`
 					GROUP BY  year(fecha_inicio) ORDER by year(fecha_inicio) ASC";

	return $this->Read();

}


function reportes_aserv_tipo_req_p_mes($periodo){

	$this->_query="SELECT id, year(fecha_inicio) AS periodo, month(fecha_inicio) AS mes, COUNT(month(fecha_inicio)) as total, 
		CASE month(fecha_inicio) WHEN '01' THEN 'Enero' WHEN '02' THEN 'Febrero' 
								WHEN '03' THEN 'Marzo' WHEN '04' THEN 'Abril' 
								WHEN '05' THEN 'Mayo' WHEN '06' THEN 'Junio' 
								WHEN '07' THEN 'Julio' WHEN '08' THEN 'Agosto' 
								WHEN '09' THEN 'Septiembre' WHEN '10' THEN 'Octubre' 
								WHEN '11' THEN 'Noviembre' WHEN '12' THEN 'Diciembre' 
		end  as resultado FROM `soporte` 
		where year(fecha_inicio) = $periodo
	 	GROUP BY  month(fecha_inicio) ORDER by month(fecha_inicio) ASC";

	return $this->Read();

}


function reportes_aserv_tipo_req_detallado($mes, $periodo){

	$this->_query="SELECT soporte.id, ref_tipo_req.referencia as tipo_req, year(fecha_inicio) as periodo, month(fecha_inicio) as mes, COUNT(month(fecha_inicio)) AS total ,CASE month(fecha_inicio)WHEN '01' THEN 'ENERO' WHEN '02' THEN 'FEBRERO' 
								WHEN '03' THEN 'MARZO' WHEN '04' THEN 'ABRIL' 
								WHEN '05' THEN 'MAYO' WHEN '06' THEN 'JUNIO' 
								WHEN '07' THEN 'JULIO' WHEN '08' THEN 'AGOSTO' 
								WHEN '09' THEN 'SEPTIEMBRE' WHEN '10' THEN 'OCTUBRE' 
								WHEN '11' THEN 'NOVIEMBRE' WHEN '12' THEN 'DICIEMBRE' 
		end  as resultado FROM `soporte`
	
	inner join referencia as ref_tipo_req on ref_tipo_req.id = tipo_de_rt_id
	where month(fecha_inicio) = $mes and year(fecha_inicio) = $periodo
	GROUP by tipo_req ORDER by tipo_req";

	return $this->Read();

}

function r_total_req_detallado($mes, $periodo){

	$this->_query="SELECT soporte.id, year(fecha_inicio) as periodo, month(fecha_inicio) as mes, COUNT(month(fecha_inicio)) AS total 
			FROM `soporte`	
		where month(fecha_inicio) = $mes and year(fecha_inicio) = $periodo";

	return $this->Read();

}

// FIN REPORTES POR TIPO DE REQUERIMIENTO		

}?>