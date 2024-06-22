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

    public function getID_Name(){
        return $this ->personService ->getID_Name();
    }
}