<?php 
	class reportesController extends Controller{
		
		
		protected $_sidebar_menu;
		private $_reportes_pdf;
		
		public function __construct(){
	
			parent::__construct();
			$this->_reportes = $this->loadModel('reportes');

		//Objeto donde almacenamos todas las funciones de PersonsModel.php
		$this->_view->setJS(array('js/requerimientos/requerimientos'));
		$this->_view->setJS(array('js/requerimientoval'));
		
		}
		
		function index(){
		
			
			$this->_view->render('index', 'reportes', '',$this->_sidebar_menu);
			// clase  metodo 	  vista    carpeta dentro de views 
		}

// REPORTES POR DESPACHO EN LA DIVISION DE SISTEMAS

		function reportes_periodo_sistemas(){
		Session::accessRole(array('Super Usuario Sistemas','Usuario Sistemas'));	
			$lista = $this->_reportes->reportes_periodo_sistemas();
			$this->_view->_lista = $lista;
			$this->_view->render('reportes_periodo_sistemas', 'reportes','',$this->_sidebar_menu);
		}

		function reportes_mes_sistemas($periodo = false){
		Session::accessRole(array('Super Usuario Sistemas','Usuario Sistemas'));			
			$lista = $this->_reportes->reportes_mes_sistemas($periodo);
			$this->_view->_lista = $lista;
			$this->_view->render('reportes_mes_sistemas', 'reportes');
		}
		function reportes_pdf_sistemas_detallados($mes,$periodo){
			// echo $mes.' '.$periodo;die;	
			Session::accessRole(array('Super Usuario Sistemas','Usuario Sistemas'));
			require("C:/xampp/htdocs/siger/libs/fpdf/fpdf.php");
			$requerimiento = $this->_reportes->reportes_pdf_sistemas_detallados($mes, $periodo);
			$total = $this->_reportes->total_reportes_pdf_sistemas($mes, $periodo);

			$celda= new FPDF();
			$celda->Addpage();
			$celda->SetFillColor(150, 150, 150);
			$celda->Image('C:\xampp\htdocs\siger\libs\fpdf\tutorial\avatar6.png',165,8,28);
			$celda->Image('C:\xampp\htdocs\siger\libs\fpdf\tutorial\mep.png',12,10,28);
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
			$celda->Cell(30,10, utf8_decode ('DIRECCIÓN DE TECNOLOGIA - DIVISIÓN DE SISTEMAS'),2,0,'C');
			$celda->Line(9.5 , 38 , 200, 38);
			$celda->Ln(10);				
			$celda->Cell(82);
			// $celda->Cell(40,10,date('d/m/Y'),0,1,'L');		
			$celda->Cell(30,10,utf8_decode('REPORTES POR DESPACHO DE:'),2,0,'C');
			$celda->Ln(5);		
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(1);
				$celda->Cell(250,0,$requerimiento[0][5],0,0,'C');				
				$celda->Ln();
			}
			$celda->Ln(0);		
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(1);
				$celda->Cell(270,0,$requerimiento[0][2],0,0,'C');				
				$celda->Ln();
			}

			$celda->Ln(10);
			$celda->Cell(20);			
			$celda->Cell(159,5,'Reportes: ',1,0,'C',1);			
			$celda->Ln();
			$celda->Cell(20);	
			$celda->Cell(140,6, "Despacho:",1,0,'C',1);
			$celda->Cell(19,6, "Cant: :",1,0,'C',1);
			$celda->Ln();
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(140,6,$requerimiento[$i][1],1,0,'C');				
				$celda->Cell(19,6,$requerimiento[$i][4],1,0,'C');
				$celda->Ln();
			}
			$celda->Ln(0);
			$celda->Cell(20);			
			$celda->Cell(140,6, "Total: ",1,0,'C',1);			
			$celda->Cell(19,6,$total[0][3],1,0,'C',1);	
			$celda->output();

			
		}		

// REPORTES POR DESPACHO EN LA DIVISION DE SISTEMAS

