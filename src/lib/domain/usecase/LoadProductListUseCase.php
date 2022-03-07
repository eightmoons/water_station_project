<?php

namespace lib\domain\usecase;

use lib\domain\params\BaseParams;
use lib\domain\params\LoadProductListParams;
use lib\domain\repository\ProductRepository;

class LoadProductListUseCase extends BaseUseCase {

    public function __construct(
        private readonly ProductRepository $repository
    ) { }

    public function __invoke(LoadProductListParams|BaseParams $params): array
    {
        return $this->repository->loadProductList($params);
    }
}