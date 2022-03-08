<?php

namespace lib\domain\usecase;

use lib\domain\params\BaseParams;

abstract class BaseUseCase {
    abstract public function __invoke(BaseParams $params);
}