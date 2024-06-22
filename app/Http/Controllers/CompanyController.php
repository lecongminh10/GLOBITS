<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Services\CompanyService;
use App\Services\DepartmentService;
use App\Services\ProjectService;
use Illuminate\Http\Request;

class CompanyController extends Controller
{

    protected $companyService;
    protected $departmentService;
    
    protected $projectService;
    public function __construct(CompanyService $companyService , DepartmentService $departmentService , ProjectService $projectService)
    {
        $this->companyService = $companyService;
        $this->departmentService= $departmentService;
        $this ->projectService = $projectService;
    }

    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10); 
        $companies = $this->companyService->paginate($perPage);
        return view('company.index', compact('companies'));
    }
    public function create()
    {
        return view('company.create');
    }
    public function store(CompanyRequest $request)
    {
        $data = $request->only(['code', 'name', 'address']);
        $this->companyService->saveOrUpdate($data);
        return redirect()->route('company.index')->with('success', 'Company created successfully.');
    }
    public function edit(string $id)
    {
        $company = $this->companyService->getById($id);
        return view('company.edit', ['company' => $company]);
    }
    public function update(CompanyRequest $request, string $id)
    {
        $data = $request->only(['code', 'name', 'address']);
        $this->companyService->saveOrUpdate($data ,);
        return redirect()->route('company.index')->with('success', 'Company updated successfully.');
    }
    public function destroy(string $id)
    {

        $childDepartmentsCount = $this->departmentService->getChildDepartmentsCount($id);
        $childProjectCount = $this->projectService-> companygetChildProjectCount($id);
        if ($childDepartmentsCount > 0 || $childProjectCount >0) {
            return redirect()->route('company.index')->with('error', 'Cannot delete company because it has department or project.');
        }
        $this->companyService->delete($id);
        return redirect()->route('company.index')->with('success', 'Company delete successfully.');
    }
}
