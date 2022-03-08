<?php

namespace lib\domain\usecase;

use lib\domain\params\BaseParams;
use lib\domain\params\DeleteProductParams;
use lib\domain\repository\ProductRepository;

class DeleteProductUseCase extends BaseUseCase {
    
    public function __construct(
        private readonly ProductRepository $repository
    ) { }

    public function __invoke(DeleteProductParams|BaseParams $params): bool
    {
        return $this->repository->deleteProduct($params);
    }
}