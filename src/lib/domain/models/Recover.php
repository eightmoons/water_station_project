<?php

namespace lib\domain\models;

class Recover
{
    public function __construct(
        public readonly int $id,
        public readonly int $userId,
        public readonly string $code,
        public readonly bool $isUsed
    ) {
    }
}