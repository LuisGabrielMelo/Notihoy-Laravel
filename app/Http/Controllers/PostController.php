<?php

namespace App\Http\Controllers;

use App\Services\PostService;
use Exception;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * @var PostService
     */
    protected $postService;

    /**
     * Constructor de PostController
     *
     * @param PostService $postService
     *
     */

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * Crea un nuevo post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(
            'title',
            'subtitle',
            'content',
            'cover',
        );

        try {
            $result = $this->postService->savePostData($data);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return response()->json($result, 201);
    }

    /**
     * Muestra el post buscandolo por slug.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = $this->postService->getPostBySlug($slug);
        if ($post) {
            return response()->json($post);
        }
        return response()->json($post, 404);
    }

    /**
     * Actualiza el post con nuevos datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->only(
            'title',
            'subtitle',
            'content',
            'cover',
        );

        try {
            $result = $this->postService->updatePost($data, $id);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return response()->json($result, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $result = $this->postService->deletePostByID($id);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return response()->json($result, 200);
    }
}
