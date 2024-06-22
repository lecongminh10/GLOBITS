<?php

namespace App\Repositories;

use App\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleRepository extends BaseRepository
{
    protected $roleRepository;

    public function __construct(Role $roleRepository)
    {
        parent::__construct($roleRepository);
        $this ->roleRepository = $roleRepository;

    }


    public function getID_Role()
    {
        $roleRepository = Role::select('id', 'role')->get();
        return $roleRepository;
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