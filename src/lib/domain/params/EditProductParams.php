<?php

namespace lib\domain\params;

class EditProductParams extends BaseParams {
    public function __construct(
        public int $id,
        public string $name,
        public string $description,
        public string $items,
        public float $price,
    ) { }
}