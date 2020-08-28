<?php declare(strict_types=1);

namespace app\Controllers;

use app\Core\Controller;

class HomeController extends Controller {
    private $data = [];

    public function index() {
        $viewPath = 'home/';
        $viewName = "index";
        $this->data['product_list'] = "Lista de Clientes";
        
        $this->loadTemplate($viewPath, $viewName, $this->data);
    }
}
