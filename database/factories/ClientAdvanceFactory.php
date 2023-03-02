<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClientAdvance>
 */
class ClientAdvanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_id' => 1,
            'requested_date' => now()->format('Y-m-d'),
            'advance_amount' => $this->faker->numberBetween(300,2000),
            'duration' => $this->faker->numberBetween(12,12),
            'status' => '1000',
            'validated_date' => null,
            'validated_user' => null,
            'disbursed_amount' => 0,
        ];
    }
}
