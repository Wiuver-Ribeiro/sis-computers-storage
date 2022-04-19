<?php
namespace src\controllers;

use \core\Controller;

class CityController extends Controller {

    public function index() {
        $this->render('city');
    }
    
}