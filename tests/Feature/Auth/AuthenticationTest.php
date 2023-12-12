<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    private User $user;

    protected function setUp(): void
    {
        parent::setUp();

        // Create user
        $this->user = $this->createUser();
    }

    public function test_login_screen_can_be_rendered(): void
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_users_can_authenticate_using_the_login_screen(): void
    {
        $response = $this->post('/login', [
            'email' => $this->user->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_users_can_not_authenticate_with_invalid_password(): void
    {
        $this->post('/login', [
            'email' => $this->user->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }

    public function test_unauthenticated_user_cannot_see_admin_dashboard()
    {
        $response = $this->get('/admin');

        $response->assertStatus(403);
    }

    private function createUser(): User
    {
        return User::factory()->create();
    }
}
