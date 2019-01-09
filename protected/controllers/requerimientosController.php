<?php 
	class requerimientosController extends Controller{
		
		
		protected $_sidebar_menu;
		private $_person;
		
		public function __construct(){
	
			parent::__construct();
			$this->_reque = $this->loadModel('requerimientos');
			
		//Objeto donde almacenamos todas las funciones de PersonsModel.php
			$this->_view->setJS(array('js/requerimientos/requerimientos'));
			$this->_view->setJS(array('js/val'));
			$this->_view->setJS(array('js/valreque'));
		
			$this->_sidebar_menu =array(
					array(
				'id' => 'ini',
				'title' => 'Inicio',
				'link' => BASE_URL . 'requerimientos' . DS . 'index'
						)
									);//fin sidebar
		}
		
		function index(){
		
			
			$this->_view->render('index', 'requerimientos', '',$this->_sidebar_menu);
			// clase  metodo 	  vista    carpeta dentro de views 
		}

		function nuevorequerimiento($id= false){

			Session::accessRole(array('Usuario Sistemas'));
			if($_SERVER['REQUEST_METHOD']=='POST'){
				$requerimiento = array(
				':cod_area' => $_POST['cod_area'] ,
				':numero_tel_requerimiento' => $_POST['numero_tel_requerimiento'],
				':areac' => $_POST['areac'],				
				':tipo_de_solicitud' => $_POST['tipo_de_solicitud'] ,
				':numero' => $_POST['numero'] ,						
				':fecha_documento' => $_POST['fecha_documento'] ,
				':tipo_de_requerimiento' => $_POST['tipo_de_requerimiento'] ,			
				':status' => $_POST['status'] ,
				':descripcion' => $_POST['descripcion'] ,	
				':Modulo' => $_POST['Modulo']		
			);
				$requerimiento_has_persona = array(
				':persona' => $_POST['persona']
			);
				$requerimiento_analista = array(
			);
				$requerimientos_supervisor = array(
			);
			$this->_reque->insertRequerimiento($requerimiento, $requerimiento_has_persona, $requerimiento_analista, $requerimientos_supervisor);
			$this->_view->redirect('requerimientos/totalrequerimiento');			
			}else{
				$persona = $this->_reque->REGperson($id);
				$this->_view->_persona = $persona;
				$this->_view->render('nuevorequerimiento', 'requerimientos', '',$this->_sidebar_menu);
			}				
		}

		function nuevorequerimiento_js($id = true){
			Session::accessRole(array('Super Usuario Sistemas'));
			$session=session::get('persona_id');

			if($_SERVER['REQUEST_METHOD']=='POST'){
				$requerimiento = array(
				':cod_area' => $_POST['cod_area'] ,
				':numero_tel_requerimiento' => $_POST['numero_tel_requerimiento'],
				':areac' => $_POST['areac'],				
				':tipo_de_solicitud' => $_POST['tipo_de_solicitud'] ,
				':numero' => $_POST['numero'] ,						
				':fecha_documento' => $_POST['fecha_documento'] ,
				':tipo_de_requerimiento' => $_POST['tipo_de_requerimiento'] ,			
				':status' => $_POST['status'] ,
				':descripcion' => $_POST['descripcion'] ,
				':Modulo' => $_POST['Modulo']				
			);		
	
				$requerimientos_supervisor = array(
				':persona_s' => $_POST['persona_s']			
			);
				$requerimiento_has_persona = array(
				':persona' => $_POST['persona']
			);
				$requerimiento_analista = array(
				
			);

			$this->_reque->insertRequerimiento_js($requerimiento, $requerimientos_supervisor, $requerimiento_has_persona, $requerimiento_analista);
			$this->_view->redirect('requerimientos/totalrequerimiento');			
			}else{
				$persona = $this->_reque->REGperson($id);
				$this->_view->_persona = $persona;
				$this->_view->render('nuevorequerimiento_js', 'requerimientos', '',$this->_sidebar_menu);
			}				
		}

		function nuevorequerimientos(){
			
			Session::accessRole(array('Usuario Sistemas'));

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
				$requerimiento = array(
				':cod_area' => $_POST['cod_area'] ,
				':numero_tel_requerimiento' => $_POST['numero_tel_requerimiento'],
				':areac' => $_POST['areac'],				
				':tipo_de_solicitud' => $_POST['tipo_de_solicitud'] ,
				':numero' => $_POST['numero'] ,						
				':fecha_documento' => $_POST['fecha_documento'] ,
				':tipo_de_requerimiento' => $_POST['tipo_de_requerimiento'] ,			
				':status' => $_POST['status'] ,
				':descripcion' => $_POST['descripcion'] ,	

				':Modulo' => $_POST['Modulo']						
			);
				$requerimientos_supervisor = array(

			);				
				$requerimiento_has_persona = array(

			);
				$requerimiento_analista = array(
					
			);
				// var_dump($requerimiento_has_persona);
				// die();
			$this->_reque->insert($persona, $requerimiento, $requerimientos_supervisor, $requerimiento_has_persona,$requerimiento_analista);
			$this->_view->redirect('requerimientos/totalrequerimiento');			
			}else{
				$this->_view->render('nuevorequerimientos', 'requerimientos', '',$this->_sidebar_menu);
			}				
		}		

		function nuevos_requerimientos_js(){
			Session::accessRole(array('Super Usuario Sistemas'));
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
				$requerimiento = array(
				':cod_area' => $_POST['cod_area'] ,
				':numero_tel_requerimiento' => $_POST['numero_tel_requerimiento'],
				':areac' => $_POST['areac'],				
				':tipo_de_solicitud' => $_POST['tipo_de_solicitud'] ,
				':numero' => $_POST['numero'] ,						
				':fecha_documento' => $_POST['fecha_documento'] ,
				':tipo_de_requerimiento' => $_POST['tipo_de_requerimiento'] ,			
				':status' => $_POST['status'] ,
				':descripcion' => $_POST['descripcion'] ,	
				':solucion' => $_POST['solucion'] ,
				':observaciones' => $_POST['observaciones'],
				':Modulo' => $_POST['Modulo']					
			);				
				$requerimientos_supervisor = array(
				':persona_s' => $_POST['persona_s']			
			);
				$requerimiento_has_persona = array(

			);
				$requerimiento_analista = array(
			);
			$this->_reque->insert_js($persona, $requerimiento, $requerimientos_supervisor, $requerimiento_has_persona, $requerimiento_analista);
			$this->_view->redirect('requerimientos/totalrequerimiento');			
			}else{
				$this->_view->render('nuevos_requerimientos_js', 'requerimientos', '',$this->_sidebar_menu);
			}				
		}

		function readrequerimiento(){
		Session::accessRole(array('Super Usuario Sistemas','Usuario Sistemas'));
			$lista = $this->_reque->listarrequerimientos();
			$this->_view->_lista = $lista;
			$this->_view->render('readrequerimiento','requerimientos','',$this->_sidebar_menu);
		}


		function totalrequerimiento(){
		Session::accessRole(array('Super Usuario Sistemas','Usuario Sistemas'));
			$lista = $this->_reque->totalrequeri();
			$this->_view->_lista = $lista;
			$this->_view->render('totalrequerimiento','requerimientos','',$this->_sidebar_menu);
		}			

		function funcionarios(){
		Session::accessRole(array('Super Usuario Sistemas','Usuario Sistemas'));
			$lista = $this->_reque->getFuncionarios();
			$this->_view->_lista = $lista;
			$this->_view->render('funcionarios','requerimientos','',$this->_sidebar_menu);

		}

		function viewrequerimiento($id = false){
		Session::accessRole(array('Super Usuario Sistemas','Usuario Sistemas'));
			$requerimiento = $this->_reque->getRequerimiento($id);
			$this->_view->_requerimiento = $requerimiento;
			$this->_view->render('viewrequerimiento','requerimientos','',$this->_sidebar_menu);
		}
	

		function updaterequerimiento($id= false){

			Session::accessRole(array('Super Usuario Sistemas','Usuario Sistemas'));
			if($_SERVER['REQUEST_METHOD']=='POST'){

				$requerimiento = array(

				':id' => $_POST['id'] ,
				'cod_area' => $_POST['cod_area'],
				'numero_tel_requerimiento' => $_POST['numero_tel_requerimiento'],
				':areac' => $_POST['areac'],				
				':tipo_de_solicitud' => $_POST['tipo_de_solicitud'] ,
				':numero' => $_POST['numero'],						
				':fecha_documento' => $_POST['fecha_documento'],
				'fecha_culm' => $_POST['fecha_culm'],
				':tipo_de_requerimiento' => $_POST['tipo_de_requerimiento'],	
				':status' => $_POST['status'],
				':descripcion' => $_POST['descripcion'],	
				':solucion' => $_POST['solucion'],
				':observaciones' => $_POST['observaciones'],
				':Modulo' => $_POST['Modulo']

				);

			$this->_reque->updateRequerimiento($requerimiento);

			//this->_view->redirect('requerimientos/updateRequerimiento/'.$requerimiento[':id']);
			$this->_view->redirect('requerimientos/readrequerimiento');


			}else{

				$requerimiento = $this->_reque->getRequerimiento($id);
				$this->_view->_requerimiento = $requerimiento;
				$this->_view->render('updaterequerimiento','requerimientos','','');
			}

		}

		function asrequerimiento($id= false){
		Session::accessRole(array('Super Usuario Sistemas'));			

			if ($_SERVER['REQUEST_METHOD']=='POST') {

				$requerimientos_supervisor = array(

				':id'                       => $_POST['id'],
				':persona_s'                => $_POST['persona_s']

			);
				$this->_reque->updateasr($requerimientos_supervisor);
				$this->_view->redirect('requerimientos/totalrequerimiento');
			}else{
			$requerimiento = $this->_reque->requerimientoas($id);
			$this->_view->_requerimiento = $requerimiento;
			$this->_view->render('asrequerimiento', 'requerimientos', '',$this->_sidebar_menu);
			}
		}			

		function delete($id){
		Session::accessRole(array('Super Usuario Sistemas','Usuario Sistemas'));
			$this->_reque->deleterequerimientos($id);
			$this->_view->redirect('requerimientos/totalrequerimiento');
		}

			function pdf($id){

			Session::accessRole(array('Super Usuario Sistemas','Usuario Sistemas'));
			require("C:/xampp/htdocs/siscor_p/libs/fpdf/fpdf.php");
			$d=40;
			$e=82.5;

			$requerimiento = $this->_reque->Reporte($id);
			$celda= new FPDF();
			$celda->SetFillColor(150, 150, 150);

			$celda->Addpage();

			$celda->Image('C:\xampp\htdocs\siscor_p\libs\fpdf\tutorial\avatar6.png',165,8,24);
			$celda->Image('C:\xampp\htdocs\siscor_p\libs\fpdf\tutorial\mep.png',12,10,24);
			$celda->SetFont('Arial','B', 07);
			$celda->Cell(82);
			$celda->Cell(30,10, utf8_decode('REPÚBLICA BOLIVARIANA DE VENEZUELA'),2,0,'C');
			$celda->Ln(3.5);
			$celda->Cell(82);
			$celda->Cell(30,10,'MINISTERIO DEL PODER POPULAR PARA LAS RELACIONES INTERIORES, JUSTICIA Y PAZ',2,0,'C');
			$celda->Ln(3.5);
			$celda->Cell(82);			
			$celda->Cell(30,10,utf8_decode('CUERPO DE INVESTIGACIONES CIENTÍFICAS, PENALES Y CRIMINALÍSTICA'),2,0,'C');
			$celda->Ln(3.5);
			$celda->Cell(82);			
			$celda->Cell(30,10,utf8_decode('COORDINACIÓN DE APOYO ADMINISTRATIVO'),2,0,'C');
			$celda->Ln(3.5);
			$celda->Cell(82);			
			$celda->Cell(30,10, utf8_decode ('DIRECCIÓN DE TECNOLOGÍA - DIVISIÓN DE SISTEMA'),2,0,'C');
			$celda->Line(9.5 , 32.5 , 200, 32.5);
			$celda->Ln(8);
			$celda->Cell(82);			
			$celda->Cell(30,10,'REQUERIMIENTO',2,0,'C');
			$celda->Line(95.5, 51 , 118, 51);


			$celda->Ln(10);
			$celda->Cell(15);			
			$celda->Cell(165,5,'Datos del Solicitante:',1,0,'C',1);			
			$celda->Ln();
			$celda->Cell(15);
			$celda->Cell(55, 5, "Cedula:",1,0,'C',1);
			$celda->Cell(55, 5, "Credencial:",1,0,'C',1);
			$celda->Cell(55, 5, "Nombre y Apellido:",1,0,'C',1);


			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(15);
				$celda->Cell(55,6,$requerimiento[0][1],1,0,'C');
				$celda->Cell(55,6,$requerimiento[0][2],1,0,'C');
				$celda->Cell(55,6,$requerimiento[0][4],1,0,'C');


				$celda->Ln();
			}

			$celda->Ln(0);
			$celda->Cell(15);
			$celda->Cell(55, 5, "Cargo:",1,0,'C',1);
			$celda->Cell(55, 5, "Jerarquia:",1,0,'C',1);
			$celda->Cell(55, 5, "Correo:",1,0,'C',1);



			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(15);
				$celda->Cell(55,6,$requerimiento[0][10],1,0,'C');
				$celda->Cell(55,6,$requerimiento[0][11],1,0,'C');
				$celda->Cell(55,6,$requerimiento[0][9],1,0,'C');

				$celda->Ln();
			}

			$celda->Ln(0);
			$celda->Cell(15);
			$celda->Cell(55, 5, "Codigo de area:",1,0,'C',1);
			$celda->Cell(55, 5, "Numero de telefono:",1,0,'C',1);
			$celda->Cell(55, 5, "Despacho:",1,0,'C',1);



			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(15);
				$celda->Cell(55,6,$requerimiento[0][7],1,0,'C');
				$celda->Cell(55,6,$requerimiento[0][8],1,0,'C');
				$celda->Cell(55,6,$requerimiento[0][12],1,0,'C');



				$celda->Ln();
			}			

			$celda->Ln(8);
			$celda->Cell(15);			
			$celda->Cell(165,5,'Datos del Supervisor:',1,0,'C',1);			
			$celda->Ln();
			$celda->Cell(15);

			$celda->Cell(82.5, 5, "Credencial:",1,0,'C',1);
			$celda->Cell(82.5, 5, "Nombre y Apellido:",1,0,'C',1);


			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(15);
				$celda->Cell($e,6,$requerimiento[0][3],1,0,'C');
				$celda->Cell($e,6,$requerimiento[0][6],1,0,'C');

				$celda->Ln();
			}		

			$celda->Ln(8);
			$celda->Cell(15);			
			$celda->Cell(165,5,'Datos del Requerimiento:',1,0,'C',1);
			$celda->Ln();
			$celda->Cell(15);
			$celda->Cell(82.5, 5, "Fecha del Requerimiento:",1,0,'C',1);
			$celda->Cell(82.5, 5, "Fecha del Documento:",1,0,'C',1);		




			$celda->Ln();
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(15);
				$celda->Cell($e,6,$requerimiento[0][13],1,0,'C');
				$celda->Cell($e,6,$requerimiento[0][17],1,0,'C');
			

				$celda->Ln();
			}

			$celda->Ln(0);
			$celda->Cell(15);
			$celda->Cell(82.5, 5, "Fecha de Culminacion:",1,0,'C',1);			
			$celda->Cell(82.5, 5, "Tipo de Solicitud:",1,0,'C',1);	



			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(15);
				$celda->Cell($e,6,$requerimiento[0][16],1,0,'C');				
				$celda->Cell($e,6,$requerimiento[0][14],1,0,'C');


				$celda->Ln();
			}
			$celda->Ln(0);
			$celda->Cell(15);
			$celda->Cell(82.5, 5, "Tipo de Requerimiento:",1,0,'C',1);			
			$celda->Cell(82.5, 5, "Status:",1,0,'C',1);	



			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(15);
				$celda->Cell($e,6,$requerimiento[0][18],1,0,'C');				
				$celda->Cell($e,6,$requerimiento[0][19],1,0,'C');


				$celda->Ln();
			}

			$celda->Ln(0);
			$celda->Cell(15);
			$celda->Cell(82.5, 5, "Sistema:",1,0,'C',1);			
			$celda->Cell(82.5, 5, "Modulo:",1,0,'C',1);	



			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(15);
				$celda->Cell($e,6,$requerimiento[0][23],1,0,'C');				
				$celda->Cell($e,6,$requerimiento[0][24],1,0,'C');


				$celda->Ln();
			}						

			$celda->Ln(10);
			$celda->Cell(15);
			$celda->Cell(165, 5, utf8_decode("Descripción:"),1,0,'C',1);

			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(15);
				$celda->MultiCell(165,6,$requerimiento[0][20],1,1);
				$celda->Ln();
			}

			//$celda->Sety(200);

			$celda->Ln();
			$celda->Cell(15);
			$celda->Cell(165, 5, "Solucion:",1,0,'C',1);	

			$celda->Ln();

			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(15);
				$celda->Cell(165,6,$requerimiento[0][21],1,0,'C');
				$celda->Ln();
			}		

//$celda->SetY(265);
			$celda->Ln();
			$celda->Cell(15);
			$celda->Cell(165, 5, "Observaciones:",1,0,'C',1);	

			$celda->Ln();
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(15);
				$celda->cell(165,6,$requerimiento[0][22],1,0,'C');
				$celda->Ln();
			}	
			


			// $celda->SetY(265);
			// // Arial italic 8
			// //$celda->SetFont('Arial','I',8);
			// // Número de página
			// //$celda->Cell(0,10,''.$celda->PageNo(),0,0,'C');

			// $celda->Ln(2);
			// $celda->Cell(20);
			// $celda->Cell(40, 7, "Firma del Analista:",0,0,'C');	
			// $celda->Line(30 , 260 , 70, 260);  //Horizontal
			// $celda->Cell(180, 7, "Firma del Solicitante:",0,0,'C');
			// $celda->Line(140 , 260 , 180, 260);  //Horizontal
			// $celda->Ln(10);

			$celda->output();
		}		



}?>