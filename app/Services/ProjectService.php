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
        public function createProject(array $data)
        {
            return $this->projectService->createRepository($data);
        }
        public function updateProject($id, array $data)
        {

            $this->projectService->getById($id);
            return $this->projectService->update($id, $data);
        }

        public function getID_Name(){
            return $this ->projectService ->getID_Name();
        }

        // đếm số project thuộc company
        public function Company_getChildProjectCount($company_id){
            return $this ->projectService ->Company_getChildProjectCount($company_id);
        }
}