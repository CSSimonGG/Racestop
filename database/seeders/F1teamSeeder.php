<?php

namespace Database\Seeders;

use App\Models\F1team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class F1teamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Red Bull Racing
        F1team::create([
            'active' => '1',
            'name' => 'Red Bull Racing',
            'logo_path' => 'redbull.png',
            'team_hex_color' => '#3671C6',
            'country_id' => '10', // Austria
            'team_chief' => 'Christian Horner',
            'power_unit' => 'Honda',
            'world_championships' => '6',
            'world_championship_points' => '7170',
            'highest_race_finish' => '1',
            'highest_race_finish_times' => '111',
            'podiums' => '261',
            'pole_positions' => '94',
            'fastest_laps' => '94',
            'information' => 'Coming Soon',
        ]);

        // Ferrari
        F1team::create([
            'active' => '1',
            'name' => 'Ferrari',
            'logo_path' => 'ferrari.png',
            'team_hex_color' => '#f91536',
            'country_id' => '84', // Italy
            'team_chief' => 'Fredric Vasseur',
            'power_unit' => 'Ferrari',
            'world_championships' => '16',
            'world_championship_points' => '9628',
            'highest_race_finish' => '1',
            'highest_race_finish_times' => '244',
            'podiums' => '805',
            'pole_positions' => '248',
            'fastest_laps' => '259',
            'information' => 'Coming Soon',
        ]);

        // Mercedes
        F1team::create([
            'active' => '1',
            'name' => 'Mercedes AMG F1',
            'logo_path' => 'mercedes.png',
            'team_hex_color' => '#6cd2bf',
            'country_id' => '65', // Germany
            'team_chief' => 'Toto Wolff',
            'power_unit' => 'Mercedes',
            'world_championships' => '8',
            'world_championship_points' => '7195.5',
            'highest_race_finish' => '1',
            'highest_race_finish_times' => '116',
            'podiums' => '288',
            'pole_positions' => '129',
            'fastest_laps' => '96',
            'information' => 'Coming Soon',
        ]);

        // McLaren
        F1team::create([
            'active' => '1',
            'name' => 'McLaren F1',
            'logo_path' => 'mclaren.png',
            'team_hex_color' => '#f58020',
            'country_id' => '186', // United Kingdom
            'team_chief' => 'Andrea Stella',
            'power_unit' => 'Mercedes',
            'world_championships' => '8',
            'world_championship_points' => '6271.5',
            'highest_race_finish' => '1',
            'highest_race_finish_times' => '183',
            'podiums' => '503',
            'pole_positions' => '156',
            'fastest_laps' => '164',
            'information' => 'Coming Soon',
        ]);

        // Aston Martin
        F1team::create([
            'active' => '1',
            'name' => 'Aston Martin F1',
            'logo_path' => 'astonmartin.png',
            'team_hex_color' => '#358c75',
            'country_id' => '186', // United Kingdom
            'team_chief' => 'Mike Krack',
            'power_unit' => 'Mercedes',
            'world_championships' => '0',
            'world_championship_points' => '393',
            'highest_race_finish' => '1',
            'highest_race_finish_times' => '1',
            'podiums' => '9',
            'pole_positions' => '1',
            'fastest_laps' => '1',
            'information' => 'Coming Soon',
        ]);

        // Alpine
        F1team::create([
            'active' => '1',
            'name' => 'Alpine F1',
            'logo_path' => 'alpine.png',
            'team_hex_color' => '#2293d0',
            'country_id' => '61', // Fr*nce
            'team_chief' => 'Bruno Famin',
            'power_unit' => 'Renault',
            'world_championships' => '2',
            'world_championship_points' => '1941',
            'highest_race_finish' => '1',
            'highest_race_finish_times' => '21',
            'podiums' => '104',
            'pole_positions' => '20',
            'fastest_laps' => '15',
            'information' => 'Coming Soon',
        ]);

        // Williams
        F1team::create([
            'active' => '1',
            'name' => 'Williams Racing',
            'logo_path' => 'williams.png',
            'team_hex_color' => '#37bedd',
            'country_id' => '186', // United Kingdom
            'team_chief' => 'James Vowles',
            'power_unit' => 'Mercedes',
            'world_championships' => '9',
            'world_championship_points' => '3620',
            'highest_race_finish' => '1',
            'highest_race_finish_times' => '114',
            'podiums' => '313',
            'pole_positions' => '128',
            'fastest_laps' => '133',
            'information' => 'Coming Soon',
        ]);

        // Alpha Tauri
        F1team::create([
            'active' => '1',
            'name' => 'Scuderia AlphaTauri',
            'logo_path' => 'alphatauri.png',
            'team_hex_color' => '#5e8faa',
            'country_id' => '84', // Italy
            'team_chief' => 'Franz Tost',
            'power_unit' => 'Honda',
            'world_championships' => '0',
            'world_championship_points' => '805',
            'highest_race_finish' => '1',
            'highest_race_finish_times' => '2',
            'podiums' => '5',
            'pole_positions' => '1',
            'fastest_laps' => '3',
            'information' => 'Coming Soon',
        ]);

        // Alfa Romeo
        F1team::create([
            'active' => '1',
            'name' => 'Alfa Romeo F1',
            'logo_path' => 'alfaromeo.png',
            'team_hex_color' => '#c92d4b',
            'country_id' => '170', // Switzerland
            'team_chief' => 'Alessandro Alunni Bravi',
            'power_unit' => 'Ferrari',
            'world_championships' => '0',
            'world_championship_points' => '1014',
            'highest_race_finish' => '1',
            'highest_race_finish_times' => '1',
            'podiums' => '26',
            'pole_positions' => '1',
            'fastest_laps' => '7',
            'information' => 'Coming Soon',
        ]);

        // Haas
        F1team::create([
            'active' => '1',
            'name' => 'Haas F1',
            'logo_path' => 'haas.png',
            'team_hex_color' => '#b6babd',
            'country_id' => '187', // United States of America
            'team_chief' => 'Guenther Steiner',
            'power_unit' => 'Ferrari',
            'world_championships' => '0',
            'world_championship_points' => '249',
            'highest_race_finish' => '4',
            'highest_race_finish_times' => '1',
            'podiums' => '0',
            'pole_positions' => '1',
            'fastest_laps' => '2',
            'information' => 'Coming soon',
        ]);

    }
}
