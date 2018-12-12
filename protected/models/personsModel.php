<?php 

	class personsModel extends Model{
		
		
		
		public function __construct(){
			parent::__construct();
		}
		public function __destruct(){
			;
		}

		function insertPerson($persona,$usuario){
		
		try {
		$this->_db->beginTransaction();
			$this->_query="INSERT INTO `persona`

			(`cedula`, `credencial`, `nombre_1`, `nombre_2`, `apellido_1`, `apellido_2`, 
			`correo`, `cargo`, `jerarquia_id`, `areac_id`) VALUES 
			(:cedula,:credencial, :nombre_1, :nombre_2, :apellido_1, :apellido_2,
			 :correo, :cargo, :jerarquia, :areac)";		
		$this->_db->prepare($this->_query)->execute($persona);
		$personaid = $this->_db->lastinsertid('persona');

		$this->_query="INSERT INTO `usuario`( `usuario`, `clave`,`pregunta`,`respuesta`,`persona_id`,`perfil_id`) VALUES 
		(:usuario, :clave, :pregunta, :respuesta, $personaid, :perfil)";		
		$this->_db->prepare($this->_query)->execute($usuario);
		$this->_db->commit();		
		} catch (Exception $e) {
				$this->_db->rollBack();
				echo "Error :: ".$e->getMessage();
				exit();
				}		
		}

		function asignuser($usuario){
		
		try {
		$this->_db->beginTransaction();

		$this->_query="INSERT INTO `usuario`( `usuario`, `clave`,`pregunta`,`respuesta`,`persona_id`,`perfil_id`) VALUES 
		(:usuario, :clave, :pregunta, :respuesta, :persona, :perfil)";		
		$this->_db->prepare($this->_query)->execute($usuario);
		$this->_db->commit();		
		} catch (Exception $e) {
				$this->_db->rollBack();
				echo "Error :: ".$e->getMessage();
				exit();
				}		
		}		
				
		function getPersons(){

			$this->_query= "SELECT persona.id, cedula, credencial, nombre_1, apellido_1, cargo, referencia.referencia as jerarquia, descripcion_depen
							FROM persona
							inner join referencia on referencia.id = persona.jerarquia_id
							left join dependencias on dependencias.id = persona.areac_id
							left join usuario on persona.id = usuario.persona_id
                            where persona_id is null";

			return $this->Read();
		}

		// function UnicaPersona($id){

		// 	$this->_query= " SELECT persona.id, cedula, credencial, nombre_1, nombre_2, apellido_1, apellido_2, correo, cargo, ref_jerarquia.referencia as 'jerarquia', descripcion_depen FROM persona
		// 					Inner join referencia as ref_jerarquia on ref_jerarquia.id = jerarquia_id
		// 					left join dependencias on dependencias.id = persona.areac_id 
		// 					where persona.id = $id";

		// 	return $this->Read();
		// }

		function UnicaPersona($id){

			$this->_query= "SELECT persona.id, jerarquia_id as jid, areac_id as aid, dependencias.padre_id as pdi, abuelo.id as abid, cedula, credencial, nombre_1, nombre_2, apellido_1, apellido_2, correo, cargo, ref_jerarquia.referencia as 'jerarquia', abuelo.descripcion_depen padre_padre, padre.descripcion_depen padre_despacho, dependencias.descripcion_depen areac FROM persona         
       
			left join dependencias on dependencias.id = persona.areac_id
			left join dependencias padre on dependencias.padre_id = padre.id
			left join dependencias abuelo on padre.padre_id = abuelo.id
			inner join referencia as ref_jerarquia on ref_jerarquia.id = jerarquia_id
			where persona.id = $id";

			return $this->Read();
		}		

		

		function updatePersons($persona){

			$this->_query = "UPDATE persona SET

						cedula     = :cedula,
						credencial = :credencial,
						nombre_1   = :nombre_1,
						nombre_2   = :nombre_2,
						apellido_1 = :apellido_1,
						apellido_2 = :apellido_2,
						correo     = :correo,
						cargo      = :cargo,
						jerarquia_id = :jerarquia,
						areac_id     = :areac

						where id = :id";


		try {
				$this->_db->beginTransaction();
				$this->_db->prepare($this->_query)->execute($persona);				
				$this->_db->commit();
				

			} catch (Exception $e) {
				$this->_db->rollBack();
				echo "Error :: ".$e->getMessage();
				exit();
			}
		}

		function getUsuario(){

			$this->_query= "SELECT persona.id as pid, cedula, credencial, CONCAT(nombre_1, ' ', apellido_1) AS usuario_siscor, usuario.id, usuario, pregunta, respuesta, referencia.referencia as 'perfil', descripcion_depen from usuario 
			inner join referencia on referencia.id = usuario.perfil_id 
			inner join persona on persona.id = usuario.persona_id
            left join dependencias on dependencias.id = persona.areac_id";

			return $this->Read();
		}		

		function unicouser($id){

			$this->_query= "SELECT usuario.id, usuario.usuario, usuario.clave, usuario.perfil_id as pfi, usuario.persona_id, usuario.pregunta, usuario.respuesta, referencia.referencia as 'perfil' from usuario
														   inner join referencia on referencia.id = usuario.perfil_id
							where usuario.id = $id";

			return $this->Read();
		}		

		function updateUser($usuario){

			$this->_query = "UPDATE usuario SET

						usuario = :usuario,
						perfil_id     = :perfil
						
						where id = :id";


		try {
				$this->_db->beginTransaction();
				$this->_db->prepare($this->_query)->execute($usuario);				
				$this->_db->commit();
				

			} catch (Exception $e) {
				$this->_db->rollBack();
				echo "Error :: ".$e->getMessage();
				exit();
			}
		}

		function deletePersons($id){

			$this->_query= "DELETE FROM persona where id = $id";

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
		
		function getdatospersonales(){
			$session=Session::get('usuario_id');
			$this->_query= "SELECT persona.id, usuario.id, persona.cedula, persona.nombre_1, persona.apellido_1, usuario.usuario, usuario.clave, usuario.pregunta, usuario.respuesta, referencia.referencia as 'perfil' FROM usuario
				INNER JOIN persona ON persona.id = usuario.persona_id
				INNER JOIN referencia ON referencia.id = usuario.perfil_id
				where usuario.id = $session";
				return $this->Read();
		}

		function getupdatedatospersonales($id){

			$this->_query= "SELECT persona.id, usuario.id, persona.cedula, persona.nombre_1, persona.apellido_1, usuario.usuario, usuario.clave, usuario.pregunta, usuario.respuesta, referencia.referencia as 'perfil' FROM usuario
				INNER JOIN persona ON persona.id = usuario.persona_id
				INNER JOIN referencia ON referencia.id = usuario.perfil_id
				where usuario.id = $id";
				return $this->Read();
		}

		function updatedatos($usuario){
			$session=Session::get('usuario_id');
			$this->_query = "UPDATE usuario SET

						clave = :clave,
						pregunta     = :pregunta,
						respuesta = :respuesta
						
						where id = :id";


		try {
				$this->_db->beginTransaction();
				$this->_db->prepare($this->_query)->execute($usuario);				
				$this->_db->commit();
				

			} catch (Exception $e) {
				$this->_db->rollBack();
				echo "Error :: ".$e->getMessage();
				exit();
			}
		}		



				

}?>