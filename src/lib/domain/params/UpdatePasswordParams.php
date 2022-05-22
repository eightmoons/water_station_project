<?php

namespace lib\domain\params;

class UpdatePasswordParams extends BaseParams {
    public function __construct(
        public readonly string $code,
        public readonly string $password
    ) { }
}