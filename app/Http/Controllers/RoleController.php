<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Models\Role;
use App\Services\RoleService;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    protected $roleService;

    public function __construct(RoleService $roleService)
    {
        $this ->roleService = $roleService;

    }
    public function index(Request $request)
    {
        $perPage  = $request->get('per_page', 10); 
        $roles    = $this->roleService->paginate($perPage);
        return view('roles.index', compact('roles'));
    }

    public function create()
    {
        return view('roles.create');
    }

    public function store(RoleRequest $request)
    {

        $data   = $request ->all();

        $this ->roleService ->saveOrUpdate($data);

    return redirect()->route('role.index')->with('success', 'Role created successfully.');

    }

    public function edit(string $id)
    {
       $role= $this ->roleService ->getById($id);
        return view('roles.edit' , ['role' =>$role]);
    }

    public function update(RoleRequest $request, string $id)
    {

        $data  = $request ->all();

        $this ->roleService->saveOrUpdate($data , $id);

        return redirect()->route('role.index')->with('success', 'Role update successfully.');
    }

    public function destroy(string $id)
    {
        $this ->roleService->delete($id);
        return redirect()->route('role.index')->with('success', 'Role delete successfully.');
    }
}
