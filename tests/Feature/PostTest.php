<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /**
     * Se puede crear un post
     *
     * @return void
     */
    public function test_post_can_be_created()
    {
        $user = User::factory()->create();
        $categories = Category::factory()->count(3)->create();
        $request = Post::factory()->raw();
        $request['categories'] = $categories->pluck('id')->toArray();
        $response = $this->actingAs($user)->post('/api/post', $request);

        $response->assertCreated();
    }
}
