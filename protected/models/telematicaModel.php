<?php 

	class telematicaModel extends Model{
		
		
		
		public function __construct(){
			parent::__construct();
		}
		public function __destruct(){
			;
		}


		function insert($persona, $micro_tickets, $micro_persona, $micro_analista){

		$session=Session::get('persona_id');

	try {

		$this->_db->beginTransaction();
			$this->_query="INSERT INTO `persona`(`cedula`, `credencial`, `nombre_1`, `nombre_2`, `apellido_1`, `apellido_2`, 
			`correo`, `cargo`, `jerarquia_id`) VALUES

			(:cedula,:credencial, :nombre_1, :nombre_2, :apellido_1, :apellido_2,
			 :correo, :cargo, :jerarquia)";		
		$this->_db->prepare($this->_query)->execute($persona);
		$personaid = $this->_db->lastinsertid('persona');
		
		$this->_query="INSERT INTO `micro_tickets`( `cod_area_id`, `numero_micro`, `areac_id`, `tipo_equipo_id`, `modelo_del_equipo`, `marca_del_equipo`, `serial_del_equipo`, `pieza_suelta_id`, `pieza_danada_id`, `rayado_id`,  `marca_procesador_id`, `tipo_de_ram_id`, `capacidad_ram_id`, `cantidad_memoria_ram`, `tipo_disco_duro_id`, `capacidad_disco_duro_id`, `cantidad_disco_duro`, `fan_cooler`, `floppy`, `unidad_dvd_cd`, `tarjeta_red`, `tarjeta_video`, `tarjeta_sonido`, `descripcion`, `status_equipo_id`)  VALUES


		(:cod_area, :numero_micro, :areac, :tipo_equipo, :modelo_del_equipo, :marca_del_equipo, :serial_del_equipo, :pieza_suelta, :pieza_danada, :rayado,  :marca_procesador, :tipo_de_ram, :capacidad_ram, :cantidad_memoria_ram, :tipo_disco_duro, :capacidad_disco_duro, :cantidad_disco_duro, :fan_cooler, :floppy, :unidad_dvd_cd, :tarjeta_red, :tarjeta_video, :tarjeta_sonido, :descripcion, :status_equipo)";
		$this->_db->prepare($this->_query)->execute($micro_tickets);
		$micro_ticketsid = $this->_db->lastinsertid('micro_tickets');

		$this->_query=" INSERT INTO `micro_persona`(`persona_id`, `micro_tickets_idmt`) VALUES		
		($personaid, $micro_ticketsid)";		
		$this->_db->prepare($this->_query)->execute();


		$this->_query=" INSERT INTO `micro_analista`(`persona_id`, `micro_tickets_id`) VALUES		
		($session, $micro_ticketsid)";		
		$this->_db->prepare($this->_query)->execute();

		$this->_query=" INSERT INTO `micro_tecnico`(`micro_tickets_idmt`) VALUES		
		($micro_ticketsid)";		
		$this->_db->prepare($this->_query)->execute();			

		

			$this->_db->commit();		
	} catch (Exception $e) {
			$this->_db->rollBack();
			echo "Error :: ".$e->getMessage();
			exit();
	}		

		}

