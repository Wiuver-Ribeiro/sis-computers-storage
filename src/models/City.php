<?php
namespace src\models;
use \core\Model;

class City extends Model {
  private String $numberPA;
  private String $cityName;

 
  public function getNumberPA(){
    return $this->numberPA;
  }

 
  public function setNumberPA($numberPA) {
    $this->numberPA = $numberPA;
    return $this;
  }


  public function getCityName() {
    return $this->cityName; 
  }


  public function setCityName($cityName) {
    $this->cityName = ucwords($cityName);
    return $this;
  }

  public function __construct($numberPA, $cityName) {
    $this->setNumberPA($numberPA);
    $this->setCityName($cityName);

    $this->addCity($this->getCityName(), $this->getNumberPA());
  }

    public function addCity($cityName, $numberPA) {
      require __DIR__."../../../connect.php";

 

        $sql = $pdo->prepare("INSERT INTO citys (nameCity, numberCity)
        VALUES (?, ?) ");

      $sql->bindParam(1,$cityName);
      $sql->bindParam(2, $numberPA);

      $sql->execute();
      return true;
    }

    public  static function listAllCitys() {
      require __DIR__."../../../connect.php";
      $sql = $pdo->prepare("SELECT * FROM citys");
      $sql->execute();

      $dados = $sql->fetchAll(\PDO::FETCH_ASSOC);
      return $dados;
    }
  
}