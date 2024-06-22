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
       
        public function getID_Name(){
            return $this ->companyService ->getID_Name();
        }
}