<?php

namespace app\Models;

use app\Models\Image;
use app\Core\Connection;
use \PDO;
use stdClass;

class ImageDAO {

    private $conn;
    private Image $image;

    public function __construct() {
        $this->conn = Connection::connect();
    }


    public function getUrlByProductId(Product $prod) : string
    {
        $this->image = new Image();

        if (!empty($prod->getId())) 
        {
            try 
            {

                $query = "SELECT * FROM product_image WHERE product_id = :id";
                $stmt = $this->conn->prepare($query);
                $stmt->bindValue(":id", $prod->getId(), PDO::PARAM_INT);
                $stmt->execute();

                if ($stmt->rowCount())
                {
                    $object = $stmt->fetch(PDO::FETCH_OBJ);
                    $this->image->setUrl($object->url);
                    
                }

            } catch (\PDOException $e) 
            {
                die("Error: ".$e->getMessage());
            }
        }

        return $this->image->getUrl();
    }

    
}