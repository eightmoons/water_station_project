<?php

namespace lib\domain\params;

class DeleteProductParams extends BaseParams {
    public function __construct(
        public int $id
    ) { }
}