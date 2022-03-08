<?php

namespace lib\data\source;

use lib\data\db\AppDatabase;
use lib\domain\models\Product;
use lib\domain\params\CreateProductParams;
use lib\domain\params\DeleteProductParams;
use lib\domain\params\EditProductParams;
use lib\domain\params\LoadProductListParams;

abstract class ProductDao {
    abstract function createProduct(CreateProductParams $params): Product;
    abstract function editProduct(EditProductParams $params): Product;
    abstract function deleteProduct(DeleteProductParams $params): bool;
    abstract function loadProductList(LoadProductListParams $params): array;
    abstract function readProduct(int $id): Product;
}

class ProductDaoImpl extends ProductDao {

    public function __construct(
        protected readonly AppDatabase $database
    ) { }

    function createProduct(CreateProductParams $params): Product
    {
        $conn = $this->database->getConnection();
        $stmt = $conn->prepare("INSERT INTO ws_products (name, description, items, price) VALUES (?,?,?,?)");
        $stmt->bind_param('sssi', $params->name, $params->description, $params->items, $params->price);
        $stmt->execute();
        $result = $stmt->get_result();
        return $this->readProduct($stmt->insert_id);
    }

    function editProduct(EditProductParams $params): Product
    {
        $conn = $this->database->getConnection();
        $stmt = $conn->prepare("UPDATE ws_products SET name=?,description=?,items=?,price=? WHERE id=?");
        $stmt->bind_param('sssii', $params->name, $params->description, $params->items, $params->price, $params->id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $this->readProduct($stmt->insert_id);
    }

    function deleteProduct(DeleteProductParams $params): bool
    {
        $conn = $this->database->getConnection();
        $stmt = $conn->prepare("DELETE FROM ws_products WHERE id=?");
        $stmt->bind_param("i", $params->id);
        $stmt->execute();
        return $stmt->affected_rows > 0;
    }

    function loadProductList(LoadProductListParams $params): array
    {
        $conn = $this->database->getConnection();
        $stmt = $conn->prepare("SELECT * FROM ws_products");
        //$stmt->bind_param();
        $stmt->execute();
        $result = $stmt->get_result();
        $products = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $product = new Product(
                    $row['id'],
                    $row['name'],
                    $row['description'],
                    $row['items'],
                    $row['price'],
                );
                array_push($products, $product);
            }
        }
        return $products;
    }

    function readProduct(int $id): Product
    {
        $conn = $this->database->getConnection();
        $stmt = $conn->prepare("SELECT * FROM ws_products WHERE id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $product = null;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $product = new Product(
                    $row['id'],
                    $row['name'],
                    $row['description'],
                    $row['items'],
                    $row['price'],
                );
            }
        }
        return $product;
    }
}