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
    // $this->setModelo($modelo);
    // $this->setMarca($marca);
    // $this->setNumeroSerie($numeroSerie);
    // $this->setTempoUso($tempoUso);
    var_dump([
      "Modelo:" => $modelo,
      "Marca:" => $marca,
      "Série:" => $numeroSerie,
      "Uso:" => $tempoUso
    ]); die();
  }

  public function addComputer() {
    
  }


  public function listComputers() {
  }

  public function editComputer() {
  }


  public function getModelo() {
    return $this->modelo;
  }

  public function setModelo($modelo) {
    $this->modelo = $modelo;

    return $this;
  }


  public function getMarca() {
    return $this->marca;
  }


  public function setMarca($marca) {
    $this->marca = $marca;

    return $this;
  }


  public function getNumeroSerie() {
    return $this->numeroSerie;
  }


  public function setNumeroSerie($numeroSerie) {
    $this->numeroSerie = $numeroSerie;

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
