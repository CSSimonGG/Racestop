<?php

namespace Database\Seeders;

use App\Models\Grandprix;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrandprixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Grandprix::create([
            'country' => 'Bahrain',
            'grand_prix' => 'Bahrain GP',
            'flag' => 'bhr-flag.png',
        ]);

        Grandprix::create([
            'country' => 'Saudi Arabia',
            'grand_prix' => 'Saudi Arabian GP',
            'flag' => 'sau-flag.png',
        ]);

        Grandprix::create([
            'country' => 'Australia',
            'grand_prix' => 'Australian GP',
            'flag' => 'aus-flag.png',
        ]);
    }
}
