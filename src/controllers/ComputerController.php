<?php
namespace src\controllers;

use \core\Controller;

use \src\Models\Computer;
use \src\Models\City;

class ComputerController extends Controller {

    public function index() {
      $citys = City::listAllCitys();
        $this->render('home', [
          "citys" => $citys,
        ]);
    }
    public  function addComputer() {
      $marca = $_POST['marca'];
      $modelo = $_POST['modelo'];
      $numeroSerie = $_POST['numeroSerie'];
      $tempoUso = $_POST['tempoUso'];

      $computer = new Computer($marca, $modelo, $numeroSerie, $tempoUso);
     
    }


}