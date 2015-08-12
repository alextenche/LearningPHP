<?php
/**
 * @file
 * Database class.
 */

/**
 * Database; only one connection is allowed.
 */
class Database {
  /**
   * Database connection.
   * @var PDO
   */
  private $_pdo;

  /**
   * PDO instance.
   */
  private static $_instance;
  
  /**
   * Get an instance of the Database.
   * @return Database 
   */
  public static function getInstance() {
    if (!self::$_instance) {
      self::$_instance = new self();
    }
    return self::$_instance;
  }

  /**
   * Magic get.
   *
   * @param string $name
   * @return mixed
   */
  public function __get($name) {
    // Attempt to return a protected property by name.
    $protected_property_name = '_' . $name;
    if (property_exists($this, $protected_property_name)) {
      return $this->$protected_property_name;
    }

    // Unable to access property; trigger error.
    $trace = debug_backtrace();
    trigger_error(
      'Undefined property via __get(): ' . $name .
      ' in ' . $trace[0]['file'] .
      ' on line ' . $trace[0]['line'],
      E_USER_NOTICE);
    return NULL;
  }
  
  /**
   * Constructor.
   */
  public function __construct() {
    try {
      $dsn = DB_PDO_DRIVER_NAME . ':dbname=' . DB_NAME . ';host=' . DB_HOST;
      $this->_pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
    }
    catch (PDOException $e) {
      echo renderMsg('error', array(
        'heading' => 'Conncetion failed',
        'body' => $e->getMessage(),
      ));
    }
  }
  
  /**
   * Empty clone magic method to prevent duplication. 
   */
  private function __clone() {}
}