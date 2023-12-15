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
            'active' => '1',
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
            'active' => '1',
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
            'active' => '1',
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
            'active' => '1',
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
            'active' => '1',
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

        // George Russell
        Driver::create([
            'active' => '1',
            'name' => 'George Russell',
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
            'active' => '1',
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
            'active' => '1',
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
            'active' => '1',
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
            'active' => '1',
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
            'active' => '1',
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
            'active' => '1',
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

        // Alexander Albon
        Driver::create([
            'active' => '1',
            'name' => 'Alexander Albon',
            'driver_number' => '23',
            'f1team_id' => '7', // Wiliams
            'country_id' => '174', // Thailand
            'podiums' => '2',
            'world_championship_points' => '228',
            'grand_prix_entered' => '80',
            'world_championships' => '0',
            'highest_race_finish' => '3',
            'highest_race_finish_times' => '2',
            'pole_positions' => '0',
            'fastest_laps' => '0',
            'birth_date' => '1996-03-23',
            'birth_place' => 'London, England',
            'biography' => 'Coming Soon',
        ]);

        // Logan Sargeant
        Driver::create([
            'active' => '1',
            'name' => 'Logan Sargeant',
            'driver_number' => '2',
            'f1team_id' => '7', // Williams
            'country_id' => '187', // United States of America
            'podiums' => '0',
            'world_championship_points' => '1',
            'grand_prix_entered' => '20',
            'world_championships' => '0',
            'highest_race_finish' => '10',
            'highest_race_finish_times' => '1',
            'pole_positions' => '0',
            'fastest_laps' => '0',
            'birth_date' => '2000-12-31',
            'birth_place' => 'Fort Lauderdale, Florida, U.S.',
            'biography' => 'Coming Soon',
        ]);

        // Daniel Ricciardo
        Driver::create([
            'active' => '1',
            'name' => 'Daniel Ricciardo',
            'driver_number' => '3',
            'f1team_id' => '8', // Alpha Tauri
            'country_id' => '9', // Australia
            'podiums' => '32',
            'world_championship_points' => '1317',
            'grand_prix_entered' => '238',
            'world_championships' => '0',
            'highest_race_finish' => '1',
            'highest_race_finish_times' => '8',
            'pole_positions' => '3',
            'fastest_laps' => '16',
            'birth_date' => '1989-07-01',
            'birth_place' => 'Perth, Australia',
            'biography' => 'Coming Soon',
        ]);

        // Yuki Tsunoda
        Driver::create([
            'active' => '1',
            'name' => 'Yuki Tsunoda',
            'driver_number' => '22',
            'f1team_id' => '8', // Alpha Tauri
            'country_id' => '86', // Japan
            'podiums' => '0',
            'world_championship_points' => '57',
            'grand_prix_entered' => '64',
            'world_championships' => '0',
            'highest_race_finish' => '4',
            'highest_race_finish_times' => '1',
            'pole_positions' => '0',
            'fastest_laps' => '1',
            'birth_date' => '2000-05-11',
            'birth_place' => 'Sagamihara, Japan',
            'biography' => 'Coming Soon',
        ]);

        // Valtteri Bottas
        Driver::create([
            'active' => '1',
            'name' => 'Valtteri Bottas',
            'driver_number' => '77',
            'f1team_id' => '9', // Alfa Romeo
            'country_id' => '60', // Finland
            'podiums' => '67',
            'world_championship_points' => '1797',
            'grand_prix_entered' => '221',
            'world_championships' => '0',
            'highest_race_finish' => '1',
            'highest_race_finish_times' => '10',
            'pole_positions' => '20',
            'fastest_laps' => '19',
            'birth_date' => '1989-08-28',
            'birth_place' => 'Nastola, Finland',
            'biography' => 'Coming Soon',
        ]);

        // Guanyu Zhou
        Driver::create([
            'active' => '1',
            'name' => 'Guanyu Zhou',
            'driver_number' => '24',
            'f1team_id' => '9', // Alfa Romeo
            'country_id' => '37', // China
            'podiums' => '0',
            'world_championship_points' => '12',
            'grand_prix_entered' => '42',
            'world_championships' => '0',
            'highest_race_finish' => '8',
            'highest_race_finish_times' => '1',
            'pole_positions' => '0',
            'fastest_laps' => '2',
            'birth_date' => '1999-05-30',
            'birth_place' => 'Shanghai, China',
            'biography' => 'Coming Soon',
        ]);

        // Nico Hulkenberg
        Driver::create([
            'active' => '1',
            'name' => 'Nico Hulkenberg',
            'driver_number' => '27',
            'f1team_id' => '10', // Haas
            'country_id' => '65', // Germany
            'podiums' => '0',
            'world_championship_points' => '0',
            'grand_prix_entered' => '204',
            'world_championships' => '0',
            'highest_race_finish' => '4',
            'highest_race_finish_times' => '3',
            'pole_positions' => '1',
            'fastest_laps' => '2',
            'birth_date' => '1997-09-30',
            'birth_place' => 'Emmerich am Rhein, Germany',
            'biography' => 'Coming Soon',
        ]);

        // Kevin Magnussen
        Driver::create([
            'active' => '1',
            'name' => 'Kevin Magnussen',
            'driver_number' => '20',
            'f1team_id' => '10', // Haas
            'country_id' => '47', // Denmark
            'podiums' => '1',
            'world_championship_points' => '186',
            'grand_prix_entered' => '162',
            'world_championships' => '0',
            'highest_race_finish' => '2',
            'highest_race_finish_times' => '1',
            'pole_positions' => '1',
            'fastest_laps' => '2',
            'birth_date' => '1992-10-05',
            'birth_place' => 'Roskilde, Denmark',
            'biography' => 'Coming Soon',
        ]);

        // Pedro de la Rosa
        Driver::create([
            'active' => '0',
            'name' => 'Pedro de la Rosa',
            'driver_number' => '0',
            'f1team_id' => '2', // Ferrari
            'country_id' => '165', // Spain
            'podiums' => '1',
            'world_championship_points' => '35',
            'grand_prix_entered' => '107',
            'world_championships' => '0',
            'highest_race_finish' => '2',
            'highest_race_finish_times' => '1',
            'pole_positions' => '0',
            'fastest_laps' => '1',
            'birth_date' => '1971-02-24',
            'birth_place' => 'Barcelona, Spain',
            'biography' => 'Coming Soon',
        ]);

        // Rubens Barrichello
        Driver::create([
            'active' => '0',
            'name' => 'Rubens Barrichello',
            'driver_number' => '111',
            'f1team_id' => '3', // Mercedes (previosuly Brawn GP)
            'country_id' => '24', // Brazil
            'podiums' => '68',
            'world_championship_points' => '658',
            'grand_prix_entered' => '326',
            'world_championships' => '0',
            'highest_race_finish' => '1',
            'highest_race_finish_times' => '11',
            'pole_positions' => '14',
            'fastest_laps' => '17',
            'birth_date' => '1972-05-23',
            'birth_place' => 'Sao Paulo, Brazil',
            'biography' => 'Coming Soon',
        ]);

//        //
//        Driver::create([
//            'active' => '',
//            'name' => '',
//            'driver_number' => '',
//            'f1team_id' => '', //
//            'country_id' => '', //
//            'podiums' => '',
//            'world_championship_points' => '',
//            'grand_prix_entered' => '',
//            'world_championships' => '',
//            'highest_race_finish' => '',
//            'highest_race_finish_times' => '',
//            'pole_positions' => '',
//            'fastest_laps' => '',
//            'birth_date' => '',
//            'birth_place' => '',
//            'biography' => 'Coming Soon',
//        ]);
    }
}
