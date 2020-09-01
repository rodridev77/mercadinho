<?php

namespace app\Controllers;

use app\Models\Customer;
use app\Models\Auth;


class AuthController{

    public function login(){
        
        $data = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

        $customer = new Customer();

        $customer->setEmail($data["email"]);
        $customer->setRawPassword($data["password"]);

        $auth = new Auth();

        $newCustomer = $auth->authenticate($customer);
        
    }

}