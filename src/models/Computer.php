<?php

namespace src\models;

use \core\Model;

class Computer extends Model
{
  private String $modelo;
  private String $marca;
  private String $numeroSerie;
  private int $tempoUso;

  public function __construct($modelo, $marca, $numeroSerie, $tempoUso) {
    $this->setModelo($modelo);
    $this->setMarca($marca);
    $this->setNumeroSerie($numeroSerie);
    $this->setTempoUso($tempoUso);

    $this->addComputer($this->getModelo(), $this->getMarca(), $this->getNumeroSerie(), $this->getTempoUso());
  }

  public function addComputer($marca, $modelo, $numeroSerie, $tempoUso) {
    var_dump([
      "Marca:" => $marca,
      "Modelo:" => $modelo,
      "Número Série:" => $numeroSerie,
      "Tempo de Uso:" => $tempoUso
    ]);
    die();
  }


  public function listComputers() {
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
    $this->tempoUso = $tempoUso;

    return $this;
  }
}
