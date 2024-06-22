<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Department extends Model
{
    use HasFactory;

    protected $table= "departments";

    protected $fillable=[
        'id',
        'code',
        'name',
        'parent_id',
        'company_id'
    ];
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
     public function parent()
    {
        return $this->belongsTo(Department::class, 'parent_id');
    }
    
}
