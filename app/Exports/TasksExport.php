<?php
namespace App\Exports;

use App\Models\Task;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TasksExport implements FromCollection, WithHeadings
{
    protected $tasks;

    // public function __construct($tasks)
    // {
    //     $this->tasks = $tasks;
    // }

    public function collection()
    {
        // return Task::select('project_id', 'description', 'start_time', 'end_time', 'priority', 'status', 'person_id')->get();

               $tasks = DB::table('tasks')
                    ->join('persons' , 'tasks.person_id' ,'=','persons.id')
                    ->join('projects' , 'tasks.project_id', '=','projects.id')
                    ->select('projects.name as t_p_name' , 'tasks.description' , 'tasks.start_time', 'tasks.end_time' , 'tasks.priority' , 'tasks.status','persons.full_name')
                    ->orderBy('tasks.id' , 'desc')
                    ->get();

            return $tasks;
    }

    public function headings(): array
    {
        return [
            'Project',
            'Description',
            'Start Time',
            'End Time',
            'Priority',
            'Status',
            'Person',
        ];
    }
}

