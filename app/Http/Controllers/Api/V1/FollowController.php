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
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class FollowController extends BaseController
{
    use AuthTrait;

    /**
     * Person Follow
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function followPerson(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'person_id' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Data validation error', $validator->errors());
        }

        $existence = Follow::where(['follow_by' => $this->getUserId(), 'follow_to' => $request->person_id])->first();
        if ($existence != null) {
            return $this->sendError('Already followed this person', []);
        }

        $data = $validator->validated();
        $data['follow_by'] = $this->getUserId();
        $data['follow_to'] = $request->person_id;
        $page = Follow::create($data);
        if ($page) {

            return $this->sendResponse([], 'Person followed successfully');

        }

        return $this->sendError('Failed to create page', []);
    }


    /**
     * Page Follow
     * @param Request $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function followPage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'page_id' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Data validation error', $validator->errors());
        }

        $existence = Follow::where(['follow_by' => $this->getUserId(), 'follow_page' => $request->page_id])->first();
        if ($existence != null) {
            return $this->sendError('Already followed this person', []);
        }

        $data = $validator->validated();
        $data['follow_by'] = $this->getUserId();
        $data['follow_page'] = $request->page_id;
        $page = Follow::create($data);
        if ($page) {

            return $this->sendResponse([], 'Page followed successfully');

        }

        return $this->sendError('Failed to create page', []);
    }


}
