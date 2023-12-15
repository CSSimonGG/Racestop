<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // F1
        Category::create([
            'category' => 'F1',
        ]);

        // F2
        Category::create([
            'category' => 'F2',
        ]);

        // F3
        Category::create([
            'category' => 'F3',
        ]);

        // FE
        Category::create([
            'category' => 'FE',
        ]);

        // MotoGP
        Category::create([
            'category' => 'MotoGP',
        ]);

        // Indycar
        Category::create([
            'category' => 'Indycar',
        ]);

        // Nascar
        Category::create([
            'category' => 'Nascar',
        ]);

        // Endurance Racing
        Category::create([
            'category' => 'Endurance Racing',
        ]);
    }
}
