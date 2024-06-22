<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Role;
use App\Models\User;
use App\Services\RoleService;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $userService;
    protected $roleService;

    public function __construct(UserService  $userService , RoleService $roleService)
    {
        $this->userService = $userService;
        $this->roleService= $roleService;
    }

    public function index(Request $request)
    {
        $perPage = $request   ->  get('per_page', 10);
        $users   = $this      ->  userService->paginate($perPage);
        return view('user.index', ['users' => $users]);
    }
    public function create()
    {
        $is_active = ['active' => 'Active', 'inactive' => 'Inactive'];
        $roles     = $this    ->  roleService ->getID_Role();
        return view('user.create', ['roles' => $roles, 'is_active' => $is_active]);
    }

    public function store(UserRequest $request)

    {
        $data =   $request  ->only(['name', 'email', 'password', 'is_active']);
        if ($request->has('roles')) {
            $data['roles'] = $request->roles;
        }
        $this->userService->saveOrUpdate($data);
        return redirect()->route('user.index')->with('success', 'User more successful');
    }

    public function edit(string $id)
    {
        $roles = $this ->roleService ->getID_Role();
        $user = $this->userService->getById($id);
        $role_user = $this ->roleService ->getAll_id($id);
        $roles_array = [];
        foreach ($role_user as $key => $value) {
            $role_info = [
                'role_id'        => $value->role_id,
                'role_name'      => $value->role_name
            ];
            $roles_array[] = $role_info;
        }

        return view(
            'user.edit',
            [
                'user'               => $user,
                'roles_array'        => $roles_array,
                'roles'              => $roles

            ]
        );
    }
    public function update(UserRequest $request, string $id)
    {
        $data = $request->only(['name', 'email', 'password', 'is_active']);
        if ($request->has('roles')) {
            $data['roles'] = $request->roles;
        }
        $this->userService->saveOrUpdate($data , $id);
        return redirect()->route('user.index')->with('success', 'Update successful');
    }


    public function destroy(string $id)
    {
        $this->userService->delete($id);
        return redirect()->route('user.index')->with('success', 'Delete successful');
    }
}
