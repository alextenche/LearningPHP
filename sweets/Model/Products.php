<?php

/**
 *
 */
class Products
{

  public $products = array();

  //mysql connection params
  public $user = 'root';
  public $dbname = 'sweetscomplete';
  public $pass = '';
  public $host = 'localhost';
  public $dsn = '';
  public $pdo = '';
  public $testMode = TRUE;

  public function __construct()
  {
    $this->dsn = sprintf('mysql:dbname=%s;host=%s', $this->dbname, $this->host);
    if($this->testMode){
      $this->pdo = new PDO($this->dsn, $this->user, $this->pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    } else {
      $this->pdo = new PDO($this->dsn, $this->user, $this->pass);
    }
    $sql = 'SELECT * FROM `products`';
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $this->products[] = $row;
    }
  }

  public function getProductsFromCsv()
  {
    $labels = array('id', 'sku', 'title', 'description', 'price', 'special', 'link');
    $fh = fopen('./Model/products.csv', 'r');
    if($fh){
      while(!feof($fh)){
        $row = fgetcsv($fh);
        $tempRow = array();
        if(isset($row) && is_array($row) && count($row) > 0){
          foreach ($row as $key => $value) {
            $tempRow[$labels[$key]] = $value;
          }
          $this->products[] = $tempRow;
        }
      }
    }
  }

  public function getProducts()
  {
    return $this->products;
  }

  public function getTitle()
  {
    $titles = array();
    foreach ($this->products as $row) {
      $titles[] = $row['title'];
    }
    return $titles;
  }

}
