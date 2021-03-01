<?php
class Conf {
   
  static private $databases = array(
    'hostname' => 'webinfo.iutmontp.univ-montp2.fr',

    'database' => 'nguyentc',

    'login' => 'nguyentc',

    'password' => 'snsd'
  );
   
  public static function getLogin() {
    return self::$databases['login'];
  }

  public static function getHostname() {
    return self::$databases['hostname'];
  }

  public static function getDatabase() {
    return self::$databases['database'];
  }

  public static function getPassword() {
    return self::$databases['password'];
  }
    static private $debug = True; 
    
    static public function getDebug() {
      return self::$debug;
    }
}
?>

