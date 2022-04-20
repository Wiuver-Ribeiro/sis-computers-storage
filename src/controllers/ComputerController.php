<?php
namespace src\controllers;

use \core\Controller;

use \src\Models\Computer;
use \src\Models\City;

class ComputerController extends Controller {

    public function index() {
      $citys = City::listAllCitys();

      $computers  = Computer::listComputers();
        $this->render('home', [
          "citys" => $citys,
          "computers" => $computers
        ]);
    }
    public  function addComputer() {
      $marca = $_POST['marca'];
      $modelo = $_POST['modelo'];
      $numeroSerie = $_POST['numeroSerie'];
      $tempoUso = $_POST['tempoUso'];
      $cidade = $_POST['pa_cidade'];
     

       $computer = new Computer($marca, $modelo, $numeroSerie, $tempoUso, $cidade);
     if($computer) {
      $_SESSION['success'] = "<div class='alert alert-success' role='alert'> <strong>Computador</strong> cadastrado com sucesso!</div>";
      $this->redirect('/');
     } else {
      $_SESSION['success'] = "<div class='alert alert-danger' role='alert'> <strong>ERRO!</strong> ao cadastrar!</div>";
      $this->redirect('/');
    }
    }


}