<?php

namespace lib\domain\usecase;

use lib\domain\repository\UserRepository;

class LoginUseCase extends BaseUseCase {
    
    public function __construct(
        UserRepository $repository
    ) { }
    
}