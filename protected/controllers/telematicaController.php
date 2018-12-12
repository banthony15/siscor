<?php 
	class telematicaController extends Controller{
		
		
		protected $_sidebar_menu;
		private $_micro;
		
		public function __construct(){
	
			parent::__construct();
			$this->_ticket = $this->loadModel('telematica');
			$this->_view->setJS(array('js/micro'));
			$this->_view->setJS(array('js/micro/micro'));
			// $this->_view->setJS(array('js/val'));

			

		}
		
		function index(){
		
			
			$this->_view->render('newticket', 'telematica', '',$this->_sidebar_menu);
			// clase  metodo 	  vista    carpeta dentro de views 
		}

		function newticket(){
		
			Session::accessRole(array('Usuario Telematica'));

			if($_SERVER['REQUEST_METHOD']=='POST'){
				$persona = array(
				':cedula' => $_POST['cedula'] ,
				':credencial' => $_POST['credencial'] ,
				':nombre_1' => $_POST['nombre_1'] ,
				':nombre_2' => $_POST['nombre_2'] ,						
				':apellido_1' => $_POST['apellido_1'] ,
				':apellido_2' => $_POST['apellido_2'] ,	
				':correo' => $_POST['correo'] ,	
				':cargo' => $_POST['cargo'] ,
				':jerarquia' => $_POST['jerarquia']

			);
				$micro_tickets = array(
				'cod_area' => $_POST['cod_area'],
				'numero_micro' => $_POST['numero_micro'],
				':areac' => $_POST['areac'],				
				':tipo_equipo' => $_POST['tipo_equipo'] ,
				':modelo_del_equipo' => $_POST['modelo_del_equipo'] ,
				':marca_del_equipo' => $_POST['marca_del_equipo'] ,
				':serial_del_equipo' => $_POST['serial_del_equipo'] ,						
				':pieza_suelta' => $_POST['pieza_suelta'] ,
				':pieza_danada' => $_POST['pieza_danada'] ,
				':rayado' => $_POST['rayado'],	
				':marca_procesador' => $_POST['marca_procesador'] ,						
				':tipo_de_ram' => $_POST['tipo_de_ram'] ,
				':capacidad_ram' => $_POST['capacidad_ram'] ,
				':cantidad_memoria_ram' => $_POST['cantidad_memoria_ram'],
				':tipo_disco_duro' => $_POST['tipo_disco_duro'] ,	
				':capacidad_disco_duro' => $_POST['capacidad_disco_duro'],
				':cantidad_disco_duro' => $_POST['cantidad_disco_duro'],
				':fan_cooler' => $_POST['fan_cooler'],
				':floppy' => $_POST['floppy'],
				':unidad_dvd_cd' => $_POST['unidad_dvd_cd'],
				':tarjeta_red' => $_POST['tarjeta_red'],
				':tarjeta_video' => $_POST['tarjeta_video'],
				':tarjeta_sonido' => $_POST['tarjeta_sonido'],
				':descripcion' => $_POST['descripcion'],
				'status_equipo' => $_POST['status_equipo']		
			);
				
				$micro_persona = array(
			);
				$micro_analista = array(
			);

				$micro_tecnico = array(
			);

			$this->_ticket->insert($persona, $micro_tickets, $micro_persona, $micro_analista, $micro_tecnico);
			$this->_view->redirect('requerimientos/rtelecargados');
			}else{
				$this->_view->render('newticket', 'telematica', '',$this->_sidebar_menu);
			}				
		}

		function nuevo_ticket_jn(){
		Session::accessRole(array('Super Usuario Telematica'));
			
			if($_SERVER['REQUEST_METHOD']=='POST'){
				$persona = array(
				':cedula' => $_POST['cedula'] ,
				':credencial' => $_POST['credencial'] ,
				':nombre_1' => $_POST['nombre_1'] ,
				':nombre_2' => $_POST['nombre_2'] ,						
				':apellido_1' => $_POST['apellido_1'] ,
				':apellido_2' => $_POST['apellido_2'] ,	
				':correo' => $_POST['correo'] ,	
				':cargo' => $_POST['cargo'] ,
				':jerarquia' => $_POST['jerarquia']
			);
				$micro_tickets = array(
				'cod_area' => $_POST['cod_area'],
				'numero_micro' => $_POST['numero_micro'],
				':areac' => $_POST['areac'],				
				':tipo_equipo' => $_POST['tipo_equipo'] ,
				':modelo_del_equipo' => $_POST['modelo_del_equipo'] ,
				':marca_del_equipo' => $_POST['marca_del_equipo'] ,
				':serial_del_equipo' => $_POST['serial_del_equipo'] ,						
				':pieza_suelta' => $_POST['pieza_suelta'] ,
				':pieza_danada' => $_POST['pieza_danada'] ,
				':rayado' => $_POST['rayado'],	
				':marca_procesador' => $_POST['marca_procesador'] ,						
				':tipo_de_ram' => $_POST['tipo_de_ram'] ,
				':capacidad_ram' => $_POST['capacidad_ram'] ,
				':cantidad_memoria_ram' => $_POST['cantidad_memoria_ram'],
				':tipo_disco_duro' => $_POST['tipo_disco_duro'] ,	
				':capacidad_disco_duro' => $_POST['capacidad_disco_duro'],
				':cantidad_disco_duro' => $_POST['cantidad_disco_duro'],
				':fan_cooler' => $_POST['fan_cooler'],
				':floppy' => $_POST['floppy'],
				':unidad_dvd_cd' => $_POST['unidad_dvd_cd'],
				':tarjeta_red' => $_POST['tarjeta_red'],
				':tarjeta_video' => $_POST['tarjeta_video'],
				':tarjeta_sonido' => $_POST['tarjeta_sonido'],
				':descripcion' => $_POST['descripcion'],
				'status_equipo' => $_POST['status_equipo']			
			);
				$micro_tecnico = array(
				':persona_t' => $_POST['persona_t']
			);	
				
				$micro_persona = array(
			);

				$micro_analista = array(
			);		

			$this->_ticket->nuevo_ticket_jn($persona, $micro_tickets, $micro_tecnico, $micro_persona, $micro_analista);
			$this->_view->redirect('telematica/rtelecargados');
		}else{
			
			$this->_view->render('nuevo_ticket_jn','telematica');
			}

			
		}

		function ticket($id= false){

			Session::accessRole(array('Usuario Telematica'));

			if($_SERVER['REQUEST_METHOD']=='POST'){

				$micro_tickets = array(
				'cod_area' => $_POST['cod_area'],
				'numero_micro' => $_POST['numero_micro'],
				':areac' => $_POST['areac'],				
				':tipo_equipo' => $_POST['tipo_equipo'] ,
				':modelo_del_equipo' => $_POST['modelo_del_equipo'] ,
				':marca_del_equipo' => $_POST['marca_del_equipo'] ,
				':serial_del_equipo' => $_POST['serial_del_equipo'] ,						
				':pieza_suelta' => $_POST['pieza_suelta'] ,
				':pieza_danada' => $_POST['pieza_danada'] ,
				':rayado' => $_POST['rayado'],	
				':marca_procesador' => $_POST['marca_procesador'] ,						
				':tipo_de_ram' => $_POST['tipo_de_ram'] ,
				':capacidad_ram' => $_POST['capacidad_ram'] ,
				':cantidad_memoria_ram' => $_POST['cantidad_memoria_ram'],
				':tipo_disco_duro' => $_POST['tipo_disco_duro'] ,	
				':capacidad_disco_duro' => $_POST['capacidad_disco_duro'],
				':cantidad_disco_duro' => $_POST['cantidad_disco_duro'],
				':fan_cooler' => $_POST['fan_cooler'],
				':floppy' => $_POST['floppy'],
				':unidad_dvd_cd' => $_POST['unidad_dvd_cd'],
				':tarjeta_red' => $_POST['tarjeta_red'],
				':tarjeta_video' => $_POST['tarjeta_video'],
				':tarjeta_sonido' => $_POST['tarjeta_sonido'],
				':descripcion' => $_POST['descripcion'],
				'status_equipo' => $_POST['status_equipo']			
			);

				$micro_persona = array(
				':persona' => $_POST['persona']
			);

				$micro_analista = array(
			);				

				$micro_tecnico = array(
			);

			$this->_ticket->insertticket($micro_tickets, $micro_persona, $micro_analista, $micro_tecnico);
			$this->_view->redirect('telematica/rtelecargados');
			
			}else{

				$persona = $this->_ticket->REGperson($id);
				$this->_view->_persona = $persona;
				$this->_view->render('ticket', 'telematica', '',$this->_sidebar_menu);

			}				
		}		

		function ticket_jn($id= false){

			Session::accessRole(array('Super Usuario Telematica'));

			if($_SERVER['REQUEST_METHOD']=='POST'){

				$micro_tickets = array(
				'cod_area' => $_POST['cod_area'],
				'numero_micro' => $_POST['numero_micro'],
				':areac' => $_POST['areac'],				
				':tipo_equipo' => $_POST['tipo_equipo'] ,
				':modelo_del_equipo' => $_POST['modelo_del_equipo'] ,
				':marca_del_equipo' => $_POST['marca_del_equipo'] ,
				':serial_del_equipo' => $_POST['serial_del_equipo'] ,						
				':pieza_suelta' => $_POST['pieza_suelta'] ,
				':pieza_danada' => $_POST['pieza_danada'] ,
				':rayado' => $_POST['rayado'],	
				':marca_procesador' => $_POST['marca_procesador'] ,						
				':tipo_de_ram' => $_POST['tipo_de_ram'] ,
				':capacidad_ram' => $_POST['capacidad_ram'] ,
				':cantidad_memoria_ram' => $_POST['cantidad_memoria_ram'],
				':tipo_disco_duro' => $_POST['tipo_disco_duro'] ,	
				':capacidad_disco_duro' => $_POST['capacidad_disco_duro'],
				':cantidad_disco_duro' => $_POST['cantidad_disco_duro'],
				':fan_cooler' => $_POST['fan_cooler'],
				':floppy' => $_POST['floppy'],
				':unidad_dvd_cd' => $_POST['unidad_dvd_cd'],
				':tarjeta_red' => $_POST['tarjeta_red'],
				':tarjeta_video' => $_POST['tarjeta_video'],
				':tarjeta_sonido' => $_POST['tarjeta_sonido'],
				':descripcion' => $_POST['descripcion'],
				'status_equipo' => $_POST['status_equipo']	
			);
				$micro_tecnico = array(
				':persona_t' => $_POST['persona_t']					
			);				

				$micro_persona = array(
				':persona' => $_POST['persona']
			);

				$micro_analista = array(
			);

			$this->_ticket->insertticket_jn($micro_tickets, $micro_persona, $micro_analista, $micro_tecnico);
			$this->_view->redirect('telematica/rtelecargados');
			
			}else{

				$persona = $this->_ticket->REGperson($id);
				$this->_view->_persona = $persona;
				$this->_view->render('ticket_jn', 'telematica', '',$this->_sidebar_menu);

			}				
		}


		function rtelecargados(){
		Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));
			$lista = $this->_ticket->requerimientosmicro();
			$this->_view->_lista = $lista;
			$this->_view->render('rtelecargados','telematica','', $this->_sidebar_menu);
		}

		function funcionarios(){
		Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));
			$lista = $this->_ticket->getFuncionarios();
			$this->_view->_lista = $lista;
			$this->_view->render('funcionarios','telematica','',$this->_sidebar_menu);

		}


		function rgmicro(){
		Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));
			$lista = $this->_ticket->rtmicro();
			$this->_view->_lista = $lista;
			$this->_view->render('rgmicro','telematica','',$this->_sidebar_menu);
		}

		function delete($id){
		Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));
			$this->_ticket->delete_micro_tickets($id);
			$this->_view->redirect('telematica/rtelecargados');
		}

		function vrmicro($id = false){
		Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));			
			$micro = $this->_ticket->vrmicro($id);
			$this->_view->_micro = $micro;
			$this->_view->render('vrmicro', 'telematica');
		}

		function urmicro($id= false){
		Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));			
			if ($_SERVER['REQUEST_METHOD']=='POST') {

				$micro_tickets = array(

				':id'   => $_POST['id'],
				'cod_area' => $_POST['cod_area'],
				'numero_micro' => $_POST['numero_micro'],
				':areac' => $_POST['areac'],				
				':tipo_equipo' => $_POST['tipo_equipo'] ,
				':modelo_del_equipo' => $_POST['modelo_del_equipo'] ,
				':marca_del_equipo' => $_POST['marca_del_equipo'] ,
				':serial_del_equipo' => $_POST['serial_del_equipo'] ,						
				':pieza_suelta' => $_POST['pieza_suelta'] ,
				':pieza_danada' => $_POST['pieza_danada'] ,
				':rayado' => $_POST['rayado'],	
				':marca_procesador' => $_POST['marca_procesador'] ,						
				':tipo_de_ram' => $_POST['tipo_de_ram'] ,
				':capacidad_ram' => $_POST['capacidad_ram'] ,
				':cantidad_memoria_ram' => $_POST['cantidad_memoria_ram'],
				':tipo_disco_duro' => $_POST['tipo_disco_duro'] ,	
				':capacidad_disco_duro' => $_POST['capacidad_disco_duro'],
				':cantidad_disco_duro' => $_POST['cantidad_disco_duro'],
				':fan_cooler' => $_POST['fan_cooler'],
				':floppy' => $_POST['floppy'],
				':unidad_dvd_cd' => $_POST['unidad_dvd_cd'],
				':tarjeta_red' => $_POST['tarjeta_red'],
				':tarjeta_video' => $_POST['tarjeta_video'],
				':tarjeta_sonido' => $_POST['tarjeta_sonido'],
				':descripcion' => $_POST['descripcion'],	
				'solucion' => $_POST['solucion'],
				'status_equipo' => $_POST['status_equipo'],
				'fecha_entrega' => $_POST['fecha_entrega']
			);
				$this->_ticket->upmicro_t($micro_tickets);
				$this->_view->redirect('telematica/rgmicro');
			}else{
			$micro_tickets = $this->_ticket->vrmicro($id);
			$this->_view->_micro = $micro_tickets;
			$this->_view->render('urmicro', 'telematica');

			}
		}

		function aticket($id= false){
		Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));
			if ($_SERVER['REQUEST_METHOD']=='POST') {

				$micro_tecnico = array(

				':id'                       => $_POST['id'],
				':persona_t'                => $_POST['persona_t']

			);
				$this->_ticket->aticket($micro_tecnico);
				$this->_view->redirect('telematica/rtelecargados');
			}else{
			$micro_tickets = $this->_ticket->aticketv($id);
			$this->_view->_micro = $micro_tickets;
			$this->_view->render('aticket', 'telematica', '',$this->_sidebar_menu);
			}
		}
		
		function funcionariossoporte(){
		Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));
			$lista = $this->_ticket->getFuncionarios();
			$this->_view->_lista = $lista;
			$this->_view->render('funcionariossoporte','telematica','',$this->_sidebar_menu);

		}		



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		

		function nuevorsoporte($id = false){
		Session::accessRole(array('Super Usuario Telematica'));

			if($_SERVER['REQUEST_METHOD']=='POST'){

				$soporte = array(
				':tipo_de_rt' => $_POST['tipo_de_rt'],	
				'cod_area' => $_POST['cod_area'],
				'numero_tel' => $_POST['numero_tel'],
				':areac' => $_POST['areac'],				
				':descripcion' => $_POST['descripcion'],
				'status_del_caso' => $_POST ['status_del_caso']
			);

				$soporte_persona = array(
				':persona' => $_POST['persona']
			);

				$soporte_analista = array(
			);				

				$soporte_tecnico = array(
				':persona_sp' => $_POST['persona_sp']					
			);

			$this->_ticket->insertrs_js($soporte, $soporte_persona, $soporte_analista, $soporte_tecnico);
			$this->_view->redirect('telematica/reqsoportegenerales');
			
			}else{			
			$persona = $this->_ticket->REGperson($id);
			$this->_view->_persona = $persona;
			$this->_view->render('nuevorsoporte','telematica');
		    }
		}

		function nuevorsoport($id = false){

		Session::accessRole(array('Usuario Telematica'));

			if($_SERVER['REQUEST_METHOD']=='POST'){

				$soporte = array(
				':tipo_de_rt' => $_POST['tipo_de_rt'],	
				'cod_area' => $_POST['cod_area'],
				'numero_tel' => $_POST['numero_tel'],
				':areac' => $_POST['areac'],				
				':descripcion' => $_POST['descripcion'],
				'status_del_caso' => $_POST ['status_del_caso']
			);

				$soporte_persona = array(
				':persona' => $_POST['persona']
			);

				$soporte_analista = array(
			);				

				$soporte_tecnico = array(
				
			);

			$this->_ticket->nuevorsoport($soporte, $soporte_persona, $soporte_analista, $soporte_tecnico);
			$this->_view->redirect('telematica/reqsoportegenerales');
			
			}else{			
			$persona = $this->_ticket->REGperson($id);
			$this->_view->_persona = $persona;
			$this->_view->render('nuevorsoport','telematica');
		    }
		}		

		function soporte_js($id = false){

		Session::accessRole(array('Super Usuario Telematica'));
			if($_SERVER['REQUEST_METHOD']=='POST'){

				$persona = array(
				':cedula' => $_POST['cedula'] ,
				':credencial' => $_POST['credencial'] ,
				':nombre_1' => $_POST['nombre_1'] ,
				':nombre_2' => $_POST['nombre_2'] ,						
				':apellido_1' => $_POST['apellido_1'] ,
				':apellido_2' => $_POST['apellido_2'] ,	
				':correo' => $_POST['correo'] ,	
				':cargo' => $_POST['cargo'] ,
				':jerarquia' => $_POST['jerarquia']
			);				

				$soporte = array(
				':tipo_de_rt' => $_POST['tipo_de_rt'],	
				'cod_area' => $_POST['cod_area'],
				'numero_tel' => $_POST['numero_tel'],
				':areac' => $_POST['areac'],				
				':descripcion' => $_POST['descripcion'],
				'status_del_caso' => $_POST ['status_del_caso']
			);

				$soporte_persona = array(

			);

				$soporte_analista = array(
			);				

				$soporte_tecnico = array(
				':persona_sp' => $_POST['persona_sp']					
			);

			$this->_ticket->soporte_js($persona, $soporte, $soporte_persona, $soporte_analista, $soporte_tecnico);
			$this->_view->redirect('telematica/reqsoportegenerales');
			
			}else{			

			$this->_view->render('soporte_js','telematica');
		    }
		}

		function soporte($id = false){

		Session::accessRole(array('Usuario Telematica'));

			if($_SERVER['REQUEST_METHOD']=='POST'){

				$persona = array(
				':cedula' => $_POST['cedula'] ,
				':credencial' => $_POST['credencial'] ,
				':nombre_1' => $_POST['nombre_1'] ,
				':nombre_2' => $_POST['nombre_2'] ,						
				':apellido_1' => $_POST['apellido_1'] ,
				':apellido_2' => $_POST['apellido_2'] ,	
				':correo' => $_POST['correo'] ,	
				':cargo' => $_POST['cargo'] ,
				':jerarquia' => $_POST['jerarquia']
			);				

				$soporte = array(
				':tipo_de_rt' => $_POST['tipo_de_rt'],	
				'cod_area' => $_POST['cod_area'],
				'numero_tel' => $_POST['numero_tel'],
				':areac' => $_POST['areac'],				
				':descripcion' => $_POST['descripcion'],
				'status_del_caso' => $_POST ['status_del_caso']
			);

				$soporte_persona = array(

			);

				$soporte_analista = array(
			);				

				$soporte_tecnico = array(
				
			);

			$this->_ticket->soporte($persona, $soporte, $soporte_persona, $soporte_analista, $soporte_tecnico);
			$this->_view->redirect('telematica/reqsoportegenerales');
			
			}else{			

			$this->_view->render('soporte','telematica');
		    }
		}		

		function updatesoporte($id= false){
			Session::accessRole(array('Super Usuario Telematica', 'Usuario Telematica'));

			if ($_SERVER['REQUEST_METHOD']=='POST') {

				$oporte = array(

				':id'         => $_POST['id'],
				':tipo_de_rt' => $_POST['tipo_de_rt'],	
				'cod_area'    => $_POST['cod_area'],
				':areac'      => $_POST['areac'],				
				'numero_tel'  => $_POST['numero_tel'],
				':descripcion'=> $_POST['descripcion'],
				'observacion' => $_POST['observacion'],
				'solucion'    => $_POST['solucion'],
				'status_del_caso' => $_POST ['status_del_caso'],				
				':fecha_culminacion' => $_POST['fecha_culminacion']				


				
			);
			$this->_ticket->upsoporte($oporte);
			$this->_view->redirect('telematica/mis_req_aserv');
			}else{
			$micro_tickets = $this->_ticket->soportview($id);
			$this->_view->_micro = $micro_tickets;
			$this->_view->render('updatesoporte', 'telematica');

			}
		}

			function asoporte($id= false){
			Session::accessRole(array('Super Usuario Telematica'));			

			if ($_SERVER['REQUEST_METHOD']=='POST') {

				$soporte_tecnico = array(

				':id'                       => $_POST['id'],
				':persona_sp'               => $_POST['persona_sp']

			);
				$this->_ticket->asoportect($soporte_tecnico);
				$this->_view->redirect('telematica/reqsoportegenerales');
			}else{
			$micro_tickets = $this->_ticket->asoportetecnico($id);
			$this->_view->_soport = $micro_tickets;
			$this->_view->render('asoporte', 'telematica', '',$this->_sidebar_menu);
			}
		}

		function reqsoportegenerales(){
		Session::accessRole(array('Super Usuario Telematica', 'Usuario Telematica'));
			$lista = $this->_ticket->soporteview();
			$this->_view->_lista = $lista;
			$this->_view->render('reqsoportegenerales','telematica','', $this->_sidebar_menu);
		}

		function mis_req_aserv(){
		Session::accessRole(array('Super Usuario Telematica', 'Usuario Telematica'));
			$lista = $this->_ticket->misoporteview();
			$this->_view->_lista = $lista;
			$this->_view->render('mis_req_aserv','telematica','', $this->_sidebar_menu);
		}		



			function pdfentrada($id){

			Session::accessRole(array('Super Usuario Telematica', 'Usuario Telematica'));
			require("C:/xampp/htdocs/siscor_p/libs/fpdf/fpdf.php");
			$d=40;
			$e=80;

			$requerimiento = $this->_ticket->reporte($id);
			$celda= new FPDF();
			$celda->Addpage();
			$celda->SetFillColor(150, 150, 150);

			$celda->Image('C:\xampp\htdocs\siscor_p\libs\fpdf\tutorial\avatar6.png',165,8,28);
			$celda->Image('C:\xampp\htdocs\siscor_p\libs\fpdf\tutorial\mep.png',12,10,28);
			$celda->SetFont('Arial','B',07);
			$celda->Cell(82);
			$celda->Cell(30,10,'REPUBLICA BOLIVARIANA DE VENEZUELA',2,0,'C');
			$celda->Ln(05);
			$celda->Cell(82);
			$celda->Cell(30,10,'MINISTERIO DEL PODER POPULAR PARA LAS RELACIONES INTERIORES, JUSTICIA Y PAZ',2,0,'C');
			$celda->Ln(05);
			$celda->Cell(82);			
			$celda->Cell(30,10,'CUERPO DE INVESTIGACIONES CIENTIFICAS PENALES Y CRIMINALISTICA',2,0,'C');
			$celda->Ln(05);
			$celda->Cell(82);			
			$celda->Cell(30,10,'COORDINACION DE APOYO ADMINISTRATIVO',2,0,'C');
			$celda->Ln(05);
			$celda->Cell(82);			
			$celda->Cell(30,10, utf8_decode ('DIRECCIÓN DE TECNOLOGÍA - DIVISIÓN DE TELEMÁTICA'),2,0,'C');
			$celda->Ln(05);
			$celda->Cell(82);	
			$celda->Cell(30,10, utf8_decode('AREA DE SOPORTE DE EQUIPOS TECNOLÓGICOS'),2,0,'C');
			$celda->Line(9.5 , 42 , 200, 42);
			$celda->Ln(10);		
			$celda->Cell(30);		
			$celda->Cell(20,10,'CONTROL DE ENTRADA DE EQUIPOS:',2,0,'C');
			$celda->Ln(0);		
			$celda->Cell(1);		
			$celda->Cell(310,10,'NUMERO DE CONTROL:',2,0,'C');	
			$celda->Ln(5);	
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(1);
				$celda->Cell(350,0,$requerimiento[0][0],0,0,'C');
				$celda->Ln();
			}

			$celda->Ln(10);
			$celda->Cell(20);			
			$celda->Cell(159,5,'Datos del Solicitante:',1,0,'C',1);			
			$celda->Ln();
			$celda->Cell(20);
			$celda->Cell(53, 5, "Cedula:",1,0,'C',1);
			$celda->Cell(53, 5, "Credencial:",1,0,'C',1);
			$celda->Cell(53, 5, "Nombre y Apellido:",1,0,'C',1);


			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(53,6,$requerimiento[0][5],1,0,'C');
				$celda->Cell(53,6,$requerimiento[0][6],1,0,'C');
				$celda->Cell(53,6,$requerimiento[0][8],1,0,'C');


				$celda->Ln();
			}

			$celda->Ln(0);
			$celda->Cell(20);
			$celda->Cell(53, 5, "Cargo:",1,0,'C',1);
			$celda->Cell(53, 5, "Jerarquia:",1,0,'C',1);
			$celda->Cell(53, 5, "Correo:",1,0,'C',1);



			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(53,6,$requerimiento[0][7],1,0,'C');
				$celda->Cell(53,6,$requerimiento[0][29],1,0,'C');
				$celda->Cell(53,6,$requerimiento[0][28],1,0,'C');

				$celda->Ln();
			}



			$celda->Ln(5);
			$celda->Cell(20);			
			$celda->Cell(159,5,'Datos del Despacho:',1,0,'C',1);			
			$celda->Ln();
			$celda->Cell(20);
			

			$celda->Ln(0);
			$celda->Cell(20);
			$celda->Cell(35, 5, "codigo de area:",1,0,'C',1);
			$celda->Cell(35, 5, "numero:",1,0,'C',1);
			$celda->Cell(89, 5, "despacho:",1,0,'C',1);



			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(35,6,$requerimiento[0][10],1,0,'C');
				$celda->Cell(35,6,$requerimiento[0][11],1,0,'C');
				$celda->Cell(89,6,$requerimiento[0][9],1,0,'C');

				$celda->Ln();
			}									

			$celda->Ln(5);
			$celda->Cell(20);			
			$celda->Cell(159,5,utf8_decode('Datos del Técnico:'),1,0,'C',1);			
			$celda->Ln();
			$celda->Cell(20);
			$celda->Cell(79.5, 5, "Credencial:",1,0,'C',1);
			$celda->Cell(79.5, 5, "Nombre y Apellido:",1,0,'C',1);


			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(79.5,6,$requerimiento[0][3],1,0,'C');
				$celda->Cell(79.5,6,$requerimiento[0][4],1,0,'C');


				$celda->Ln();
			}	

			$celda->Ln(5);
			$celda->Cell(20);			
			$celda->Cell(159,5,'Datos del Equipo:',1,0,'C',1);			
			$celda->Ln();
			$celda->Cell(20);
			$celda->Cell(53, 5, "Fecha de Inicio:",1,0,'C',1);
			$celda->Cell(53, 5, "Tipo de Equipo:",1,0,'C',1);
			$celda->Cell(53, 5, "Marca del Equipo:",1,0,'C',1);


			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(53,6,$requerimiento[0][24],1,0,'C');
				$celda->Cell(53,6,$requerimiento[0][12],1,0,'C');
				$celda->Cell(53,6,$requerimiento[0][13],1,0,'C');								


				$celda->Ln();
			}

			$celda->Ln(0);
			$celda->Cell(20);

			$celda->Cell(53, 5, "Modelo:",1,0,'C',1);			
			$celda->Cell(53, 5, "Serial:",1,0,'C',1);
			$celda->Cell(53, 5, "Marca del Procesaor:",1,0,'C',1);				


			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				

				$celda->Cell(53,6,$requerimiento[0][14],1,0,'C');				
				$celda->Cell(53,6,$requerimiento[0][15],1,0,'C');
				$celda->Cell(53,6,$requerimiento[0][19],1,0,'C');


				$celda->Ln();
			}

			$celda->Ln(0);
			$celda->Cell(20);
			$celda->Cell(53, 5, "Pieza Suelta:",1,0,'C',1);			
			$celda->Cell(53, 5, utf8_decode("Pieza dañada:"),1,0,'C',1);
			$celda->Cell(53, 5, "Equipo Rayado:",1,0,'C',1);				


			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(53,6,$requerimiento[0][16],1,0,'C');				
				$celda->Cell(53,6,$requerimiento[0][17],1,0,'C');
				$celda->Cell(53,6,$requerimiento[0][18],1,0,'C');
				$celda->Ln();
			}

			$celda->Ln(0);
			$celda->Cell(20);
			$celda->Cell(53, 5, "Tipo de Memoria Ram:",1,0,'C',1);			
			$celda->Cell(53, 5, "Capacidad de Ram",1,0,'C',1);
			$celda->Cell(53, 5, "Cantidad de memorias:",1,0,'C',1);				


			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(53,6,$requerimiento[0][20],1,0,'C');				
				$celda->Cell(53,6,$requerimiento[0][21],1,0,'C');
				$celda->Cell(53,6,$requerimiento[0][30],1,0,'C');


				$celda->Ln();
			}

			$celda->Ln(0);
			$celda->Cell(20);
			$celda->Cell(53, 5, "Tipo de disco duro:",1,0,'C',1);			
			$celda->Cell(53, 5, "Capacidad de disco duro",1,0,'C',1);
			$celda->Cell(53, 5, "Cantidad de disco duro:",1,0,'C',1);				


			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(53,6,$requerimiento[0][22],1,0,'C');				
				$celda->Cell(53,6,$requerimiento[0][23],1,0,'C');
				$celda->Cell(53,6,$requerimiento[0][31],1,0,'C');


				$celda->Ln();
			}			

			$celda->Ln(0);
			$celda->Cell(20);
			$celda->Cell(53, 5, "FanCooler:",1,0,'C',1);			
			$celda->Cell(53, 5, "Floppy:",1,0,'C',1);
			$celda->Cell(53, 5, "Unidad de DVD/CD:",1,0,'C',1);		
			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(53,6,$requerimiento[0][32],1,0,'C');				
				$celda->Cell(53,6,$requerimiento[0][33],1,0,'C');
				$celda->Cell(53,6,$requerimiento[0][34],1,0,'C');
				$celda->Ln();
			}

			$celda->Ln(0);
			$celda->Cell(20);
			$celda->Cell(53, 5, "Tarjeta de Red:",1,0,'C',1);			
			$celda->Cell(53, 5, "Tarjeta de Video",1,0,'C',1);
			$celda->Cell(53, 5, "Tarjeta de Sonido:",1,0,'C',1);				


			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(53,6,$requerimiento[0][35],1,0,'C');				
				$celda->Cell(53,6,$requerimiento[0][36],1,0,'C');
				$celda->Cell(53,6,$requerimiento[0][37],1,0,'C');


				$celda->Ln();
			}

			$celda->Ln(5);
			$celda->Cell(20);
			$celda->Cell(159, 5, utf8_decode("Descripcion:"),1,0,'C',1);

			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(159,6,$requerimiento[0][26],1,0,'C');
				$celda->Ln();
			}

	
			$celda->Ln(25);
			$celda->Cell(20);
			$celda->Cell(40, 7, "Firma del Analista:",0,0,'C');	
			$celda->Line(30 , 255 , 70, 255);  //Horizontal
			$celda->Cell(180, 7, "Firma del Solicitante:",0,0,'C');
			$celda->Line(140 , 255 , 180, 255);  //Horizontal
			$celda->Ln(0);

			$celda->SetFont('Arial','B',6);
			$celda->Ln(5);
			$celda->Cell(80);
			$celda->Cell(30, 10, utf8_decode("Dirección: Puente Sucre a Puente Hierro, San Agustín del Sur, Edf. Sede Central CICPC, piso 8, Caracas. Correo electronico:"),0,0,'C');
			$celda->Ln(3);
			$celda->Cell(80);			
			$celda->Cell(30,10,'soportedemicro@cicpc.gob.ve -- Telefono IP: 1095',2,0,'C');	

			$celda->output();
		}		

		function pdfsalida($id){

		Session::accessRole(array('Super Usuario Telematica', 'Usuario Telematica'));
			require("C:/xampp/htdocs/siscor_p/libs/fpdf/fpdf.php");
			$d=40;
			$e=80;

			$requerimiento = $this->_ticket->reporte($id);
			$celda= new FPDF();
			$celda->Addpage();
			$celda->SetFillColor(150, 150, 150);

			$celda->Image('C:\xampp\htdocs\siscor_p\libs\fpdf\tutorial\avatar6.png',165,8,28);
			$celda->Image('C:\xampp\htdocs\siscor_p\libs\fpdf\tutorial\mep.png',12,10,28);
			$celda->SetFont('Arial','B',07);
			$celda->Cell(82);
			$celda->Cell(30,10,'REPUBLICA BOLIVARIANA DE VENEZUELA',2,0,'C');
			$celda->Ln(05);
			$celda->Cell(82);
			$celda->Cell(30,10,'MINISTERIO DEL PODER POPULAR PARA LAS RELACIONES INTERIORES, JUSTICIA Y PAZ',2,0,'C');
			$celda->Ln(05);
			$celda->Cell(82);			
			$celda->Cell(30,10,'CUERPO DE INVESTIGACIONES CIENTIFICAS PENALES Y CRIMINALISTICA',2,0,'C');
			$celda->Ln(05);
			$celda->Cell(82);			
			$celda->Cell(30,10,'COORDINACION DE APOYO ADMINISTRATIVO',2,0,'C');
			$celda->Ln(05);
			$celda->Cell(82);			
			$celda->Cell(30,10, utf8_decode ('DIRECCIÓN DE TECNOLOGIA - DIVISIÓN DE TELEMÁTICA'),2,0,'C');
			$celda->Ln(05);
			$celda->Cell(82);	
			$celda->Cell(30,10, utf8_decode('ÁREA DE SOPORTE DE EQUIPOS TECNOLÓGICOS'),2,0,'C');
			$celda->Line(9.5 , 42 , 200, 42);
			$celda->Ln(10);		
			$celda->Cell(30);		
			$celda->Cell(20,10,'CONTROL DE SALIDA DE EQUIPOS:',2,0,'C');
			$celda->Ln(0);		
			$celda->Cell(1);		
			$celda->Cell(310,10,'NUMERO DE CONTROL:',2,0,'C');	
			$celda->Ln(5);	
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(1);
				$celda->Cell(350,0,$requerimiento[0][0],0,0,'C');
				$celda->Ln();
			}

			$celda->Ln(10);
			$celda->Cell(20);			
			$celda->Cell(159,5,'Datos del Solicitante:',1,0,'C',1);			
			$celda->Ln();
			$celda->Cell(20);
			$celda->Cell(53, 5, "Cedula:",1,0,'C',1);
			$celda->Cell(53, 5, "Credencial:",1,0,'C',1);
			$celda->Cell(53, 5, "Nombre y Apellido:",1,0,'C',1);


			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(53,6,$requerimiento[0][5],1,0,'C');
				$celda->Cell(53,6,$requerimiento[0][6],1,0,'C');
				$celda->Cell(53,6,$requerimiento[0][8],1,0,'C');


				$celda->Ln();
			}

			$celda->Ln(0);
			$celda->Cell(20);
			$celda->Cell(53, 5, "Cargo:",1,0,'C',1);
			$celda->Cell(53, 5, "Jerarquia:",1,0,'C',1);
			$celda->Cell(53, 5, "Correo:",1,0,'C',1);



			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(53,6,$requerimiento[0][7],1,0,'C');
				$celda->Cell(53,6,$requerimiento[0][29],1,0,'C');
				$celda->Cell(53,6,$requerimiento[0][28],1,0,'C');

				$celda->Ln();
			}



			$celda->Ln(5);
			$celda->Cell(20);			
			$celda->Cell(159,5,'Datos del Despacho:',1,0,'C',1);			
			$celda->Ln();
			$celda->Cell(20);
			

			$celda->Ln(0);
			$celda->Cell(20);
			$celda->Cell(35, 5, "codigo de area:",1,0,'C',1);
			$celda->Cell(35, 5, "numero:",1,0,'C',1);
			$celda->Cell(89, 5, "despacho:",1,0,'C',1);



			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(35,6,$requerimiento[0][10],1,0,'C');
				$celda->Cell(35,6,$requerimiento[0][11],1,0,'C');
				$celda->Cell(89,6,$requerimiento[0][9],1,0,'C');

				$celda->Ln();
			}											

			$celda->Ln(5);
			$celda->Cell(20);			
			$celda->Cell(160,5,utf8_decode('Datos del Técnico:'),1,0,'C',1);			
			$celda->Ln();
			$celda->Cell(20);
			$celda->Cell(80, 5, "Credencial:",1,0,'C',1);
			$celda->Cell(80, 5, "Nombre y Apellido:",1,0,'C',1);


			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell($e,6,$requerimiento[0][3],1,0,'C');
				$celda->Cell($e,6,$requerimiento[0][4],1,0,'C');


				$celda->Ln();
			}



			$celda->Ln(5);
			$celda->Cell(20);			
			$celda->Cell(160,5,'Datos del Equipo:',1,0,'C',1);			
			$celda->Ln();
			$celda->Cell(20);
			$celda->Cell(80, 5, "Fecha de Inicio:",1,0,'C',1);
			$celda->Cell(80, 5, "Fecha de Culminacion:",1,0,'C',1);


			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell($e,6,$requerimiento[0][24],1,0,'C');
				$celda->Cell($e,6,$requerimiento[0][25],1,0,'C');


				$celda->Ln();
			}

			$celda->Ln(0);
			$celda->Cell(20);
			$celda->Cell(80, 5, "Tipo de Equipo:",1,0,'C',1);			
			$celda->Cell(80, 5, "Marca del Equipo:",1,0,'C',1);
			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell($e,6,$requerimiento[0][12],1,0,'C');				
				$celda->Cell($e,6,$requerimiento[0][13],1,0,'C');


				$celda->Ln();
			}

			$celda->Ln(0);
			$celda->Cell(20);
			$celda->Cell(80, 5, "Modelo:",1,0,'C',1);			
			$celda->Cell(80, 5, "Serial:",1,0,'C',1);
			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell($e,6,$requerimiento[0][14],1,0,'C');				
				$celda->Cell($e,6,$requerimiento[0][15],1,0,'C');


				$celda->Ln();
			}

			$celda->Ln(5);
			$celda->Cell(20);
			$celda->Cell(160, 5, utf8_decode("Descripcion:"),1,0,'C',1);

			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(160,6,$requerimiento[0][26],1,0,'C');
				$celda->Ln();
			}

			$celda->Ln(5);
			$celda->Cell(20);
			$celda->Cell(160, 5, utf8_decode("Solución:"),1,0,'C',1);	

			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(160,6,$requerimiento[0][27],1,0,'C');
				$celda->Ln();
			}


			$celda->Ln(1);
			$celda->Cell(60);
			$celda->Cell(50, 10, utf8_decode("De acuerdo a las políticas de normas de mantenimiento, seguridad y procedimiento del área de Micro "),0,0,'C');

			$celda->Ln(5);
			$celda->Cell(32.5);		
			$celda->Cell(20,10,utf8_decode("Se exime de responsabilidad:"),2,0,'C');	

			$celda->Ln(05);
			$celda->Cell(45.5);
			$celda->Cell(51.5, 10, utf8_decode("1) Si eventuales reparaciones han sido efectuadas por personal no autorizado."),0,0,'C');

			$celda->Ln(5);
			$celda->Cell(65);			
			$celda->Cell(74,10, utf8_decode("2) Por los daños debido a desgastes, causas de fuerza mayor, y/o conexiones con dispositivos no originales, conocimiento y fines"),2,0,'C');

			$celda->Ln(5);
			$celda->Cell(61);			
			$celda->Cell(51.5,10, utf8_decode(" devolución que se hace para su consiguientes, informándole que dicho equipo es un Bien Nacional."),2,0,'C');	
						

			$celda->Ln(32);
			$celda->Cell(20);
			$celda->Cell(40, 7, "Firma del Analista:",0,0,'C');	
			$celda->Line(30 , 255 , 70, 255);  //Horizontal
			$celda->Cell(180, 7, "Firma del Solicitante:",0,0,'C');
			$celda->Line(140 , 255 , 180, 255);  //Horizontal
			$celda->Ln(0);

			$celda->SetFont('Arial','B',6);
			$celda->Ln(5);
			$celda->Cell(80);
			$celda->Cell(30, 10, utf8_decode("Dirección: Puente Sucre a Puente Hierro, San Agustín del Sur, Edf. Sede Central CICPC, piso 8, Caracas. Correo electronico:"),0,0,'C');
			$celda->Ln(3);
			$celda->Cell(80);			
			$celda->Cell(30,10,'soportedemicro@cicpc.gob.ve -- Telefono IP: 1095',2,0,'C');	
	
			$celda->Ln(10);
			$celda->output();
		}

		function pdfsoporte($id){

		Session::accessRole(array('Super Usuario Telematica', 'Usuario Telematica'));
			require("C:/xampp/htdocs/siscor_p/libs/fpdf/fpdf.php");
			$d=40;
			$e=80;

			$requerimiento = $this->_ticket->reportesoporte($id);
			$celda= new FPDF();
			$celda->Addpage();
			$celda->SetFillColor(150, 150, 150);

			$celda->Image('C:\xampp\htdocs\siscor_p\libs\fpdf\tutorial\avatar6.png',165,8,28);
			$celda->Image('C:\xampp\htdocs\siscor_p\libs\fpdf\tutorial\mep.png',12,10,28);
			$celda->SetFont('Arial','B',07);
			$celda->Cell(82);
			$celda->Cell(30,10,'REPUBLICA BOLIVARIANA DE VENEZUELA',2,0,'C');
			$celda->Ln(05);
			$celda->Cell(82);
			$celda->Cell(30,10,'MINISTERIO DEL PODER POPULAR PARA LAS RELACIONES INTERIORES, JUSTICIA Y PAZ',2,0,'C');
			$celda->Ln(05);
			$celda->Cell(82);			
			$celda->Cell(30,10,'CUERPO DE INVESTIGACIONES CIENTIFICAS PENALES Y CRIMINALISTICA',2,0,'C');
			$celda->Ln(05);
			$celda->Cell(82);			
			$celda->Cell(30,10,'COORDINACION DE APOYO ADMINISTRATIVO',2,0,'C');
			$celda->Ln(05);
			$celda->Cell(82);			
			$celda->Cell(30,10, utf8_decode ('DIRECCIÓN DE TECNOLOGÍA - DIVISIÓN DE TELEMÁTICA'),2,0,'C');
			$celda->Ln(05);
			$celda->Cell(82);	
			$celda->Cell(30,10,utf8_decode('ÁREA DE SERVICIOS'),2,0,'C');
			$celda->Line(9.5 , 42 , 200, 42);
			$celda->Ln(10);		
			$celda->Cell(30);		
			$celda->Cell(20,10,'CONTROL DE REQUERIMIENTOS:',2,0,'C');
			$celda->Ln(0);		
			$celda->Cell(1);		
			$celda->Cell(310,10,'NUMERO DE CONTROL:',2,0,'C');	
			$celda->Ln(5);	
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(1);
				$celda->Cell(350,0,$requerimiento[0][0],0,0,'C');
				$celda->Ln();
			}

			$celda->Ln(10);
			$celda->Cell(20);			
			$celda->Cell(159,5,'Datos del Solicitante:',1,0,'C',1);			
			$celda->Ln();
			$celda->Cell(20);
			$celda->Cell(53, 5, "Cedula:",1,0,'C',1);
			$celda->Cell(53, 5, "Credencial:",1,0,'C',1);
			$celda->Cell(53, 5, "Nombre y Apellido:",1,0,'C',1);


			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(53,6,$requerimiento[0][5],1,0,'C');
				$celda->Cell(53,6,$requerimiento[0][6],1,0,'C');
				$celda->Cell(53,6,$requerimiento[0][4],1,0,'C');


				$celda->Ln();
			}

			$celda->Ln(0);
			$celda->Cell(20);
			$celda->Cell(53, 5, "Cargo:",1,0,'C',1);
			$celda->Cell(53, 5, "Jerarquia:",1,0,'C',1);
			$celda->Cell(53, 5, "Correo:",1,0,'C',1);



			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(53,6,$requerimiento[0][7],1,0,'C');
				$celda->Cell(53,6,$requerimiento[0][8],1,0,'C');
				$celda->Cell(53,6,$requerimiento[0][9],1,0,'C');

				$celda->Ln();
			}



			$celda->Ln(5);
			$celda->Cell(20);			
			$celda->Cell(159,5,'Datos del Despacho:',1,0,'C',1);			
			$celda->Ln();
			$celda->Cell(20);

			$celda->Ln(0);
			$celda->Cell(20);
			$celda->Cell(35, 5, "codigo de area:",1,0,'C',1);
			$celda->Cell(35, 5, "numero:",1,0,'C',1);
			$celda->Cell(89, 5, "despacho:",1,0,'C',1);



			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(35,6,$requerimiento[0][10],1,0,'C');
				$celda->Cell(35,6,$requerimiento[0][11],1,0,'C');
				$celda->Cell(89,6,$requerimiento[0][12],1,0,'C');

				$celda->Ln();
			}											

			$celda->Ln(5);
			$celda->Cell(20);			
			$celda->Cell(160,5,utf8_decode('Datos del Técnico:'),1,0,'C',1);			
			$celda->Ln();
			$celda->Cell(20);
			$celda->Cell(80, 5, "Credencial:",1,0,'C',1);
			$celda->Cell(80, 5, "Nombre y Apellido:",1,0,'C',1);


			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell($e,6,$requerimiento[0][2],1,0,'C');
				$celda->Cell($e,6,$requerimiento[0][3],1,0,'C');


				$celda->Ln();
			}



			$celda->Ln(5);
			$celda->Cell(20);			
			$celda->Cell(160,5,'Datos del Requerimiento:',1,0,'C',1);			
			$celda->Ln();
			$celda->Cell(20);
			$celda->Cell(80, 5, "Fecha de Inicio:",1,0,'C',1);
			$celda->Cell(80, 5, "Fecha de Culminacion:",1,0,'C',1);


			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell($e,6,$requerimiento[0][14],1,0,'C');
				$celda->Cell($e,6,$requerimiento[0][15],1,0,'C');


				$celda->Ln();
			}

			$celda->Ln(5);
			$celda->Cell(20);
			$celda->Cell(160, 5, utf8_decode("Tipo de Requerimiento:"),1,0,'C',1);

			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(160,6,$requerimiento[0][10],1,0,'C');
				$celda->Ln();
			}			

			$celda->Ln(5);
			$celda->Cell(20);
			$celda->Cell(160, 5, utf8_decode("Descripción:"),1,0,'C',1);

			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(160,6,$requerimiento[0][16],1,0,'C');
				$celda->Ln();
			}

			$celda->Ln(5);
			$celda->Cell(20);
			$celda->Cell(160, 5, utf8_decode("Observación:"),1,0,'C',1);

			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(160,6,$requerimiento[0][17],1,0,'C');
				$celda->Ln();
			}			

			$celda->Ln(5);
			$celda->Cell(20);
			$celda->Cell(160, 5, utf8_decode("Solución:"),1,0,'C',1);	

			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(160,6,$requerimiento[0][18],1,0,'C');
				$celda->Ln();
			}					

			$celda->Ln(40);
			$celda->Cell(20);
			$celda->Cell(40, 7, "Firma del Analista:",0,0,'C');	
			$celda->Line(30 , 255 , 70, 255);  //Horizontal
			$celda->Cell(180, 7, "Firma del Solicitante:",0,0,'C');
			$celda->Line(140 , 255 , 180, 255);  //Horizontal
			$celda->Ln(0);

			$celda->SetFont('Arial','B',6);
			$celda->Ln(5);
			$celda->Cell(80);
			// $celda->Cell(30, 10, utf8_decode("Dirección: Puente Sucre a Puente Hierro, San Agustín del Sur, Edf. Sede Central CICPC, piso 8, Caracas. Correo electronico:"),0,0,'C');
			// $celda->Ln(3);
			// $celda->Cell(80);			
			// $celda->Cell(30,10,'soportedemicro@cicpc.gob.ve -- Telefono IP: 1095',2,0,'C');	
	
			$celda->Ln(10);
			$celda->output();
		}

}?>