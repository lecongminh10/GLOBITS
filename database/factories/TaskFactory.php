<?php

namespace Database\Factories;

use App\Models\Person;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'project_id'     => Project::factory()->create()->id,
            'person_id'      => Person::factory()->create() ->id,
            'start_time'     => $this ->faker ->dateTime(),
            'end_time'       => $this ->faker ->dateTime(),
            'priority'       => $this ->faker ->randomElement(['1', '2','3']),
            'name'           => $this ->faker ->unique()->word(),
            'description'    => $this ->faker ->sentence(),
            'status'         => $this ->faker ->randomElement(['1', '2','3','4'])
        ];
    }
}
