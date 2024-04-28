<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Task extends Model
{
    use HasFactory;

    protected $table="tasks";
    
    protected $fillable =[
        'project_id',
        'person_id',
        'start_time',
        'end_time',
        'priority',
        'name',
        'description',
        'status'
    ];

    public static function getAll(){
        $tasks = DB::table('tasks')
                    ->join('persons' , 'tasks.person_id' ,'=','persons.id')
                    ->join('projects' , 'tasks.project_id', '=','projects.id')
                    ->select('tasks.*' , 'persons.full_name as t_s_fullname', 'projects.name as t_p_name')
                    ->orderBy('tasks.id' , 'desc')
                    ->get();

        return $tasks;
    }
}
