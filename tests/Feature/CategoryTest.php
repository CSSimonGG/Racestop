<?php

namespace Tests\Feature;

use App\Models\User;
use Database\Seeders\AdminSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\DatabaseSeeder;
use Database\Seeders\RoleSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function test_successfully_login_and_show_categories_page(): void
    {
        // Seed database
        $this->seed(RoleSeeder::class);
        $this->seed(AdminSeeder::class);
        $this->seed(CategorySeeder::class);

        // Get admin user
        $user = User::where('email', 'admin@racestop.net')->first();

        // Go to categories page and get redirected to login
        $response = $this->get('/categories');
        $response->assertRedirect('/login');

        // Login as admin
        $this->actingAs($user);

        // Go back to categories page
        $response = $this->get('/categories');

        // Check if the page is shown
        $response->assertStatus(200);
        $response->assertSee('Categories');
    }
}
