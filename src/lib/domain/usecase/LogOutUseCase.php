<?php

namespace lib\domain\usecase;

use lib\domain\params\BaseParams;
use lib\domain\params\NoParams;
use lib\domain\repository\UserRepository;

class LogOutUseCase extends BaseUseCase {

    public function __construct(
        private readonly UserRepository $repository
    ) { }

    public function __invoke(NoParams|BaseParams $params): bool
    {
        return $this->repository->logout($params);
    }
}