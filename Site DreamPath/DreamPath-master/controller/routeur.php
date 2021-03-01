<?php
require_once File::build_path(array("controller","ControllerClient.php"));
require_once File::build_path(array("controller","ControllerProduit.php"));
require_once File::build_path(array("controller","ControllerCommande.php"));
require_once File::build_path(array("controller","ControllerPage.php"));

$action = $_GET['action'];
$controller = ucfirst($_GET['controller']);
$controller_class = ucfirst("controller$controller");


if (class_exists($controller_class)==false) {
	$pageTitle = 'Erreur';
	$controller = 'Client'; 
	$view = 'error'; 
	require File::build_path(array("view", "view.php"));

}else{
	$controller_class::$action(); 
}


?>
