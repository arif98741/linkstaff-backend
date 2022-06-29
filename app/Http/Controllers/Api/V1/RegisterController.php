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

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RegisterController extends BaseController
{
    /**
     * User Registration
     * @header X-api-version
     * For registration, you should pass data and other parameters
     * @param Request $request
     * @return JsonResponse|void
     */
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Data validation error', $validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);


        $user = User::create($input);
        $success['token'] = $user->createToken('MyApp')->accessToken; //this will be used on once
        if ($user) {

            return $this->sendResponse($success, 'User register successful. Please check otp');

        }

    }

    /**
     * Login api
     * @param Request $request
     * @return JsonResponse
     * @response  {'hello'}
     * @responseFile storage/responses/users.get.json
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone' => 'required',
            'password' => 'required',
            'role_id' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Data validation error', $validator->errors());
        }

        if (Auth::attempt(['phone' => $request->email, 'password' => $request->password])) {

            $user = Auth::user();
            $tokenName = 'UserToken';

            if ($request->token != $user->fcm_token) {
                DB::table('users')
                    ->where('id', $user->id)
                    ->update([
                        'fcm_token' => $request->token
                    ]);
            }

            $user = Auth::user();
            $success['user'] = $user;
            $success['token'] = $user->createToken($tokenName)->accessToken;

            return $this->sendResponse($success, 'User login successfully.');
        } else {
            return $this->sendError('Unauthorised.', ['error' => 'Username or password not matched']);
        }
    }


}
