<?php declare(strict_types=1);

namespace app\Controllers;

use app\Core\Controller;
use app\Models\ProductDAO;
use app\Models\Product;

class HomeController extends Controller {
    private Array $data;
    private ProductDAO $prodDAO;

    public function index() : void
    {
        $viewPath = 'home/';
        $viewName = "index";

        $this->prodDAO = new ProductDAO();

        $this->data['productList'] = $this->prodDAO->getProductList(1);
        
        $this->loadTemplate($viewPath, $viewName, $this->data);
    }
}
