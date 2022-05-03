<?php

namespace lib\domain\params;

class ForgotPasswordParams extends BaseParams {
    public function __construct(
        public readonly string $username
    ) { }
}