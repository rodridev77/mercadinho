<?php

namespace app\Controllers;

use app\Core\Controller;
use app\Models\Customer;
use app\Models\Auth;


class AuthController extends Controller{

    public function login(){
        
        $data = json_decode(file_get_contents("php://input"),true);

        $customer = new Customer();
        
        $customer->setEmail($data["email"]);
        $customer->setRawPassword($data["password"]); 
        
        $auth = new Auth();

        $newCustomer = $auth->authenticate($customer);

        if($newCustomer->getId()){
        
            $_SESSION["user"] = $newCustomer->getName();
            echo json_encode(["success"=>true]);

        }else{

            echo json_encode(["success"=>false]);

        }

    }

}