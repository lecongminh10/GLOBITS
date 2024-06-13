<?php

namespace App\Repositories;

use App\Models\Person;

class PersonRepository extends BaseRepository
{
    protected $personRepository;

    public function __construct(Person $personRepository)
    {
        parent::__construct($personRepository);
        $this ->personRepository = $personRepository;

    }
    public function getPersonWithCompanyAndUser($personId)
    {
        
        $person = $this->personRepository->with(['company', 'user'])->findOrFail($personId);

        $companyName = $person->company->name ?? 'N/A';
        $userName = $person->user->name ?? 'N/A';

        return [
            'person' => $person,
            'companyName' => $companyName,
            'userName' => $userName
        ];
    }

    public function createRepository(array $data)
    {
        $personRepository = $this->personRepository->create($data);

        return $personRepository;
    }

    public function getID_Name(){
        $userRepository = Person::select('id', 'full_name')->get();
        return $userRepository;
    }

}