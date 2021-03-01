<?php
require_once File::build_path(array("model","Model.php"));

class ModelClient extends Model{
  
  private $nom;
  private $prenom;
  private $idClient;
  private $adressePostale;
  private $adresseMail;
  protected static $object = 'client';  
  protected static $primary='idClient';

  public function __construct($n = NULL, $p = NULL, $ap = NULL, $am = NULL, $ps = NULL, $m = NULL, $i = NULL) {
    if (!is_null($n) && !is_null($p) && !is_null($ap) && !is_null($am) && !is_null($ps) && !is_null($m)) {
      $this->nom = $n;
      $this->prenom = $p;
      $this->idClient = $i;
      $this->adressePostale = $ap;
      $this->adresseMail = $am;
      $this->pseudo = $ps;
      $this->mdp = $m;
    }
  }

  public function getNom() {
       return $this->nom;  
  }

  public static function getClientByPseudo($pseudo2) {
       try {
          
          $sql = "SELECT * FROM p_Client WHERE pseudo=:nom_tag";
          // Préparation de la requête
          $req_prep = Model::$pdo->prepare($sql);

          $values = array(
            "nom_tag" => $pseudo2,
                //nomdutag => valeur, ...
          );
            // On donne les valeurs et on exécute la requête   
          $req_prep->execute($values);

            // On récupère les résultats comme précédemment
          $req_prep->setFetchMode(PDO::FETCH_CLASS, 'Client');
          $tab_select = $req_prep->fetchAll();
            // Attention, si il n'y a pas de résultats, on renvoie false
          if (empty($tab_select)){
            return false;
            
          }
          return $tab_select[0];
        }
      catch (PDOException $e) {
          if (Conf::getDebug()) {
              echo $e -> getMessage(); // affiche un message d'erreur
          }
          else {
            echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
          }
          die();
      }
  }


  public function setNom($nom2){
    return $this->nom = $nom2; 
  }

  public function getPrenom() {
       return $this->prenom;  
  }

  public function setPrenom($prenom2){
    return $this->prenom = $prenom2; 
  }

  public function setIdClient ($idClient2){
    return $this->idClient = $idClient2;
  }

  public function getIdClient(){
    return $this->idClient;
  }

  public function afficher() {
    echo "Nom {$this->nom} Prénom {$this->prenom} idClient {$this->idClient} AdressePostale {$this->adressePostale} AdresseMail {$this->adresseMail}.<br>";
  }


  public function getAdressePostale(){
       return $this->adressePostale;
  }

  public function getAdresseMail(){
       return $this->adresseMail;
  }

  public function setAdressePostale($adresse2) {
       $this->adressePostale = $adresse2;
  }
  public function setAdresseMail($adresseMail2) {
       $this->adresseMail = $adresseMail2;
  }

  public function getPseudo() {
        return $this->pseudo;
  }

  public function setPseudo($pseudo2) {
        return $this->pseudo = $pseudo2;
  }

  public function getMdp() {
        return $this->mdp;
  }

  public function setMdp($mdp2) {
        return $this->mdp = $mdp2;
  }
  /*
  public function save() {
    try {

        $sql = "INSERT INTO p_Client(nom, prenom, idClient, adressePostale, adresseMail, pseudo, mdp) Values (:nom, :prenom, :adressePostale, :idClient, :adresseMail, :pseudo, :mdp)";

            // Préparation de la requête
        $req_prep = Model::$pdo->prepare($sql);
        $values = array(
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'idClient' => $this->idClient,
            'adressePostale' => $this->adressePostale,
            'adresseMail' => $this->adresseMail,
            'pseudo' => $this->pseudo,
            'mdp' => $this->mdp

        );
            // On donne les valeurs et on exécute la requête     
        $req_prep->execute($values);
        if (empty($tab_client)){
            return false;
        }
        return $tab_client;
      }
    catch (PDOException $e) {
        if (Conf::getDebug()) {
            echo $e -> getMessage(); // affiche un message d'erreur
        }
        else {
            echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
        }
        die();
    }
    }*/

