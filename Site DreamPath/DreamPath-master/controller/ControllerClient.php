<?php
require_once File::build_path(array("model","ModelClient.php")); // chargement du modèle

class ControllerClient {

  protected static $object = 'Client';

    public static function readAll() {

      $tab_selectAll = ModelClient::selectAll(); //appel au modèle pour gerer la BD 
      $pageTitle = 'Liste de tous les clients';   
      $view = 'list'; 
      require File::build_path(array("view","view.php"));  //"redirige" vers la vue
    }

    public static function read(){
      //$idClient = static::$idC; 
      $idClient = $_GET['idClient'];
      $v = ModelClient::select($idClient); 
      if ($v == null){
       
        $pageTitle = 'Erreur';
        $view = 'error';
        require File::build_path(array("view","view.php"));
      }
      else {
        
        $pageTitle = 'Description du client';
        $view = 'detail';
        require File::build_path(array("view","view.php"));
      }
    }
    
	public static function create() {
        
        $pageTitle = 'Création du client';
        $view = 'create';
        require File::build_path(array("view","view.php"));
	}

  public static function created(){
      $n = $_GET['nom'];
      $p = $_GET['prenom'];
      $ap = $_GET['adressePostale'];
      $am = $_GET['adresseMail'];
      $ps = $_GET['pseudo'];
      $m = $_GET['mdp'];

      $client = new ModelClient($n,$p,$ap,$am,$ps,$m);
      $client->save();
      $tab_selectAll = ModelClient::selectAll();
      $view = 'created';
      require File::build_path(array("view","view.php"));
    } 

  public static function delete() {
     $idClient = $_GET['idClient'];
      $v = ModelClient::delete($idClient); 
      if ($v != null){
        $pageTitle = 'Erreur';
        $view = 'error';
        require File::build_path(array("view","view.php"));
      }
      else {
        $tab_selectAll = ModelClient::selectAll();
        $pageTitle = 'Suppression du client';
        $view = 'deleted';
        require File::build_path(array("view","view.php"));
      }
  }

  public static function update() {
      $infos_client = ModelClient::select($_GET['idClient']);
      $pageTitle = 'Modification client';   
      $view = 'update'; 
      require File::build_path(array("view","view.php"));
  }

  public static function updated() {
      $data = ['nom' => $_GET['nom'], 'prenom' => $_GET['prenom'], 'adressePostale' => $_GET['adressePostale'], 'adresseMail' => $_GET['adresseMail'], 'idClient' => $_GET['idClient'], 'pseudo' => $_GET['pseudo'], 'mdp' => $_GET['mdp']];
      ModelClient::update($data);
      $tab_selectAll = ModelClient::selectAll();
      $view = 'updated';
      require File::build_path(array("view","view.php"));
  }
  public static function login(){
      $pageTitle = 'Identification';
        $view = 'Identification';
        require File::build_path(array("view","view.php"));
  }

  public static function log(){
      //$idClient = $_GET['idClient'];
      $idClient = ModelClient::login();
      $v = ModelClient::select($idClient); 
      $view = 'detail';
      $pageTitle = 'Mon Compte';
      require File::build_path(array("view","view.php"));
  }



  public static function logout(){
      $pageTitle = 'Déconnexion';
      $deco=ModelClient::logout(); 
      $view = 'deconnexion';

      require File::build_path(array("view","view.php"));
  }

   public static function compte(){
      //$idClient = $_GET['idClient'];
   	if(isset($_SESSION['pseudo'])){

   		$tab = ModelClient::getClientByPseudo($_SESSION['pseudo']); 
        $idClient = $tab['idClient']; 

      return $idClient; 
  	}



      
      
  }




}
?>