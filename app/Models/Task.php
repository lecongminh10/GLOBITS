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
}
