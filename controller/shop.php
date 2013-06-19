<?php

class Controller_shop extends Controller_BaseController {

    public function product() {

        $prod_model = new Model_shop();
        $results = $prod_model->select_product();

        $params = array(
            'results' => $results,
        );

        $this->_render($params);
    }

    public function cart() {
        if (!array_key_exists('id', $this->_params) || empty($this->_params['id'])) {
            header('Location: /error/notFound');
            exit;
        }
        $pid = $this->_params['id'];
        $itemExists = false;
        
            if (array_key_exists('cart', $_SESSION)) {
                $cartItems = $_SESSION['cart'];

                if (array_key_exists($pid, $_SESSION['cart'])) {
                    $_SESSION['cart'][$pid]['qty'] += 1;
                    $itemExists = true;  
                }
               
            }

            if (!$itemExists) {
                $_SESSION['cart'][$pid] = array(
                    'qty' => 1
                );
            }
     
            if (!empty($_SESSION['cart'])) {

                $cartProductIdsArray = array_keys($_SESSION['cart']);
                $cartProductIds = implode(',', $cartProductIdsArray);
            
            }
        $cart_model = new Model_shop();
        $results = $cart_model->select_details($cartProductIds);
        $params = array(
        'results' => $results,
        );
            
        $this->_render($params);
    }

}