// REPORTES POR SUPERVISOR EN LA DIVISION DE SISTEMAS ->


		function reportes_por_supervisor_sistemas(){
		Session::accessRole(array('Super Usuario Sistemas','Usuario Sistemas'));
			$lista = $this->_reportes->reportes_periodo_sistemas();
			$this->_view->_lista = $lista;
			$this->_view->render('reportes_por_supervisor_sistemas', 'reportes','',$this->_sidebar_menu);
		}

		function reportes_sin_procesar($periodo = false){
		Session::accessRole(array('Super Usuario Sistemas','Usuario Sistemas'));			
			$lista = $this->_reportes->reportes_sin_procesar($periodo);
			$this->_view->_lista = $lista;
			$this->_view->render('reportes_sin_procesar', 'reportes');
		}		

		function reportes_en_proceso($periodo = false){
		Session::accessRole(array('Super Usuario Sistemas','Usuario Sistemas'));		
			$lista = $this->_reportes->reportes_en_proceso($periodo);
			$this->_view->_lista = $lista;
			$this->_view->render('reportes_en_proceso', 'reportes');
		}

		function reportes_procesado($periodo = false){
		Session::accessRole(array('Super Usuario Sistemas','Usuario Sistemas'));		
			$lista = $this->_reportes->reportes_procesado($periodo);
			$this->_view->_lista = $lista;
			$this->_view->render('reportes_procesado', 'reportes');
		}

		function pdf_reporte_supervisor_sistemas($mes,$periodo, $status){
			// echo $mes.' '.$periodo;die;	
			Session::accessRole(array('Super Usuario Sistemas','Usuario Sistemas'));
			require("C:/xampp/htdocs/siger/libs/fpdf/fpdf.php");
			$total = $this->_reportes->pdf_total_sistemas_supervisor($mes, $periodo, $status);
			$requerimiento = $this->_reportes->pdf_reporte_supervisor_sistemas($mes, $periodo, $status);

			$celda= new FPDF();
			$celda->Addpage();
			$celda->SetFillColor(150, 150, 150);
			$celda->Image('C:\xampp\htdocs\siger\libs\fpdf\tutorial\avatar6.png',165,8,28);
			$celda->Image('C:\xampp\htdocs\siger\libs\fpdf\tutorial\mep.png',12,10,28);
			$celda->SetFont('Arial','B',07);
			$celda->Cell(82);
			$celda->Cell(30,10,'REPUBLICA BOLIVARIANA DE VENEZUELA',2,0,'C');
			$celda->Ln(05);
			$celda->Cell(82);
			$celda->Cell(30,10,'MINISTERIO DEL PODER POPULAR PARA LAS RELACIONES INTERIORES, JUSTICIA Y PAZ',2,0,'C');
			$celda->Ln(05);
			$celda->Cell(82);			
			$celda->Cell(30,10,utf8_decode('CUERPO DE INVESTIGACIONES CIENTÍFICAS PENALES Y CRIMINALÍSTICA'),2,0,'C');
			$celda->Ln(05);
			$celda->Cell(82);			
			$celda->Cell(30,10,utf8_decode('COORDINACIÓN DE APOYO ADMINISTRATIVO'),2,0,'C');
			$celda->Ln(05);
			$celda->Cell(82);			
			$celda->Cell(30,10, utf8_decode ('DIRECCIÓN DE TECNOLOGIA - DIVISIÓN DE SISTEMAS'),2,0,'C');
		
			$celda->Line(9.5 , 38 , 200, 38);
			$celda->Ln(12);				
			$celda->Cell(80);		
			$celda->Cell(30,10,utf8_decode('REPORTES DE SUPERVISORES DURANTE EL MES:'),2,0,'C');
			$celda->Ln(5);		
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(1);
				$celda->Cell(265,0,$requerimiento[0][9],0,0,'C');				
				$celda->Ln();
			}
			$celda->Ln(0);		
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(1);
				$celda->Cell(290,0,$requerimiento[0][6],0,0,'C');				
				$celda->Ln();
			}
			$celda->Ln(10);				
			$celda->Cell(10);		
			$celda->Cell(30,10,utf8_decode('Status:'),2,0,'C');
			$celda->Ln(5);		
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(1);
				$celda->Cell(80,0,$total[0][1],0,0,'C');				
				$celda->Ln();
			}
			$celda->Ln(0);		


			$celda->Ln(10);
			$celda->Cell(20);			
			$celda->Cell(159,5,'Reportes: ',1,0,'C',1);			
			$celda->Ln();
			$celda->Cell(20);
			$celda->Cell(20,6, utf8_decode("Credencial: "),1,0,'C',1);
			$celda->Cell(120,6, utf8_decode("Técnico: "),1,0,'C',1);
			$celda->Cell(19,6, "Cant: :",1,0,'C',1);
			$celda->Ln();
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(20,6,$requerimiento[$i][3],1,0,'C');
				$celda->Cell(120,6,$requerimiento[$i][4],1,0,'C');			
				$celda->Cell(19,6,$requerimiento[$i][8],1,0,'C');
				$celda->Ln();
			}
			$celda->Ln(0);
			$celda->Cell(20);			
			$celda->Cell(140,6, "Total: ",1,0,'C',1);			
			$celda->Cell(19,6,$total[0][4],1,0,'C',1);	
			$celda->output();

		}


