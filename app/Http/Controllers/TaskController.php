<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use App\Exports\TasksExport;
use App\Http\Requests\TaskRequest;
use App\Services\PersonService;
use App\Services\ProjectService;
use App\Services\TaskService;
use Maatwebsite\Excel\Facades\Excel;


class TaskController extends Controller
{

    protected $taskService;
    protected $personService;
    protected $projectService;

    public function __construct(TaskService $taskService, PersonService $personService, ProjectService $projectService)
    {
        $this->taskService = $taskService;
        $this->personService = $personService;
        $this->projectService = $projectService;
    }


    public function index()
    {
        $tasks = $this->taskService->getAll();
        return view('task.index', ['tasks' => $tasks]);
    }
    public function create()
    {
        $projects = $this->projectService->getID_Name();
        $persons = $this->personService->getID_Name();
        return view(
            'task.create',
            [
                'persons'   => $persons,
                'projects'  => $projects,
            ]
        );
    }
    public function store(TaskRequest $request)
    {
        $data = $request->all();
        $this->taskService->saveOrUpdate($data);
        return redirect()->route('task.index')->with('success', 'Task created successfully');
    }

    public function edit(string $id)
    {
        $task = $this->taskService->getById($id);
        $projects = $this->projectService->getID_Name();
        $persons = $this->personService->getID_Name();
        return view('task.edit', ['task' => $task, 'persons' => $persons, 'projects' => $projects]);
    }

    public function update(TaskRequest $request, string $id)
    {
        $data = $request->all();
        $this->taskService->saveOrUpdate($data , $id);
        return redirect()->route('task.index')->with('success', 'Task updated successfully');
    }
    public function destroy(string $id)
    {
        $task = $this->taskService->delete($id);
        return redirect()->route('task.index')->with('success', 'Task delete successfully');
    }

    public function export()
    {
        return Excel::download(new TasksExport, 'tasks.xlsx');
    }
}
