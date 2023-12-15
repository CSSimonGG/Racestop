<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Driver;
use App\Models\F1race;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Roles and Permission Seeders
        $this->call(RoleSeeder::class);
        $this->call(AdminSeeder::class);

        // Country Seeder
        $this->call(CountrySeeder::class);

        // Category Seeder
        $this->call(CategorySeeder::class);

        // F1team Seeder
        $this->call(F1teamSeeder::class);

        // Driver Seeder
        $this->call(DriverSeeder::class);

        // Grand Prix Seeder
        $this->call(GrandprixSeeder::class);

        // F1 Race Seeder
        $this->call(F1raceSeeder::class);

        // Posts Factory
        \App\Models\Post::factory(60)->create();
    }
}
