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

    // public static function getAllDepartment_IDcompany($id, $perPage = 10)
    // {
    //     $departments = Department::where('company_id', $id)
    //                              ->with('company')
    //                              ->whereNull('parent_id')
    //                              ->paginate($perPage);
    //     return $departments;
    // }
    
    // public static function getAllDepartment_ID($id){
    //       $departments = Department::where('parent_id','=',$id) ->get(); 
    //       return $departments;
    // }
    
}
