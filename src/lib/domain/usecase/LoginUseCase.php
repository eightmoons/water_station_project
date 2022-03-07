<?php

namespace lib\domain\usecase;

use lib\domain\models\User;
use lib\domain\params\BaseParams;
use lib\domain\params\LoginParams;
use lib\domain\repository\UserRepository;

class LoginUseCase extends BaseUseCase {
    
    public function __construct(
        private readonly UserRepository $repository
    ) { }

    public function __invoke(LoginParams|BaseParams $params): User
    {
        return $this->repository->login($params);
    }
}