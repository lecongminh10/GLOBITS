<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryRequest;
use App\Models\Country;
use App\Services\CountryService;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    //

    protected $countryService;

    public function __construct(CountryService $countryService)
    {
        $this->countryService = $countryService;
    }
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10); 
        $countries = $this->countryService->paginate($perPage);
        return view('country.index', ['countries' => $countries]);
    }

    public function create()
    {
        return view('country.create');
    }

    public function store(CountryRequest $request)
    {
        $data = $request->all();
        $this->countryService->createCountry($data);
        return redirect()->route('country.index')->with('success', 'Country more successful');
    }

    public function edit(string $id)
    {
        $country = $this->countryService->getById($id);
        return view('country.edit', ['country' => $country]);
    }

    public function update(CountryRequest  $request, string $id)
    {
        $data = $request->all();
        $this->countryService->updateCompany($id, $data);
        return redirect()->route('country.index')->with('success', 'Update successful');
    }

    public function destroy(string $id)
    {
        $this->countryService->delete($id);
        return redirect()->route('country.index')->with('success', 'Delete successful');
    }
}
