<?php declare(strict_types=1);

namespace app\Controllers;

use app\Core\Controller;
use app\Models\ProductDAO;
use app\Models\Product;

class ProductController extends Controller {

    public function show(int $id = 0) : void
    {
        $viewPath = 'product/';
        $viewName = "product";

        if (empty($id)):
            header('Location: '.BASE_URL);
        endif;

        $this->prodDAO = new ProductDAO();
        $this->prod = new Product();

        $this->prod->setId(intval($id));
        $this->data['product'] = $this->prodDAO->getProductById($this->prod, 4, 0);
        
        $this->loadTemplate($viewPath, $viewName, $this->data);
    }
}
