<?php

namespace Controllers;

use \Core\Controller;
use \Models\Produtos;

class HomeController extends Controller {

    public function index() {

        $this->loadTemplate('home');
    }

}
