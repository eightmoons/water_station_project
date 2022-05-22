<?php

namespace lib\domain\usecase;

use lib\domain\models\User;
use lib\domain\params\BaseParams;
use lib\domain\params\LoginParams;
use lib\domain\params\UpdatePasswordParams;
use lib\domain\repository\UserRepository;

class UpdatePasswordUseCase extends BaseUseCase {
    
    public function __construct(
        private readonly UserRepository $repository
    ) { }

    public function __invoke(UpdatePasswordParams|BaseParams $params): ?User
    {
        return $this->repository->updatePassword($params);
    }
}