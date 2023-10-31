<?php

namespace Database\Seeders;

use App\Models\F1race;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class F1raceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Bahrain GP Race
        F1race::create([
            'grandprix_id' => '1',
            'circuit' => 'Bahrain International Circuit',
            'circuit_image' => 'bahrain-international-circuit.png',
            'first_gp' => '2004',
            'laps' => '57',
            'circuit_length' => '5.412',
            'race_distance' => '308.238',
            'lap_record' => '1:31.447',
            'lap_record_holder' => 'Pedro de la Rosa',
            'lap_record_year' => '2005',
            'last_winner' => 'Max Verstappen',
            'start_date' => '2023-03-03',
            'end_date' => '2023-03-05',
            'information' => 'Coming soon',
        ]);

        // Saudia Arabian GP Race
        F1race::create([
            'grandprix_id' => '2',
            'circuit' => 'Jeddah Street Circuit',
            'circuit_image' => 'jeddah-street-circuit.png',
            'first_gp' => '2021',
            'laps' => '50',
            'circuit_length' => '6.174',
            'race_distance' => '308.450',
            'lap_record' => '1:30.734',
            'lap_record_holder' => 'Lewis Hamilton',
            'lap_record_year' => '2021',
            'last_winner' => 'Sergio Perez',
            'start_date' => '2023-03-17',
            'end_date' => '2023-03-19',
            'information' => 'Coming soon',
        ]);

        // Australian GP Race
        F1race::create([
            'grandprix_id' => '3',
            'circuit' => 'Albert Park',
            'circuit_image' => 'albert-park.png',
            'first_gp' => '1996',
            'laps' => '58',
            'circuit_length' => '5.278',
            'race_distance' => '306.124',
            'lap_record' => '1:20.235',
            'lap_record_holder' => 'Sergio Perez',
            'lap_record_year' => '2023',
            'last_winner' => 'Max Verstappen',
            'start_date' => '2023-03-31',
            'end_date' => '2023-04-02',
            'information' => 'Coming soon',
        ]);

        // Azerbaijan GP Race
        F1race::create([
            'grandprix_id' => '4',
            'circuit' => 'Baku City Circuit',
            'circuit_image' => 'baku-city-circuit.png',
            'first_gp' => '2016',
            'laps' => '51',
            'circuit_length' => '6.003',
            'race_distance' => '306.049',
            'lap_record' => '1:43.009',
            'lap_record_holder' => 'Charles Leclerc',
            'lap_record_year' => '2019',
            'last_winner' => 'Sergio Perez',
            'start_date' => '2023-04-28',
            'end_date' => '2023-04-30',
            'information' => 'Coming soon',
        ]);

        // Miami GP Race
        F1race::create([
            'grandprix_id' => '5',
            'circuit' => 'Miami International Autodrome',
            'circuit_image' => 'miami-international-autodrome.png',
            'first_gp' => '2022',
            'laps' => '57',
            'circuit_length' => '5.412',
            'race_distance' => '308.326',
            'lap_record' => '1:29.708',
            'lap_record_holder' => 'Max Verstappen',
            'lap_record_year' => '2023',
            'last_winner' => 'Max Verstappen',
            'start_date' => '2023-05-05',
            'end_date' => '2023-05-07',
            'information' => 'Coming soon',
        ]);

        // Monaco GP Race
        F1race::create([
            'grandprix_id' => '6',
            'circuit' => 'Circuit De Monaco',
            'circuit_image' => 'circuit-de-monaco.png',
            'first_gp' => '1950',
            'laps' => '78',
            'circuit_length' => '3.337',
            'race_distance' => '260.286',
            'lap_record' => '1:12.909',
            'lap_record_holder' => 'Lewis Hamilton',
            'lap_record_year' => '2021',
            'last_winner' => 'Max Verstappen',
            'start_date' => '2023-05-26',
            'end_date' => '2023-05-28',
            'information' => 'Coming soon',
        ]);

        //  GP Race
        F1race::create([
            'grandprix_id' => '7',
            'circuit' => 'Circuit De Catalunya',
            'circuit_image' => 'circuit-de-catalunya.png',
            'first_gp' => '1991',
            'laps' => '66',
            'circuit_length' => '4.657',
            'race_distance' => '307.236',
            'lap_record' => '1:16.330',
            'lap_record_holder' => 'Max Verstappen',
            'lap_record_year' => '2023',
            'last_winner' => 'Max Verstappen',
            'start_date' => '2023-06-02',
            'end_date' => '2023-06-04',
            'information' => 'Coming soon',
        ]);

        // Canadian GP Race
        F1race::create([
            'grandprix_id' => '8',
            'circuit' => 'Circuit Gilles-Villeneuve',
            'circuit_image' => 'circuit-gilles-villeneuve.png',
            'first_gp' => '1978',
            'laps' => '70',
            'circuit_length' => '4.361',
            'race_distance' => '305.270',
            'lap_record' => '1:13.078',
            'lap_record_holder' => 'Valtteri Bottas',
            'lap_record_year' => '2019',
            'last_winner' => 'Max Verstappen',
            'start_date' => '2023-06-16',
            'end_date' => '2023-06-18',
            'information' => 'Coming soon',
        ]);

        // Austrian GP Race
        F1race::create([
            'grandprix_id' => '9',
            'circuit' => 'Red Bull Ring',
            'circuit_image' => 'red-bull-ring.png',
            'first_gp' => '1970',
            'laps' => '71',
            'circuit_length' => '4.318',
            'race_distance' => '306.452',
            'lap_record' => '1:05.619',
            'lap_record_holder' => 'Carlos Sainz',
            'lap_record_year' => '2020',
            'last_winner' => 'Max Verstappen',
            'start_date' => '2023-06-30',
            'end_date' => '2023-07-02',
            'information' => 'Coming soon',
        ]);

        // British GP Race
        F1race::create([
            'grandprix_id' => '10',
            'circuit' => 'Silverstone Circuit',
            'circuit_image' => 'circuit-silverstone.png',
            'first_gp' => '1950',
            'laps' => '52',
            'circuit_length' => '5.891',
            'race_distance' => '306.198',
            'lap_record' => '1:27.097',
            'lap_record_holder' => 'Max Verstappen',
            'lap_record_year' => '2020',
            'last_winner' => 'Max Verstappen',
            'start_date' => '2023-07-07',
            'end_date' => '2023-07-09',
            'information' => 'Coming soon',
        ]);

        // Hungarian GP Race
        F1race::create([
            'grandprix_id' => '11',
            'circuit' => 'Hungaroring',
            'circuit_image' => 'hungaroring.png',
            'first_gp' => '1986',
            'laps' => '70',
            'circuit_length' => '4.381',
            'race_distance' => '306.630',
            'lap_record' => '1:16.627',
            'lap_record_holder' => 'Lewis Hamilton',
            'lap_record_year' => '2020',
            'last_winner' => 'Max Verstappen',
            'start_date' => '2023-07-21',
            'end_date' => '2023-07-23',
            'information' => 'Coming soon',
        ]);

        // Belgium GP Race
        F1race::create([
            'grandprix_id' => '12',
            'circuit' => 'Spa-Francorchamps',
            'circuit_image' => 'spa-francorchamps.png',
            'first_gp' => '1950',
            'laps' => '44',
            'circuit_length' => '7.004',
            'race_distance' => '308.052',
            'lap_record' => '1:46.286',
            'lap_record_holder' => 'Valtteri Bottas',
            'lap_record_year' => '2018',
            'last_winner' => 'Max Verstappen',
            'start_date' => '2023-07-28',
            'end_date' => '2023-07-30',
            'information' => 'Coming soon',
        ]);

        // Dutch GP Race
        F1race::create([
            'grandprix_id' => '13',
            'circuit' => 'Circuit Zandvoort',
            'circuit_image' => 'circuit-zandvoort.png',
            'first_gp' => '1952',
            'laps' => '72',
            'circuit_length' => '4.259',
            'race_distance' => '306.587',
            'lap_record' => '1:11.097',
            'lap_record_holder' => 'Lewis Hamilton',
            'lap_record_year' => '2021',
            'last_winner' => 'Max Verstappen',
            'start_date' => '2023-08-25',
            'end_date' => '2023-08-27',
            'information' => 'Coming soon',
        ]);

        // Italian GP Race
        F1race::create([
            'grandprix_id' => '14',
            'circuit' => 'Autodromo Nazionale Monza',
            'circuit_image' => 'autodromo-nazionale-monza.png',
            'first_gp' => '1950',
            'laps' => '53',
            'circuit_length' => '5.793',
            'race_distance' => '306.720',
            'lap_record' => '1:21.046',
            'lap_record_holder' => 'Rubens Barrichello',
            'lap_record_year' => '2004',
            'last_winner' => 'Max Verstappen',
            'start_date' => '2023-09-01',
            'end_date' => '2023-09-03',
            'information' => 'Coming soon',
        ]);

        // Singapore GP Race
        F1race::create([
            'grandprix_id' => '15',
            'circuit' => 'Marina Bay Street Circuit',
            'circuit_image' => 'marina-bay-street-circuit.png',
            'first_gp' => '2008',
            'laps' => '61',
            'circuit_length' => '5.063',
            'race_distance' => '308.843',
            'lap_record' => '1:35.867',
            'lap_record_holder' => 'Lewis Hamilton ',
            'lap_record_year' => '2023',
            'last_winner' => 'Carlos Sainz',
            'start_date' => '2023-09-15',
            'end_date' => '2023-09-17',
            'information' => 'Coming soon',
        ]);

        // Japenese GP Race
        F1race::create([
            'grandprix_id' => '16',
            'circuit' => 'Suzuka Circuit',
            'circuit_image' => 'suzuka-circuit.png',
            'first_gp' => '1987',
            'laps' => '53',
            'circuit_length' => '5.807',
            'race_distance' => '307.471',
            'lap_record' => '1:30.983',
            'lap_record_holder' => 'Lewis Hamilton',
            'lap_record_year' => '2019',
            'last_winner' => 'Max Verstappen',
            'start_date' => '2023-09-22',
            'end_date' => '2023-09-24',
            'information' => 'Coming soon',
        ]);

        // Qatar GP Race
        F1race::create([
            'grandprix_id' => '17',
            'circuit' => 'Losail International Circuit',
            'circuit_image' => 'losail-international-circuit.png',
            'first_gp' => '2021',
            'laps' => '57',
            'circuit_length' => '5.418',
            'race_distance' => '308.826',
            'lap_record' => '1:24.319',
            'lap_record_holder' => 'Max Verstappen',
            'lap_record_year' => '2023',
            'last_winner' => 'Max Verstappen',
            'start_date' => '2023-10-06',
            'end_date' => '2023-10-08',
            'information' => 'Coming soon',
        ]);

        // United States GP Race
        F1race::create([
            'grandprix_id' => '18',
            'circuit' => 'Circuit of The Americas',
            'circuit_image' => 'circuit-of-the-americas.png',
            'first_gp' => '2012',
            'laps' => '56',
            'circuit_length' => '5.513',
            'race_distance' => '308.405',
            'lap_record' => '1:36.169',
            'lap_record_holder' => 'Charles Leclerc',
            'lap_record_year' => '2019',
            'last_winner' => 'Max Verstappen',
            'start_date' => '2023-10-20',
            'end_date' => '2023-10-22',
            'information' => 'Coming soon',
        ]);

        // Mexican GP Race
        F1race::create([
            'grandprix_id' => '19',
            'circuit' => 'Autodromo Hermanos Rodriguez',
            'circuit_image' => 'autodromo-hermanos-rodriguez.png',
            'first_gp' => '1963',
            'laps' => '71',
            'circuit_length' => '4.304',
            'race_distance' => '205.354',
            'lap_record' => '1:17.774',
            'lap_record_holder' => 'Valtteri Bottas',
            'lap_record_year' => '2021',
            'last_winner' => 'Max Verstappen',
            'start_date' => '2023-10-27',
            'end_date' => '2023-10-29',
            'information' => 'Coming soon',
        ]);

        // Brazil GP Race
        F1race::create([
            'grandprix_id' => '20',
            'circuit' => 'Autodromo Jose Carlos Pace Interlagos',
            'circuit_image' => 'autodromo-jose-carlos-pace-interlagos.png',
            'first_gp' => '1973',
            'laps' => '71',
            'circuit_length' => '4.309',
            'race_distance' => '305.879',
            'lap_record' => '1:10.540',
            'lap_record_holder' => 'Valtteri Bottas',
            'lap_record_year' => '2018',
            'last_winner' => 'George Russel',
            'start_date' => '2023-11-03',
            'end_date' => '2023-11-05',
            'information' => 'Coming soon',
        ]);

        // Las Vegas GP Race
        F1race::create([
            'grandprix_id' => '21',
            'circuit' => 'Las Vegas Street Circuit',
            'circuit_image' => 'las-vegas-street-circuit.png',
            'first_gp' => '2023',
            'laps' => '50',
            'circuit_length' => '6.201',
            'race_distance' => '310.050',
            'lap_record' => 'N/A',
            'lap_record_holder' => 'N/A',
            'lap_record_year' => '0',
            'last_winner' => 'N/A',
            'start_date' => '2023-11-17',
            'end_date' => '2023-11-19',
            'information' => 'Coming soon',
        ]);

        // Abu Dhabi GP Race
        F1race::create([
            'grandprix_id' => '22',
            'circuit' => 'Yas Marina Circuit',
            'circuit_image' => 'yas-marina-circuit.png',
            'first_gp' => '2009',
            'laps' => '58',
            'circuit_length' => '5.281',
            'race_distance' => '306.183',
            'lap_record' => '1:26.103',
            'lap_record_holder' => 'Max Verstappen',
            'lap_record_year' => '2021',
            'last_winner' => 'Max Verstappen',
            'start_date' => '2023-11-24',
            'end_date' => '2023-11-26',
            'information' => 'Coming soon',
        ]);
    }
}
