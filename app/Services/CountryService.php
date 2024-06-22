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


}