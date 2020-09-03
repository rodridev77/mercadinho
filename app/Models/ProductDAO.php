<?php

namespace app\Models;

use app\Models\Product;
use app\Core\Connection;
use \PDO;
use stdClass;

class ProductDAO {

    private $conn;
    private Product $product;

    public function __construct() {
        $this->conn = Connection::connect();
    }

    public function getProducts($qtd = 0) {
        $produtos = array();
        $query = "SELECT * FROM produtos ORDER BY RAND()";
        $stmt = $this->conn->query($query);

        if ($qtd > 0) {
            $query = "SELECT * FROM produtos LIMIT :limite";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":limite", (int) $qtd, PDO::PARAM_INT);
        }

        if ($stmt->execute()) {
            if ($stmt->rowCount()) {
                $produtos = $stmt->fetchAll();
            }
        }

        return $produtos;
    }

    public function getProductById(Product $prod) : Product
    {
        $this->product = new Product();

        if (!empty($prod->getId())) 
        {
            try 
            {

                $query = "SELECT * FROM product WHERE id = :id";
                $stmt = $this->conn->prepare($query);
                $stmt->bindValue(":id", $prod->getId(), PDO::PARAM_INT);
                $stmt->execute();

                if ($stmt->rowCount())
                {
                    $object = $stmt->fetch(PDO::FETCH_OBJ);

                    $this->product->setId($object->id);
                    $this->product->setTitle($object->title);
                    $this->product->setDescription($object->description);
                    $this->product->setPrice($object->price);
                    $this->product->setPriceFrom($object->price_from);
                    $this->product->setSale($object->sale);
                    $this->product->setSku($object->sku);
                    $this->product->setCategoryId($object->category_id);
                    $this->product->setBrandId($object->brand_id);
                }

            } catch (\PDOException $e) 
            {
                die("Error: ".$e->getMessage());
            }
        }

        return $this->product;
    }

    public function add(Product $prod) : bool
    {
        try {
            $query = "INSERT INTO product ".
            "(title, description, price, price_from, sale, sku, category_id, brand_id) ".
            "VALUES (:title, :description, :price, :price_from, :sale, :sku, :category_id, :brand_id)";

            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(":title", $prod->getTitle(), PDO::PARAM_STR);
            $stmt->bindValue(":description", $prod->getDescription(), PDO::PARAM_STR);
            $stmt->bindValue(":price", $prod->getPrice());
            $stmt->bindValue(":price_from", $prod->getPriceFrom());
            $stmt->bindValue(":sale", $prod->getSale(), PDO::PARAM_INT);
            $stmt->bindValue(":category_id", $prod->getCategoryId(), PDO::PARAM_INT);
            $stmt->bindValue(":brand_id", $prod->getBrandId(), PDO::PARAM_INT);

            if ($stmt->execute()) 
            {
                $stmt->closeCursor();
                return true;
            }
        } catch (\PDOException $e)
         {
            die("Error: " . $e->getMessage());
        }

        return false;
    }
}