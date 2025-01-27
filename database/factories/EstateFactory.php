<?php

namespace Database\Factories;

use App\Models\Realtor;
use App\Models\Type;
use App\Models\User;
use Carbon\Factory;

class EstateFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'type_id' => Type::inRandomOrder()->first()->id,
            'price' => fake()->numberBetween(1, 1000),
            'description' => fake()->sentence(50, 100),
            'realtor_id' => Realtor::inRandomOrder()->first()->id,
        ];
    }
}