function insertticket($micro_tickets, $micro_persona, $micro_analista, $micro_tecnico){
	try {

		$this->_db->beginTransaction();

		$session=Session::get('persona_id');
		
		$this->_query="INSERT INTO `micro_tickets`( `cod_area_id`, `numero_micro`, `areac_id`, `tipo_equipo_id`, `modelo_del_equipo`, `marca_del_equipo`, `serial_del_equipo`, `pieza_suelta_id`, `pieza_danada_id`, `rayado_id`,  `marca_procesador_id`, `tipo_de_ram_id`, `capacidad_ram_id`, `cantidad_memoria_ram`, `tipo_disco_duro_id`, `capacidad_disco_duro_id`, `cantidad_disco_duro`, `fan_cooler`, `floppy`, `unidad_dvd_cd`, `tarjeta_red`, `tarjeta_video`, `tarjeta_sonido`, `descripcion`, `status_equipo_id`)  VALUES


		(:cod_area, :numero_micro, :areac, :tipo_equipo, :modelo_del_equipo, :marca_del_equipo, :serial_del_equipo, :pieza_suelta, :pieza_danada, :rayado,  :marca_procesador, :tipo_de_ram, :capacidad_ram, :cantidad_memoria_ram, :tipo_disco_duro, :capacidad_disco_duro, :cantidad_disco_duro, :fan_cooler, :floppy, :unidad_dvd_cd, :tarjeta_red, :tarjeta_video, :tarjeta_sonido, :descripcion, :status_equipo)";
		$this->_db->prepare($this->_query)->execute($micro_tickets);
		$micro_ticketsid = $this->_db->lastinsertid('micro_tickets');

		$this->_query=" INSERT INTO `micro_persona`(`micro_tickets_idmt`,`persona_id`) VALUES		
		($micro_ticketsid, :persona)";		
		$this->_db->prepare($this->_query)->execute($micro_persona);

		$this->_query=" INSERT INTO `micro_analista`(`persona_id`, `micro_tickets_id`) VALUES		
		($session, $micro_ticketsid)";		
		$this->_db->prepare($this->_query)->execute();

		$this->_query=" INSERT INTO `micro_tecnico`(`micro_tickets_idmt`) VALUES		
		($micro_ticketsid)";		
		$this->_db->prepare($this->_query)->execute();
	

			$this->_db->commit();		
	} catch (Exception $e) {
			$this->_db->rollBack();
			echo "Error :: ".$e->getMessage();
			exit();
	}		

		}


	function nuevo_ticket_jn($persona, $micro_tickets,$micro_tecnico, $micro_persona, $micro_analista){

		$session=Session::get('persona_id');

	try {

		$this->_db->beginTransaction();
			$this->_query="INSERT INTO `persona`(`cedula`, `credencial`, `nombre_1`, `nombre_2`, `apellido_1`, `apellido_2`, 
			`correo`, `cargo`, `jerarquia_id`) VALUES

			(:cedula,:credencial, :nombre_1, :nombre_2, :apellido_1, :apellido_2,
			 :correo, :cargo, :jerarquia)";		
		$this->_db->prepare($this->_query)->execute($persona);
		$personaid = $this->_db->lastinsertid('persona');
		
		$this->_query="INSERT INTO `micro_tickets`( `cod_area_id`, `numero_micro`, `areac_id`, `tipo_equipo_id`, `modelo_del_equipo`, `marca_del_equipo`, `serial_del_equipo`, `pieza_suelta_id`, `pieza_danada_id`, `rayado_id`,  `marca_procesador_id`, `tipo_de_ram_id`, `capacidad_ram_id`, `cantidad_memoria_ram`, `tipo_disco_duro_id`, `capacidad_disco_duro_id`, `cantidad_disco_duro`, `fan_cooler`, `floppy`, `unidad_dvd_cd`, `tarjeta_red`, `tarjeta_video`, `tarjeta_sonido`, `descripcion`, `status_equipo_id` )  VALUES


		(:cod_area, :numero_micro, :areac, :tipo_equipo, :modelo_del_equipo, :marca_del_equipo, :serial_del_equipo, :pieza_suelta, :pieza_danada, :rayado,  :marca_procesador, :tipo_de_ram, :capacidad_ram, :cantidad_memoria_ram, :tipo_disco_duro, :capacidad_disco_duro, :cantidad_disco_duro, :fan_cooler, :floppy, :unidad_dvd_cd, :tarjeta_red, :tarjeta_video, :tarjeta_sonido, :descripcion, :status_equipo)";
		$this->_db->prepare($this->_query)->execute($micro_tickets);
		$micro_ticketsid = $this->_db->lastinsertid('micro_tickets');

		$this->_query=" INSERT INTO `micro_tecnico`(`persona_t_id`, `micro_tickets_idmt`) VALUES		
		(:persona_t, $micro_ticketsid)";		
		$this->_db->prepare($this->_query)->execute($micro_tecnico);

		$this->_query=" INSERT INTO `micro_persona`(`persona_id`, `micro_tickets_idmt`) VALUES		
		($personaid, $micro_ticketsid)";		
		$this->_db->prepare($this->_query)->execute();


		$this->_query=" INSERT INTO `micro_analista`(`persona_id`, `micro_tickets_id`) VALUES		
		($session, $micro_ticketsid)";		
		$this->_db->prepare($this->_query)->execute();		

		

			$this->_db->commit();		
	} catch (Exception $e) {
			$this->_db->rollBack();
			echo "Error :: ".$e->getMessage();
			exit();
	}		

		}

function insertticket_jn($micro_tickets, $micro_persona, $micro_analista, $micro_tecnico){
	try {

		$this->_db->beginTransaction();

		$session=Session::get('persona_id');
		$this->_query="INSERT INTO `micro_tickets`( `cod_area_id`, `numero_micro`, `areac_id`, `tipo_equipo_id`, `modelo_del_equipo`, `marca_del_equipo`, `serial_del_equipo`, `pieza_suelta_id`, `pieza_danada_id`, `rayado_id`,  `marca_procesador_id`, `tipo_de_ram_id`, `capacidad_ram_id`, `cantidad_memoria_ram`, `tipo_disco_duro_id`, `capacidad_disco_duro_id`, `cantidad_disco_duro`, `fan_cooler`, `floppy`, `unidad_dvd_cd`, `tarjeta_red`, `tarjeta_video`, `tarjeta_sonido`, `descripcion`, `status_equipo_id`)  VALUES


		(:cod_area, :numero_micro, :areac, :tipo_equipo, :modelo_del_equipo, :marca_del_equipo, :serial_del_equipo, :pieza_suelta, :pieza_danada, :rayado,  :marca_procesador, :tipo_de_ram, :capacidad_ram, :cantidad_memoria_ram, :tipo_disco_duro, :capacidad_disco_duro, :cantidad_disco_duro, :fan_cooler, :floppy, :unidad_dvd_cd, :tarjeta_red, :tarjeta_video, :tarjeta_sonido, :descripcion, :status_equipo)";

		$this->_db->prepare($this->_query)->execute($micro_tickets);
		$micro_ticketsid = $this->_db->lastinsertid('micro_tickets');

		$this->_query=" INSERT INTO `micro_tecnico`(`persona_t_id`, `micro_tickets_idmt`) VALUES		
		(:persona_t, $micro_ticketsid)";		
		$this->_db->prepare($this->_query)->execute($micro_tecnico);		

		$this->_query=" INSERT INTO `micro_persona`(`micro_tickets_idmt`,`persona_id`) VALUES		
		($micro_ticketsid, :persona)";		
		$this->_db->prepare($this->_query)->execute($micro_persona);

		$this->_query=" INSERT INTO `micro_analista`(`persona_id`, `micro_tickets_id`) VALUES		
		($session, $micro_ticketsid)";		
		$this->_db->prepare($this->_query)->execute();

			$this->_db->commit();		
	} catch (Exception $e) {
			$this->_db->rollBack();
			echo "Error :: ".$e->getMessage();
			exit();
	}		

		}

