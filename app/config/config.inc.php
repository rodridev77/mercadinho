<?php

require_once "environment.php";
include "libs/vendor/autoload.php";

// CONFIGURAÇÃO DO AMBIENTE #####################
if (ENVIRONMENT == "development") {
    define("BASE_URL", "http://localhost/mercadinho/");
} else {
    define("BASE_URL", "http://meusite.com.br/");
}

function asset($asset){
    return BASE_URL."/public/assets/".$asset;
}

// CONFIGURAÇÃO DO BANDO DE DADOS #####################
define('HOST', '127.0.0.1;port = 3306');
define('DBNAME', 'mercadinho');
define('USER', 'root');
define('PASS', '');
define('DRIVER', 'mysql');
define('CHARSET', 'utf8');
