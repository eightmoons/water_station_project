<?php

namespace lib\domain\repository;

use lib\domain\models\User;
use lib\domain\params\LoginParams;
use lib\domain\params\NoParams;
use lib\domain\params\ReadUserParams;

abstract class UserRepository {
    abstract function login(LoginParams $params): ?User;
    abstract function logout(NoParams $params): bool;
    abstract function readUserById(ReadUserParams $params): ?User;
}