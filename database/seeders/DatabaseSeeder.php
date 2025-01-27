<?php

namespace Database\Seeders;

use App\Models\Estate;
use App\Models\Location;
use App\Models\Realtor;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\EmlakFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            TypeSeeder::class,
        ]);

        Realtor::factory()
            ->count(10)
            ->create();

        User::factory()
            ->count(50)
            ->create();

        Estate::factory()
            ->count(1000)
            ->create();

        Location::factory()
            ->count(100)
            ->create();

        User::factory()->create([
            'name' => 'Administrator',
            'username' => 'admin',
        ]);
    }
}
