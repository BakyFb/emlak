<?php

namespace Database\Factories;

use App\Models\Estate;
use Carbon\Factory;

class EstateFactory extends Factory
{
    public function definition(): array
    {
        $estate = Estate::inRandomOrder()->first();

        return [
            'user_id' => $user->id,
            'type_id' => $type->id,
            'price' => fake()->price(),
            'slug' => str()->random(5),
            'description' => fake()->sentence(50, 100),
            'views' => fake()->numberBetween(25, 50),
            'favorites' => fake()->numberBetween(0, 25),
        ];
    }
}
