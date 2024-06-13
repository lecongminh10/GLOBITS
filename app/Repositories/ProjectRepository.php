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

    public function createRepository(array $data)
    {
        $projectRepository = $this->projectRepository->create($data);

        return $projectRepository;
    }

    public function update($id, array $data)
    {
        $projectRepository = $this->projectRepository->findOrFail($id);

        $projectRepository->update($data);
        return $projectRepository;
    }


    public function getID_Name()
    {
        $project = Project::select('id', 'name')->get();
        return $project;
    }

    public function Company_getChildProjectCount($company_id){
        return Project::where('company_id', $company_id)->count();
    }
}
