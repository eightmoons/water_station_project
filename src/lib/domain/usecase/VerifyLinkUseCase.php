<?php

namespace lib\domain\usecase;

use lib\domain\models\User;
use lib\domain\params\BaseParams;
use lib\domain\params\ForgotPasswordParams;
use lib\domain\params\NoParams;
use lib\domain\params\ReadUserParams;
use lib\domain\params\VerifyLinkParams;
use lib\domain\repository\RecoveryRepository;
use lib\domain\repository\UserRepository;

class VerifyLinkUseCase extends BaseUseCase
{
    public function __construct(
        private readonly RecoveryRepository $repository
    ) { }

    public function __invoke(VerifyLinkParams|BaseParams $params): bool
    {
        return $this->repository->verifyLink($params);
    }
}