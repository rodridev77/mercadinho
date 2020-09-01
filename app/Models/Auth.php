<?php

namespace app\Models;

use app\Core\Connection;
use app\Models\Customer;

use \PDO;

class Auth
{

    private $conn;

    public function __construct()
    {
        $this->conn = Connection::connect();
    }

    /**
     * Undocumented function
     *
     * @param Customer $customer
     * @return Customer
     */
    public function authenticate(Customer $customer) : Customer
    {
        $query = "SELECT * FROM customer WHERE email = :email";

        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(":email", $customer->getEmail(), PDO::PARAM_STR);

        if ($stmt->execute()) {

            $newCustomer = $stmt->fetch(PDO::FETCH_OBJ);
            
            if (password_verify($customer->getRawPassword(), $newCustomer->password)) {
                $customer->setId($newCustomer->id);
                $customer->setName($newCustomer->name);
                $customer->setStreet($newCustomer->street);
                $customer->setDistrict($newCustomer->district);
                $customer->setNumber($newCustomer->number);
                $customer->setRawPassword("");
                return $customer;
            }
        }
        return false;
    }

    public function logout()
    {
    }
}
