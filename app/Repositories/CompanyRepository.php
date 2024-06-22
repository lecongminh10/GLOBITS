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


    public function getID_Name()
    {
        $company = Company::select('id', 'name')->get();
        return $company;
    }
}
