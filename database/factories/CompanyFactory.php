<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'contact_person' => $this->faker->name(),
            'contact_email' => $this->faker->email(),
            'contact_phone_no' => $this->faker->phoneNumber(),
            'location' => $this->faker->city()
        ];
    }
}