// REPORTES POR SUPERVISOR EN LA DIVISION DE SISTEMAS <-


// REPORTES POR DESPACHO DEL AREA DE SOPORTE DE EQUIPOS TECNOLOGICOS

		function rperiododesp(){
		Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));	
			$lista = $this->_reportes->rperiodo();
			$this->_view->_lista = $lista;
			$this->_view->render('rperiododesp', 'reportes','',$this->_sidebar_menu);
		}

		function rmesdesp($periodo = false){
		Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));			
			$lista = $this->_reportes->rmesdesp($periodo);
			$this->_view->_lista = $lista;
			$this->_view->render('rmesdesp', 'reportes');
		}

		function rdetalladodespacho($mes,$periodo){
			// echo $mes.' '.$periodo;die;	
			require("C:/xampp/htdocs/siger/libs/fpdf/fpdf.php");
			$requerimiento = $this->_reportes->rdetalladodesp($mes, $periodo);
			$total = $this->_reportes->totalrdetalladodesp($mes, $periodo);

			$celda= new FPDF();
			$celda->Addpage();
			$celda->SetFillColor(150, 150, 150);
			$celda->Image('C:\xampp\htdocs\siger\libs\fpdf\tutorial\avatar6.png',165,8,28);
			$celda->Image('C:\xampp\htdocs\siger\libs\fpdf\tutorial\mep.png',12,10,28);
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
			$celda->Cell(82);		
			$celda->Cell(30,10,utf8_decode('REPORTES POR DESPACHO DE:'),2,0,'C');
			$celda->Ln(5);		
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(1);
				$celda->Cell(250,0,$requerimiento[0][5],0,0,'C');				
				$celda->Ln();
			}
			$celda->Ln(0);		
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(1);
				$celda->Cell(270,0,$requerimiento[0][2],0,0,'C');				
				$celda->Ln();
			}

			$celda->Ln(10);
			$celda->Cell(20);			
			$celda->Cell(159,5,'Reportes: ',1,0,'C',1);			
			$celda->Ln();
			$celda->Cell(20);	
			$celda->Cell(140,6, "Despacho:",1,0,'C',1);
			$celda->Cell(19,6, "Cant: :",1,0,'C',1);
			$celda->Ln();
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(140,6,$requerimiento[$i][1],1,0,'C');				
				$celda->Cell(19,6,$requerimiento[$i][4],1,0,'C');
				$celda->Ln();
			}
			$celda->Ln(0);
			$celda->Cell(20);			
			$celda->Cell(140,6, "Total: ",1,0,'C',1);			
			$celda->Cell(19,6,$total[0][3],1,0,'C',1);	
			$celda->output();

			
		}

// REPORTES POR DESPACHO DEL AREA DE SOPORTE DE EQUIPOS TECNOLOGICOS

