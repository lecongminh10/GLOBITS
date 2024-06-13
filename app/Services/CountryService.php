<?php

namespace App\Services;

use App\Repositories\CountryRepository;

class CountryService extends BaseService
{
    protected $countryService;

    public function __construct(CountryRepository $countryService)
    {
        parent::__construct($countryService);
        $this ->countryService = $countryService;
    }

    public function createCountry(array $data)
    {
        return $this->countryService->createRepository($data);
    }

    public function updateCompany($id, array $data)
    {

        $this->countryService->getById($id);
        return $this->countryService->update($id, $data);
    }

}