function insertrs_js($soporte, $soporte_persona, $soporte_analista, $soporte_tecnico){
	try {

		$this->_db->beginTransaction();

		$session=Session::get('persona_id');
		
		$this->_query="INSERT INTO `soporte`( `tipo_de_rt_id`, `cod_area_id`,  `numero_tel`, `areac_id`,  `descripcion`, `status_del_caso_id` )  VALUES

		(:tipo_de_rt, :cod_area, :numero_tel, :areac, :descripcion, :status_del_caso)";
		$this->_db->prepare($this->_query)->execute($soporte);
		$soporteid = $this->_db->lastinsertid('soporte');	

		$this->_query=" INSERT INTO `soporte_persona`(`persona_id`, `soporte_id`) VALUES		
		(:persona, $soporteid)";		
		$this->_db->prepare($this->_query)->execute($soporte_persona);

		$this->_query=" INSERT INTO `soporte_analista`(`persona_a_id`, `soporte_id`) VALUES		
		($session, $soporteid)";		
		$this->_db->prepare($this->_query)->execute();

		$this->_query=" INSERT INTO `soporte_tecnico`(`persona_sp_id`, `soporte_id`) VALUES		
		(:persona_sp, $soporteid)";		
		$this->_db->prepare($this->_query)->execute($soporte_tecnico);		

			$this->_db->commit();		
	} catch (Exception $e) {
			$this->_db->rollBack();
			echo "Error :: ".$e->getMessage();
			exit();
	}		

		}

function nuevorsoport($soporte, $soporte_persona, $soporte_analista, $soporte_tecnico){
	try {

		$this->_db->beginTransaction();

		$session=Session::get('persona_id');
		
		$this->_query="INSERT INTO `soporte`( `tipo_de_rt_id`, `cod_area_id`,  `numero_tel`, `areac_id`,  `descripcion`, `status_del_caso_id` )  VALUES

		(:tipo_de_rt, :cod_area, :numero_tel, :areac, :descripcion, :status_del_caso)";
		$this->_db->prepare($this->_query)->execute($soporte);
		$soporteid = $this->_db->lastinsertid('soporte');	

		$this->_query=" INSERT INTO `soporte_persona`(`persona_id`, `soporte_id`) VALUES		
		(:persona, $soporteid)";		
		$this->_db->prepare($this->_query)->execute($soporte_persona);

		$this->_query=" INSERT INTO `soporte_analista`(`persona_a_id`, `soporte_id`) VALUES		
		($session, $soporteid)";		
		$this->_db->prepare($this->_query)->execute();

		$this->_query=" INSERT INTO `soporte_tecnico`(`soporte_id`) VALUES		
		($soporteid)";		
		$this->_db->prepare($this->_query)->execute($soporte_tecnico);		

			$this->_db->commit();		
	} catch (Exception $e) {
			$this->_db->rollBack();
			echo "Error :: ".$e->getMessage();
			exit();
	}		

		}		

function soporte_js($persona, $soporte, $soporte_persona, $soporte_analista, $soporte_tecnico){
		$session=Session::get('persona_id');

	try {

		$this->_db->beginTransaction();		
		$this->_query="INSERT INTO `persona`(`cedula`, `credencial`, `nombre_1`, `nombre_2`, `apellido_1`, `apellido_2`, 
			`correo`, `cargo`, `jerarquia_id`) VALUES

			(:cedula,:credencial, :nombre_1, :nombre_2, :apellido_1, :apellido_2, :correo, :cargo, :jerarquia)";		
		$this->_db->prepare($this->_query)->execute($persona);
		$personaid = $this->_db->lastinsertid('persona');

		$this->_query="INSERT INTO `soporte`( `tipo_de_rt_id`, `cod_area_id`,  `numero_tel`, `areac_id`,  `descripcion`, `status_del_caso_id` )  VALUES

		(:tipo_de_rt, :cod_area, :numero_tel, :areac, :descripcion, :status_del_caso)";
		$this->_db->prepare($this->_query)->execute($soporte);
		$soporteid = $this->_db->lastinsertid('soporte');	

		$this->_query=" INSERT INTO `soporte_persona`(`persona_id`, `soporte_id`) VALUES		
		($personaid, $soporteid)";		
		$this->_db->prepare($this->_query)->execute();

		$this->_query=" INSERT INTO `soporte_analista`(`persona_a_id`, `soporte_id`) VALUES		
		($session, $soporteid)";		
		$this->_db->prepare($this->_query)->execute();

		$this->_query=" INSERT INTO `soporte_tecnico`(`persona_sp_id`, `soporte_id`) VALUES		
		(:persona_sp, $soporteid)";		
		$this->_db->prepare($this->_query)->execute($soporte_tecnico);		

			$this->_db->commit();		
	} catch (Exception $e) {
			$this->_db->rollBack();
			echo "Error :: ".$e->getMessage();
			exit();
	}		

		}

