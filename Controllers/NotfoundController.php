<?php

namespace Controllers;

class NotfoundController extends Controller {

    public function index() {
        $this->loadView('404', array());
    }

}
