<?php declare(strict_types=1);

namespace app\Controllers;

use app\Core\Controller;
use app\Models\ProductDAO;
use app\Models\Product;

class HomeController extends Controller {
    private array $data = [];
    private ProductDAO $prodDAO;
    private Product $prod;

    public function index() {
        $viewPath = 'home/';
        $viewName = "index";

        $this->prodDAO = new ProductDAO();
        $this->prod = new Product();

        $this->prod->setId(1);
        $this->data['product_list'] = $this->prodDAO->getProductById($this->prod);
        //var_dump($this->data['product_list']);die;
        
        $this->loadTemplate($viewPath, $viewName, $this->data);
    }
}
