<?php
require_once "environment.php";

// CONFIGURAÇÃO DO AMBIENTE #####################
if (ENVIRONMENT == "development") {
    define("BASE_URL", "http://127.0.0.1/LandingpageCopia/");
} else {
    define("BASE_URL", "http://yourwebsite.com/");
}

// CONFIGURAÇÃO DO BANDO DE DADOS #####################
define('HOST', 'localhost');
define('DBNAME', 'landpage');
define('USER', 'root');
define('PASS', '');
define('DRIVER', 'mysql');
define('CHARSET', 'utf8');