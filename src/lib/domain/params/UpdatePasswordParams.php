<?php

namespace lib\domain\params;

class UpdatePasswordParams extends BaseParams {
    public function __construct(
        public readonly string $username,
        public readonly string $password
    ) { }
}