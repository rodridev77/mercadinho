<?php declare(strict_types=1);

namespace app\Controllers;

use app\Core\Controller;
use app\Models\ProductDAO;
use app\Models\Product;

class CategoryController extends Controller {
    private Array $data;
    private ProductDAO $prodDAO;
    private Product $prod;

    public function index() : void
    {
        header('Location: '.BASE_URL);
    }

    public function show($id = 0) : void
    {
        $viewPath = 'category/';
        $viewName = "category";

        if (empty($id)):
            header('Location: '.BASE_URL);
        endif;

        $this->prodDAO = new ProductDAO();
        $this->prod = new Product();

        $this->prod->setCategoryId(intval($id));
        $this->data['category'] = $this->prodDAO->getProductByCategory($this->prod);
        
        $this->loadTemplate($viewPath, $viewName, $this->data);
    }
}
