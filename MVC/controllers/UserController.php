<?php

require_once('MVC/Controller.php');
require_once('MVC/models/UserModel.php');
require_once('MVC/views/UserView.php');

class UserController extends Controller {
	
	private $model;
	private $view;

	public function __construct() {
		parent::__construct();
		$this->view = new UserView($this->isadmin);
		$this->model = new UserModel();
	}

	public function showHome() {
		$this->view->viewHome();
	}

}

?>