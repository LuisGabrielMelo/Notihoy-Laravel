<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
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
        $response = $this->actingAs($user)->post('/api/posts', $request);

        $response->assertCreated();
    }

     /**
     * Se puede crear un post con imagen
     *
     * @return void
     */
    public function test_post_can_be_created_with_image()
    {
        $user = User::factory()->create();
        $categories = Category::factory()->count(3)->create();
        $request = Post::factory()->raw();
        $request['categories'] = $categories->pluck('id')->toArray();
        $request['cover'] = UploadedFile::fake()->image('avatar.jpg');
        $response = $this->actingAs($user)->post('/api/posts', $request);
        $response->assertCreated();
        Storage::delete($response->getOriginalContent()->cover->path);
    }

     /**
     * Se puede encontrar un post por slug
     *
     * @return void
     */
    public function test_post_can_be_shown()
    {
        $user = User::factory()->create();
        $post = Post::factory()->create(['user_id' => $user->id]);
        $response = $this->get('/api/posts/'.$post->slug);

        $this->assertEquals($post->title, $response['title']);
    }

    /**
     * Se puede actualizar un post.
     *
     * @return void
     */
    public function test_post_can_be_updated()
    {
        $user = User::factory()->create();
        $post = Post::factory()->create(['user_id' => $user->id]);
        $request = Post::factory()->raw();
        $request['cover'] = UploadedFile::fake()->image('avatar.jpg');
        $response = $this->actingAs($user)->put('/api/posts/'.$post->id, $request);
        $response->assertSuccessful();

        Storage::delete($response->getOriginalContent()->cover->path);
    }

    /**
     * Se puede eliminar un post.
     *
     * @return void
     */
    public function test_post_can_be_deleted()
    {
        $user = User::factory()->create();
        $request = Post::factory()->raw();
        $request['cover'] = UploadedFile::fake()->image('avatar.jpg');
        $post = $this->actingAs($user)->post('/api/posts', $request);
        $response = $this->actingAs($user)->delete('/api/posts/'.$post->getOriginalContent()->id);
        $response->assertSuccessful();

        Storage::delete($response->getOriginalContent()->cover->path);
    }
}
