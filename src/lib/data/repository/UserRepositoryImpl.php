<?php

namespace lib\data\repository;

use lib\data\source\UserDao;
use lib\domain\models\User;
use lib\domain\params\LoginParams;
use lib\domain\params\NoParams;
use lib\domain\params\ReadUserParams;
use lib\domain\repository\UserRepository;

class UserRepositoryImpl extends UserRepository
{
    public function __construct(
        private readonly UserDao $dao
    ) { }

    public function login(LoginParams $params): ?User
    {
        $user = $this->dao->readUserByUsername($params->username);
        return $user->password == $params->password ? $user : null;
    }

    public function logout(NoParams $params): bool
    {
        return true;
    }

    public function readUserById(ReadUserParams $params): User
    {
        return $this->dao->readUserById($params->id);
    }
}