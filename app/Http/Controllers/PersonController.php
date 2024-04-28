<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Models\Company;
use App\Models\Person;
use App\Models\User;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $person= new Person;

        $persons= $person ->getAll();

        // dd($persons);
       
        return view('person.index' , ['persons' =>$persons]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $user= User::getID_Name();

        $company =Company::getID_Name();

       
        return view('person.create' , [
            'user'        =>    $user,
            'company'     =>    $company
            ] );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonRequest $request)
    {
        //
        $person= new Person;

        $person ->full_name = $request ->full_name;
        $person ->gender = $request ->gender;
        $person ->birthdate = $request ->birthdate;
        $person ->phone_number = $request -> phone_number;
        $person ->address = $request -> address;
        $person ->user_id = $request ->user_id;
        $person ->company_id = $request ->company_id;
        
        $person ->save();
        return redirect() ->route('person.index') ->with('success' , 'Person successful');

    }

    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users= User::getID_Name();
        $company =Company::getID_Name();
        $person =  Person::findOrFail($id);
        return view('person.edit'  ,
         [
            'person' =>$person,
            'users' =>$users,
            'company' =>$company
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonRequest $request, string $id)
    {
        $person =  Person::findOrFail($id);

        $person ->update([
            
        'full_name'      => $request -> full_name,
        'gender'         => $request -> gender,
        'birthdate'      => $request -> birthdate,
        'phone_number'   => $request -> phone_number,
        'address'        => $request -> address,
        'user_id'        => $request -> user_id,
        'company_id'     => $request -> company_id,
        ]);
        return redirect() ->route('person.index') ->with('success' , 'Update person successful');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $person = Person::findOrFail($id);
        $person->delete();

        return redirect() ->route('person.index') ->with('success' , 'Delete person successful');
    }
}
