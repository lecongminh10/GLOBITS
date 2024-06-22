<?php

namespace App\Services;

use App\Repositories\ProjectRepository;

class ProjectService extends BaseService
{
        protected $projectService;

        public function __construct(ProjectRepository $projectService)
        {
            parent::__construct($projectService);
            $this ->projectService = $projectService;
        }
 
        public function getID_Name(){
            return $this ->projectService ->getID_Name();
        }

        // đếm số project thuộc company
        public function companygetChildProjectCount($company_id){
            return $this ->projectService ->companygetChildProjectCount($company_id);
        }
}