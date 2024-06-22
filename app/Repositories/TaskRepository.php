<?php

namespace App\Repositories;
use App\Models\Task;
use Illuminate\Support\Facades\DB;

class TaskRepository extends BaseRepository
{
    protected $taskRepository;

    public function __construct(Task $taskRepository)
    {
        parent::__construct($taskRepository);
        $this ->taskRepository = $taskRepository;

    }

    public function getAll(){
        $tasks = DB::table('tasks')
                    ->join('persons' , 'tasks.person_id' ,'=','persons.id')
                    ->join('projects' , 'tasks.project_id', '=','projects.id')
                    ->select('tasks.*' , 'persons.full_name as t_s_fullname', 'projects.name as t_p_name')
                    ->orderBy('tasks.id' , 'desc')
                    ->get();

        return $tasks;
    }
}