<?php

namespace App\Services;

use App\Repositories\DepartmentRepository;

class DepartmentService extends BaseService
{
        protected $departmentService;

        public function __construct(DepartmentRepository $departmentService)
        {
            parent::__construct($departmentService);
            $this ->departmentService = $departmentService;
        }

        // thêm 
        public function createDepartment(array $data)
        {
            return $this->departmentService->createRepository($data);
        }

        // lấy tất cả các department có cùng id là company
        public function getAllDepartment_IDcompany($id, $perPage = 10)
        {
            return $this->departmentService->getAllDepartment_IDcompany($id, $perPage);
        }

        public  function getAllDepartment_ID($id){
           
            return $this ->departmentService ->getAllDepartment_ID($id);
      }
      public function updateDepartment($id, array $data)
      {
          $this->departmentService->getById($id);
          return $this->departmentService->update($id, $data);
      }
      // đếm số department con
      public function getChildDepartmentsCount($id){
        return $this ->departmentService->getChildDepartmentsCount($id);
      }
      // đếm số department trong commany
      public function Company_getChildDepartmentsCount($id)
      {
        return $this ->departmentService->Company_getChildDepartmentsCount($id);
      }
 }