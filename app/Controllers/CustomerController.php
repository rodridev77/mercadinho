<?php

namespace app\Controllers;

use app\Models\Customer;
use app\Models\CustomerDAO;

class CustomerController
{
    public function newCustomer(){
        
        $data = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

        $customer = new Customer();

        $customer->setName($data['name']);
        $customer->setEmail($data['email']);
        $customer->setPassword($data['password']);
        $customer->setStreet($data['street']);
        $customer->setDistrict($data['district']);
        $customer->setNumber($data['number']);

        $customerDAO = new CustomerDAO();

        if($customerDAO->insert($customer)){
            echo json_encode(["success",true]);
        }else{
            echo json_encode(["success",false]);
        }
    }   
}