// REPORTES POR ANALISTA Y TENICOS DEL AREA DE SOPORTE DE EQUIPOS TECNOLOGICOS

		function rperiodotecanalist(){
		Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));	
			$lista = $this->_reportes->rperiodo();
			$this->_view->_lista = $lista;
			$this->_view->render('rperiodotecanalist', 'reportes','',$this->_sidebar_menu);
		}

		function rmeseqpreparar($periodo = false){
		Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));			
			$lista = $this->_reportes->reequiposreparar($periodo);
			$this->_view->_lista = $lista;
			$this->_view->render('rmeseqpreparar', 'reportes');
		}		

		function rmeseqpreparado($periodo = false){
		Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));			
			$lista = $this->_reportes->reequiposreparados($periodo);
			$this->_view->_lista = $lista;
			$this->_view->render('rmeseqpreparado', 'reportes');
		}

		function rmeseqpretirados($periodo = false){
		Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));			
			$lista = $this->_reportes->reequiposretirados($periodo);
			$this->_view->_lista = $lista;
			$this->_view->render('rmeseqpretirados', 'reportes');
		}

		function rdetalladotec($mes,$periodo, $status){
			// echo $mes.' '.$periodo;die;	
			Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));
			require("C:/xampp/htdocs/siger/libs/fpdf/fpdf.php");
			$total = $this->_reportes->pdftotaltec($mes, $periodo, $status);
			$requerimiento = $this->_reportes->pdfreportedetallado($mes, $periodo, $status);

			$celda= new FPDF();
			$celda->Addpage();
			$celda->SetFillColor(150, 150, 150);
			$celda->Image('C:\xampp\htdocs\siger\libs\fpdf\tutorial\avatar6.png',165,8,28);
			$celda->Image('C:\xampp\htdocs\siger\libs\fpdf\tutorial\mep.png',12,10,28);
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
			$celda->Cell(82);		
			$celda->Cell(30,10,utf8_decode('REPORTES DE TÉCNICOS DURANTE EL MES:'),2,0,'C');
			$celda->Ln(5);		
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(1);
				$celda->Cell(260,0,$requerimiento[0][9],0,0,'C');				
				$celda->Ln();
			}
			$celda->Ln(0);		
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(1);
				$celda->Cell(280,0,$requerimiento[0][6],0,0,'C');				
				$celda->Ln();
			}
			$celda->Ln(10);				
			$celda->Cell(10);		
			$celda->Cell(30,10,utf8_decode('Status:'),2,0,'C');
			$celda->Ln(5);		
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(1);
				$celda->Cell(80,0,$total[0][1],0,0,'C');				
				$celda->Ln();
			}
			$celda->Ln(0);		


			$celda->Ln(10);
			$celda->Cell(20);			
			$celda->Cell(159,5,'Reportes: ',1,0,'C',1);			
			$celda->Ln();
			$celda->Cell(20);
			$celda->Cell(20,6, utf8_decode("Credencial: "),1,0,'C',1);
			$celda->Cell(120,6, utf8_decode("Técnico: "),1,0,'C',1);
			$celda->Cell(19,6, "Cant: :",1,0,'C',1);
			$celda->Ln();
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(20,6,$requerimiento[$i][3],1,0,'C');
				$celda->Cell(120,6,$requerimiento[$i][4],1,0,'C');			
				$celda->Cell(19,6,$requerimiento[$i][8],1,0,'C');
				$celda->Ln();
			}
			$celda->Ln(0);
			$celda->Cell(20);			
			$celda->Cell(140,6, "Total: ",1,0,'C',1);			
			$celda->Cell(19,6,$total[0][4],1,0,'C',1);	
			$celda->output();

		}	

// REPORTES POR ANALISTA Y TENICOS DEL AREA DE SOPORTE DE EQUIPOS TECNOLOGICOS


