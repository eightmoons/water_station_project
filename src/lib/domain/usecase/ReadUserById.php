<?php

namespace lib\domain\usecase;

use lib\domain\models\User;
use lib\domain\params\BaseParams;
use lib\domain\params\NoParams;
use lib\domain\params\ReadUserParams;
use lib\domain\repository\UserRepository;

class ReadUserById extends BaseUseCase
{
    public function __construct(
        private readonly UserRepository $repository
    ) { }

    public function __invoke(ReadUserParams|BaseParams $params): User
    {
        return $this->repository->readUserById($params);
    }
}