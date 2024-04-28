<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::paginate(10);
        return view('roles.index', compact('roles'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validateData= $request->validate([
                'role'                  => 'required|string|max:255',
                'description'           => 'nullable|string',
            ],
            [
                'role.required'         => 'The role field is required.',
                'role.max'              => 'The role may not be greater than 255 characters.',
               
            ]
        );

            $role = new Role;

            $role ->role=$validateData['role'];
            $role ->description= $validateData['description'];

            $role ->save();
   

    return redirect()->route('role.index')->with('success', 'Role created successfully.');

    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::findOrFail($id);
        return view('roles.edit' , ['role' =>$role]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $role = Role::findOrFail($id);
        $validateData= $request->validate([
            'role'               => 'required|string|max:255',
            'description'        => 'nullable|string',
        ],[
            'role.required'      => 'The role field is required.',
            'role.max'           => 'The role may not be greater than 255 characters.',
           
        ]
    );
        $role ->update([
            'role'               =>$validateData['role'],
            'description'        =>$validateData['description']
        ]);
        return redirect()->route('role.index')->with('success', 'Role update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);
        $role ->delete();
        return redirect()->route('role.index')->with('success', 'Role delete successfully.');
    }
}
