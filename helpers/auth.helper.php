<?php

class AuthHelper {
	
	static private function start() {
		if(session_status() != PHP_SESSION_ACTIVE)
			session_start();
	}

	static public function login($user) {
		self::start();
		$_SESSION['LOGGED'] = true;
		$_SESSION['USERID'] = $user->id;
		$_SESSION['USERNAME'] = $user->username;
		$_SESSION['PRIVILEGE'] = $user->privilege;
	}

	static public function getLoggedIn() {
		if(($_SESSION['LOGGED'] != true) || (!isset($_SESSION['LOGGED']))) {
			header('Location'.BASE_URL.'login?err=login');
			die;
		}
	}

	static public function getLoggedUserID() {
		self::start();
		if(isset($_SESSION['USERID']))
			return $_SESSION['USERID'];
		else
			return null;
	}

	static public function getLoggedUserName() {
		self::start();
		if(isset($_SESSION['USERNAME']))
			return $_SESSION['USERNAME'];
		else
			return null;
	}

	static public function getPrivilege() {
		if(isset($_SESSION['PRIVILEGE']))
			return $_SESSION['PRIVILEGE'];
		else
			return null;
	}

	static public function getPermission() {
		$permission = $this->getPrivilege();
		if($permission == null) || ($permission == "0")) {
			header('Location:'.BASE_URL.'login?err=admin');
			die;
		}
	}

}

?>