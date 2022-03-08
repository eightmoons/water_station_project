<?php

namespace lib\domain\usecase;

use lib\domain\models\Item;
use lib\domain\params\BaseParams;
use lib\domain\params\EditItemParams;
use lib\domain\repository\ItemRepository;

class EditItemUseCase extends BaseUseCase
{

    public function __construct(
        private readonly ItemRepository $repository
    ) { }

    public function __invoke(BaseParams|EditItemParams $params): Item
    {
        return $this->repository->editItem($params);
    }
}