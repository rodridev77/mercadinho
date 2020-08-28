<?php

require_once "environment.php";
include "libs/vendor/autoload.php";

// CONFIGURAÇÃO DO AMBIENTE #####################
if (ENVIRONMENT == "development") {
    define("BASE_URL", "http://localhost/mercadinho/");
} else {
    define("BASE_URL", "http://meusite.com.br/");
}

// CONFIGURAÇÃO DO BANDO DE DADOS #####################
define('HOST', 'localhost;port = 3308');
define('DBNAME', 'banco');
define('USER', 'root');
define('PASS', '');
define('DRIVER', 'mysql');
define('CHARSET', 'utf8');
