<?php

namespace App\Services;

use App\Repositories\PersonRepository;

class PersonService extends BaseService
{
    protected $personService;

    public function __construct(PersonRepository $personService)
    {
        parent::__construct($personService);
        $this ->personService = $personService;
    }
    public function showName($personId)
    {
        return $this->personService->getPersonWithCompanyAndUser($personId);

    }
    public function createPerson(array $data)
    {
        return $this->personService->createRepository($data);
    }
    public function updatePerson($id, array $data)
    {
        $this->personService->getById($id);
        return $this->personService->update($id, $data);
    }

    public function getID_Name(){
        return $this ->personService ->getID_Name();
    }
}