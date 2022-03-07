<?php

namespace lib\domain\repository;

use lib\domain\models\User;
use lib\domain\params\LoginParams;
use lib\domain\params\NoParams;
use lib\domain\params\ReadUserParams;

interface UserRepository {
    public function login(LoginParams $params): ?User;
    public function logout(NoParams $params): bool;
    public function readUserById(ReadUserParams $params): User;
}