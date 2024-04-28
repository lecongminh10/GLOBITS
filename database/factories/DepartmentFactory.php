<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'code' => $this ->faker ->unique(),
           'name' => $this ->faker ->name(),
           'parent_id'  => Department::factory()->create() ->id,
           'company_id' => Company::factory()->create() ->id,
        ];
    }
}
