<?php

use App\Http\Controllers\Api\V1\ExpertiseController;
use App\Http\Controllers\Api\V1\RegisterController;
use App\Http\Controllers\Api\V1\SpecialityController;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'namespace' => 'Api\V1',

    ], function () {

    Route::group(['prefix' => 'auth'], function () {
        Route::post('register', [RegisterController::class, 'register']);
        Route::post('login', [RegisterController::class, 'login']);
    });

    Route::middleware('auth:api')->group(function () {

        Route::group(['prefix' => 'page'], function () {

            Route::post('/create', 'PageController@create');
            Route::post('/{pageId}/attach-post', 'PostController@attachPagePost');
        });

        Route::group(['prefix' => 'follow'], function () {

            Route::post('/person', 'FollowController@followPerson');
            Route::post('/page', 'FollowController@followPage');
        });
        Route::group(['prefix' => 'person'], function () {

            Route::post('/attach-post', 'PostController@attachUserPost');
            Route::post('/feed', 'PostController@feed');
        });


    });
});

