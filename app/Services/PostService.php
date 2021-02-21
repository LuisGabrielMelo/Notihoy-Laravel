<?php

namespace App\Services;

use App\Repositories\PostRepository;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use InvalidArgumentException;

class PostService
{
    /**
     * @var ImageService
     */
    protected $imageService;

    /**
     * @var PostRepository
     */
    protected $postRepository;

    /**
     * Constructor de PostService.
     *
     * @param PostRepository $postRepository
     */
    public function __construct(PostRepository $postRepository, ImageService $imageService)
    {
        $this->imageService = $imageService;
        $this->postRepository = $postRepository;
    }

    /**
     * Valida los datos del Post.
     * Si no hay error se envían los datos al repository
     * para guardar un nuevo Posts en la DB.
     *
     * @param array $data
     * @return Post
     */
    public function savePostData(array $data)
    {
        $validator = Validator::make($data, [
            'title' => 'required',
            'content' => 'required',
            'cover' => 'image',
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        // Revisar si el slug existe
        $slug = Str::slug($data['title']);
        if ($this->getPostBySlug($slug)) {
            $hash = Str::uuid();
            $slug = "{$slug}-{$hash}";
        }

        $data['slug'] = $slug;

        if (array_key_exists('cover', $data)) {
            $img = $this->imageService->saveImage($data['cover']);
            $data['cover_id'] = $img->id;
        }

        $data['user_id'] = Auth::guard('api')->id();
        $result = $this->postRepository->save($data);

        return $result;
    }

    /**
     * Valida los datos del Post.
     * Si no hay error se envían los datos al repository
     * para guardar un nuevo Posts en la DB.
     *
     * @param array $data
     * @return Post
     */
    public function updatePost(array $data, int $id)
    {
        $validator = Validator::make($data, [
            'title' => 'bail|required',
            'content' => 'bail|required',
            'cover' => 'bail|image',
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        // Revisar si el slug existe
        $slug = Str::slug($data['title']);
        if ($this->getPostBySlug($slug, $id)) {
            $hash = Str::uuid();
            $slug = "{$slug}-{$hash}";
        }

        $data['slug'] = $slug;

        if (array_key_exists('cover', $data)) {
            $post = $this->postRepository->getPostByID($id);
            if ($post->cover_id) {
                $img = $this->imageService->updateImage($data['cover'], $post->cover_id);
            } else {
                $img = $this->imageService->saveImage($data['cover']);
            }

            $data['cover_id'] = $img->id;
        }

        $result = $this->postRepository->update($data, $id);

        return $result;
    }

    /**
     * Elimina un post de la DB de acuerdo a su id.
     *
     * @param int $id
     * @return Post
     */
    public function deletePostByID(int $id)
    {
        DB::beginTransaction();
        try {
            $post = $this->postRepository->delete($id);
        } catch (Exception $e) {
            DB::rollBack();
            Log::info($e->getMessage());

            throw new InvalidArgumentException('Hubo un error al borrar el post');
        }
        DB::commit();

        if ($post->cover) {
            $this->imageService->deleteImageByID($post->cover->id);
        }

        return $post;
    }

    /**
     * Busca un registro unico de slug en Post.
     *
     * @param string $slug
     * @return Post
     */
    public function getPostBySlug(string $slug, $id=null)
    {
        return $this->postRepository->getPostBySlug($slug, $id);
    }
}
