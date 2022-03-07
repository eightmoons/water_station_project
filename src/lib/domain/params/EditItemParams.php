<?php

namespace lib\domain\params;

use lib\domain\models\Product;

class EditItemParams extends BaseParams
{
    public function __construct(
        public readonly Product $product,
    ) { }
}