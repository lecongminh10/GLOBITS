<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $fillable = ['role', 'description'];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public static function getAll_id($id){

        $roles = DB::table('role_user')
                 ->join('roles', 'role_user.role_id', '=', 'roles.id')
                 ->join('users', 'role_user.user_id', '=', 'users.id')
                 ->select('role_user.*', 'roles.role as role_name', 'users.name as u_name')
                 ->where('role_user.user_id', '=', $id)
                 ->get(); 
    
        return $roles;
    }
    
}

