<?php 

	class ajaxModel extends Model{
		
		
		
		public function __construct(){
			parent::__construct();
		}
		public function __destruct(){
			;
		}

	
		
		public function LoadReferencia($tabla)
		{	
			$this->_query="SELECT * FROM `referencia` 
			inner join referencia as ref2 on ref2.padre_id = referencia.id
			where referencia.referencia = '$tabla'";
			return $this->Read();
			
		}

		public function LoadDespacho($tabla,$item)
		{	
			if ($item == "false") {
				$this->_query="SELECT * FROM dependencias 
				inner join referencia on referencia_id = referencia.id
				where referencia.referencia = '$tabla' order by descripcion_depen asc";
			}else{
				$this->_query="SELECT * FROM dependencias where padre_id = $item order by descripcion_depen asc";
				 
			}
			
			return $this->Read();
		}

		public function loadSystem($tabla,$item)
		{	
			if ($item == "false") {
				$this->_query="SELECT * FROM sistemas 
				inner join referencia on referencia_id = referencia.id
				where referencia.referencia = '$tabla' order by descripcion_sistema asc";
			}else{
				$this->_query="SELECT * FROM sistemas where padre_sistema_id = $item order by descripcion_sistema asc";
				 
			}
			
			return $this->Read();
		}

		public function load($campo,$tabla)
		{
		
				$this->_query="Select ".$campo." from ".$tabla."";
				return $this->Read();				
				

		}
	
		public function Loadasig()
		{	
			$this->_query="SELECT usuario.id, CONCAT(credencial, ' ', cedula, ' ', nombre_1, ' ', ' ', apellido_1) as resultado, descripcion_depen FROM usuario
							inner join persona on persona.id = usuario.persona_id
                            inner join dependencias on dependencias.id = persona.areac_id   
							where descripcion_depen = 'Division de Telematica' 
						";
			return $this->Read();
			
		}

				public function Loadasigsistema()
		{	
			$this->_query="SELECT usuario.id, CONCAT(credencial, ' ', cedula, ' ', nombre_1, ' ', ' ', apellido_1) as resultado, descripcion_depen FROM usuario
							inner join persona on persona.id = usuario.persona_id
                            inner join dependencias on dependencias.id = persona.areac_id   
							where descripcion_depen = 'Division de Sistemas' 
						";
			return $this->Read();
			
		}


}?>