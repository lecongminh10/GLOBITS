<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;


class PersonFactory extends Factory
{


    public function definition()
    {
        

        return [
            'full_name' =>$this-> faker->name(),
            'gender' =>$this-> faker->randomElement(['male', 'female']),
            'birthdate' =>$this-> faker->date(),
            'phone_number' =>$this-> faker->phoneNumber,
            'address' =>$this-> faker->address(),
            'user_id' => User::factory()->create()->id,
            'company_id' =>Company::factory()->create()->id,
        ];
    }
}