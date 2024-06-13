<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Http\Requests\ProjectRequest;
use App\Models\Company;
use App\Models\Person;
use App\Models\Project;
use App\Services\CompanyService;
use App\Services\PersonService;
use App\Services\ProjectService;
use App\Services\UserService;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    protected $projectService;

    protected $personService;
    protected $companyService;

    public function __construct(ProjectService $projectService, PersonService $personService, CompanyService $companyService)
    {
        $this->projectService = $projectService;
        $this->personService = $personService;
        $this->companyService = $companyService;
    }

    public function index()
    {
        $projects = $this->projectService->getAll();
        return view('project.index', ['projects' => $projects]);
    }

    public function create()
    {
        $companies = $this->companyService->getID_Name();
        $persons = $this->personService->getID_Name();
        return view('project.create', ['companies' => $companies, 'persons' => $persons]);
    }

    public function store(ProjectRequest $request)
    {
        $data = $request->only(['code', 'name', 'description', 'company_id']);
        $project = $this->projectService->createProject($data);
        if ($request->has('persons')) {
            $project->persons()->attach($request->persons);
        }
        return redirect()->route('project.index')->with('success', 'Project created successfully.');
    }
    public function edit(string $id)
    {
        $project = $this->projectService->getById($id);
        $companies = $this->companyService->getID_Name();
        $persons = $this->personService->getID_Name();
        return view('project.edit', ['project' => $project, 'companies' => $companies, 'persons' => $persons]);
    }
    public function update(ProjectRequest $request, string $id)
    {

        $data = $request->only(['code', 'name', 'description', 'company_id']);
        $project = $this->projectService->updateProject($id, $data);

        if ($request->has('persons')) {
            $project->persons()->detach();
            $project->persons()->attach($request->persons);
        } else {
            $project->persons()->detach();
        }
        return redirect()->route('project.index')->with('success', 'Project update successfully.');
    }

    public function destroy(string $id)
    {
        $this->projectService->delete($id);
        return redirect()->route('project.index')->with('success', 'Project delete successfully.');
    }
}
