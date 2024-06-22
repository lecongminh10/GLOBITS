<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Services\CompanyService;
use App\Services\PersonService;
use App\Services\UserService;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    protected $personServices;
    protected $userService;
    protected $companyService;

    public function __construct(PersonService $personServices, UserService $userService, CompanyService $companyService)
    {
        $this->personServices  = $personServices;
        $this->userService     = $userService;
        $this->companyService  = $companyService;
    }
    public function index()
    {
        $persons = $this->personServices->getAll();
        return view('person.index', ['persons' => $persons]);
    }
    public function create()
    {
        $user    = $this->userService->getID_Name();
        $company = $this->companyService->getID_Name();

        return view('person.create', [
            'user'        =>    $user,
            'company'     =>    $company
        ]);
    }

    public function store(PersonRequest $request)
    {
        $data = $request->all();
        $this->personServices->saveOrUpdate($data);
        return redirect()->route('person.index')->with('success', 'Person successful');
    }
    public function edit(string $id)
    {
        $users   = $this->userService->getID_Name();
        $company = $this->companyService->getID_Name();
        $person  = $this->personServices->getById($id);

        return view(
            'person.edit',
            [
                'person' => $person,
                'users' => $users,
                'company' => $company
            ]
        );
    }

    public function update(PersonRequest $request, string $id)
    {
        $data = $request->all();
        $this->personServices->saveOrUpdate($data, $id);
        return redirect()->route('person.index')->with('success', 'Update person successful');
    }

    public function destroy(string $id)
    {
        $this->personServices->delete($id);
        return redirect()->route('person.index')->with('success', 'Delete person successful');
    }
}