function soporte($persona, $soporte, $soporte_persona, $soporte_analista, $soporte_tecnico){
		$session=Session::get('persona_id');

	try {

		$this->_db->beginTransaction();		
		$this->_query="INSERT INTO `persona`(`cedula`, `credencial`, `nombre_1`, `nombre_2`, `apellido_1`, `apellido_2`, 
			`correo`, `cargo`, `jerarquia_id`) VALUES

			(:cedula,:credencial, :nombre_1, :nombre_2, :apellido_1, :apellido_2, :correo, :cargo, :jerarquia)";		
		$this->_db->prepare($this->_query)->execute($persona);
		$personaid = $this->_db->lastinsertid('persona');

		$this->_query="INSERT INTO `soporte`( `tipo_de_rt_id`, `cod_area_id`,  `numero_tel`, `areac_id`,  `descripcion`, `status_del_caso_id` )  VALUES

		(:tipo_de_rt, :cod_area, :numero_tel, :areac, :descripcion, :status_del_caso)";
		$this->_db->prepare($this->_query)->execute($soporte);
		$soporteid = $this->_db->lastinsertid('soporte');	

		$this->_query=" INSERT INTO `soporte_persona`(`persona_id`, `soporte_id`) VALUES		
		($personaid, $soporteid)";		
		$this->_db->prepare($this->_query)->execute();

		$this->_query=" INSERT INTO `soporte_analista`(`persona_a_id`, `soporte_id`) VALUES		
		($session, $soporteid)";		
		$this->_db->prepare($this->_query)->execute();

		$this->_query=" INSERT INTO `soporte_tecnico`(`soporte_id`) VALUES		
		($soporteid)";		
		$this->_db->prepare($this->_query)->execute($soporte_tecnico);		

			$this->_db->commit();		
	} catch (Exception $e) {
			$this->_db->rollBack();
			echo "Error :: ".$e->getMessage();
			exit();
	}		

		}				

		function getFuncionarios(){

			$this->_query="SELECT persona.id, cedula, credencial, nombre_1,apellido_1 FROM persona
							" ;
			return $this->Read();

		}

		function REGperson($id){

			$this->_query= " SELECT persona.id, cedula, credencial, nombre_1, nombre_2, apellido_1, apellido_2, correo, cargo, ref_jerarquia.referencia as 'jerarquia'FROM persona
							Inner join referencia as ref_jerarquia on ref_jerarquia.id = jerarquia_id
							 
							where persona.id = $id";

			return $this->Read();
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

		function requerimientosmicro(){

			$this->_query= "SELECT CONCAT( REPEAT( '0', 4 - LENGTH(m.id) ) , m.id) as id, m_a.persona_id, fecha_micro, fecha_entrega, p_s.cedula, CONCAT(p_a.nombre_1, ' ', p_a.apellido_1) AS analista, CONCAT(p_t.nombre_1, ' ', p_t.apellido_1) as tecnico, CONCAT(p_s.nombre_1, ' ', p_s.apellido_1) as solicitante, descripcion_depen, ref_status_equipos.referencia as status_equipo FROM micro_tickets as m
							inner join referencia as ref_status_equipos on ref_status_equipos.id = status_equipo_id
							
							inner join micro_analista as m_a on m_a.micro_tickets_id = m.id
                            inner join usuario as us_a on us_a.id = m_a.persona_id
							inner join persona as p_a on p_a.id = us_a.persona_id                            
                           
                            inner join micro_tecnico as m_t on m_t.micro_tickets_idmt = m.id
                            inner join usuario as us_t on us_t.id = m_t.persona_t_id
                           	left join persona as p_t on p_t.id = us_t.persona_id

                            inner join micro_persona as m_p on m_p.micro_tickets_idmt = m.id
                            inner join persona as p_s on p_s.id = m_p.persona_id
                            left join dependencias as d_s on d_s.id = m.areac_id";

			return $this->Read();
		}					


		function rtmicro(){

			$session=Session::get('persona_id');

			$this->_query= "SELECT CONCAT( REPEAT( '0', 4 - LENGTH(m.id) ) , m.id) as id, m_a.persona_id, fecha_micro, fecha_entrega, p_s.cedula, CONCAT(p_a.nombre_1, ' ', p_a.apellido_1) AS analista, CONCAT(p_t.nombre_1, ' ', p_t.apellido_1) as tecnico, CONCAT(p_s.nombre_1, ' ', p_s.apellido_1) as solicitante, d_s.descripcion_depen, ref_status_equipos.referencia as status_equipo FROM micro_tickets as m

							inner join referencia as ref_status_equipos on ref_status_equipos.id = status_equipo_id
                            
							inner join micro_analista as m_a on m_a.micro_tickets_id = m.id
                            inner join usuario as us_a on us_a.id = m_a.persona_id
							inner join persona as p_a on p_a.id = us_a.persona_id                           
                           
                            inner join micro_tecnico as m_t on m_t.micro_tickets_idmt = m.id
                            inner join usuario as us_t on us_t.id = m_t.persona_t_id
                           	left join persona as p_t on p_t.id = us_t.persona_id
                            
                            inner join micro_persona as m_p on m_p.micro_tickets_idmt = m.id
                            inner join persona as p_s on p_s.id = m_p.persona_id
                            inner join dependencias as d_s on d_s.id = m.areac_id

							where m_t.persona_t_id = $session";
			return $this->Read();
		}

		function vrmicro($id){


		$this->_query="SELECT micro_tickets.id, dependencias.padre_id as pdi, abuelo.id as abid, micro_tickets.areac_id as ar, cod_area_id as cai, tipo_equipo_id as tpi, pieza_suelta_id as psi, pieza_danada_id as pdi, rayado_id as ri, status_equipo_id as sepi, fecha_micro, nombre_1, nombre_2, apellido_1, apellido_2, correo, cargo, credencial, ref_jerarquia.referencia as jerarquia, cedula, credencial, ref_cod_area.referencia as cod_area, numero_micro, ref_tipo_equipo.referencia as tipo_de_equipo, marca_del_equipo, modelo_del_equipo, serial_del_equipo, ref_pieza_suelta.referencia as pieza_s, ref_pieza_danada.referencia as pieza_d, ref_rayado.referencia as rayado, ref_marca_procesador.referencia as marca_p, ref_tipo_de_ram.referencia as tipo_de_ram, ref_capacidad_ram.referencia as capacidad_r, ref_tipo_disco_duro.referencia as tipo_dd, ref_capacidad_disco_duro.referencia as capacidad_dd, cantidad_memoria_ram, cantidad_disco_duro, fan_cooler, floppy, unidad_dvd_cd, tarjeta_red, tarjeta_video, tarjeta_sonido, descripcion, solucion, fecha_entrega, abuelo.descripcion_depen padre_padre, padre.descripcion_depen padre_despacho, dependencias.descripcion_depen areac,  ref_status_equipos.referencia as status_equipo FROM micro_tickets
						
						left join dependencias on dependencias.id = micro_tickets.areac_id
						left join dependencias padre on dependencias.padre_id = padre.id
						left join dependencias abuelo on padre.padre_id = abuelo.id

						inner join referencia as ref_cod_area             on ref_cod_area.id                  = cod_area_id
						inner join referencia as ref_tipo_equipo          on ref_tipo_equipo.id               = tipo_equipo_id
						inner join referencia as ref_pieza_suelta         on ref_pieza_suelta.id              = pieza_suelta_id
						inner join referencia as ref_pieza_danada         on ref_pieza_danada.id              = pieza_danada_id
						inner join referencia as ref_rayado               on ref_rayado.id                    = rayado_id
						left join referencia as ref_marca_procesador     on ref_marca_procesador.id          = marca_procesador_id
						left join referencia as ref_tipo_de_ram          on ref_tipo_de_ram.id               = tipo_de_ram_id
						left join referencia as ref_capacidad_ram        on ref_capacidad_ram.id             = capacidad_ram_id
						left join referencia as ref_tipo_disco_duro      on ref_tipo_disco_duro.id           = tipo_disco_duro_id
						left join referencia as ref_capacidad_disco_duro on ref_capacidad_disco_duro.id      = capacidad_disco_duro_id
						inner join referencia as ref_status_equipos on ref_status_equipos.id = status_equipo_id

                        inner join micro_tecnico on micro_tecnico.micro_tickets_idmt = micro_tickets.id
						inner join micro_persona                          on micro_persona.micro_tickets_idmt = micro_tickets.id
						inner join persona                                on persona.id                       = micro_persona.persona_id
                        inner join referencia as ref_jerarquia            on ref_jerarquia.id                 = jerarquia_id
                        
						where micro_tickets.id = $id";
			
			return $this->Read();
		}

		function aticketv($id){


		$this->_query="SELECT micro_tickets.id as idticket, micro_tecnico.id as id, fecha_micro, nombre_1, nombre_2, apellido_1, apellido_2, correo, cargo, credencial, ref_jerarquia.referencia as jerarquia, cedula, credencial, ref_cod_area.referencia as cod_area, numero_micro, ref_tipo_equipo.referencia as tipo_de_equipo, marca_del_equipo, modelo_del_equipo, serial_del_equipo, ref_pieza_suelta.referencia as pieza_s, ref_pieza_danada.referencia as pieza_d, ref_rayado.referencia as rayado, ref_marca_procesador.referencia as marca_p, ref_tipo_de_ram.referencia as tipo_de_ram, ref_capacidad_ram.referencia as capacidad_r, ref_tipo_disco_duro.referencia as tipo_dd, ref_capacidad_disco_duro.referencia as capacidad_dd, fecha_entrega, descripcion, solucion, descripcion_depen FROM micro_tickets
						
						inner join dependencias on dependencias.id = micro_tickets.areac_id
						inner join referencia as ref_cod_area             on ref_cod_area.id                  = cod_area_id
						inner join referencia as ref_tipo_equipo          on ref_tipo_equipo.id               = tipo_equipo_id
						inner join referencia as ref_pieza_suelta         on ref_pieza_suelta.id              = pieza_suelta_id
						inner join referencia as ref_pieza_danada         on ref_pieza_danada.id              = pieza_danada_id
						inner join referencia as ref_rayado               on ref_rayado.id                    = rayado_id
						left join referencia as ref_marca_procesador     on ref_marca_procesador.id          = marca_procesador_id
						left join referencia as ref_tipo_de_ram          on ref_tipo_de_ram.id               = tipo_de_ram_id
						left join referencia as ref_capacidad_ram        on ref_capacidad_ram.id             = capacidad_ram_id
						left join referencia as ref_tipo_disco_duro      on ref_tipo_disco_duro.id           = tipo_disco_duro_id
						left join referencia as ref_capacidad_disco_duro on ref_capacidad_disco_duro.id      = capacidad_disco_duro_id
                        inner join micro_tecnico                          on micro_tecnico.micro_tickets_idmt = micro_tickets.id
						inner join micro_persona                          on micro_persona.micro_tickets_idmt = micro_tickets.id
						inner join persona                                on persona.id                       = micro_persona.persona_id
                        inner join referencia as ref_jerarquia            on ref_jerarquia.id                 = jerarquia_id
                        
						where micro_tickets.id = $id";
			
			return $this->Read();
		}	

		function soporteview(){


		$this->_query="SELECT sp.id,  p_s.cedula, CONCAT(p_a.nombre_1, ' ', p_a.apellido_1) AS analista, CONCAT(p_t.nombre_1, ' ', p_t.apellido_1) as tecnico, CONCAT(p_s.nombre_1, ' ', p_s.apellido_1) as solicitante, ref_tdrt.referencia as tipo_de_requerimiento, ref_cod_area.referencia as codigo_area, d_s.descripcion_depen, numero_tel, fecha_inicio, fecha_culminacion , ref_status.referencia as status_caso FROM soporte as sp

		inner join referencia as ref_tdrt on ref_tdrt.id = tipo_de_rt_id
		inner join referencia as ref_cod_area on ref_cod_area.id = cod_area_id
		inner join referencia as ref_status on ref_status.id = status_del_caso_id

		inner join soporte_analista as s_a on s_a.soporte_id = sp.id
        inner join usuario as us_a on us_a.id = s_a.persona_a_id
		inner join persona as p_a on p_a.id = us_a.persona_id

		left join soporte_tecnico as s_t on s_t.soporte_id = sp.id
        left join usuario as us_t on us_t.id = s_t.persona_sp_id
		left join persona as p_t on p_t.id = us_t.persona_id

		left JOIN soporte_persona as s_p on s_p.soporte_id = sp.id
		left join persona as p_s on p_s.id = s_p.persona_id
		inner join dependencias as d_s on d_s.id = sp.areac_id";
			
			return $this->Read();
		}

		function misoporteview(){

		$session=Session::get('persona_id');

		$this->_query="SELECT sp.id,  p_s.cedula, CONCAT(p_a.nombre_1, ' ', p_a.apellido_1) AS analista, CONCAT(p_t.nombre_1, ' ', p_t.apellido_1) as tecnico, CONCAT(p_s.nombre_1, ' ', p_s.apellido_1) as solicitante, ref_tdrt.referencia as tipo_de_requerimiento, ref_cod_area.referencia as codigo_area, d_s.descripcion_depen, numero_tel, fecha_inicio, fecha_culminacion , ref_status.referencia as status_caso FROM soporte as sp

		inner join referencia as ref_tdrt on ref_tdrt.id = tipo_de_rt_id
		inner join referencia as ref_cod_area on ref_cod_area.id = cod_area_id
		inner join referencia as ref_status on ref_status.id = status_del_caso_id

		inner join soporte_analista as s_a on s_a.soporte_id = sp.id
        inner join usuario as us_a on us_a.id = s_a.persona_a_id
		inner join persona as p_a on p_a.id = us_a.persona_id

		left join soporte_tecnico as s_t on s_t.soporte_id = sp.id
        left join usuario as us_t on us_t.id = s_t.persona_sp_id
		left join persona as p_t on p_t.id = us_t.persona_id

		left JOIN soporte_persona as s_p on s_p.soporte_id = sp.id
		left join persona as p_s on p_s.id = s_p.persona_id
		inner join dependencias as d_s on d_s.id = sp.areac_id

		where s_t.persona_sp_id = $session";
			
			return $this->Read();
		}		

		function soportview($id){

		$this->_query="SELECT sp.id, cod_area_id as cai, ref_tdrt.referencia as tipo_de_requerimiento, dependencias.padre_id as pdi, abuelo.id as abid, sp.areac_id as ar, abuelo.descripcion_depen padre_padre, padre.descripcion_depen padre_despacho, dependencias.descripcion_depen areac, tipo_de_rt_id as tspr, ref_cod_area.referencia as codigo_area, status_del_caso_id as sei, numero_tel, ref_stdcaso.referencia as status_del_caso, fecha_inicio, fecha_culminacion, descripcion, solucion, observacion FROM soporte as sp

				left join dependencias on dependencias.id = sp.areac_id
				left join dependencias padre on dependencias.padre_id = padre.id
				left join dependencias abuelo on padre.padre_id = abuelo.id				

				inner join referencia as ref_tdrt on ref_tdrt.id = tipo_de_rt_id
				inner join referencia as ref_cod_area on ref_cod_area.id = cod_area_id
				inner join referencia as ref_stdcaso on ref_stdcaso.id = status_del_caso_id
				inner JOIN soporte_persona as s_p on s_p.soporte_id = sp.id
				inner join persona as p_s on p_s.id = s_p.persona_id
				where sp.id = $id
				";
			
			return $this->Read();
		}

		function asoportetecnico($id){

		$this->_query="SELECT soporte_tecnico.id as id, soporte.id as spi, ref_tdrt.referencia as tipo_de_requerimiento, ref_cod_area.referencia as codigo_area, descripcion_depen, numero_tel, fecha_inicio, fecha_culminacion, descripcion, solucion, observacion FROM soporte

				inner join dependencias on dependencias.id = soporte.areac_id
				inner join referencia as ref_tdrt on ref_tdrt.id = tipo_de_rt_id
				inner join referencia as ref_cod_area on ref_cod_area.id = cod_area_id
				inner join soporte_tecnico on soporte_tecnico.soporte_id = soporte.id

				

				where soporte.id = $id";
			
			return $this->Read();
		}		


		function reportesoporte($id){

		$this->_query="SELECT sp.id, CONCAT(p_a.nombre_1, ' ', p_a.apellido_1) AS analista, p_t.credencial, CONCAT(p_t.nombre_1, ' ', p_t.apellido_1) as tecnico, CONCAT(p_s.nombre_1, ' ', p_s.apellido_1) as solicitante, p_s.cedula, p_s.credencial, p_s.cargo, ref_jerarquia.referencia as 'jerarquia', p_s.correo, ref_tdrt.referencia as tipo_de_requerimiento, ref_cod_area.referencia as cod_area,  numero_tel, d_s.descripcion_depen, fecha_inicio, fecha_culminacion, descripcion, observacion, solucion FROM soporte as sp

		inner join referencia as ref_tdrt on ref_tdrt.id = tipo_de_rt_id
		inner join referencia as ref_cod_area on ref_cod_area.id = cod_area_id
        
        left JOIN soporte_persona as s_p on s_p.soporte_id = sp.id
		left join persona as p_s on p_s.id = s_p.persona_id
        inner join referencia as ref_jerarquia on ref_jerarquia.id = jerarquia_id  

		inner join soporte_analista as s_a on s_a.soporte_id = sp.id
		inner join persona as p_a on p_a.id = s_a.persona_a_id

		left join soporte_tecnico as s_t on s_t.soporte_id = sp.id
		left join persona as p_t on p_t.id = s_t.persona_sp_id
		inner join dependencias as d_s on d_s.id = sp.areac_id

		where sp.id = $id";
			
			return $this->Read();
		}			

		// function reporte($id){


		// $this->_query="SELECT CONCAT( REPEAT( '0', 4 - LENGTH(m.id) ) , m.id) as id, m_a.persona_id, CONCAT(p_a.nombre_1, ' ', p_a.apellido_1) AS analista,  p_t.credencial, CONCAT(p_t.nombre_1, ' ', p_t.apellido_1) as tecnico, p_s.cedula, p_s.credencial, p_s.cargo, CONCAT(p_s.nombre_1, ' ', p_s.apellido_1) as solicitante, d_s.descripcion_depen, ref_cod_area.referencia as cod_area, numero_micro, ref_tipo_equipo.referencia as tipo_de_equipo, marca_del_equipo, modelo_del_equipo, serial_del_equipo, ref_pieza_suelta.referencia as pieza_s, ref_pieza_danada.referencia as pieza_d, ref_rayado.referencia as rayado, ref_marca_procesador.referencia as marca_p, ref_tipo_de_ram.referencia as tipo_de_ram, ref_capacidad_ram.referencia as capacidad_r, ref_tipo_disco_duro.referencia as tipo_dd, ref_capacidad_disco_duro.referencia as capacidad_dd, fecha_micro, fecha_entrega, descripcion, solucion, p_s.correo,  ref_jerarquia.referencia as 'jerarquia', cantidad_memoria_ram, cantidad_disco_duro, fan_cooler, floppy, unidad_dvd_cd, tarjeta_red, tarjeta_video, tarjeta_sonido
 			
  //           FROM micro_tickets as m
 
		// 	inner join referencia as ref_cod_area             on ref_cod_area.id                  = cod_area_id
		// 	inner join referencia as ref_tipo_equipo          on ref_tipo_equipo.id               = tipo_equipo_id
		// 	inner join referencia as ref_pieza_suelta         on ref_pieza_suelta.id              = pieza_suelta_id
		// 	inner join referencia as ref_pieza_danada         on ref_pieza_danada.id              = pieza_danada_id
		// 	inner join referencia as ref_rayado               on ref_rayado.id                    = rayado_id

		// 	left join referencia as ref_marca_procesador      on ref_marca_procesador.id          = marca_procesador_id
		// 	left join referencia as ref_tipo_de_ram           on ref_tipo_de_ram.id               = tipo_de_ram_id
		// 	left join referencia as ref_capacidad_ram         on ref_capacidad_ram.id             = capacidad_ram_id
		// 	left join referencia as ref_tipo_disco_duro       on ref_tipo_disco_duro.id           = tipo_disco_duro_id
		// 	left join referencia as ref_capacidad_disco_duro  on ref_capacidad_disco_duro.id      = capacidad_disco_duro_id
		// 	inner join dependencias as d_s on d_s.id = m.areac_id
            

		// 	inner join micro_persona as m_p on m_p.micro_tickets_idmt = m.id
		// 	inner join persona as p_s on p_s.id = m_p.persona_id
		// 	inner join referencia as ref_jerarquia on ref_jerarquia.id = jerarquia_id            
			

		// 	inner join micro_analista as m_a on m_a.micro_tickets_id = m.id
		// 	inner join persona as p_a on p_a.id = m_a.persona_id 

            
  //           inner join micro_tecnico as m_t on m_t.micro_tickets_idmt = m.id
		// 	left join persona as p_t on p_t.id = m_t.persona_t_id

		// 	where m.id = $id";			
		// 	return $this->Read();
		// }		


		function reporte($id){


		$this->_query="SELECT CONCAT( REPEAT( '0', 4 - LENGTH(m.id) ) , m.id) as id, m_a.persona_id, CONCAT(p_a.nombre_1, ' ', p_a.apellido_1) AS analista,  p_t.credencial, CONCAT(p_t.nombre_1, ' ', p_t.apellido_1) as tecnico, p_s.cedula, p_s.credencial, p_s.cargo, CONCAT(p_s.nombre_1, ' ', p_s.apellido_1) as solicitante, d_s.descripcion_depen, ref_cod_area.referencia as cod_area, numero_micro, ref_tipo_equipo.referencia as tipo_de_equipo, marca_del_equipo, modelo_del_equipo, serial_del_equipo, ref_pieza_suelta.referencia as pieza_s, ref_pieza_danada.referencia as pieza_d, ref_rayado.referencia as rayado, 


						CASE
						    WHEN ref_marca_procesador.referencia  is NULL THEN 'No aplica'
						    ELSE ref_marca_procesador.referencia
						  END AS marca_p, 

						CASE
						    WHEN ref_tipo_de_ram.referencia  is NULL THEN 'No aplica'
						    ELSE ref_tipo_de_ram.referencia
						  END AS tipo_de_ram, 

						  CASE
						    WHEN ref_capacidad_ram.referencia  is NULL THEN 'No aplica'
						    ELSE ref_capacidad_ram.referencia
						  END AS capacidad_r, 

						CASE
						    WHEN ref_tipo_disco_duro.referencia  is NULL THEN 'No aplica'
						    ELSE ref_tipo_disco_duro.referencia
						  END AS tipo_dd, 


						CASE
						    WHEN ref_capacidad_disco_duro.referencia  is NULL THEN 'No aplica'
						    ELSE ref_capacidad_disco_duro.referencia
						END AS capacidad_dd,


			fecha_micro, fecha_entrega, descripcion, solucion, p_s.correo,  ref_jerarquia.referencia as 'jerarquia', 

 
						 CASE
						    WHEN cantidad_memoria_ram is NULL THEN 'No aplica'
						    ELSE cantidad_memoria_ram
						  END AS cantidad_memoria_ram,  
						  
					CASE
					    WHEN cantidad_disco_duro is NULL THEN 'No aplica'
					    ELSE cantidad_disco_duro
					  END AS cantidad_disco_duro,
					  
					 CASE
					    WHEN fan_cooler is NULL THEN 'No aplica'
					    ELSE fan_cooler
					END AS fan_cooler,
					  
					CASE
					    WHEN floppy is NULL THEN 'No aplica'
					    ELSE floppy
					 END AS floppy,
					  
					CASE
					    WHEN unidad_dvd_cd is NULL THEN 'No aplica'
					    ELSE unidad_dvd_cd
					  END AS unidad_dvd_cd,
					  
					  CASE
					    WHEN tarjeta_red is NULL THEN 'No aplica'
					    ELSE tarjeta_red
					  END AS tarjeta_red,
					  
					  CASE
					    WHEN tarjeta_video is NULL THEN 'No aplica'
					    ELSE tarjeta_video
					  END AS tarjeta_video,
					  
					  CASE
					    WHEN tarjeta_sonido is NULL THEN 'No aplica'
					    ELSE tarjeta_sonido
					  END AS tarjeta_sonido
		 			
            FROM micro_tickets as m
 
			inner join referencia as ref_cod_area             on ref_cod_area.id                  = cod_area_id
			inner join referencia as ref_tipo_equipo          on ref_tipo_equipo.id               = tipo_equipo_id
			inner join referencia as ref_pieza_suelta         on ref_pieza_suelta.id              = pieza_suelta_id
			inner join referencia as ref_pieza_danada         on ref_pieza_danada.id              = pieza_danada_id
			inner join referencia as ref_rayado               on ref_rayado.id                    = rayado_id

			left join referencia as ref_marca_procesador      on ref_marca_procesador.id          = marca_procesador_id
			left join referencia as ref_tipo_de_ram           on ref_tipo_de_ram.id               = tipo_de_ram_id
			left join referencia as ref_capacidad_ram         on ref_capacidad_ram.id             = capacidad_ram_id
			left join referencia as ref_tipo_disco_duro       on ref_tipo_disco_duro.id           = tipo_disco_duro_id
			left join referencia as ref_capacidad_disco_duro  on ref_capacidad_disco_duro.id      = capacidad_disco_duro_id
			inner join dependencias as d_s on d_s.id = m.areac_id
            

			inner join micro_persona as m_p on m_p.micro_tickets_idmt = m.id
			inner join persona as p_s on p_s.id = m_p.persona_id
			inner join referencia as ref_jerarquia on ref_jerarquia.id = jerarquia_id            
			

			inner join micro_analista as m_a on m_a.micro_tickets_id = m.id
			inner join persona as p_a on p_a.id = m_a.persona_id 

            
            inner join micro_tecnico as m_t on m_t.micro_tickets_idmt = m.id
			left join persona as p_t on p_t.id = m_t.persona_t_id

			where m.id = $id";			
			return $this->Read();
		}		


		function upmicro_t($micro_tickets){

			$this->_query= "UPDATE micro_tickets SET 

			cod_area_id				=	:cod_area,
			numero_micro			=	:numero_micro,
			areac_id                =   :areac,
			tipo_equipo_id			=	:tipo_equipo,
			modelo_del_equipo		=	:modelo_del_equipo,
			marca_del_equipo		=	:marca_del_equipo,
			serial_del_equipo		=	:serial_del_equipo,
			pieza_suelta_id			=	:pieza_suelta,
			pieza_danada_id			=	:pieza_danada,
			rayado_id				=	:rayado,
			marca_procesador_id	    =	:marca_procesador,
			tipo_de_ram_id		    =	:tipo_de_ram,
			capacidad_ram_id		=	:capacidad_ram,
			cantidad_memoria_ram    =   :cantidad_memoria_ram,
			tipo_disco_duro_id		=	:tipo_disco_duro,
			capacidad_disco_duro_id	=	:capacidad_disco_duro,
			cantidad_disco_duro     =   :cantidad_disco_duro,
			fan_cooler              =   :fan_cooler,
			floppy                  =   :floppy,
			unidad_dvd_cd           =   :unidad_dvd_cd,
			tarjeta_red             =   :tarjeta_red,
			tarjeta_video           =   :tarjeta_video,
			tarjeta_sonido          =   :tarjeta_sonido,
			descripcion				=	:descripcion,			
			solucion				=	:solucion,
			status_equipo_id		=   :status_equipo,
			fecha_entrega			=	:fecha_entrega
			
			where micro_tickets.id = :id";

		try {
				$this->_db->beginTransaction();
				$this->_db->prepare($this->_query)->execute($micro_tickets);				
				$this->_db->commit();
				

			} catch (Exception $e) {
				$this->_db->rollBack();
				echo "Error :: ".$e->getMessage();
				exit();
			}
		}

		function aticket($micro_tecnico){

			$this->_query= "UPDATE micro_tecnico SET 

			persona_t_id				=	:persona_t

			where micro_tecnico.id = :id";

		try {
				$this->_db->beginTransaction();
				$this->_db->prepare($this->_query)->execute($micro_tecnico);				
				$this->_db->commit();
				

			} catch (Exception $e) {
				$this->_db->rollBack();
				echo "Error :: ".$e->getMessage();
				exit();
			}
		}

		function asoportect($soporte_tecnico){

			$this->_query= "UPDATE soporte_tecnico SET 

			persona_sp_id				=	:persona_sp

			where soporte_tecnico.id = :id";

		try {
				$this->_db->beginTransaction();
				$this->_db->prepare($this->_query)->execute($soporte_tecnico);				
				$this->_db->commit();
				

			} catch (Exception $e) {
				$this->_db->rollBack();
				echo "Error :: ".$e->getMessage();
				exit();
			}
		}		

		function upsoporte($soporte){

			$this->_query= "UPDATE soporte SET 

			tipo_de_rt_id		=	:tipo_de_rt,
			cod_area_id			=	:cod_area,
			numero_tel			=	:numero_tel,
			areac_id            =   :areac,
			descripcion			=	:descripcion,
			observacion			=	:observacion,
			solucion			=	:solucion,
			status_del_caso_id	=	:status_del_caso,
			fecha_culminacion	=	:fecha_culminacion
			
			where soporte.id = :id";

		try {
				$this->_db->beginTransaction();
				$this->_db->prepare($this->_query)->execute($soporte);				
				$this->_db->commit();
				

			} catch (Exception $e) {
				$this->_db->rollBack();
				echo "Error :: ".$e->getMessage();
				exit();
			}
		}		

		function delete_micro_tickets($id){

			$this->_query= "DELETE FROM micro_tickets where id = $id";

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

