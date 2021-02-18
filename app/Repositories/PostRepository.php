<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository
{
    /**
     * @var Post
     */
    protected $post;

    /**
     * Constructor de PostRepository.
     *
     * @param Post $post
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * Guarda un nuevo Post en la DB.
     *
     * @param array $data
     * @return Post
     */
    public function save(array $data)
    {
        $post = new $this->post($data);
        $post->save();

        return $post->fresh();
    }
}
