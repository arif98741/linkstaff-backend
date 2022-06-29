<?php
/*
 * Copyright (c) 2021.
 * This file is originally created and maintained by Ariful Islam.
 * You are not allowed to modify any parts of this code or copy or even redistribute
 * full or small portion to anywhere. If you have any question
 * fee free to ask me at arif98741@gmail.com.
 * Ariful Islam
 * Software Engineer
 * https://github.com/arif98741
 * $time
 */

namespace App\Http\Controllers\Api\V1;

use App\AppTrait\AuthTrait;
use App\Models\Page;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class PageController extends BaseController
{
    use AuthTrait;

    /**
     * Follow page
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'page_name' => 'required|unique:pages',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Data validation error', $validator->errors());
        }
        $data = $validator->validated();
        $data['user_id'] = $this->getUserId();
        $page = Page::create($data);
        if ($page) {

            return $this->sendResponse([], 'Page successfully created');

        }

        return $this->sendError('Failed to create page', []);
    }


}
