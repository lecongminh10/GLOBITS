<?php

namespace App\Services;

use App\Repositories\RoleRepository;

class RoleService extends BaseService
{
        protected $roleService;

        public function __construct(RoleRepository $roleService)
        {
            parent::__construct($roleService);
            $this ->roleService = $roleService;
        }

        public function getID_Role(){
            return $this ->roleService->getID_Role();
        }

        public function getAll_id($id){
            return $this ->roleService ->getAll_id($id);
        }


}