    public function save() {
    try {
        $sql = "INSERT INTO p_Client(nom, prenom, idClient, adressePostale, adresseMail, pseudo, mdp) Values ('$this->nom','$this->prenom','$this->idClient','$this->adressePostale','$this->adresseMail', '$this->pseudo', '$this->mdp')";
            // Préparation de la requête
        $req_prep = Model::$pdo->prepare($sql);
        $values = array(
            'nom' => $this->nom,
            'prenom' => $this->prenom,
            'idClient' => $this->idClient,
            'adressePostale' => $this->adressePostale,
            'adresseMail' => $this->adresseMail,
            'pseudo' => $this->pseudo,
            'mdp' => $this->mdp
        );
            // On donne les valeurs et on exécute la requête     
        $req_prep->execute($values);
        if (empty($tab_client)){
            return false;
        }
        return $tab_client;
      }
    catch (PDOException $e) {
        if (Conf::getDebug()) {
            echo $e -> getMessage(); // affiche un message d'erreur
        }
        else {
            echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
        }
        die();
    }
    }

    public static function update($data) {
    try {
        $sql = "UPDATE p_Client SET nom = :nom, prenom = :prenom, adressePostale = :adressePostale, adresseMail = :adresseMail, pseudo = :pseudo, mdp = :mdp WHERE idClient = :idClient";
            // Préparation de la requête
        $req_prep = Model::$pdo->prepare($sql);
        $values = array(
            'nom' => $data['nom'],
            'prenom' => $data['prenom'],
            'idClient' => $data['idClient'],
            'adressePostale' => $data['adressePostale'],
            'adresseMail' => $data['adresseMail'],
            'pseudo' => $data['pseudo'],
            'mdp' => $data['mdp']
        );
            // On donne les valeurs et on exécute la requête     
        $req_prep->execute($values);
        if (empty($tab_client)){
            return false;
        }
        return $tab_client;
      }
    catch (PDOException $e) {
        if (Conf::getDebug()) {
            echo $e -> getMessage(); // affiche un message d'erreur
        }
        else {
            echo 'Une erreur est survenue <a href=""> retour a la page d\'accueil </a>';
        }
        die();
    }
  
  }


  public static function login(){

    $pseudo = $_GET['pseudo']; 
    $mdp = $_GET['mdp']; 



  // Comparaison du pass envoyé via le formulaire avec la base

  // on teste si nos variables sont définies
    if (isset($_GET['pseudo']) && isset($_GET['mdp'])) {
      $resultat = "SELECT pseudo, mdp, idClient, role FROM p_Client WHERE pseudo='$pseudo'";
      
    
    // Préparation de la requête
      $req_prep = Model::$pdo->prepare($resultat);
      $values = array(
        'pseudo' => $pseudo,
        'mdp' => $mdp,
        //'idClient' =>$idC,
      );


      $req_prep->execute($values);
      $resultat = $req_prep->fetch();

    


    //var_dump($req_prep);
      if($req_prep != NULL)
      {
          // Convertie le resultat en tableau
          //$membre = $resultat->fetch_assoc();
      //Si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
        if ($resultat['mdp']==$mdp){
        //On peut démarrer notre session
          
        // on enregistre les paramètres de notre visiteur comme variables de session
          $_SESSION['pseudo'] = $_GET['pseudo'];
          $_SESSION['mdp'] = $_GET['mdp'];

          $role = $resultat['role']; 
          $_SESSION['role'] = $role;
          



        // on redirige notre visiteur vers une page de notre section membre(pour le moment)
          //File::build_path(array("view","Membre.php"));
          return $idC = $resultat['idClient'];

        }
        else {
          echo '<body onLoad="alert(\'Membre non reconnu...\')">';
        // puis on le redirige vers la page d'accueil(à modifier)
          echo '<meta http-equiv="refresh" content="0;URL= view/Client/Identification.php">';
        }
      }
    }
    else {
      echo 'Les variables du formulaire ne sont pas valide.';

    }
  //var_dump($_GET['pseudo']);
  //var_dump($_GET['mdp']);

  }

  public static function logout(){
    // On démarre la session
    //session_start ();

  // On détruit les variables de notre session
    session_unset ();

  // On détruit notre session
    session_destroy ();
  }
}
?>