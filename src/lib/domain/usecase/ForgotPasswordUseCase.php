<?php

namespace lib\domain\usecase;

use lib\domain\models\User;
use lib\domain\params\BaseParams;
use lib\domain\params\ForgotPasswordParams;
use lib\domain\params\NoParams;
use lib\domain\params\ReadUserParams;
use lib\domain\repository\RecoveryRepository;
use lib\domain\repository\UserRepository;

class ForgotPasswordUseCase extends BaseUseCase
{
    public function __construct(
        private readonly RecoveryRepository $repository
    ) { }

    public function __invoke(ForgotPasswordParams|BaseParams $params): bool
    {
        return $this->repository->forgotPassword($params);
    }
}