<?php

namespace lib\domain\repository;

use lib\domain\models\Product;
use lib\domain\params\CreateProductParams;
use lib\domain\params\DeleteProductParams;
use lib\domain\params\EditProductParams;
use lib\domain\params\LoadProductListParams;

interface ProductRepository {
    public function loadProductList(LoadProductListParams $params): array;
    public function createProduct(CreateProductParams $params): Product;
    public function editProduct(EditProductParams $params): Product;
    public function deleteProduct(DeleteProductParams $params): bool;
}