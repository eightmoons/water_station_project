<?php

namespace lib\data\repository;

use lib\data\source\RecoverDao;
use lib\data\source\UserDao;
use lib\domain\models\Recover;
use lib\domain\models\User;
use lib\domain\params\ForgotPasswordParams;
use lib\domain\params\LoginParams;
use lib\domain\params\NoParams;
use lib\domain\params\ReadUserParams;
use lib\domain\params\VerifyLinkParams;
use lib\domain\repository\RecoveryRepository;
use lib\domain\repository\UserRepository;

class RecoveryRepositoryImpl extends RecoveryRepository
{
    public function __construct(
        private readonly RecoverDao $dao,
        private readonly UserDao $userDao
    ) { }

    function forgotPassword(ForgotPasswordParams $params): bool
    {
        $user = $this->userDao->readUserByUsername($params->username);
        if (is_null($user)) return false;
        $result = $this->dao->getActiveLink($user->id);
        return !is_null($result);
    }

    function verifyLink(VerifyLinkParams $params): bool
    {
        $result = $this->dao->searchByCode($params->code);
        return !is_null($result);
    }
}