<?php
require_once File::build_path(array("config","Conf.php"));


class Model {

	public static $pdo;

	public static function selectAll() {
		try {
			$table_name = static::$object; 
			$table_name=ucfirst($table_name);

			$class_name = ucfirst("model$table_name");

			$sql = "SELECT * From p_$table_name";
			$rep = Model::$pdo->query($sql);
			$rep->setFetchMode(PDO::FETCH_CLASS, $class_name);
			$tab_selectAll = $rep->fetchAll();
			return $tab_selectAll; 
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

  	public static function select($primary_value) {
  		try {
  				$table_name = static::$object; 
				$table_name=ucfirst($table_name);

				$class_name = ucfirst("model$table_name");
				$primary_key = static::$primary; 

  				$sql = "SELECT * FROM p_$table_name WHERE $primary_key=:nom_tag";
       	 	// Préparation de la requête
  				$req_prep = Model::$pdo->prepare($sql);

  				$values = array(
  					"nom_tag" => $primary_value,
            		//nomdutag => valeur, ...
  				);
        		// On donne les valeurs et on exécute la requête   
  				$req_prep->execute($values);

        		// On récupère les résultats comme précédemment
  				$req_prep->setFetchMode(PDO::FETCH_CLASS, $class_name);
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

  public static function delete($primary) {
    try {
          $table_name = static::$object; 
          $table_name=ucfirst($table_name); //Client

          $class_name = ucfirst("model$table_name"); //ModelClient
          $primary_key = static::$primary; //idClient

          $sql = "DELETE FROM p_$table_name WHERE $primary_key=:nom_tag";
          $req_prep = Model::$pdo->prepare($sql);

          $values = array(
            "nom_tag" => $primary,
          );
          $req_prep->execute($values);

          if (empty($tab_delete)){
            return false;
            
          }
          return $tab_delete[0];
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

  public static function Init() {
  	$hostname = Conf::gethostname();
  	$database_name = Conf::getDatabase();
  	$login = Conf::getLogin();
  	$password = Conf::getPassword();

  	try {
  		self::$pdo = new PDO("mysql:host=$hostname;dbname=$database_name", $login, $password,
  			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

  		self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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

Model::Init();
?>
