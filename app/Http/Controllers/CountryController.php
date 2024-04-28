<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryRequest;
use App\Models\Country;


class CountryController extends Controller
{
    //
    public function index(){
        $countries = Country::paginate(10);

        return view('country.index' , ['countries' =>$countries]);
    }

    public function create(){
        return view('country.create');
    }

    public function store(CountryRequest $request){


        $country= new Country;
        $country ->name= $request ->name;
                            
        $country ->code = $request ->code;

        $country ->description = $request ->description;

        $country ->save();
        return redirect()->route('country.index')->with('success' , 'Country more successful');
    }

    public function edit(string $id){
        $country =Country::findOrFail($id);

        return view('country.edit' , ['country' =>$country]);

        
    }

    public function update( CountryRequest  $request , string $id){
        $country = Country::findOrFail($id);

        $country ->update([
            'code' =>$request ->code,
            'name' => $request ->name,
            'description' =>$request ->description
        ]);
        return redirect()->route('country.index')->with('success' , 'Update successful');
    }

    public function destroy(string $id){
        $country = Country::findOrFail($id);
        $country ->delete();
        return redirect()->route('country.index')->with('success' , 'Delete successful');
    }
}
