<?php

namespace app\Models;

use app\Core\Connection;

use \PDO;

class CustomerDAO
{

    private $conn;

    public function __construct(){
        $this->conn = Connection::connect();
    }

    /**
     * Undocumented function
     *
     * @param Customer $customer
     * @return void
     */
    public function insert(Customer $customer){
        $query = "INSERT INTO customer(name,email,password,street,district,number) VALUES(:name,:email,:password,:street,:district,:number)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(":name",$customer->getName(),PDO::PARAM_STR);
        $stmt->bindValue(":email",$customer->getEmail(),PDO::PARAM_STR);
        $stmt->bindValue(":password",$customer->getPassword(),PDO::PARAM_STR);
        $stmt->bindValue(":street",$customer->getStreet(),PDO::PARAM_STR);
        $stmt->bindValue(":district",$customer->getDistrict(),PDO::PARAM_STR);
        $stmt->bindValue(":number",$customer->getNumber(),PDO::PARAM_STR);
        if($stmt->execute()){
            return true;
        }
        return false;
    }

    public function select(Customer $customer){

    }

    public function delete(Customer $customer){
        
    }

    public function update(Customer $customer){
        
    }


}