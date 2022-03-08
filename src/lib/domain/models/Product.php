<?php

namespace lib\domain\models;

class Product {
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly string $description,
        public readonly string $items,
        public readonly float $price
    ) {
    }
}