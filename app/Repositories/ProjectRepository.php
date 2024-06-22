<?php

namespace App\Repositories;

use App\Models\Project;

class ProjectRepository extends BaseRepository

{

    protected $projectRepository;

    public function __construct(Project $projectRepository)
    {
        parent::__construct($projectRepository);
        $this->projectRepository = $projectRepository;
    }


    public function getID_Name()
    {
        $project = Project::select('id', 'name')->get();
        return $project;
    }

    public function companygetChildProjectCount($company_id){
        return Project::where('company_id', $company_id)->count();
    }
}
