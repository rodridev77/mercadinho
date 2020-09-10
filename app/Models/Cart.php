<?php declare(strict_types=1);

namespace app\Models;

use app\Core\Connection;
use app\Models\Product;

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
        $cartList = [];
        $cart = [];

        if (isset($_SESSION['cart'])):
            $cart = $_SESSION['cart'];
        endif;

        foreach ($cart as $id => $count) {
            $prod = $prodDAO->getProductById($id);
            $prodObj = new \stdClass;

            $prodObj = $prod;
            $prodObj->count = $count;

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
