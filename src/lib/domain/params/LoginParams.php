<?php

namespace lib\domain\params;

class LoginParams extends BaseParams {
    public function __construct(
        public readonly string $username,
        public readonly string $password
    ) { }
}