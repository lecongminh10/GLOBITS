<?php
namespace App\Repositories;

use App\Models\Country;

class CountryRepository extends BaseRepository
{
    protected $countryRepository;

    public function __construct(Country $countryRepository)
    {
        parent::__construct($countryRepository);
        $this ->countryRepository = $countryRepository;
    }

}