// REPORTES POR TIPO DE EQUIPO EN EL AREA DE SOPORTE TECNICO

		function reportes_aset_tipo_eq(){
		Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));	
			$lista = $this->_reportes->reportes_aset_tipo_eq();
			$this->_view->_lista = $lista;
			$this->_view->render('reportes_aset_tipo_eq', 'reportes','',$this->_sidebar_menu);
		}


		function reportes_aset_tipo_eq_p_mes($periodo = false){
		Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));			
			$lista = $this->_reportes->reportes_aset_tipo_eq_p_mes($periodo);
			$this->_view->_lista = $lista;
			$this->_view->render('reportes_aset_tipo_eq_p_mes', 'reportes');
		}

		function reportes_aset_tipo_eq_detallado($mes,$periodo){
			// echo $mes.' '.$periodo;die;	
			require("C:/xampp/htdocs/siger/libs/fpdf/fpdf.php");
			$requerimiento = $this->_reportes->reportes_aset_tipo_eq_detallado($mes, $periodo);
			$total = $this->_reportes->r_total_eq_detallado($mes, $periodo);

			$celda= new FPDF();
			$celda->Addpage();
			$celda->SetFillColor(150, 150, 150);
			$celda->Image('C:\xampp\htdocs\siger\libs\fpdf\tutorial\avatar6.png',165,8,28);
			$celda->Image('C:\xampp\htdocs\siger\libs\fpdf\tutorial\mep.png',12,10,28);
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
			$celda->Cell(30,10, utf8_decode ('DIRECCIÓN DE TECNOLOGíA - DIVISIÓN DE TELEMÁTICA'),2,0,'C');
			$celda->Ln(05);
			$celda->Cell(82);	
			$celda->Cell(30,10, utf8_decode('ÁREA DE SOPORTE DE EQUIPOS TECNOLÓGICOS'),2,0,'C');
			$celda->Line(9.5 , 42 , 200, 42);
			$celda->Ln(10);				
			$celda->Cell(82);		
			$celda->Cell(30,10,utf8_decode('REPORTES POR TIPOS DE EQUIPOS DEL PERIODO:'),2,0,'C');
			$celda->Ln(5);		
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(1);
				$celda->Cell(270,0,$requerimiento[0][5],0,0,'C');				
				$celda->Ln();
			}
			$celda->Ln(0);		
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(1);
				$celda->Cell(290,0,$requerimiento[0][2],0,0,'C');				
				$celda->Ln();
			}

			$celda->Ln(10);
			$celda->Cell(20);			
			$celda->Cell(159,5,'Reportes: ',1,0,'C',1);			
			$celda->Ln();
			$celda->Cell(20);	
			$celda->Cell(140,6, "Tipos de equipos:",1,0,'C',1);
			$celda->Cell(19,6, "Cant: :",1,0,'C',1);
			$celda->Ln();
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(140,6,$requerimiento[$i][1],1,0,'C');				
				$celda->Cell(19,6,$requerimiento[$i][4],1,0,'C');
				$celda->Ln();
			}
			$celda->Ln(0);
			$celda->Cell(20);			
			$celda->Cell(140,6, "Total: ",1,0,'C',1);			
			$celda->Cell(19,6,$total[0][3],1,0,'C',1);	
			$celda->output();

			
		}

// REPORTES POR TIPOS DE EQUIPO EN EL AREA DE SOPORTE TECNICO


// REPORTES POR DESPACHO EN EL AREA DE SERVICIOS

		function reportes_aserv_p_periodo(){
		Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));	
			$lista = $this->_reportes->r_aserv_periodo();
			$this->_view->_lista = $lista;
			$this->_view->render('reportes_aserv_p_periodo', 'reportes','',$this->_sidebar_menu);
		}

		function reportes_aserv_p_mes($periodo = false){
		Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));			
			$lista = $this->_reportes->r_aserv_p_d_mes($periodo);
			$this->_view->_lista = $lista;
			$this->_view->render('reportes_aserv_p_mes', 'reportes');
		}

		function reportes_aserv_detallado($mes,$periodo){
			// echo $mes.' '.$periodo;die;	
			Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));
			require("C:/xampp/htdocs/siger/libs/fpdf/fpdf.php");
			$requerimiento = $this->_reportes->reportes_detallado_p_despacho($mes, $periodo);
			$total = $this->_reportes->total_reportes_detallado_p_desp($mes, $periodo);

			$celda= new FPDF();
			$celda->Addpage();
			$celda->SetFillColor(150, 150, 150);
			$celda->Image('C:\xampp\htdocs\siger\libs\fpdf\tutorial\avatar6.png',165,8,28);
			$celda->Image('C:\xampp\htdocs\siger\libs\fpdf\tutorial\mep.png',12,10,28);
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
			$celda->Cell(30,10, utf8_decode('ÁREA DE SERVICIOS'),2,0,'C');
			$celda->Line(9.5 , 42 , 200, 42);
			$celda->Ln(10);				
			$celda->Cell(82);		
			$celda->Cell(30,10,utf8_decode('REPORTES POR DESPACHO DE:'),2,0,'C');
			$celda->Ln(5);		
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(1);
				$celda->Cell(250,0,$requerimiento[0][5],0,0,'C');				
				$celda->Ln();
			}
			$celda->Ln(0);		
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(1);
				$celda->Cell(270,0,$requerimiento[0][2],0,0,'C');				
				$celda->Ln();
			}

			$celda->Ln(10);
			$celda->Cell(20);			
			$celda->Cell(159,5,'Reportes: ',1,0,'C',1);			
			$celda->Ln();
			$celda->Cell(20);	
			$celda->Cell(140,6, "Despacho:",1,0,'C',1);
			$celda->Cell(19,6, "Cant: :",1,0,'C',1);
			$celda->Ln();
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(140,6,$requerimiento[$i][1],1,0,'C');				
				$celda->Cell(19,6,$requerimiento[$i][4],1,0,'C');
				$celda->Ln();
			}
			$celda->Ln(0);
			$celda->Cell(20);			
			$celda->Cell(140,6, "Total: ",1,0,'C',1);			
			$celda->Cell(19,6,$total[0][3],1,0,'C',1);	
			$celda->output();

			
		}

