<?php

declare(strict_types=1);

namespace app\Models;

use app\Core\Connection;

class Product
{
    private int $id;
    private string $title;
    private string $description;
    private float $price;
    private float $priceFrom;
    private int $sale;
    private string $sku;
    private int $categoryId;
    private int $brandId;

    public function getId() : int
    {
        return $this->id;
    }

    
    public function setId(int $id) : void
    {
        $this->id = $id;
    }

    public function getTitle() : string
    {
        return $this->title;
    }

    public function setTitle(string $title) : void
    {
        $this->title = $title;
    }

    public function getDescription() : string
    {
        return $this->description;
    }

    public function setDescription(string $description) : void
    {
        $this->description = $description;
    }

    public function getPrice() : float
    {
        return $this->price;
    }

    public function setPrice(float $price) : void
    {
        $this->price = $price;
    }

    public function getPriceFrom() : float
    {
        return $this->priceFrom;
    }

    public function setPriceFrom(float $priceFrom) : void
    {
        $this->priceFrom = $priceFrom;
    }

    public function getSale() : int
    {
        return $this->sale;
    }

    public function setSale(int $sale) : void
    {
        $this->sale = $sale;
    }

    public function getSku() : string
    {
        return $this->sku;
    }

    public function setSku(string $sku) : void
    {
        $this->sku = $sku;
    }

    public function getCategoryId() : int
    {
        return $this->categoryId;
    }

    public function setCategoryId(int $categoryId) : void
    {
        $this->categoryId = $categoryId;
    }

    public function getBrandId() : int
    {
        return $this->brandId;
    }

    public function setBrandId(int $brandId) : void
    {
        $this->brandId = $brandId;
    }
}
