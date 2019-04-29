<?php 

	class requerimientosModel extends Model{
		
		
		
		public function __construct(){
			parent::__construct();
		}
		public function __destruct(){
			;
		}

		function insertRequerimiento($requerimiento, $requerimiento_has_persona, $log_insert_requerimiento, $requerimientos_supervisor){
try {
		$this->_db->beginTransaction();

		$session=Session::get('persona_id');

		$this->_query="INSERT INTO `requerimiento`(`cod_area_id`, `numero_tel_requerimiento`, `areac_id`,  `tipo_de_solicitud_id`, `numero`, `fecha_documento`, `tipo_de_requerimiento_id`, `status_id`, `descripcion`, `Modulo_id`) VALUES

		(:cod_area ,:numero_tel_requerimiento , :areac, :tipo_de_solicitud, :numero, :fecha_documento, :tipo_de_requerimiento, :status, :descripcion,  :Modulo)";
		$this->_db->prepare($this->_query)->execute($requerimiento);
		$requerimientoid = $this->_db->lastinsertid('requerimiento');

		$this->_query=" INSERT INTO `requerimiento_has_persona`(`requerimiento_id`,`persona_id`) VALUES		
		($requerimientoid, :persona)";		
		$this->_db->prepare($this->_query)->execute($requerimiento_has_persona);		

		$this->_query=" INSERT INTO `log_insert_requerimiento`(`usuario_id`, `requerimiento_id`) VALUES		
		($session, $requerimientoid)";		
		$this->_db->prepare($this->_query)->execute($log_insert_requerimiento);

		$this->_query=" INSERT INTO `requerimientos_supervisor`(`requerimiento_id`) VALUES		
		($requerimientoid)";		
		$this->_db->prepare($this->_query)->execute();		

		$this->_db->commit();		
} catch (Exception $e) {
		$this->_db->rollBack();
		echo "Error :: ".$e->getMessage();
		exit();
}
		}

		
		function insertRequerimiento_js($requerimiento, $requerimientos_supervisor, $requerimiento_has_persona, $log_insert_requerimiento){

try {

		$this->_db->beginTransaction();

		$session=Session::get('persona_id');



		$this->_query="INSERT INTO `requerimiento`(`cod_area_id`, `numero_tel_requerimiento`, `areac_id`,  `tipo_de_solicitud_id`, `numero`, `fecha_documento`, `tipo_de_requerimiento_id`, `status_id`, `descripcion`, `Modulo_id`) VALUES

		(:cod_area ,:numero_tel_requerimiento , :areac, :tipo_de_solicitud, :numero, :fecha_documento, :tipo_de_requerimiento, :status, :descripcion,  :Modulo)";
		$this->_db->prepare($this->_query)->execute($requerimiento);
		$requerimientoid = $this->_db->lastinsertid('requerimiento');

		$this->_query=" INSERT INTO `requerimientos_supervisor`(`persona_s_id`, `requerimiento_id`) VALUES		
		(:persona_s, $requerimientoid)";		
		$this->_db->prepare($this->_query)->execute($requerimientos_supervisor);
	
		$this->_query=" INSERT INTO `requerimiento_has_persona`(`requerimiento_id`,`persona_id`) VALUES		
		($requerimientoid, :persona)";		
		$this->_db->prepare($this->_query)->execute($requerimiento_has_persona);

		$this->_query=" INSERT INTO `log_insert_requerimiento`(requerimiento_id, usuario_id) VALUES		
		($requerimientoid , $session)";		
		$this->_db->prepare($this->_query)->execute($log_insert_requerimiento);



		$this->_db->commit();		
} catch (Exception $e) {
		$this->_db->rollBack();
		echo "Error :: ".$e->getMessage();
		exit();
}
		}			

		function insert($persona, $requerimiento, $requerimientos_supervisor, $requerimiento_has_persona, $log_insert_requerimiento){

		$session=Session::get('persona_id');

try {

		$this->_db->beginTransaction();
		
			$this->_query="INSERT INTO `persona`(`cedula`, `credencial`, `nombre_1`, `nombre_2`, `apellido_1`, `apellido_2`, 
			`correo`, `cargo`, `jerarquia_id`) VALUES

			(:cedula,:credencial, :nombre_1, :nombre_2, :apellido_1, :apellido_2,
			 :correo, :cargo, :jerarquia)";		
		$this->_db->prepare($this->_query)->execute($persona);
		$personaid = $this->_db->lastinsertid('persona');

		
		$this->_query="INSERT INTO `requerimiento`(`cod_area_id`, `numero_tel_requerimiento`, `areac_id`,  `tipo_de_solicitud_id`, `numero`, `fecha_documento`, `tipo_de_requerimiento_id`, `status_id`, `descripcion`,  `Modulo_id`) VALUES

		(:cod_area ,:numero_tel_requerimiento , :areac, :tipo_de_solicitud, :numero, :fecha_documento, :tipo_de_requerimiento, :status, :descripcion, :Modulo)";
		$this->_db->prepare($this->_query)->execute($requerimiento);
		$requerimientoid = $this->_db->lastinsertid('requerimiento');

		$this->_query=" INSERT INTO `requerimientos_supervisor`(`requerimiento_id`) VALUES		
		($requerimientoid)";		
		$this->_db->prepare($this->_query)->execute();

		$this->_query=" INSERT INTO `requerimiento_has_persona`(`persona_id`, `requerimiento_id`) VALUES		
		($personaid, $requerimientoid)";		
		$this->_db->prepare($this->_query)->execute();


		$this->_query=" INSERT INTO `log_insert_requerimiento`(`usuario_id`, `requerimiento_id`) VALUES		
		($session, $requerimientoid)";		
		$this->_db->prepare($this->_query)->execute();		

		

		$this->_db->commit();		
} catch (Exception $e) {
		$this->_db->rollBack();
		echo "Error :: ".$e->getMessage();
		exit();
}		

	}		

		function insert_js($persona, $requerimiento, $requerimientos_supervisor, $requerimiento_has_persona, $log_insert_requerimiento){

		$session=Session::get('persona_id');

try {

		$this->_db->beginTransaction();
			$this->_query="INSERT INTO `persona`(`cedula`, `credencial`, `nombre_1`, `nombre_2`, `apellido_1`, `apellido_2`, 
			`correo`, `cargo`, `jerarquia_id`) VALUES

			(:cedula,:credencial, :nombre_1, :nombre_2, :apellido_1, :apellido_2, :correo, :cargo, :jerarquia)";	
		$this->_db->prepare($this->_query)->execute($persona);
		$personaid = $this->_db->lastinsertid('persona');
		
		$this->_query="INSERT INTO `requerimiento`(`cod_area_id`, `numero_tel_requerimiento`, `areac_id`,  `tipo_de_solicitud_id`, `numero`, `fecha_documento`, `tipo_de_requerimiento_id`, `status_id`, `descripcion`, `solucion`, `observaciones`, `Modulo_id`) VALUES

		(:cod_area ,:numero_tel_requerimiento , :areac, :tipo_de_solicitud, :numero, :fecha_documento, :tipo_de_requerimiento, :status, :descripcion, :solucion, :observaciones, :Modulo)";
		$this->_db->prepare($this->_query)->execute($requerimiento);
		$requerimientoid = $this->_db->lastinsertid('requerimiento');

		$this->_query=" INSERT INTO `requerimiento_has_persona`(`persona_id`, `requerimiento_id`) VALUES		
		($personaid, $requerimientoid)";		
		$this->_db->prepare($this->_query)->execute();

		$this->_query=" INSERT INTO `log_insert_requerimiento`(`usuario_id`, `requerimiento_id`) VALUES		
		($session, $requerimientoid)";		
		$this->_db->prepare($this->_query)->execute();

		$this->_query=" INSERT INTO `requerimientos_supervisor`(`persona_s_id`, `requerimiento_id`) VALUES		
		(:persona_s, $requerimientoid)";		
		$this->_db->prepare($this->_query)->execute($requerimientos_supervisor);	

		

		$this->_db->commit();		
} catch (Exception $e) {
		$this->_db->rollBack();
		echo "Error :: ".$e->getMessage();
		exit();
}		

	}

