<?php

namespace lib\domain\repository;

use lib\domain\models\User;
use lib\domain\params\LoginParams;
use lib\domain\params\NoParams;

abstract class UserRepository {
    abstract public function login(LoginParams $params): User;
    abstract public function logout(NoParams $params): bool;

}