// REPORTES POR DESPACHO EN EL AREA DE SERVICIOS	


// REPORTES POR TECNICO EN EL AREA DE SERVICIOS

		function reportes_por_tecnico_periodo(){
		Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));	
			$lista = $this->_reportes->r_aserv_periodo();
			$this->_view->_lista = $lista;
			$this->_view->render('reportes_por_tecnico_periodo', 'reportes','',$this->_sidebar_menu);
		}

		function reportes_tecnico_caso_abierto($periodo = false){
		Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));			
			$lista = $this->_reportes->reportes_tecnico_caso_abierto($periodo);
			$this->_view->_lista = $lista;
			$this->_view->render('reportes_tecnico_caso_abierto', 'reportes');
		}

		function reportes_tecnico_caso_cerrado($periodo = false){
		Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));			
			$lista = $this->_reportes->reportes_tecnico_caso_cerrado($periodo);
			$this->_view->_lista = $lista;
			$this->_view->render('reportes_tecnico_caso_cerrado', 'reportes');
		}


		function reporte_aserv_detallado_tecnico($mes,$periodo, $status){
			// echo $mes.' '.$periodo;die;	
			Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));
			require("C:/xampp/htdocs/siger/libs/fpdf/fpdf.php");
			$total = $this->_reportes->total_reporte_aserv_detallado_tecnico($mes, $periodo, $status);
			$requerimiento = $this->_reportes->reporte_aserv_detallado_tecnico($mes, $periodo, $status);

			$celda= new FPDF();
			$celda->Addpage();
			$celda->SetFillColor(150, 150, 150);
			$celda->Image('C:\xampp\htdocs\siger\libs\fpdf\tutorial\avatar6.png',165,8,28);
			$celda->Image('C:\xampp\htdocs\siger\libs\fpdf\tutorial\mep.png',12,10,28);
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
			$celda->Cell(82);		
			$celda->Cell(30,10,utf8_decode('REPORTES DE TÉCNICOS DURANTE EL MES:'),2,0,'C');
			$celda->Ln(5);		
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(1);
				$celda->Cell(260,0,$requerimiento[0][9],0,0,'C');				
				$celda->Ln();
			}
			$celda->Ln(0);		
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(1);
				$celda->Cell(280,0,$requerimiento[0][6],0,0,'C');				
				$celda->Ln();
			}
			$celda->Ln(10);				
			$celda->Cell(10);		
			$celda->Cell(30,10,utf8_decode('Status:'),2,0,'C');
			$celda->Ln(5);		
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(1);
				$celda->Cell(80,0,$total[0][1],0,0,'C');				
				$celda->Ln();
			}
			$celda->Ln(0);		


			$celda->Ln(10);
			$celda->Cell(20);			
			$celda->Cell(159,5,'Reportes: ',1,0,'C',1);			
			$celda->Ln();
			$celda->Cell(20);
			$celda->Cell(20,6, utf8_decode("Credencial: "),1,0,'C',1);
			$celda->Cell(120,6, utf8_decode("Técnico: "),1,0,'C',1);
			$celda->Cell(19,6, "Cant: :",1,0,'C',1);
			$celda->Ln();
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(20,6,$requerimiento[$i][3],1,0,'C');
				$celda->Cell(120,6,$requerimiento[$i][4],1,0,'C');			
				$celda->Cell(19,6,$requerimiento[$i][8],1,0,'C');
				$celda->Ln();
			}
			$celda->Ln(0);
			$celda->Cell(20);			
			$celda->Cell(140,6, "Total: ",1,0,'C',1);			
			$celda->Cell(19,6,$total[0][4],1,0,'C',1);	
			$celda->output();

		}				

