<?php

namespace lib\domain\usecase;

use lib\domain\models\Item;
use lib\domain\params\BaseParams;
use lib\domain\params\CreateItemParams;
use lib\domain\repository\ItemRepository;

class CreateItemUseCase extends BaseUseCase
{

    public function __construct(
        private readonly ItemRepository $repository
    ) { }

    public function __invoke(BaseParams|CreateItemParams $params): Item
    {
        return $this->repository->createItem($params);
    }
}