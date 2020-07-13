<?php

require_once('MVC/View.php');

class UserView extends View {

	public function __construct() {
		parent::__construct();
	}

	public function viewHome {
		$this->getSmarty()->assign('pageName', 'Home');
		$this->getSmarty()->assign('pageTitle', 'Welcome');
		$this->getSmarty()->display('templates/home.tpl');
	}

	public function viewLogin($error=null) {
		$this->getSmarty()->assign('pageName','Login');
		$this->getSmarty()->assign('pageTitle','Login');
		$this->getSmarty()->assign('error',$error);
		// In Smarty, if formType is false, it'll show a login form
		$this-getSmarty()->assign('formType',false);
		$this->getSmarty()->display('templates/user_form.tpl');
	}

	public function viewRegister($error=null) {
		$this->getSmarty()->assign('pageName','Register');
		$this->getSmarty()->assign('pageTitle','Register');
		$this->getSmarty()->assign('error',$error);
		// In Smarty, if formType is true, it'll show a registration form
		$this->getSmarty()->assign('formType',true);
		$this->getSmarty()->display('templates/user_form.tpl');
	}

}

?>