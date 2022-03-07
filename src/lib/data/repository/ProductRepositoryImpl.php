<?php

namespace lib\data\repository;

use lib\data\source\ProductDao;
use lib\domain\models\Product;
use lib\domain\params\CreateProductParams;
use lib\domain\params\DeleteProductParams;
use lib\domain\params\EditProductParams;
use lib\domain\params\LoadProductListParams;
use lib\domain\repository\ProductRepository;

class ProductRepositoryImpl extends ProductRepository
{
    public function __construct(
        private readonly ProductDao $dao
    ) { }


    public function loadProductList(LoadProductListParams $params): array
    {

    }

    public function createProduct(CreateProductParams $params): Product
    {
        // TODO: Implement createProduct() method.
    }

    public function editProduct(EditProductParams $params): Product
    {
        // TODO: Implement editProduct() method.
    }

    public function deleteProduct(DeleteProductParams $params): bool
    {
        // TODO: Implement deleteProduct() method.
    }
}