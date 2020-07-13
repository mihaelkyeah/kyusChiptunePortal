<?php

// require_once('controllers/Controller1.php');
// require_once('controllers/Controller2.php');
// require_once('controllers/Controller3.php');

define('BASE_URL', '//'.$_SERVER['SERVER NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if($_GET['action'] == '')	 {
	$_GET['action'] = 'home';
}

$urlParts = explode('/', $_GET['action']);

// ====== URL operations ======

switch($urlParts[0]) {

	case 'home':
	break;

	default:
		echo('<h1>404 - Not found</h1>');
	break;

}

?>