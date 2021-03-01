<?php
require_once File::build_path(array("model","ModelProduit.php"));

class ControllerProduit {
    protected static $object = 'Produit';

    public static function readAll() {
        $tab_selectAll = ModelProduit::selectAll();
        //appel au modèle pour gerer la BD
		
		$view='list';
		$pageTitle='Liste des produits';

        require File::build_path(array("view", "view.php"));
    }

    public static function read(){
        $idProduit = $_GET['idProduit'];
        $v =  ModelProduit::select($idProduit); 
        if ($v == null) {
         
            $view='error';
            $pageTitle='Erreur';
            require File::build_path(array("view","view.php"));
        }
        else {
			
			$view='detail';
			$pageTitle='Détail du produit';
            require File::build_path(array("view","view.php"));
        }
    }

     public static function create() {
        
        $pageTitle = 'Création du produit';
        $view = 'create';
        require File::build_path(array("view","view.php"));
	}

    public static function created(){
      $n = $_GET['nomProduit'];
      $p = $_GET['prixProduit'];
      $c = $_GET['categorieProduit'];

      $commande = new ModelProduit($n,$p,$c);
      $commande->save();
      $tab_selectAll = ModelProduit::selectAll();
      $view = 'created';
      require File::build_path(array("view","view.php"));
    } 

    public static function delete() {
     $idProduit = $_GET['idProduit'];
      $v = ModelProduit::delete($idProduit); 
      if ($v != null){
        $pageTitle = 'Erreur';
        $view = 'error';
        require File::build_path(array("view","view.php"));
      }
      else {
        $tab_selectAll = ModelProduit::selectAll();
     
        $pageTitle = 'Suppression du produit';
        $view = 'deleted';
        require File::build_path(array("view","view.php"));
      }
    }

    public static function update() {
      $infos_produit = ModelProduit::select($_GET['idProduit']);
      $pageTitle = 'Modification produit';   
      $view = 'update'; 
      require File::build_path(array("view","view.php"));
     }

  public static function updated() {
      $data = ['nomProduit' => $_GET['nomProduit'], 'prixProduit' => $_GET['prixProduit'], 'categorieProduit' => $_GET['categorieProduit'], 'idProduit' => $_GET['idProduit']];
      ModelProduit::update($data);
      $tab_selectAll = ModelProduit::selectAll();
      $view = 'updated';
      require File::build_path(array("view","view.php"));
  }
}

?>