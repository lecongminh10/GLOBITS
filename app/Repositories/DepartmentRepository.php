<?php

namespace App\Repositories;

use App\Models\Department;

class DepartmentRepository extends BaseRepository
{
    protected $departmentRepository;
    public function __construct(Department $departmentRepository)
    {
        parent::__construct($departmentRepository);
        $this->departmentRepository = $departmentRepository;
    }
    public function getAllDepartment_IDcompany($id, $perPage = 10)
    {
        $departments = Department::where('company_id', $id)
            ->with('company')
            ->whereNull('parent_id')
            ->paginate($perPage);
        return $departments;
    }
    public function createRepository(array $data)
    {
        $departmentRepository = $this->departmentRepository->create($data);
        return $departmentRepository;
    }

    public  function getAllDepartment_ID($id)
    {
        $departments = Department::where('parent_id', $id)->get();
        return $departments;
    }
    public function update($id, array $data)
    {
        $departmentRepository = $this->departmentRepository->findOrFail($id);
        $departmentRepository->update($data);
        return $departmentRepository;
    }

    public function getChildDepartmentsCount($parentDepartmentId)
    {
        return Department::where('parent_id', $parentDepartmentId)->count();
    }

    public function companygetChildDepartmentsCount($parentDepartmentId)
    {
        return Department::where('company_id ', $parentDepartmentId)->count();
    }
}
