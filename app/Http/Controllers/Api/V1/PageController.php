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
