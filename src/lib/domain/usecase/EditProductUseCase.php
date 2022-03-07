<?php

namespace lib\domain\usecase;

use lib\domain\models\Product;
use lib\domain\params\BaseParams;
use lib\domain\params\DeleteProductParams;
use lib\domain\params\EditProductParams;
use lib\domain\repository\ProductRepository;

class EditProductUseCase extends BaseUseCase {

    public function __construct(
        private readonly ProductRepository $repository
    ) { }


    public function __invoke(EditProductParams|BaseParams $params): Product
    {
        return $this->repository->editProduct($params);
    }
}