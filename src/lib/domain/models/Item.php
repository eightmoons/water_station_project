<?php

namespace lib\domain\models;

class Item
{
    public function __construct(
        public readonly int $id,
        public readonly int $productId,
        public readonly string $name,
    ) {
    }
}