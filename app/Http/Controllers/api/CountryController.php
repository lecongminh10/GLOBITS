<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CountryRequest;
use App\Services\CountryService;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    protected $countryService;

    public function __construct(CountryService $countryService)
    {
        $this->countryService = $countryService;
    }
    public function index()
    {
        return response() ->json($this->countryService->getAll());
    }
    public function store(CountryRequest $request)
    {
        $data = $request->all();
        $this->countryService->createCountry($data);
        return response()->json($this ->countryService, 201);
    }
    public function show(string $id)
    {
        $country = $this->countryService->getById($id);
        return response()->json($country);
    }

    public function update(CountryRequest  $request, string $id)
    {
        $data = $request->all();
        $this->countryService->updateCompany($id, $data);
        return response()->json($this ->countryService);
    }
    public function destroy(string $id)
    {
        $this->countryService->delete($id);
        return response()->json(null, 204);
    }
}