// REPORTES POR TECNICO EN EL AREA DE SERVICIOS		

// REPORTES POR TIPOS DE REQUERIMIENTOS EN EL AREA DE SERVICIOS

	function reportes_aserv_tipo_req(){
		Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));	
			$lista = $this->_reportes->reportes_aserv_tipo_req();
			$this->_view->_lista = $lista;
			$this->_view->render('reportes_aserv_tipo_req', 'reportes','',$this->_sidebar_menu);
		}


		function reportes_aserv_tipo_req_p_mes($periodo = false){
		Session::accessRole(array('Super Usuario Telematica','Usuario Telematica'));			
			$lista = $this->_reportes->reportes_aserv_tipo_req_p_mes($periodo);
			$this->_view->_lista = $lista;
			$this->_view->render('reportes_aserv_tipo_req_p_mes', 'reportes');
		}

		function reportes_aserv_tipo_req_detallado($mes,$periodo){
			// echo $mes.' '.$periodo;die;	
			require("C:/xampp/htdocs/siger/libs/fpdf/fpdf.php");
			$requerimiento = $this->_reportes->reportes_aserv_tipo_req_detallado($mes, $periodo);
			$total = $this->_reportes->r_total_req_detallado($mes, $periodo);

			$celda= new FPDF();
			$celda->Addpage();
			$celda->SetFillColor(150, 150, 150);
			$celda->Image('C:\xampp\htdocs\siger\libs\fpdf\tutorial\avatar6.png',165,8,28);
			$celda->Image('C:\xampp\htdocs\siger\libs\fpdf\tutorial\mep.png',12,10,28);
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
			$celda->Cell(30,10, utf8_decode ('DIRECCIÓN DE TECNOLOGíA - DIVISIÓN DE TELEMÁTICA'),2,0,'C');
			$celda->Ln(05);
			$celda->Cell(82);	
			$celda->Cell(30,10, utf8_decode('ÁREA DE SERVICIOS'),2,0,'C');
			$celda->Line(9.5 , 42 , 200, 42);
			$celda->Ln(10);				
			$celda->Cell(82);		
			$celda->Cell(30,10,utf8_decode('REPORTES POR TIPOS DE REQUERIMIENTOS DEL PERIODO:'),2,0,'C');
			$celda->Ln(5);		
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(1);
				$celda->Cell(290,0,$requerimiento[0][5],0,0,'C');				
				$celda->Ln();
			}
			$celda->Ln(0);		
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(1);
				$celda->Cell(310,0,$requerimiento[0][2],0,0,'C');				
				$celda->Ln();
			}

			$celda->Ln(10);
			$celda->Cell(20);			
			$celda->Cell(159,5,'Reportes: ',1,0,'C',1);			
			$celda->Ln();
			$celda->Cell(20);	
			$celda->Cell(140,6, "Tipos de requerimientos:",1,0,'C',1);
			$celda->Cell(19,6, "Cant: :",1,0,'C',1);
			$celda->Ln();
			for($i=0;$i<count($requerimiento);$i++)
			{
				$v=$i*0;
				$celda->Cell(20);
				$celda->Cell(140,6,$requerimiento[$i][1],1,0,'C');				
				$celda->Cell(19,6,$requerimiento[$i][4],1,0,'C');
				$celda->Ln();
			}
			$celda->Ln(0);
			$celda->Cell(20);			
			$celda->Cell(140,6, "Total: ",1,0,'C',1);			
			$celda->Cell(19,6,$total[0][3],1,0,'C',1);	
			$celda->output("Reportes por tipos de requerimientos.pdf",'I');
			// $this->pdf->Output("Lista de alumnos.pdf", 'I');

			
		}

// FIN REPORTES POR TIPOS DE REQUERIMIENTOS EN EL AREA DE SERVICIOS
}?>