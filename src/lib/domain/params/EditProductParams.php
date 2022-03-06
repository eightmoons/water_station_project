<?php

namespace lib\domain\params;

class EditProductParams extends BaseParams {
    public function __construct(
        int $id,
        string $name,
        string $description,
        string $image,
        float $price,
        string $video
    ) { }
}