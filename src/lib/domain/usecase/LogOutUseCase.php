<?php

namespace lib\domain\usecase;

use lib\domain\repository\UserRepository;

class LogOutUseCase extends BaseUseCase {
        
    public function __construct(
        UserRepository $repository
    ) { }
    
}