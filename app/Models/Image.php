<?php

declare(strict_types=1);

namespace app\Models;

use app\Core\Connection;

class Image
{
    private int $id;
    private string $url;
    private int $productId;

    public function getId() : int
    {
        return $this->id;
    }

    public function setId(int $id) : void
    {
        $this->id = $id;
    }

    public function getUrl() : string
    {
        return $this->url;
    }

    public function setUrl(string $url) : void
    {
        $this->url = $url;
    }

    public function getProductId() : int
    {
        return $this->productId;
    }

    public function setProductId(int $productId) : void
    {
        $this->ProductId = $productId;
    }
    
}
