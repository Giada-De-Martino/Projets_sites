<?php
require_once File::build_path(array("model","Model.php"));

class ModelProduit extends Model{
        
    private $idProduit;
    private $nomProduit;
    private $prixProduit;
	private $categorieProduit;
    protected static $object = 'produit';  
    protected static $primary='idProduit';


public function __construct($n = NULL, $p = NULL, $c = NULL, $i = NULL) {
    if (!is_null($n) && !is_null($p) && !is_null($c)) {
        $this->idProduit = $i;
        $this->nomProduit = $n;
        $this->prixProduit = $p;
    	$this->categorieProduit = $c;
    }
}
              
public function getIdProduit() {
    return $this->idProduit;  
}

public function setIdProduit($idProduit2){
    return $this->idProduit = $idProduit2;
}

public function getNomProduit() {
    return $this->nomProduit;
}

public function setNomProduit($nomProduit2) {
    $this->nomProduit = $nomProduit2;
}

public function getPrixProduit() {
    return $this->prixProduit;
}

public function setPrixProduit($prixProduit2) {
    return $this->prixProduit = $prixProduit2;
}

public function getCategorieProduit(){
    return $this->categorieProduit;
}

public function setCategorieProduit($categorieProduit2) {
    return $this->categorieProduit = $categorieProduit2;
}

public static function getAllProduit() {
    try {
        $rep = Model::$pdo->query('select * from p_Produit');
        $rep->setFetchMode(PDO::FETCH_CLASS, 'ModelProduit');
        $tab_produit = $rep->fetchAll();
        return $tab_produit;
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

public static function getProduitByCategorie($cat) {
    try {
        $sql = "SELECT * from p_Produit WHERE categorieProduit=:nom_tag";
            // Préparation de la requête
        $req_prep = Model::$pdo->prepare($sql);
        $values = array(
                "nom_tag" => $cat,
                //nomdutag => valeur, ...
            );
            // On donne les valeurs et on exécute la requête	 
        $req_prep->execute($values);
        
            // On récupère les résultats comme précédemment
        $req_prep->setFetchMode(PDO::FETCH_CLASS, 'ModelProduit');
        $tab_produit = $req_prep->fetchAll();
            // Attention, si il n'y a pas de résultats, on renvoie false
        if (empty($tab_produit))
            return false;
        return $tab_produit[0];
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

public function save() {
    try {
        $sql = "INSERT INTO p_Produit(idProduit, nomProduit, prixProduit, categorieProduit) Values (:idProduit, :nomProduit, :prixProduit, :categorieProduit)";
            // Préparation de la requête
        $req_prep = Model::$pdo->prepare($sql);
        $values = array(
            'idProduit' => $this->idProduit,
            'nomProduit' => $this->nomProduit,
            'prixProduit' => $this->prixProduit,
            'categorieProduit' => $this->categorieProduit
        );
            // On donne les valeurs et on exécute la requête     
        $req_prep->execute($values);
        if (empty($tab_produit))
            return false;
        return $tab_produit[0];
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
        $sql = "UPDATE p_Produit SET nomProduit = :nomProduit, prixProduit = :prixProduit, categorieProduit = :categorieProduit WHERE idProduit = :idProduit";
            // Préparation de la requête
        $req_prep = Model::$pdo->prepare($sql);
        $values = array(
            'idProduit' => $data['idProduit'],
            'nomProduit' => $data['nomProduit'],
            'prixProduit' => $data['prixProduit'],
            'categorieProduit' => $data['categorieProduit']
        );
            // On donne les valeurs et on exécute la requête     
        $req_prep->execute($values);
        if (empty($tab_produit)){
            return false;
        }
        return $tab_produit;
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

        