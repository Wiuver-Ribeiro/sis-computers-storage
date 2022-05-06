<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Computer;

class HomeController extends Controller {
    public function index() {
        $this->render('home');
    }

    public function gerar() {
        $relatorio = Computer::generateReportByCity('05');

        $this->render('gerarRelatorio',[
            "relatorio" =>$relatorio
        ]);
    }


}