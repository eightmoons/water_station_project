<?php

namespace lib\data\repository;

use lib\data\source\RecoverDao;
use lib\data\source\UserDao;
use lib\domain\models\User;
use lib\domain\params\LoginParams;
use lib\domain\params\NoParams;
use lib\domain\params\ReadUserParams;
use lib\domain\params\UpdatePasswordParams;
use lib\domain\repository\UserRepository;

class UserRepositoryImpl extends UserRepository
{
    public function __construct(
        private readonly UserDao $dao,
        private readonly RecoverDao $recoverDao
    ) { }

    public function login(LoginParams $params): ?User
    {
        $user = $this->dao->readUserByUsername($params->username);
        if (is_null($user)) return null;
        return password_verify($params->password, $user->password) ? $user : null;
    }

    public function logout(NoParams $params): bool
    {
        return true;
    }

    public function readUserById(ReadUserParams $params): ?User
    {
        return $this->dao->readUserById($params->id);
    }

    function updatePassword(UpdatePasswordParams $params): ?User
    {
        $res = $this->recoverDao->searchByCode($params->code);
        $user = $this->readUserById(new ReadUserParams($res->userId));
        $params->code = $user->username;
        $this->recoverDao->updateRecover($res->id);
        return $this->dao->updatePassword($params);
    }
}