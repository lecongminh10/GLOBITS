<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';
    protected $fillable=[
        
        'code',
        'name',
        'address',
    ];
    public static function getID_Name(){
        $company = Company::select('id', 'name')->get();
        return $company;
    }
}
