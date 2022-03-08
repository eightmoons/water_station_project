<?php

namespace lib\domain\usecase;

use lib\domain\params\BaseParams;
use lib\domain\params\LoadItemListParams;
use lib\domain\repository\ItemRepository;

class LoadItemListUseCase extends BaseUseCase
{

    public function __construct(
        private readonly ItemRepository $repository
    ) { }

    public function __invoke(BaseParams|LoadItemListParams $params): array
    {
        return $this->repository->loadItemList($params);
    }
}