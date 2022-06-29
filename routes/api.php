<?php

use App\Http\Controllers\Api\V1\ExpertiseController;
use App\Http\Controllers\Api\V1\RegisterController;
use App\Http\Controllers\Api\V1\SpecialityController;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => 'auth',
        'namespace' => 'Api\V1',

    ], function () {

    Route::post('register', [RegisterController::class, 'register']);
    Route::post('login', [RegisterController::class, 'login']);
    Route::post('/register/verify-otp', [RegisterController::class, 'verifyOtp']);
    Route::post('/register/resend-otp', [RegisterController::class, 'resendOtp']);
    Route::post('/forgot-password', [RegisterController::class, 'forgotPassword']);
    Route::post('/change-password-by-otp', [RegisterController::class, 'changePasswordByOtp']);

    Route::get('expertises', [ExpertiseController::class, 'index']);
    Route::get('expertise/{id}', [ExpertiseController::class, 'singleExpertise']);
    Route::get('specialities', [SpecialityController::class, 'index']);
    Route::get('speciality/{id}', [SpecialityController::class, 'singleSpeciality']);
    Route::get('specialityByExpertise/{id}', [SpecialityController::class, 'specialityByExpertise']);

    Route::middleware('auth:api')->group(function () {

        /**
         * service api
         */
        Route::group(['prefix' => 'service'], function () {
            Route::get('/single/{id}', 'ServiceController@getSingleService');
            Route::get('/all', 'ServiceController@getAllService');
            Route::post('/allbytype', 'ServiceController@getAllServiceByType');
            Route::get('/service-for-carts', 'ServiceController@getServiceForCarts');
            Route::get('/categories', 'ServiceController@getAllCategories');
            Route::get('/category/{id}', 'ServiceController@getSingleCategory');
            Route::get('/categories-by-type', 'ServiceController@getAllCategoriesByType');
            Route::get('/categories-popular', 'ServiceController@getPopularCategories');
        });

        /**
         * provider api
         */
        Route::group(['prefix' => 'user', 'namespace' => 'User'], function () {

            Route::group(['prefix' => 'profile'], function () {
                Route::post('/update', 'UserProfileController@updateProfile');
                Route::get('/', 'UserProfileController@profile');
            });

            Route::get('/list', 'UserController@getUsers');
            Route::post('/list-by-role', 'UserController@getUsersByRole');
            Route::get('/roles', 'UserController@getUserRoles');
            Route::post('/change-availability', 'UserController@changeAvailabliiy');
            Route::post('/update-location', 'UserController@updateLocation');
            Route::get('/providers-by-status', 'UserController@providersByStatus');
            Route::get('/profile-completion', 'UserController@profileCompletion');
            Route::get('/academic-completion', 'UserController@academicCompletion');
            Route::get('/{id}', 'UserController@getSingleUser');

            Route::group(['prefix' => 'address'], function () {
                Route::post('/all', 'UserAddressController@getUserAllAddresses');
                Route::post('/add', 'UserAddressController@addUserAddress');
                Route::post('/edit', 'UserAddressController@editUserAddress');
                Route::post('/delete', 'UserAddressController@deleteUserAddress');
            });

            Route::group(['prefix' => 'saved-address'], function () {
                Route::post('/all', 'UserSavedAddressController@getUserAllSavedAddresses');
                Route::post('/add', 'UserSavedAddressController@addUserSavedAddress');
                Route::post('/edit', 'UserSavedAddressController@editUserSavedAddress');
                Route::post('/delete', 'UserSavedAddressController@deleteUserSavedAddress');
            });

            Route::group(['prefix' => 'service'], function () {
                Route::post('/all', 'UserServiceController@getUserAllServices');
                Route::post('/add', 'UserServiceController@addUserService');
                Route::post('/edit', 'UserServiceController@editUserService');
                Route::post('/delete', 'UserServiceController@deleteUserService');
            });

            Route::group(['prefix' => 'professional-data'], function () {
                Route::post('/all', 'UserProfessionalDataController@getUserAllProfData');
                Route::post('/add', 'UserProfessionalDataController@addUserProfData');
                Route::post('/edit', 'UserProfessionalDataController@editUserProfData');
                Route::post('/delete', 'UserProfessionalDataController@deleteUserProfData');
            });

            Route::group(['prefix' => 'academic'], function () {
                Route::post('/all', 'UserAcademicController@getUserAllAcadmicData');
                Route::post('/add', 'UserAcademicController@addUserAcadmicData');
                Route::post('/edit', 'UserAcademicController@editUserAcadmicData');
                Route::post('/delete', 'UserAcademicController@deleteUserAcadmicData');
            });

            Route::group(['prefix' => 'other-info'], function () {
                Route::post('/all', 'UserOtherInfoController@getUserAllOtherInfoData');
                Route::post('/add', 'UserOtherInfoController@addUserOtherInfo');
                Route::post('/edit', 'UserOtherInfoController@editUserOtherInfo');
                Route::post('/delete', 'UserOtherInfoController@deleteUserOtherInfo');
            });
            Route::group(['prefix' => 'document'], function () {
                Route::post('/all', 'UserDocumentController@getDocuments');
                Route::post('/add', 'UserDocumentController@addDocument');
                Route::post('/edit', 'UserDocumentController@editDocument');
                Route::post('/delete', 'UserDocumentController@deleteDocument');
            });

            Route::group(['prefix' => 'loved-ones'], function () {
                Route::get('/all', 'UserLovedOnesController@getLovedOnes');
                Route::post('/add', 'UserLovedOnesController@addLovedOne');
                Route::post('/edit', 'UserLovedOnesController@editLovedOne');
                Route::post('/delete', 'UserLovedOnesController@deleteLovedOne');
            });

            Route::group(['prefix' => 'user-speciality'], function () {
                Route::post('/all', 'UserSpecialityController@getSpecialities');
                Route::post('/add', 'UserSpecialityController@addSpeciality');
                Route::post('/edit', 'UserSpecialityController@editSpeciality');
                Route::post('/delete', 'UserSpecialityController@deleteSpeciality');
            });

            Route::group(['prefix' => 'language-proficiency'], function () {
                Route::post('/all', 'UserLanguageProficiencyController@getLanguageProficiency');
                Route::post('/add', 'UserLanguageProficiencyController@addUserLanguageProficiency');
                Route::post('/edit', 'UserLanguageProficiencyController@editUserLanguageProficiency');
                Route::post('/delete', 'UserLanguageProficiencyController@deleteUserLanguageProficiency');
            });

            Route::group(['prefix' => 'language-proficiency'], function () {
                Route::post('/all', 'UserLanguageProficiencyController@getLanguageProficiency');
                Route::post('/add', 'UserLanguageProficiencyController@addUserLanguageProficiency');
                Route::post('/edit', 'UserLanguageProficiencyController@editUserLanguageProficiency');
                Route::post('/delete', 'UserLanguageProficiencyController@deleteUserLanguageProficiency');
            });

            Route::group(['prefix' => 'album'], function () {
                Route::post('/all', 'UserAlbumController@allAlbum');
                Route::post('/add', 'UserAlbumController@addAlbum');
                Route::post('/edit', 'UserAlbumController@editAlbum');
                Route::post('/delete', 'UserAlbumController@deleteAlbum');
            });
            Route::group(['prefix' => 'gallery'], function () {
                Route::post('/all', 'UserGalleryController@allGallery');
                Route::post('/add', 'UserGalleryController@addGallery');
                Route::post('/edit', 'UserGalleryController@editGallery');
                Route::post('/delete', 'UserGalleryController@deleteGallery');
            });

            Route::group(['prefix' => 'rating'], function () {
                Route::post('/all', 'UserRatingController@allRating');
                Route::post('/add', 'UserRatingController@addRating');
                Route::post('/edit', 'UserRatingController@editRating');
                Route::post('/delete', 'UserRatingController@deleteRating');
            });

        });

        Route::group(['prefix' => 'user', 'namespace' => 'Order'], function () {
            Route::group(['prefix' => 'cart'], function () {
                Route::post('/add-service-to-cart', 'CartController@addCart');
                Route::get('/list', 'CartController@getCartProducts');
                Route::post('/delete-cart', 'CartController@deleteCart');
                Route::post('/empty-cart', 'CartController@deleteAllCart');
            });


        });
    });
});

