<?php

namespace App\Services;

use Image;
use App\Repositories\PostRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class PostService
{
    /**
     * @var PostRepository
     */
    protected $postRepository;

    /**
     * Constructor de PostService.
     *
     * @param PostRepository $postRepository
     */
    public function __construct(PostRepository $postRepository)
    {
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
        dd(Image::make($data['cover'])->resize(300, 200)->save('foo.jpg'));
        if ($data['cover']) {
            Image::make($data['cover'])->resize(300, 200)->save('foo.jpg');
        }

        $data['user_id'] = Auth::guard('api')->id();

        $result = $this->postRepository->save($data);

        return $result;
    }
}
