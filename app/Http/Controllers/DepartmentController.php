<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        $company = Company::findOrFail($id);
       
     
        $departments = Department::getAllDepartment_IDcompany($id);



        $nameCompany= $company->name;
        $companyId= $id;

        return view('department.index', [
            'companyId'   =>$companyId,
            'departments' =>$departments,
            'nameCompany' => $nameCompany,
           // 'parentsChild'=>$parentsChild,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $company = Company::findOrFail($id);
        $departments = Department::getAllDepartment_IDcompany($id);
        $nameCompany= $company->name;
        $companyId= $id;
        return view('department.create', [
            'companyId'   =>$companyId,
            'departments' =>$departments,
            'nameCompany' =>$nameCompany
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , string $id)
    {
        $validateDate= $request ->validate([
            'code'                  =>'required|string|max:255',
            'name'                  =>'required|string|max:255',
            'parent_id'             => 'nullable|string',
            'company_id'            => 'required|exists:companies,id',
        ],
        [
            'code.required'         =>'The code field is required.',
            'name.required'         =>'The name field is required.',
            'company_id.exists'     => 'The selected company is invalid.'
        ]);

        $department= new Department;
        $companyId= $id;
        $department ->code      = $validateDate['code'];
        $department ->name      = $validateDate['name'];
        $department ->parent_id =  $validateDate['parent_id'];
        $department ->company_id= $validateDate['company_id'];

        $department->save();

        return redirect()->route('company.id.department.index', ['company' => $companyId, 'id' => $id])->with('success', 'Role created successfully');



    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($company, $department)
    {
        // Tìm phòng ban với id tương ứng
        $departments     = Department::getAllDepartment_IDcompany($company);
        $department      = Department::findOrFail($department);
        $company         = Company::findOrFail($company);
        $companyId       = $company ->id;
    
        $nameCompany= $company->name;

       return view('department.edit' , ['departments'=> $departments,'department'=> $department,'nameCompany'=>$nameCompany ,'companyId' =>$companyId]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $company, $departmentID)
    {
        $department = Department::findOrFail($departmentID);
      

    
        $validateData = $request->validate([
            'code'                   => 'required|string|max:255',
            'name'                   => 'required|string|max:255',
            'parent_id'              => 'nullable|exists:departments,id',
            'company_id'             => 'required|exists:companies,id',
        ], [
            'code.required'          => 'The code field is required.',
            'name.required'          => 'The name field is required.',
            'parent_id.exists'       => 'The selected parent department is invalid.',
            'company_id.exists'      => 'The selected company is invalid.',
        ]);
    
        $department->update([
            'code'                   => $validateData['code'],
            'name'                   => $validateData['name'],
            'parent_id'              => $validateData['parent_id'],
            'company_id'             => $validateData['company_id'],
        ]);
    
        return redirect()->route('company.id.department.index', ['company' => $company])->with('success', 'Department updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
        */
        
        public function destroy($company, $departmentID)
        {
            $department = Department::findOrFail($departmentID);
            $department->delete();
        
            return redirect()->route('company.id.department.index', ['company' => $company])->with('success', 'Department delete successfully');
        }
        

}
