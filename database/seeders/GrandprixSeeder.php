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
        // Bahrain GP
        Grandprix::create([
            'country_id' => '13',
            'grand_prix' => 'Bahrain GP',
        ]);

        // Saudi Arabian GP
        Grandprix::create([
            'country_id' => '152',
            'grand_prix' => 'Saudi Arabian GP',
        ]);

        // Australian GP
        Grandprix::create([
            'country_id' => '9',
            'grand_prix' => 'Australian GP',
        ]);

        // Azerbaijan GP
        Grandprix::create([
            'country_id' => '11',
            'grand_prix' => 'Azerbaijan GP',
        ]);

        // Miami GP
        Grandprix::create([
            'country_id' => '187',
            'grand_prix' => 'Miami GP',
        ]);

        // Monaco GP
        Grandprix::create([
            'country_id' => '114',
            'grand_prix' => 'Monaco GP',
        ]);

        // Spanish GP
        Grandprix::create([
            'country_id' => '165',
            'grand_prix' => 'Spanish GP',
        ]);

        // Canadian GP
        Grandprix::create([
            'country_id' => '33',
            'grand_prix' => 'Canadian GP',
        ]);

        // Austrian GP
        Grandprix::create([
            'country_id' => '10',
            'grand_prix' => 'Austrian GP',
        ]);

        // British GP
        Grandprix::create([
            'country_id' => '186',
            'grand_prix' => 'British GP',
        ]);

        // Hungarian GP
        Grandprix::create([
            'country_id' => '76',
            'grand_prix' => 'Hungarian GP',
        ]);

        // Belgian GP
        Grandprix::create([
            'country_id' => '17',
            'grand_prix' => 'Belgian GP',
        ]);

        // Dutch GP
        Grandprix::create([
            'country_id' => '123',
            'grand_prix' => 'Dutch GP',
        ]);

        // Italian GP
        Grandprix::create([
            'country_id' => '84',
            'grand_prix' => 'Italian GP',
        ]);

        // Singapore GP
        Grandprix::create([
            'country_id' => '157',
            'grand_prix' => 'Singapore GP',
        ]);

        // Japanese GP
        Grandprix::create([
            'country_id' => '86',
            'grand_prix' => 'Japanese GP',
        ]);

        // Qatar GP
        Grandprix::create([
            'country_id' => '142',
            'grand_prix' => 'Qatar GP',
        ]);

        // United States GP
        Grandprix::create([
            'country_id' => '187',
            'grand_prix' => 'United States GP',
        ]);

        // Mexican GP
        Grandprix::create([
            'country_id' => '111',
            'grand_prix' => 'Mexican GP',
        ]);

        // Brazilian GP
        Grandprix::create([
            'country_id' => '24',
            'grand_prix' => 'Brazilian GP',
        ]);

        // Las Vegas GP
        Grandprix::create([
            'country_id' => '187',
            'grand_prix' => 'Las Vegas GP',
        ]);

        // Abu Dhabi GP
        Grandprix::create([
            'country_id' => '185',
            'grand_prix' => 'Abu Dhabi GP',
        ]);
    }
}
