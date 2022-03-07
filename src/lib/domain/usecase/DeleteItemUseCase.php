<?php

namespace lib\domain\usecase;

use lib\domain\params\BaseParams;
use lib\domain\params\DeleteItemParams;
use lib\domain\repository\ItemRepository;

class DeleteItemUseCase extends BaseUseCase
{

    public function __construct(
        private readonly ItemRepository $repository
    ) { }

    public function __invoke(BaseParams|DeleteItemParams $params): bool
    {
        return $this->repository->deleteItem($params);
    }
}