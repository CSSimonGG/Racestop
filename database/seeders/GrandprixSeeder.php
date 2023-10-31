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
            'country' => 'Bahrain',
            'grand_prix' => 'Bahrain GP',
            'flag' => 'bhr-flag.png',
        ]);

        // Saudi Arabian GP
        Grandprix::create([
            'country' => 'Saudi Arabia',
            'grand_prix' => 'Saudi Arabian GP',
            'flag' => 'sau-flag.png',
        ]);

        // Australian GP
        Grandprix::create([
            'country' => 'Australia',
            'grand_prix' => 'Australian GP',
            'flag' => 'aus-flag.png',
        ]);

        // Azerbaijan GP
        Grandprix::create([
            'country' => 'Azerbaijan',
            'grand_prix' => 'Azerbaijan GP',
            'flag' => 'aze-flag.png',
        ]);

        // Miami GP
        Grandprix::create([
            'country' => 'United States',
            'grand_prix' => 'Miami GP',
            'flag' => 'usa-flag.png',
        ]);

        // Monaco GP
        Grandprix::create([
            'country' => 'Monaco',
            'grand_prix' => 'Monaco GP',
            'flag' => 'mco-flag.png',
        ]);

        // Spanish GP
        Grandprix::create([
            'country' => 'Spain',
            'grand_prix' => 'Spanish GP',
            'flag' => 'esp-flag.png',
        ]);

        // Canadian GP
        Grandprix::create([
            'country' => 'Canada',
            'grand_prix' => 'Canadian GP',
            'flag' => 'can-flag.png',
        ]);

        // Austrian GP
        Grandprix::create([
            'country' => 'Austria',
            'grand_prix' => 'Austrian GP',
            'flag' => 'aut-flag.png',
        ]);

        // British GP
        Grandprix::create([
            'country' => 'Great Britain',
            'grand_prix' => 'British GP',
            'flag' => 'gbr-flag.png',
        ]);

        // Hungarian GP
        Grandprix::create([
            'country' => 'Hungary',
            'grand_prix' => 'Hungarian GP',
            'flag' => 'hun-flag.png',
        ]);

        // Belgian GP
        Grandprix::create([
            'country' => 'Belgium',
            'grand_prix' => 'Belgian GP',
            'flag' => 'bel-flag.png',
        ]);

        // Dutch GP
        Grandprix::create([
            'country' => 'The Netherlands',
            'grand_prix' => 'Dutch GP',
            'flag' => 'nl-flag.png',
        ]);

        // Italian GP
        Grandprix::create([
            'country' => 'Italy',
            'grand_prix' => 'Italian GP',
            'flag' => 'ita-flag.png',
        ]);

        // Singapore GP
        Grandprix::create([
            'country' => 'Singapore',
            'grand_prix' => 'Singapore GP',
            'flag' => 'sgp-flag.png',
        ]);

        // Japanese GP
        Grandprix::create([
            'country' => 'Japan',
            'grand_prix' => 'Japanese GP',
            'flag' => 'jpn-flag.png',
        ]);

        // Qatar GP
        Grandprix::create([
            'country' => 'Qatar',
            'grand_prix' => 'Qatar GP',
            'flag' => 'qat-flag.png',
        ]);

        // United States GP
        Grandprix::create([
            'country' => 'United States',
            'grand_prix' => 'United States GP',
            'flag' => 'usa-flag.png',
        ]);

        // Mexican GP
        Grandprix::create([
            'country' => 'Mexico',
            'grand_prix' => 'Mexican GP',
            'flag' => 'mex-flag.png',
        ]);

        // Brazilian GP
        Grandprix::create([
            'country' => 'Brazil',
            'grand_prix' => 'Brazilian GP',
            'flag' => 'bra-flag.png',
        ]);

        // Las Vegas GP
        Grandprix::create([
            'country' => 'United States',
            'grand_prix' => 'Las Vegas GP',
            'flag' => 'usa-flag.png',
        ]);

        // Abu Dhabi GP
        Grandprix::create([
            'country' => 'Abu Dhabi',
            'grand_prix' => 'Abu Dhabi GP',
            'flag' => 'are-flag.png',
        ]);
    }
}
