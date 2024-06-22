<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService extends BaseService
{
        protected $userService;

        public function __construct(UserRepository $userService)
        {
            parent::__construct($userService);
            $this ->userService = $userService;
        }
        public function  getID_Name(){
           return $this ->userService -> getID_Name();
        }
}