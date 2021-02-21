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
     * Trae todos los posts.
     *
     * @return Post
     */
    public function getAllPost()
    {
        return $this->post->with('cover', 'categories')->orderBy('id', 'desc')->paginate(6);
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

    /**
     * Actualizar datos de Post en la DB.
     *
     * @param array $data
     * @param int $id
     * @return Post
     */
    public function update(array $data, int $id)
    {
        $post = $this->post->find($id);
        $post->update($data);
        return $post->fresh();
    }

    /**
     * Borra un Post de la DB.
     *
     * @param int $id
     * @return Post
     */
    public function delete(int $id)
    {
        $post = $this->post->find($id);
        $post->delete();

        return $post;
    }

    /**
     * Busca un registro de Post unico por su id.
     *
     * @param int $id
     * @return Post
     */
    public function getPostByID($id)
    {
        return $this->post->find($id);
    }

    /**
     * Busca un registro unico de slug en Post.
     *
     * @param string $slug
     * @param int $exclude_id
     * @return Post
     */
    public function getPostBySlug(string $slug, $exclude_id=null)
    {
        if ($exclude_id) {
            return $this->post->with('cover', 'categories')->where([
                ['slug', $slug],
                ['id', '!=', $exclude_id]
            ])->first();
        }
        return $this->post->with('cover', 'categories')->where('slug', $slug)->first();
    }
}
