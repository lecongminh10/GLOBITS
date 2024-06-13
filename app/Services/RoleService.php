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
        public function createRole(array $data)
        {
            return $this->roleService->createRepository($data);
        }
        public function updateRole($id, array $data)
        {

            $this->roleService->getById($id);
            return $this->roleService->update($id, $data);
        }

        public function getID_Role(){
            return $this ->roleService->getID_Role();
        }

        public function getAll_id($id){
            return $this ->roleService ->getAll_id($id);
        }


}