<?php

namespace lib\app\widgets;

class ProductWidget {
    public function __construct(
        private readonly Product $product
    ) {}

    public function __invoke(bool $isEdit): string
    {
        // TODO: Implement __invoke() method.
    }

}