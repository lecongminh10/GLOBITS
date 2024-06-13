<?php

namespace App\Services;

use App\Repositories\CompanyRepository;

class CompanyService extends BaseService
{
        protected $companyService;

        public function __construct(CompanyRepository $companyService)
        {
            parent::__construct($companyService);
            $this ->companyService = $companyService;
        }
        public function createCompany(array $data)
        {
            return $this->companyService->createRepository($data);
        }
        public function updateCompany($id, array $data)
        {

            $this->companyService->getById($id);
            return $this->companyService->update($id, $data);
        }

        public function getID_Name(){
            return $this ->companyService ->getID_Name();
        }
}