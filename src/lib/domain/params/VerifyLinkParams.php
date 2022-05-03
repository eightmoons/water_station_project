<?php

namespace lib\domain\params;

class VerifyLinkParams extends BaseParams {
    public function __construct(
        public readonly string $code
    ) { }
}