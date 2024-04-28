<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('user.index' , ['users' => $users]);

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $is_active= ['active'=>'Active','inactive'=>'Inactive'];


        
        $roles= Role::select('id' ,'role')->get();

      
       
        return view('user.create' ,['roles' =>$roles ,'is_active'=>$is_active]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    
    {   
       
       
        $user = new User;
        $user ->name = $request ->name;
        $user ->email = $request ->email;
        $user -> password = $request ->password;
        $user ->is_active= $request ->is_active;
        $user ->save();
        if ($request->has('roles')) {
             $user->roles()->attach($request->roles);
        }

       
        return redirect()->route('user.index')->with('success' , 'User more successful');
    }

    /**
     * Display the specified resource.
     */
 

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $roles= Role::select('id' ,'role')->get();
        $user = User::findOrFail($id);
        $role_user = Role::getAll_id($id);
        $roles_array = [];

        foreach($role_user as $key => $value){
            $role_info = [
                'role_id'        => $value->role_id,
                'role_name'      => $value->role_name
            ];
            $roles_array[] = $role_info;
        }

        return view('user.edit' , 
        [
            'user'               =>$user,
            'roles_array'        => $roles_array,
            'roles'              => $roles

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
      
        $user = User::findOrFail($id);
    
        
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'is_active' => $request->is_active,
        ]);
    
    
        if ($request->has('roles')) {
           
            $user->roles()->detach();
            $user->roles()->attach($request->roles);
        } else {
            $user->roles()->detach();
        }
    
        // Chuyển hướng người dùng sau khi cập nhật thành công
        return redirect()->route('user.index')->with('success', 'Update successful');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::findOrFail($id);
        $user ->delete();
        
        return redirect() ->route('user.index') ->with('success' , 'Delete successful');
    }
}
