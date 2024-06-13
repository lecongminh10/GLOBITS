<?php

namespace App\Repositories;

use App\Models\Company;

class CompanyRepository extends BaseRepository

{

    protected $companyRepository;

    public function __construct(Company $companyRepository)
    {
        parent::__construct($companyRepository);
        $this->companyRepository = $companyRepository;
    }

    public function createRepository(array $data)
    {
        $companyRepository = $this->companyRepository->create($data);

        return $companyRepository;
    }

    public function update($id, array $data)
    {
        $companyRepository = $this->companyRepository->findOrFail($id);

        $companyRepository->update($data);
        return $companyRepository;
    }


    public function getID_Name()
    {
        $company = Company::select('id', 'name')->get();
        return $company;
    }
}
