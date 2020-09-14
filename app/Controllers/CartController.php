<?php declare(strict_types=1);

namespace app\Controllers;

use app\Core\Controller;
use app\Models\Cart;
use app\Models\Store;

class CartController extends Controller {
    private Array $data;

    public function index() 
    {
        $viewPath = 'cart/';
        $viewName = "cart";
    
        $cart = new Cart();

        $shipping = array(
            'price' => 0
        );

        /**if (!isset($_SESSION['cart']) || (isset($_SESSION['cart']) && count($_SESSION['cart']) == 0)):
            header("Location: " . BASE_URL);
            exit;
        endif;*/

        if (!empty($_SESSION['shipping'])):
            $shipping = $_SESSION['shipping'];
        endif;

        $this->data['list'] = $cart->getCartList();

        $this->loadTemplate($viewPath, $viewName, $this->data);
    }

    public function add() 
    {
        $data = json_decode(file_get_contents("php://input"),true);

        if (!empty($data['productId'])) 
        {
            $productId = intval($data['productId']);
            $countProduct = intval($data['countProduct']);

            if (!isset($_SESSION['cart'])):
                $_SESSION['cart'] = [];
            endif;

            if (isset($_SESSION['cart'][$productId])):
                $_SESSION['cart'][$productId] += $countProduct;
            else:
                $_SESSION['cart'][$productId] = $countProduct;
            endif;

            echo json_encode(["success"=>true]);
        }

        echo json_encode(["success"=>false]);
    }

    public function delete($id) {

        if (!empty($id)):
            unset($_SESSION['cart'][$id]);
        endif;

        header("Location: " . BASE_URL . "cart");
        exit;
    }

    public function payment_redirect() {
        $data = array();

        if (!empty($_POST['payment_type'])) {
            $payment_type = $_POST['payment_type'];

            $data['total_price'] = $_POST['total_price'];

            switch ($payment_type) {
                case 'checkout_transparente':
                    header("Location: " . BASE_URL . "psckttransparente");
                    //$this->loadTemplate('cart_psckttransparent', $data);
                    exit;
                    break;
                case 'mp':
                    header("Location: " . BASE_URL . "mp");
                    //$this->loadTemplate('cart_psckttransparent', $data);
                    exit;
                    break;
            }
        }

        header("Location: " . BASE_URL . 'cart');
    }

}
