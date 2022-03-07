<?php

namespace lib\domain\params;

class ReadUserParams extends BaseParams
{
    public function __construct(
        public readonly int $id
    )
    {
    }

}