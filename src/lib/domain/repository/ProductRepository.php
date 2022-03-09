<?php

namespace lib\domain\repository;

use lib\domain\models\Product;
use lib\domain\params\CreateProductParams;
use lib\domain\params\DeleteProductParams;
use lib\domain\params\EditProductParams;
use lib\domain\params\LoadProductListParams;

abstract class ProductRepository {
    abstract public function loadProductList(LoadProductListParams $params): array;
    abstract public function createProduct(CreateProductParams $params): ?Product;
    abstract public function editProduct(EditProductParams $params): ?Product;
    abstract public function deleteProduct(DeleteProductParams $params): bool;
}