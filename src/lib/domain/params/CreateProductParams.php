<?php

namespace lib\domain\params;

class CreateProductParams extends BaseParams {
    public function __construct(
        string $name,
        string $description,
        string $image,
        float $price,
        string $video
    ) { }
}