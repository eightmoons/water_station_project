<?php

namespace lib;


use JetBrains\PhpStorm\Pure;
use lib\data\db\AppDatabase;
use lib\data\repository\ProductRepositoryImpl;
use lib\data\repository\RecoveryRepositoryImpl;
use lib\data\repository\UserRepositoryImpl;
use lib\data\source\ProductDao;
use lib\data\source\ProductDaoImpl;
use lib\data\source\RecoverDao;
use lib\data\source\RecoverDaoImpl;
use lib\data\source\UserDao;
use lib\data\source\UserDaoImpl;
use lib\domain\repository\ProductRepository;
use lib\domain\repository\RecoveryRepository;
use lib\domain\repository\UserRepository;
use lib\domain\usecase\CreateProductUseCase;
use lib\domain\usecase\DeleteProductUseCase;
use lib\domain\usecase\EditProductUseCase;
use lib\domain\usecase\ForgotPasswordUseCase;
use lib\domain\usecase\LoadProductListUseCase;
use lib\domain\usecase\LoginUseCase;
use lib\domain\usecase\LogOutUseCase;
use lib\domain\usecase\ReadUserById;
use lib\domain\usecase\UpdatePasswordUseCase;
use lib\domain\usecase\VerifyLinkUseCase;

class WaterStation
{
    public readonly AppDatabase $appDatabase;
    public readonly ProductDao $productDao;
    public readonly UserDao $userDao;
    public readonly RecoverDao $recoverDao;
    public readonly ProductRepository $productRepository;
    public readonly UserRepository $userRepository;
    public readonly RecoveryRepository $recoveryRepository;
    public readonly CreateProductUseCase $createProductUseCase;
    public readonly DeleteProductUseCase $deleteProductUseCase;
    public readonly EditProductUseCase $editProductUseCase;
    public readonly LoadProductListUseCase $loadProductListUseCase;
    public readonly LoginUseCase $loginUseCase;
    public readonly LogOutUseCase $logOutUseCase;
    public readonly ReadUserById $readUserById;
    public readonly ForgotPasswordUseCase $forgotPasswordUseCase;
    public readonly VerifyLinkUseCase $verifyLinkUseCase;
    public readonly UpdatePasswordUseCase $updatePasswordUseCase;

    public static function instance(): WaterStation
    {
        static $instance = false;
        if( $instance === false )
        {
            $instance = new static();
        }

        return $instance;
    }

    #[Pure] private function __construct() {
        $this->appDatabase = new AppDatabase();
        $this->productDao = new ProductDaoImpl($this->appDatabase);
        $this->userDao = new UserDaoImpl($this->appDatabase);
        $this->recoverDao = new RecoverDaoImpl($this->appDatabase);
        $this->productRepository = new ProductRepositoryImpl($this->productDao);
        $this->userRepository = new UserRepositoryImpl($this->userDao);
        $this->recoveryRepository = new RecoveryRepositoryImpl($this->recoverDao, $this->userDao);
        $this->createProductUseCase = new CreateProductUseCase($this->productRepository);
        $this->deleteProductUseCase = new DeleteProductUseCase($this->productRepository);
        $this->editProductUseCase = new EditProductUseCase($this->productRepository);
        $this->loadProductListUseCase = new LoadProductListUseCase($this->productRepository);
        $this->loginUseCase = new LoginUseCase($this->userRepository);
        $this->logOutUseCase = new LogOutUseCase($this->userRepository);
        $this->readUserById = new ReadUserById($this->userRepository);
        $this->forgotPasswordUseCase = new ForgotPasswordUseCase($this->recoveryRepository);
        $this->verifyLinkUseCase = new VerifyLinkUseCase($this->recoveryRepository);
        $this->updatePasswordUseCase = new UpdatePasswordUseCase($this->userRepository);
    }
    public function __clone() {}
    public function __sleep() {}
    public function __wakeup() {}
}