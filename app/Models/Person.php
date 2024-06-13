<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Person extends Model
{
    use HasFactory;
    protected $table = 'persons';
    protected $fillable=[
        'id',
        'full_name',
        'gender',
        'birthdate',
        'phone_number',
        'address',
        'user_id',
        'company_id'
    ];
    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_person');
    }
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // public static function getAll()
    // {
    //     return self::with('user', 'company')->orderBy('id', 'desc')->get();
    // }

}
