<?php

namespace lib\domain\repository;

use lib\domain\models\Item;

abstract class ItemRepository
{

    abstract public function loadItemList(\lib\domain\params\LoadItemListParams|\lib\domain\params\BaseParams $params): array;

    abstract public function editItem(\lib\domain\params\EditItemParams|\lib\domain\params\BaseParams $params): Item;

    abstract public function deleteItem(\lib\domain\params\DeleteItemParams|\lib\domain\params\BaseParams $params): bool;

    abstract public function createItem(\lib\domain\params\CreateItemParams|\lib\domain\params\BaseParams $params): Item;
}