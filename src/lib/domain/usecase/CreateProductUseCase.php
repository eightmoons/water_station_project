<?php

namespace lib\domain\usecase;

use lib\domain\repository\ProductRepository;

class CreateProductUseCase extends BaseUseCase {

    public function __construct(
        ProductRepository $repository
    ) { }

}