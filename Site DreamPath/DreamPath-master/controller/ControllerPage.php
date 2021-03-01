<?php

class ControllerPage {  

	protected static $object = 'Page'; 

    public static function readAccueil() {	
		$view='Accueil';
		$pageTitle='Page accueil';
        require File::build_path(array("view", "view.php"));
    }

    public static function readCompte() {	
		$view='Client';
		$pageTitle='Mon compte';
        require File::build_path(array("view", "view.php"));
    }

	
    public static function readContacter() {	
		$view='NousContacter';
		$pageTitle='Nous Contacter';
        require File::build_path(array("view", "view.php"));
    }

    public static function readPanier() {	
		$view='Panier';
		$pageTitle='Votre panier';
        require File::build_path(array("view", "view.php"));
    }

    public static function readInfosNous() {	
		$view='QuiSommesNous';
		$pageTitle='Qui sommes nous';
        require File::build_path(array("view", "view.php"));
    }

}

?>