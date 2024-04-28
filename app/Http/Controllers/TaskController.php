<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use App\Exports\TasksExport;
use App\Http\Requests\TaskRequest;
use Maatwebsite\Excel\Facades\Excel;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::getAll();
        
        return view('task.index' , ['tasks' =>$tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Project::select('id' ,'name')->get();
        $persons  = Person::select('id' , 'full_name')->get();

        return view('task.create' , 
        [
            'persons'   =>$persons ,
            'projects'  =>$projects,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {
            $validateData = $request->validated();
            $task = new Task;

            $task ->project_id          =$validateData['project_id'];
            $task ->person_id           =$validateData['person_id'];
            $task ->start_time          =$validateData['start_time'];
            $task ->end_time            =$validateData['end_time'];
            $task ->priority            =$validateData['priority'];
            $task ->name                =$validateData['name'];
            $task ->description         =$validateData['description'];
            $task ->status              =$validateData['status'];


            $task->save();

            return redirect()->route('task.index')->with('success', 'Task created successfully');
            
        
    }

    /**
     * Display the specified resource.
     */
    // public function show(Task $task)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task= Task::findOrFail($id);
        $projects = Project::select('id' ,'name')->get();
        $persons  = Person::select('id' , 'full_name')->get();
        return view('task.edit' ,['task' =>$task,'persons' =>$persons , 'projects' =>$projects]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskRequest $request, string $id)
    {
        $task= Task::findOrFail($id);
        $validateData = $request->validated();

        $task ->update([
            'project_id'                 => $validateData['project_id'],
            'person_id'                  => $validateData['person_id'],
            'start_time'                 => $validateData['start_time'],
            'end_time'                   => $validateData['end_time'],
            'priority'                   => $validateData['priority'],
            'name'                       => $validateData['name'],
            'description'                => $validateData['description'],
            'status'                     => $validateData['status'],
        ]);
        return redirect()->route('task.index')->with('success', 'Task updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task= Task::findOrFail($id);
        $task->delete();
        return redirect()->route('task.index')->with('success', 'Task delete successfully');
    }
    
    // public function exportExcel()
    // {
    //     $tasks = Task::getAll(); 
    
    //     return Excel::download(new TasksExport($tasks), 'tasks.xlsx');
    // }
    public function export() 
    {
        return Excel::download(new TasksExport, 'tasks.xlsx');
    }

}
