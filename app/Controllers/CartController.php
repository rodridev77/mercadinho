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

        if (!empty($_POST['product_id'])) 
        {
            $product_id = intval($_POST['product_id']);
            $product_qtty = intval($_POST['product_qtty']);

            if (!isset($_SESSION['cart'])):
                $_SESSION['cart'] = array();
            endif;

            if (isset($_SESSION['cart'][$product_id])):
                $_SESSION['cart'][$product_id] += $product_qtty;
            else:
                $_SESSION['cart'][$product_id] = $product_qtty;
            endif;
        }

        header("Location: " . BASE_URL . "cart");
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
