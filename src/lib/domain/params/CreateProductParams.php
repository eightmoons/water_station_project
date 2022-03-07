<?php

namespace lib\domain\params;

class CreateProductParams extends BaseParams {
    public function __construct(
        public readonly string $name,
        public readonly string $description,
        public readonly string $image,
        public readonly float $price,
        public readonly string $video
    ) { }
}