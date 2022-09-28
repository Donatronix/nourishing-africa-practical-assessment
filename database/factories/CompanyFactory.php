<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'email' => preg_replace('/@example\..*/', '@domain.com', $this->faker->unique()->safeEmail),
            'user_id' => User::query()->where('type', '<>', 'admin')->inRandomOrder()->first()->id,
            'country' => $this->faker->country(),
            'location' => $this->faker->address(),
        ];
    }
}
