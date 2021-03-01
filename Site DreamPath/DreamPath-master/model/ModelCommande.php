<?php
require_once File::build_path(array("model","Model.php"));

class ModelCommande extends Model {
        
    private $idCommande;
    private $dateCommande;
    private $idClient;
	private $montantCommande;
    private $etatCommande;
    protected static $object = 'commande';  
    protected static $primary='idCommande';

public function __construct($d = NULL, $idCl = NULL, $m = NULL, $e = NULL, $idCo = NULL) {
    if (!is_null($d) && !is_null($idCl) && !is_null($m) && !is_null($e)) {
        $this->idCommande = $idCo;
        $this->dateCommande = $d;
        $this->idClient = $idCl;
    	$this->montantCommande = $m;
        $this->etatCommande = $e;
    }
}

public function setIdClient($idClient2){
    return $this->setIdClient = $idClient2; 
}

public function getIdClient(){
    return $this->idClient; 
}
              
public function getIdCommande() {
    return $this->idCommande;  
}

public function setIdCommande($idCommande2) {
    $this->idCommande = $idCommande2;
}

public function getDateCommande() {
    return $this->dateCommande;
}

public function setDateCommande($dateCommande2) {
    return $this->dateCommande = $dateCommande2;
}

public function getMontantCommande() {
    return $this->montantCommande;
}

public function setMontantCommande($montantCommande2) {
    return $this->montantCommande = $montantCommande2;
}

public function getEtatCommande(){
    return $this->etatCommande;
}

public function setEtatCommande($etatCommande2) {
    return $this->etatCommande = $etatCommande2;
}


public function save() {
    try {
        $sql = "INSERT INTO p_Commande(idCommande, dateCommande, idClient, montantCommande, etatCommande) Values (:idCommande, :dateCommande, :idClient, :montantCommande, :etatCommande')";
        $req_prep = Model::$pdo->prepare($sql);
        $values = array(
            'idCommande' => $this->idCommande,
            'dateCommande' => $this->dateCommande,
            'idClient' => $this->idCommande,
            'montantCommande' => $this->montantCommande,
            'etatCommande' => $this->etatCommande
        );
            // On donne les valeurs et on exécute la requête     
        $req_prep->execute($values);
        if (empty($tab_commande))
            return false;
        return $tab_commande[0];
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
        $sql = "UPDATE p_Commande SET dateCommande = :dateCommande, idClient = :idClient, montantCommande = :montantCommande, etatCommande = :etatCommande WHERE idCommande = :idCommande";
            // Préparation de la requête
        $req_prep = Model::$pdo->prepare($sql);
        $values = array(
            'dateCommande' => $data['dateCommande'],
            'idClient' => $data['idClient'],
            'montantCommande' => $data['montantCommande'],
            'etatCommande' => $data['etatCommande'],
            'idCommande' => $data['idCommande']
        );
            // On donne les valeurs et on exécute la requête     
        $req_prep->execute($values);
        if (empty($tab_commande)){
            return false;
        }
        return $tab_commande;
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
}
?>

        