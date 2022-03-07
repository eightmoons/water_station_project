<?php

namespace lib\domain\repository;

use lib\domain\models\Item;

interface ItemRepository
{

    public function loadItemList(\lib\domain\params\LoadItemListParams|\lib\domain\params\BaseParams $params): array;

    public function editItem(\lib\domain\params\EditItemParams|\lib\domain\params\BaseParams $params): Item;

    public function deleteItem(\lib\domain\params\DeleteItemParams|\lib\domain\params\BaseParams $params): bool;

    public function createItem(\lib\domain\params\CreateItemParams|\lib\domain\params\BaseParams $params): Item;
}