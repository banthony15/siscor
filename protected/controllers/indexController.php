<?php 

class indexController extends Controller{
	
	public function __construct(){

		
		parent::__construct();
		
	}
	
	function  index(){
	Session::accessRole(array('Administrador','Super Usuario Sistemas','Usuario Sistemas', 'Super Usuario Telematica', 'Usuario Telematica', 'Inhabilitado'));
		$this->_view->render('index');
	}	
	
	
}


?>