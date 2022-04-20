<?php

namespace src\models;

use \core\Model;

class Computer extends Model
{
  private String $modelo;
  private String $marca;
  private String $numeroSerie;
  private string $tempoUso;

  public function __construct($modelo, $marca, $numeroSerie, $tempoUso,$cidade) {
    $this->setModelo($modelo);
    $this->setMarca($marca);
    $this->setNumeroSerie($numeroSerie);
    $this->setTempoUso($tempoUso);

    $this->addComputer($this->getModelo(), $this->getMarca(), $this->getNumeroSerie(), $this->getTempoUso(), $cidade);
  }

  public function addComputer($marca, $modelo, $numeroSerie, $tempoUso,$cidade) {
    require __DIR__."../../../connect.php";
    // echo "Chegou aqui!"; die();

    // $tempoUsoFormatado  = new \DateTime($tempoUso);
    // $date2  = new \DateTime();
    // $diff = $date2->diff($date1);
    // echo "Diferença de  {$diff->y} anos(s) , {$diff->d} dia(s), {$diff->m} mes(es)";

    if($this->verifyExistSerialNumber($numeroSerie)) {
      return false;
    } else {
      $sql = $pdo->prepare("INSERT INTO computers (brand, model, serialNumber, timeUsed, fk_city) 
        VALUES (?,?,?,?, ?)");
      $sql->bindParam(1, $marca);
      $sql->bindParam(2, $modelo);
      $sql->bindParam(3, $numeroSerie);
      $sql->bindParam(4, $tempoUso);
      $sql->bindParam(5, $cidade);
      $sql->execute();
      return true;
    } 
  }

  public function verifyExistSerialNumber($serialNumber) {
    require __DIR__."../../../connect.php";

    $sql = $pdo->prepare("SELECT serialNumber from computers WHERE serialNumber = ?");
    $sql->bindParam(1, $serialNumber);
    $sql->execute();
    ($sql->rowCount() > 0 ? false : '');
  }


  public static function  listComputers() {
    require __DIR__."../../../connect.php";

    $sql = $pdo->prepare("SELECT
     c.serialNumber, 
     c.brand, 
     c.model, 
     c.timeUsed,
     ct.nameCity, 
     ct.numberCity 
     FROM computers AS c
    INNER JOIN citys AS ct ON (c.fk_city = ct.pk_city);
    ");
    $sql->execute();

    $dados = $sql->fetchAll(\PDO::FETCH_ASSOC);
    // $this->modifyTimeUsed($dados['timeUsed']);
    // print_r($dados); die();
    return $dados;
  }

  public function editComputer() {
  }


  public function getModelo() {
    return $this->modelo;
  }

  public function setModelo($modelo) {
    $this->modelo = mb_strtoupper($modelo);

    return $this;
  }


  public function getMarca() {
    return $this->marca;
  }


  public function setMarca($marca) {
    $this->marca = ucwords($marca);

    return $this;
  }


  public function getNumeroSerie() {
    return $this->numeroSerie;
  }


  public function setNumeroSerie($numeroSerie) {
    $this->numeroSerie = mb_strtoupper($numeroSerie);

    return $this;
  }


  public function getTempoUso()
  {
    return $this->tempoUso;
  }


  public function setTempoUso($tempoUso)
  {
    $this->tempoUso = ucwords($tempoUso);

    return $this;
  }
}
