<?php

namespace Database\Seeders;

use App\Models\Driver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Max Verstappen
        Driver::create([
            'name' => 'Max Verstappen',
            'driver_number' => '1',
            'f1team_id' => '1', // Red Bull Racing
            'country_id' => '123', // Netherlands
            'podiums' => '96',
            'world_championship_points'  => '2535.5',
            'grand_prix_entered' => '183',
            'world_championships' => '3',
            'highest_race_finish' => '1',
            'highest_race_finish_times' => '52',
            'pole_positions' => '31',
            'fastest_laps' => '29',
            'birth_date' => '1997-09-30',
            'birth_place' => 'Hasselt, Belgium',
            'biography' => 'Coming Soon',
        ]);

        // Sergio Perez
        Driver::create([
            'name' => 'Sergio Perez',
            'driver_number' => '11',
            'f1team_id' => '1', // Red Bull Racing
            'country_id' => '111', // Mexico
            'podiums' => '34',
            'world_championship_points' => '1459',
            'grand_prix_entered' => '255',
            'world_championships' => '0',
            'highest_race_finish' => '1',
            'highest_race_finish_times' => '6',
            'pole_positions' => '3',
            'fastest_laps' => '11',
            'birth_date' => '1990-01-26',
            'birth_place' => 'Guadalajara, Mexico',
            'biography' => 'Coming Soon',
        ]);

        // Charles Leclerc
        Driver::create([
            'name' => 'Charles Leclerc',
            'driver_number' => '16',
            'f1team_id' => '2', // Ferrari
            'country_id' => '114', // Monaco
            'podiums' => '28',
            'world_championship_points' => '1038',
            'grand_prix_entered' => '123',
            'world_championships' => '0',
            'highest_race_finish' => '1',
            'highest_race_finish_times' => '5',
            'pole_positions' => '22',
            'fastest_laps' => '7',
            'birth_date' => '1997-10-16',
            'birth_place' => 'Monte Carlo, Monaco',
            'biography' => 'Coming Soon',
        ]);

        // Carlos Sainz
        Driver::create([
            'name' => 'Carlos Sainz',
            'driver_number' => '55',
            'f1team_id' => '2', // Ferrari
            'country_id' => '165', // Spain
            'podiums' => '18',
            'world_championship_points' => '974.5',
            'grand_prix_entered' => '183',
            'world_championships' => '0',
            'highest_race_finish' => '1',
            'highest_race_finish_times' => '2',
            'pole_positions' => '5',
            'fastest_laps' => '3',
            'birth_date' => '1994-09-01',
            'birth_place' => 'Madrid, Spain',
            'biography' => 'Coming Soon',
        ]);

        // Lewis Hamilton
        Driver::create([
            'name' => 'Lewis Hamilton',
            'driver_number' => '44',
            'f1team_id' => '3', // Mercedes
            'country_id' => '186', // United Kingdom
            'podiums' => '197',
            'world_championship_points' => '4831.5',
            'grand_prix_entered' => '330',
            'world_championships' => '7',
            'highest_race_finish' => '1',
            'highest_race_finish_times' => '103',
            'pole_positions' => '104',
            'fastest_laps' => '65',
            'birth_date' => '1985-01-07',
            'birth_place' => 'Stevenage, England',
            'biography' => 'Coming Soon',
        ]);

        // George Russel
        Driver::create([
            'name' => 'George Russel',
            'driver_number' => '63',
            'f1team_id' => '3', // Mercedes
            'country_id' => '186', // United Kingdom
            'podiums' => '10',
            'world_championship_points' => '450',
            'grand_prix_entered' => '102',
            'world_championships' => '0',
            'highest_race_finish' => '1',
            'highest_race_finish_times' => '1',
            'pole_positions' => '1',
            'fastest_laps' => '6',
            'birth_date' => '1998-02-15',
            'birth_place' => 'Kings Lynn, England',
            'biography' => 'Coming Soon',
        ]);

        // Lando Norris
        Driver::create([
            'name' => 'Lando Norris',
            'driver_number' => '4',
            'f1team_id' => '4', // McLaren
            'country_id' => '186', // United Kingdom
            'podiums' => '13',
            'world_championship_points' => '623',
            'grand_prix_entered' => '102',
            'world_championships' => '0',
            'highest_race_finish' => '2',
            'highest_race_finish_times' => '7',
            'pole_positions' => '1',
            'fastest_laps' => '6',
            'birth_date' => '1999-11-13',
            'birth_place' => 'Bristol, England',
            'biography' => 'Coming Soon',
        ]);

        // Oscar Piastri
        Driver::create([
            'name' => 'Oscar Piastri',
            'driver_number' => '81',
            'f1team_id' => '4', // McLaren
            'country_id' => '9', // Australia
            'podiums' => '2',
            'world_championship_points' => '87',
            'grand_prix_entered' => '20',
            'world_championships' => '0',
            'highest_race_finish' => '2',
            'highest_race_finish_times' => '1',
            'pole_positions' => '0',
            'fastest_laps' => '1',
            'birth_date' => '2001-04-06',
            'birth_place' => 'Melbourne, Australia',
            'biography' => 'Coming Soon',
        ]);

        // Fernando Alonso
        Driver::create([
            'name' => 'Fernando Alonso',
            'driver_number' => '14',
            'f1team_id' => '5', // Aston Martin
            'country_id' => '165', // Spain
            'podiums' => '106',
            'world_championship_points' => '2259',
            'grand_prix_entered' => '378',
            'world_championships' => '2',
            'highest_race_finish' => '1',
            'highest_race_finish_times' => '32',
            'pole_positions' => '22',
            'fastest_laps' => '24',
            'birth_date' => '1981-07-29',
            'birth_place' => 'Oviedo, Spain',
            'biography' => 'Coming Soon',
        ]);

        // Lance Stroll
        Driver::create([
            'name' => 'Lance Stroll',
            'driver_number' => '18',
            'f1team_id' => '5', // Aston Martin
            'country_id' => '33', // Canada
            'podiums' => '3',
            'world_championship_points' => '257',
            'grand_prix_entered' => '143',
            'world_championships' => '0',
            'highest_race_finish' => '3',
            'highest_race_finish_times' => '3',
            'pole_positions' => '1',
            'fastest_laps' => '0',
            'birth_date' => '1998-10-29',
            'birth_place' => 'Montreal, Canada',
            'biography' => 'Coming Soon',
        ]);

        // Pierre Gasly
        Driver::create([
            'name' => 'Pierre Gasly',
            'driver_number' => '10',
            'f1team_id' => '6', // Alpine
            'country_id' => '61', // Fr*nce
            'podiums' => '4',
            'world_championship_points' => '394',
            'grand_prix_entered' => '128',
            'world_championships' => '0',
            'highest_race_finish' => '1',
            'highest_race_finish_times' => '1',
            'pole_positions' => '0',
            'fastest_laps' => '3',
            'birth_date' => '1996-02-07',
            'birth_place' => 'Rouen, France',
            'biography' => 'Coming Soon',
        ]);

        // Esteban Ocon
        Driver::create([
            'name' => 'Esteban Ocon',
            'driver_number' => '31',
            'f1team_id' => '6', // Alpine
            'country_id' => '61', // Fr*nce
            'podiums' => '3',
            'world_championship_points' => '410',
            'grand_prix_entered' => '131',
            'world_championships' => '0',
            'highest_race_finish' => '1',
            'highest_race_finish_times' => '1',
            'pole_positions' => '0',
            'fastest_laps' => '0',
            'birth_date' => '1996-09-17',
            'birth_place' => 'Évreux, France',
            'biography' => 'Coming Soon',
        ]);

        //
        Driver::create([
            'name' => '',
            'driver_number' => '',
            'f1team_id' => '',
            'country_id' => '',
            'podiums' => '',
            'world_championship_points' => '',
            'grand_prix_entered' => '',
            'world_championships' => '',
            'highest_race_finish' => '',
            'highest_race_finish_times' => '',
            'pole_positions' => '',
            'fastest_laps' => '',
            'birth_date' => '',
            'birth_place' => '',
            'biography' => '',
        ]);

        //
        Driver::create([
            'name' => '',
            'driver_number' => '',
            'f1team_id' => '',
            'country_id' => '',
            'podiums' => '',
            'world_championship_points' => '',
            'grand_prix_entered' => '',
            'world_championships' => '',
            'highest_race_finish' => '',
            'highest_race_finish_times' => '',
            'pole_positions' => '',
            'fastest_laps' => '',
            'birth_date' => '',
            'birth_place' => '',
            'biography' => '',
        ]);

        //
        Driver::create([
            'name' => '',
            'driver_number' => '',
            'f1team_id' => '',
            'country_id' => '',
            'podiums' => '',
            'world_championship_points' => '',
            'grand_prix_entered' => '',
            'world_championships' => '',
            'highest_race_finish' => '',
            'highest_race_finish_times' => '',
            'pole_positions' => '',
            'fastest_laps' => '',
            'birth_date' => '',
            'birth_place' => '',
            'biography' => '',
        ]);

        //
        Driver::create([
            'name' => '',
            'driver_number' => '',
            'f1team_id' => '',
            'country_id' => '',
            'podiums' => '',
            'world_championship_points' => '',
            'grand_prix_entered' => '',
            'world_championships' => '',
            'highest_race_finish' => '',
            'highest_race_finish_times' => '',
            'pole_positions' => '',
            'fastest_laps' => '',
            'birth_date' => '',
            'birth_place' => '',
            'biography' => '',
        ]);

        //
        Driver::create([
            'name' => '',
            'driver_number' => '',
            'f1team_id' => '',
            'country_id' => '',
            'podiums' => '',
            'world_championship_points' => '',
            'grand_prix_entered' => '',
            'world_championships' => '',
            'highest_race_finish' => '',
            'highest_race_finish_times' => '',
            'pole_positions' => '',
            'fastest_laps' => '',
            'birth_date' => '',
            'birth_place' => '',
            'biography' => '',
        ]);

        //
        Driver::create([
            'name' => '',
            'driver_number' => '',
            'f1team_id' => '',
            'country_id' => '',
            'podiums' => '',
            'world_championship_points' => '',
            'grand_prix_entered' => '',
            'world_championships' => '',
            'highest_race_finish' => '',
            'highest_race_finish_times' => '',
            'pole_positions' => '',
            'fastest_laps' => '',
            'birth_date' => '',
            'birth_place' => '',
            'biography' => '',
        ]);

        //
        Driver::create([
            'name' => '',
            'driver_number' => '',
            'f1team_id' => '',
            'country_id' => '',
            'podiums' => '',
            'world_championship_points' => '',
            'grand_prix_entered' => '',
            'world_championships' => '',
            'highest_race_finish' => '',
            'highest_race_finish_times' => '',
            'pole_positions' => '',
            'fastest_laps' => '',
            'birth_date' => '',
            'birth_place' => '',
            'biography' => '',
        ]);

        //
        Driver::create([
            'name' => '',
            'driver_number' => '',
            'f1team_id' => '',
            'country_id' => '',
            'podiums' => '',
            'world_championship_points' => '',
            'grand_prix_entered' => '',
            'world_championships' => '',
            'highest_race_finish' => '',
            'highest_race_finish_times' => '',
            'pole_positions' => '',
            'fastest_laps' => '',
            'birth_date' => '',
            'birth_place' => '',
            'biography' => '',
        ]);

        //
        Driver::create([
            'name' => '',
            'driver_number' => '',
            'f1team_id' => '',
            'country_id' => '',
            'podiums' => '',
            'world_championship_points' => '',
            'grand_prix_entered' => '',
            'world_championships' => '',
            'highest_race_finish' => '',
            'highest_race_finish_times' => '',
            'pole_positions' => '',
            'fastest_laps' => '',
            'birth_date' => '',
            'birth_place' => '',
            'biography' => '',
        ]);

        //
        Driver::create([
            'name' => '',
            'driver_number' => '',
            'f1team_id' => '',
            'country_id' => '',
            'podiums' => '',
            'world_championship_points' => '',
            'grand_prix_entered' => '',
            'world_championships' => '',
            'highest_race_finish' => '',
            'highest_race_finish_times' => '',
            'pole_positions' => '',
            'fastest_laps' => '',
            'birth_date' => '',
            'birth_place' => '',
            'biography' => '',
        ]);

    }
}
