<?php

namespace lib\domain\usecase;

use lib\domain\repository\ProductRepository;

class EditProductUseCase extends BaseUseCase {

    public function __construct(
        ProductRepository $repository
    ) { }

}