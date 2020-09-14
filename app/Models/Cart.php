<?php declare(strict_types=1);

namespace app\Models;

use app\Core\Connection;
use app\Models\ProductDAO;
use app\Models\Product;
use app\Models\ImageDAO;

class Cart {

    private $conn;

    public function __construct() 
    {
        $this->conn = Connection::connect();
    }

    public function getCartList() : array
    {
        $prodDAO = new ProductDAO();
        $prod = new Product();
        $imageDAO = new ImageDAO();
        $cartList = [];
        $cart = [];

        if (isset($_SESSION['cart'])):
            $cart = $_SESSION['cart'];
        endif;

        foreach ($cart as $id => $count) {
            $prod->setId($id);
            $prod = $prodDAO->getProductById($prod);
            $prodObj = new \stdClass;

            $prodObj = $prod;
            $prodObj->count = $count;
            $prodObj->image = $imageDAO->getUrlByProductId($prod);

            $cartList[] = $prodObj;
        }

        return $cartList;
    }

    public function getSubtotal() : float
    {
        $subtotal = 0;

        foreach ($this->getCartList() as $productItem):
            $subtotal += (floatval($productItem->getPrice()) * intval($productItem->count));
        endforeach;

        return $subtotal;
    }

}
