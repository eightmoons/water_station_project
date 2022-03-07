<?php

namespace lib\domain\models;

class Product {
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly string $description,
        public readonly string $image,
        public readonly float $price,
        public readonly string $video
    ) {
    }
}