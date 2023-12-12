<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostsTest extends TestCase
{
    use RefreshDatabase;

    public function test_newspage_is_empty(): void
    {
        $response = $this->get('/news');

        $response->assertStatus(200);
        $response->assertSee('No News'); // Check if there is 'no news'
    }

    public function test_newspage_is_not_empty(): void
    {
        // Create temporary category
        Category::create([
            'category' => 'Test'
        ]);

        // Create temporary user
        $user = User::factory()->create();

        // Create temporary post
        $post = Post::create([
           'slug' => 'test',
           'title' => 'test',
           'description' => 'test',
           'image_path' => 'test.png',
           'category_id' => '1',
           'user_id' => $user->id,
        ]);
        $response = $this->get('/news');

        $response->assertStatus(200);
        $response->assertDontSee('No News'); // Check if there is no 'no news'
        $response->assertViewHas('posts', function ($collection) use ($post) {
            return $collection->contains($post);
        });
    }
}
