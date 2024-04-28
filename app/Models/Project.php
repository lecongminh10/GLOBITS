<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable =[
        'code',
        'name',
        'description',
        'company_id'
    ];
    
    public function persons()
    {
        return $this->belongsToMany(Person::class, 'project_person');
    }
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
