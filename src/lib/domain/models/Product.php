<?php

namespace lib\domain\models;

class Product {
    public function __construct(
        int $id,
        string $name,
        string $description,
        string $image,
        float $price,
        string $video
    ) { }
}