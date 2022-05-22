<?php

namespace lib\domain\params;

class UpdatePasswordParams extends BaseParams {
    public function __construct(
        public string $code,
        public readonly string $password
    ) { }
}