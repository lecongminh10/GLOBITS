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

    public function createRepository(array $data)
    {
        $countryRepository = $this->countryRepository->create($data);

        return $countryRepository;
    }
    public function update($id, array $data)
    {
        $countryRepository = $this->countryRepository->findOrFail($id);

        $countryRepository->update($data);
        return $countryRepository;
    }
}