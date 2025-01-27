<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $objs = ['Kwartira', 'Satlyk', 'Satyn Aljak', 'Satjak', 'Kwartira Gerek', 'Kwartira Gozle'];

        foreach ($objs as $obj) {
            Type::create([
                'name' => $obj,
            ]);
        }
    }
}
