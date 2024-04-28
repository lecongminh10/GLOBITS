<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::paginate(10);
        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompanyRequest $request)
    {
        
        $validatedData = $request->validated();

       
        $company = new Company();
        $company->code = $validatedData['code'];
        $company->name = $validatedData['name'];
        $company->address = $validatedData['address'];
        $company->save();

       
        return redirect()->route('company.index')->with('success', 'Company created successfully.');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company= Company::findOrFail($id);
        return view('company.edit' , ['company' =>$company]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompanyRequest $request, string $id)
    {
        $company= Company::findOrFail($id);
      
        $company ->update([
           'code'    =>  $request ->code,
           'name'    =>  $request ->name,
           'address' =>  $request ->address,
        ]);
        return redirect()->route('company.index')->with('success', 'Company updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $company= Company::findOrFail($id);
        $company ->delete();
        return redirect()->route('company.index')->with('success', 'Company delete successfully.');
    }
}