function insert_log_update_requerimiento($log_update_requerimiento){
	$session=Session::get('persona_id');
	try {

		$this->_db->beginTransaction();		
		$this->_query="INSERT INTO `log_update_requerimiento`(`persona_id`, `requerimiento_id`, `numero` ) VALUES 
		($session, :requerimiento_id, :numero)";		
		$this->_db->prepare($this->_query)->execute($log_update_requerimiento);

		
			$this->_db->commit();		
	} catch (Exception $e) {
			$this->_db->rollBack();
			echo "Error :: ".$e->getMessage();
			exit();
		}		

}		
	

		function listarrequerimientos(){

			$session=Session::get('persona_id');

			$this->_query= "SELECT CONCAT( REPEAT( '0', 4 - LENGTH(r.id) ) , r.id) as id, CONCAT( 'ND-', (numero)) as numero, us.persona_id, p_s.credencial, CONCAT(p_s.nombre_1, ' ', p_s.apellido_1) as solicitante, CONCAT(p_su.nombre_1, ' ', p_su.apellido_1) as supervisor, hora, ref_solicitud.referencia as 'tipo de solicitud', fecha_documento, fecha_culm, ref_requerimiento.referencia as 'tipo de requerimiento', ref_status.referencia as 'status', descripcion_depen FROM requerimiento as r
				inner join referencia as ref_solicitud on ref_solicitud.id = tipo_de_solicitud_id
				inner join referencia as ref_requerimiento on ref_requerimiento.id = tipo_de_requerimiento_id
				inner join referencia as ref_status on ref_status.id = status_id
				inner join dependencias on dependencias.id = r.areac_id
                
                inner join requerimiento_has_persona as r_t on r_t.requerimiento_id = r.id
                inner join persona as p_s on p_s.id = r_T.persona_id
                
                left join requerimientos_supervisor as r_s on r_s.requerimiento_id = r.id
                left join usuario as us_s on us_s.id = r_s.persona_s_id
                LEFT JOIN persona as p_su on p_su.id = us_s.persona_id
                
				inner join log_insert_requerimiento as r_a on r_a.requerimiento_id = r.id
                inner join usuario as us on us.id = r_a.usuario_id
                inner join persona as p_a on p_a.id = us.persona_id

				where r_s.persona_s_id = $session";
			return $this->Read();
		}

		function totalrequeri(){

			$this->_query= "SELECT CONCAT( REPEAT( '0', 4 - LENGTH(r.id) ) , r.id) as id, CONCAT( 'ND-', (numero)) as numero,  hora, ref_solicitud.referencia as 'tipo de solicitud', CONCAT(p_s.nombre_1, ' ', p_s.apellido_1) as solicitante, CONCAT(p_a.nombre_1, ' ', p_a.apellido_1) as analista, CONCAT(p_su.nombre_1, ' ', p_su.apellido_1) as supervisor, hora, fecha_documento, fecha_culm, ref_requerimiento.referencia as 'tipo de requerimiento', ref_status.referencia as 'status', descripcion_depen FROM requerimiento as r

				inner join referencia as ref_solicitud on ref_solicitud.id = tipo_de_solicitud_id
				inner join referencia as ref_requerimiento on ref_requerimiento.id = tipo_de_requerimiento_id
				inner join referencia as ref_status on ref_status.id = status_id
				inner join dependencias on dependencias.id = r.areac_id

                inner join requerimiento_has_persona as r_t on r_t.requerimiento_id = r.id
                inner join persona as p_s on p_s.id = r_T.persona_id
                
                left join requerimientos_supervisor as r_s on r_s.requerimiento_id = r.id
                left join usuario as us_s on us_s.id = r_s.persona_s_id
                LEFT JOIN persona as p_su on p_su.id = us_s.persona_id

				inner join log_insert_requerimiento as r_a on r_a.requerimiento_id = r.id
                inner join usuario as us on us.id = r_a.usuario_id
                inner join persona as p_a on p_a.id = us.persona_id
				
				                

                ";

			return $this->Read();
		}		

		function getFuncionarios(){

			$this->_query="SELECT persona.id, cedula, credencial, nombre_1,apellido_1 FROM persona" ;
			return $this->Read();

		}

		function REGperson($id){

			$this->_query= " SELECT persona.id, cedula, credencial, nombre_1, nombre_2, apellido_1, apellido_2, correo, cargo, ref_jerarquia.referencia as 'jerarquia' FROM persona
							Inner join referencia as ref_jerarquia on ref_jerarquia.id = jerarquia_id
							
							where persona.id = $id";

			return $this->Read();
		}


		// function getRequerimiento($id){

		// $this->_query="SELECT requerimiento.id, Modulo_id as mi, tipo_de_solicitud_id as tps, tipo_de_requerimiento_id as tpr, cod_area_id as ca, status_id as st, ref_cod.referencia as 'cod_area', numero_tel_requerimiento, cedula, credencial, nombre_1, nombre_2, apellido_1, apellido_2, correo, cargo, ref_jerarquia.referencia as 'jerarquia', descripcion_depen, hora, ref_solicitud.referencia as 'tipo de solicitud', numero, fecha_documento, fecha_culm, ref_requerimiento.referencia as 'tipo de requerimiento', ref_status.referencia as 'status', descripcion, solucion, observaciones, padre.descripcion_sistema padre_sistema, sistemas.descripcion_sistema modulo FROM requerimiento 

		// 	inner join sistemas on sistemas.id = requerimiento.Modulo_id
		// 	INNER JOIN sistemas padre on sistemas.padre_id = padre.id
		// 	inner join referencia as ref_solicitud on ref_solicitud.id = tipo_de_solicitud_id	
  //           inner join referencia as ref_requerimiento on ref_requerimiento.id = tipo_de_requerimiento_id
  //           inner join referencia as ref_cod on ref_cod.id = cod_area_id
  //           inner join referencia as ref_status on ref_status.id = status_id            
  //           inner join requerimiento_has_persona on requerimiento_has_persona.requerimiento_id = requerimiento.id
		// 	inner join persona on persona.id = requerimiento_has_persona.persona_id            
  //           Inner join referencia as ref_jerarquia on ref_jerarquia.id = jerarquia_id
		// 	inner join dependencias on dependencias.id = requerimiento.areac_id
		// 	where requerimiento.id = $id";
			
		// 	return $this->Read();
		// }


		function getRequerimiento($id){

		$this->_query="	SELECT requerimiento.id, dependencias.padre_id as pdi, abuelo.id as abid, requerimiento.areac_id as arcid, cod_area_id as ca,  Modulo_id as mi, tipo_de_solicitud_id as tps, tipo_de_requerimiento_id as tpr,  status_id as st, ref_cod.referencia as 'cod_area', numero_tel_requerimiento, cedula, credencial, nombre_1, nombre_2, apellido_1, apellido_2, correo, cargo, ref_jerarquia.referencia as 'jerarquia', hora, ref_solicitud.referencia as 'tipo de solicitud', numero, fecha_documento, fecha_culm, ref_requerimiento.referencia as 'tipo de requerimiento', ref_status.referencia as 'status', descripcion, solucion, observaciones, abuelo.descripcion_depen padre_padre, padre.descripcion_depen padre_despacho, dependencias.descripcion_depen areac,padre_sistema.descripcion_sistema padre_sistema, sistemas.descripcion_sistema modulo FROM requerimiento 

			inner join sistemas on sistemas.id = requerimiento.Modulo_id
			INNER JOIN sistemas padre_sistema on sistemas.padre_sistema_id = padre_sistema.id
            
			left join dependencias on dependencias.id = requerimiento.areac_id
			left join dependencias padre on dependencias.padre_id = padre.id
			left join dependencias abuelo on padre.padre_id = abuelo.id
			
			inner join referencia as ref_solicitud on ref_solicitud.id = tipo_de_solicitud_id	
            inner join referencia as ref_requerimiento on ref_requerimiento.id = tipo_de_requerimiento_id
            inner join referencia as ref_cod on ref_cod.id = cod_area_id
            inner join referencia as ref_status on ref_status.id = status_id            
            inner join requerimiento_has_persona on requerimiento_has_persona.requerimiento_id = requerimiento.id
			inner join persona on persona.id = requerimiento_has_persona.persona_id            
            Inner join referencia as ref_jerarquia on ref_jerarquia.id = jerarquia_id
			where requerimiento.id = $id";
			
			return $this->Read();
		}


		function requerimientoas($id){

		$this->_query="SELECT requerimientos_supervisor.id as id, requerimiento.id as rid, Modulo_id as mi, tipo_de_solicitud_id as tps, tipo_de_requerimiento_id as tpr, cod_area_id as ca, status_id as st, ref_cod.referencia as 'cod_area', numero_tel_requerimiento, cedula, credencial, nombre_1, nombre_2, apellido_1, apellido_2, correo, cargo, ref_jerarquia.referencia as 'jerarquia', descripcion_depen, hora, ref_solicitud.referencia as 'tipo de solicitud', numero, fecha_documento, fecha_culm, ref_requerimiento.referencia as 'tipo de requerimiento', ref_status.referencia as 'status', descripcion, solucion, observaciones, padre_sistema.descripcion_sistema padre_sistema, sistemas.descripcion_sistema modulo FROM requerimiento 

			inner join sistemas on sistemas.id = requerimiento.Modulo_id
			INNER JOIN sistemas padre_sistema on sistemas.padre_sistema_id = padre_sistema.id
			inner join referencia as ref_solicitud on ref_solicitud.id = tipo_de_solicitud_id	
            inner join referencia as ref_requerimiento on ref_requerimiento.id = tipo_de_requerimiento_id
            inner join referencia as ref_cod on ref_cod.id = cod_area_id
            inner join referencia as ref_status on ref_status.id = status_id 
            inner join requerimientos_supervisor on requerimientos_supervisor.requerimiento_id = requerimiento.id          
            inner join requerimiento_has_persona on requerimiento_has_persona.requerimiento_id = requerimiento.id
			inner join persona on persona.id = requerimiento_has_persona.persona_id            
            Inner join referencia as ref_jerarquia on ref_jerarquia.id = jerarquia_id
			inner join dependencias on dependencias.id = requerimiento.areac_id
			where requerimiento.id = $id";
			
			return $this->Read();
		}		

		function Reporte($id){

		$this->_query="SELECT r.id, p_s.cedula, p_s.credencial, p_su.credencial as credencial_supervisor, CONCAT(p_s.nombre_1, ' ', p_s.apellido_1) as solicitante, CONCAT(p_a.nombre_1, ' ', p_a.apellido_1) as analista, CONCAT(p_su.nombre_1, ' ', p_su.apellido_1) as supervisor, ref_cod.referencia as 'cod_area', numero_tel_requerimiento, p_s.correo, p_s.cargo, ref_jerarquia.referencia as 'jerarquia', descripcion_depen, hora, ref_solicitud.referencia as 'tipo de solicitud', numero, fecha_documento, fecha_culm, ref_requerimiento.referencia as 'tipo de requerimiento', ref_status.referencia as 'status', descripcion, solucion, observaciones, padre_sistema.descripcion_sistema padre_sistema, sistemas.descripcion_sistema modulo FROM requerimiento as r

			inner join sistemas on sistemas.id = r.Modulo_id
			INNER JOIN sistemas padre_sistema on sistemas.padre_sistema_id = padre_sistema.id

			inner join referencia as ref_solicitud on ref_solicitud.id = tipo_de_solicitud_id
            inner join referencia as ref_requerimiento on ref_requerimiento.id = tipo_de_requerimiento_id
            inner join referencia as ref_cod on ref_cod.id = cod_area_id
            inner join referencia as ref_status on ref_status.id = status_id 

            inner join requerimiento_has_persona as r_t on r_t.requerimiento_id = r.id
            inner join persona as p_s on p_s.id = r_T.persona_id
			inner join referencia as ref_jerarquia on ref_jerarquia.id = jerarquia_id
			inner join dependencias on dependencias.id = r.areac_id
            
                inner join requerimientos_supervisor as r_s on r_s.requerimiento_id = r.id
                inner join usuario as us_s on us_s.id = r_s.persona_s_id
                LEFT JOIN persona as p_su on p_su.id = us_s.persona_id

			inner join log_insert_requerimiento as r_a on r_a.requerimiento_id = r.id
            inner join usuario as us on us.id = r_a.usuario_id
            inner join persona as p_a on p_a.id = us.persona_id
			where r.id = $id";
			
			return $this->Read();
		}		

		function updateRequerimiento($requerimiento){

			$this->_query= "UPDATE requerimiento SET 

					cod_area_id				 = :cod_area,
					numero_tel_requerimiento = :numero_tel_requerimiento,
					areac_id				 = :areac,
					tipo_de_solicitud_id     = :tipo_de_solicitud,
					numero                   = :numero,
					fecha_documento          = :fecha_documento,
					fecha_culm				 = :fecha_culm,
					tipo_de_requerimiento_id = :tipo_de_requerimiento,
					status_id                = :status,
					descripcion              = :descripcion,
					solucion                 = :solucion,
					observaciones            = :observaciones,
					Modulo_id                = :Modulo
					where requerimiento.id = :id";
		try {
				$this->_db->beginTransaction();
				$this->_db->prepare($this->_query)->execute($requerimiento);				
				$this->_db->commit();
				

			} catch (Exception $e) {
				$this->_db->rollBack();
				echo "Error :: ".$e->getMessage();
				exit();
			}
		}

		function updateasr($requerimientos_supervisor){

			$this->_query= "UPDATE requerimientos_supervisor SET 

					persona_s_id = :persona_s

					where requerimientos_supervisor.id = :id";
		try {
				$this->_db->beginTransaction();
				$this->_db->prepare($this->_query)->execute($requerimientos_supervisor);				
				$this->_db->commit();
				

			} catch (Exception $e) {
				$this->_db->rollBack();
				echo "Error :: ".$e->getMessage();
				exit();
			}
		}


		function deleterequerimientos($id){

			$this->_query= "DELETE FROM requerimiento where id = $id";

			try {
				$this->_db->beginTransaction();
				$this->_db->prepare($this->_query)->execute($array);

				$this->_db->commit();
				return $id;
			} catch (Exception $e) {
				$this->_db->rollBack();
				echo "Error :: ".$e->getMessage();
				exit();
			}
		}	

}?>