<?php

namespace lib\domain\repository;

use lib\domain\models\User;
use lib\domain\params\ForgotPasswordParams;
use lib\domain\params\LoginParams;
use lib\domain\params\NoParams;
use lib\domain\params\ReadUserParams;
use lib\domain\params\VerifyLinkParams;

abstract class RecoveryRepository {
    abstract function forgotPassword(ForgotPasswordParams $params): bool;
    abstract function verifyLink(VerifyLinkParams $params): bool;
}