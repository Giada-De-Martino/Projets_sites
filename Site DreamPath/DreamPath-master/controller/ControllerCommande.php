<?php
require_once File::build_path(array("model","ModelCommande.php"));

class ControllerCommande {
    
    protected static $object = 'Commande';

    public static function readAll(){
        $tab_selectAll = ModelCommande::selectAll();
		$view='list';
		$pageTitle='Liste des commandes';
        require File::build_path(array("view", "view.php"));
    }

    public static function read(){
        $idCommande = $_GET['idCommande'];
        $v =  ModelCommande::select($idCommande); 
        if ($v == null) {
            $view='error';
            $pageTitle='Erreur';
            require File::build_path(array("view", "view.php"));
        }
        else {
			
			$view='detail';
			$pageTitle='Détail sur les commandes';
            require File::build_path(array("view", "view.php"));
        }
    }

    public static function create() {
        
        $pageTitle = 'Création de la commande';
        $view = 'create';
        require File::build_path(array("view","view.php"));
	}

    public static function created(){
      $d = $_GET['dateCommande'];
      $i = $_GET['idClient'];
      $m = $_GET['montantCommande'];
      $e = $_GET['etatCommande'];

      $commande = new ModelCommande($d,$i,$m,$e);
      $commande->save();
      $tab_selectAll = ModelCommande::selectAll();
      $view = 'created';
      require File::build_path(array("view","view.php"));
    } 

    public static function delete() {
      $idCommande = $_GET['idCommande'];
      $v = ModelCommande::delete($idCommande); 
      if ($v != null){
        $pageTitle = 'Erreur';
        $view = 'error';
        require File::build_path(array("view","view.php"));
      }
      else {
        $tab_selectAll = ModelCommande::selectAll();
        
        $pageTitle = 'Suppression de la commande';
        $view = 'deleted';
        require File::build_path(array("view","view.php"));
      }
     }

     public static function update() {
      $infos_commande = ModelCommande::select($_GET['idCommande']);
      $pageTitle = 'Modification commande';   
      $view = 'update'; 
      require File::build_path(array("view","view.php"));
     }

  public static function updated() {
      $data = ['dateCommande' => $_GET['dateCommande'], 'idClient' => $_GET['idClient'], 'montantCommande' => $_GET['montantCommande'], 'etatCommande' => $_GET['etatCommande'], 'idCommande' => $_GET['idCommande']];
      ModelCommande::update($data);
      $tab_selectAll = ModelCommande::selectAll();
      $view = 'updated';
      require File::build_path(array("view","view.php"));
  }

}

?>