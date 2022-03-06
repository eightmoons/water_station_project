<?php

namespace lib\domain\params;

class LoginParams extends BaseParams {
    public function __construct(
        int $username,
        string $password
    ) { }
}