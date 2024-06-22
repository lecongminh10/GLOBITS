<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartmentRequest;
use App\Models\Company;
use App\Models\Department;
use App\Services\CompanyService;
use App\Services\DepartmentService;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    protected $departmentService;
    protected $companyService;
    public function __construct(DepartmentService $departmentService, CompanyService $companyService)
    {
        $this->departmentService  = $departmentService;
        $this->companyService     = $companyService;
    }
    public function index(string $id)
    {
        $company       = $this->companyService->getById($id);
        $departments   = $this->departmentService->getAllDepartment_IDcompany($id);
        $nameCompany   = $company->name;
        $companyId     = $id;
        $departmentService = $this->departmentService;

        return view('department.index', [
            'companyId'   => $companyId,
            'departments' => $departments,
            'nameCompany' => $nameCompany,
            'departmentService' => $departmentService
        ]);
    }
    public function create(string $id)
    {
        $company        = $this->companyService->getById($id);
        $departments    = $this->departmentService->getAllDepartment_IDcompany($id);
        $nameCompany    = $company->name;
        $companyId      = $id;
        return view('department.create', [
            'companyId'   => $companyId,
            'departments' => $departments,
            'nameCompany' => $nameCompany
        ]);
    }
    public function store(DepartmentRequest $request, string $id)
    {
        $data           = $request->only(['code', 'name', 'parent_id', 'company_id']);
        $companyId      = $data['company_id'];
        $this->departmentService->saveOrUpdate($data);
        return redirect()->route('company.id.department.index', ['company' => $companyId, 'id' => $id])->with('success', 'Role created successfully');
    }

    public function edit($company, $department)
    {
        $departments     = $this->departmentService->getAllDepartment_IDcompany($company);
        $department      = $this->departmentService->getById($department);
        $company         = $this->companyService->getById($company);
        $nameCompany     = $company->name;
        $companyId       = $company->id;
        return view('department.edit', ['departments' => $departments, 'department' => $department, 'nameCompany' => $nameCompany, 'companyId' => $companyId]);
    }
    public function update(DepartmentRequest $request, $company, $departmentID)
    {
        $data = $request->only(['code', 'name', 'parent_id', 'company_id']);
        $this->departmentService->saveOrUpdate($data , $departmentID);
        return redirect()->route('company.id.department.index', ['company' => $company])->with('success', 'Department updated successfully');
    }



    public function destroy($company, $departmentID)
    {
        $childDepartmentsCount = $this->departmentService->getChildDepartmentsCount($departmentID);

        if ($childDepartmentsCount > 0) {
            return redirect()->route('company.id.department.index', ['company' => $company])->with('error', 'Cannot delete department because it has child departments.');
        }

        $this->departmentService->delete($departmentID);
        return redirect()->route('company.id.department.index', ['company' => $company])->with('success', 'Department delete successfully');
    }
}
