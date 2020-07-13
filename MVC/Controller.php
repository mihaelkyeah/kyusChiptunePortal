<?php

require_once('helpers/auth.helper.php');
class Controller {
	
	public $isadmin;
	function __construct() {
		$this->isadmin = AuthHelper::getUserAdmin();
	}

}

?>