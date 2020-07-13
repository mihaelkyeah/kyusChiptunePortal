<?php

require_once('libs/Smarty.class.php');
require_once('helpers/auth.helper.php');

class View {

	// Variable that will contain the Smarty object
	private $smarty;

	function __construct() {
		
		// Initializes Smarty
		$this->smarty = new Smarty();
		
		$this->smarty->assign('baseURL', BASE_URL);

		$username = AuthHelper::getLoggedUserName();
		$userID = AuthHelper::getLoggeduserID();
		$this->smarty->assign('username', $username);
		$this->smarty->assign('userID', $userID);

	}

	// Allows children view classes to use Smarty
	public function getSmarty() {
		return $this->smarty;
	}

	// Will be inherited by all children view classes for all controllers to be able to show an error screen
	public function viewError($msg1,$msg2) {
		$this->smarty->assign('pageName', 'Error');
		$this->smarty->assign('pageTitle', 'Error');
		$this->smarty->assign('msg1',$msg1);
		$this->smarty->assign('msg2',$msg2);
		$this->smarty->display('templates/error.tpl');
	}

}

?>