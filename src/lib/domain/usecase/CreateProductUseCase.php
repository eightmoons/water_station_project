<?php

namespace lib\domain\usecase;

use lib\domain\models\Product;
use lib\domain\params\BaseParams;
use lib\domain\params\CreateProductParams;
use lib\domain\repository\ProductRepository;

class CreateProductUseCase extends BaseUseCase {

    public function __construct(
        private readonly ProductRepository $repository
    ) { }

    public function __invoke(CreateProductParams|BaseParams $params): Product
    {
        return $this->repository->createProduct($params);
    }
}