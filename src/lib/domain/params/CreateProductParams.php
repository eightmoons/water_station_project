<?php

namespace lib\domain\params;

class CreateProductParams extends BaseParams {
    public function __construct(
        public string $name,
        public string $description,
        public string $items,
        public float $price
    ) { }
}