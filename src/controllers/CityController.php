<?php
namespace src\controllers;

use \core\Controller;
use \src\Models\City;
use \src\Models\Computer;

class CityController extends Controller {

    public function index() {
        
        $citys = City::listAllCitys();
        $this->render('city', [
            "citys" => $citys,
        ]);
    }

    public function addCity() {
        $numberPA = $_POST['numberPA'];
        $cityName = $_POST['cityName'];
        $city = new City($numberPA, $cityName);
        if($city) {
            $_SESSION['success'] = "<div class='alert alert-success' role='alert'> <strong>PA/CIDADE</strong> cadastrado com sucesso!</div>";
            $this->redirect('/city');
        } else {
            $_SESSION['success'] = "<div class='alert alert-danger' role='alert'> <strong>ERRO!</strong> ao cadastrar!</div>";

        }
    }

    public function generateReportByCity($city) {
        $city = $_POST['pa'];
        if(Computer::generateReportByCity($city)) {
            $_SESSION['success'] = "<div class='alert alert-success' role=''>Relatório Gerado com sucesso!</div>";
            $this->redirect('/gerar');
        }
    }

}