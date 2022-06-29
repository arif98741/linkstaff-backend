<?php
/*
 * Copyright (c) 2022.
 * This file is originally created and maintained by Ariful Islam.
 * Ariful Islam
 * Software Engineer
 * https://github.com/arif98741
 * $time
 */


namespace App\Http\Controllers\Api\V1;

use App\AppTrait\AuthTrait;
use App\Models\Follow;
use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class PostController extends BaseController
{
    use AuthTrait;

    /**
     * Attach Post by Currently Logged in Person/User
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function attachUserPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'post_content' => 'required|min:3|max:250',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Data validation error', $validator->errors());
        }


        $data = $validator->validated();
        $data['post_content'] = $request->post_content;
        $data['user_id'] = $this->getUserId();
        $post = Post::create($data);
        if ($post) {

            return $this->sendResponse([], 'Post created successfully');

        }

        return $this->sendError('Failed to create post', []);
    }


    /**
     * Attach Post by Page belongs to Currently Logged in User
     * @param Request $request
     * @param $pageId
     * @return JsonResponse
     * @throws ValidationException
     */
    public function attachPagePost(Request $request, $pageId)
    {
        $validator = Validator::make($request->all(), [
            'post_content' => 'required|min:3|max:250',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Data validation error', $validator->errors());
        }

        $pageExistence = Page::where('user_id', $this->getUserId())->where('id', $pageId)->first();
        if ($pageExistence == null) {

            return $this->sendResponse([], 'Your given page does not belongs to you');

        }

        $data = $validator->validated();
        $data['post_content'] = $request->post_content;
        $data['user_id'] = $this->getUserId();
        $data['page_id'] = $pageId;
        $post = Post::create($data);
        if ($post) {

            return $this->sendResponse([], 'Post created successfully');

        }

        return $this->sendError('Failed to create post', []);
    }


    /**
     * Get post for Currently Logged in User
     * @return JsonResponse
     */
    public function feed()
    {
        $follow = Follow::where('follow_by', $this->getUserId())
            ->select('follow_to', 'follow_page')
            ->get()->toArray();
        $follow_to = array_column($follow, 'follow_to');
        $follow_page = array_column($follow, 'follow_page');


        $posts = Post::with(['user_post', 'page_post'])
            ->whereIn('user_id', $follow_to)
            ->orwhereIn('page_id', $follow_page)
            ->orderBy('created_at', 'desc')
            ->get();


        if ($posts != null) {

            return $this->sendResponse($posts, 'Post fetched successfully');

        }

        return $this->sendError('Not post available', []);
    }


}
