<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Person;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('company')->get();



        return view('project.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::select('id', 'name')->get();
        $persons = Person::select('id', 'full_name')->get();

        return view('project.create', ['companies' => $companies, 'persons' => $persons]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code'                   => 'required|string|max:255',
            'name'                   => 'required|string|max:255',
            'description'            => 'required|string',
            'company_id'             => 'required|exists:companies,id',
            'persons'                => 'required|array',
            'persons.*'              => 'exists:persons,id',
        ], [
            'code.required'          => 'The code field is required.',
            'name.required'          => 'The name field is required.',
            'description.required'   => 'The description field is required.',
            'company_id.required'    => 'Please select a company.',
            'company_id.exists'      => 'The selected company does not exist.',
            'persons.required'       => 'Please select at least one person.',
            'persons.*.exists'       => 'One or more selected persons do not exist in the database.',
        ]);
        $project = new Project();
        $project->code               = $validatedData['code'];
        $project->name               = $validatedData['name'];
        $project->description        = $validatedData['description'];
        $project->company_id         = $validatedData['company_id'];
        $project->save();

       
        $project->persons()->attach($validatedData['persons']);

       
        return redirect()->route('project.index')->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Project $project)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        $companies = Company::select('id', 'name')->get();
        $persons = Person::select('id', 'full_name')->get();
        return view('project.edit' , ['project' =>$project,'companies' => $companies, 'persons' => $persons]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'code'                  => 'required|string|max:255',
            'name'                  => 'required|string|max:255',
            'description'           => 'required|string',
            'company_id'            => 'required|exists:companies,id',
            'persons'               => 'required|array',
            'persons.*'             => 'exists:persons,id',
        ], [
            'code.required'         => 'The code field is required.',
            'name.required'         => 'The name field is required.',
            'description.required'  => 'The description field is required.',
            'company_id.required'   => 'Please select a company.',
            'company_id.exists'     => 'The selected company does not exist.',
            'persons.required'      => 'Please select at least one person.',
            'persons.*.exists'      => 'One or more selected persons do not exist in the database.',
        ]);
        $project = Project::findOrFail($id);
       
        $project ->update([
            'code'                  =>$validatedData['code'],
            'name'                  =>$validatedData['name'],
            'description'           =>$validatedData['description'],
            'company_id'            =>$validatedData['company_id']
        ]);
        if ($request->has('persons')) {
           
          $project->persons()->detach();
          $project->persons()->attach($request->persons);
        } else {
          $project->persons()->detach();
        }
        return redirect()->route('project.index')->with('success', 'Project update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $project = Project::findOrFail($id);
        $project->delete();

         return redirect()->route('project.index')->with('success', 'Project delete successfully.');
    }
}
