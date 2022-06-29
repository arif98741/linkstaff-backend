<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/**
 * Backend Routes For Managing all core functionalities
 */
Route::group([
    'as' => 'frontend.',
    'namespace' => 'Frontend',
    'middleware' => 'web', //backend middleware . user must have to be logged in before using system

], function () {

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/download-app', 'HomeController@downloadApp');
    Route::get('/terms-and-conditions-for-provider', 'HomeController@termsandcondforprovider')->name('home');
    Route::post('/save-appointment', 'AppointmentController@saveAppointment');

});


Auth::routes();

/**
 * Backend Routes For Managing all core functionalities
 */
Route::group([
    'prefix' => 'backend',
    'as' => 'backend.',
    'namespace' => 'Backend',
    'middleware' => 'auth', //backend middleware . user must have to be logged in before using system

], function () {

    Route::get('dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::resource('/user', 'UserController')->except(['show']);
    Route::get('/user-files/{id}', 'UserController@userFiles');
    Route::resource('/expertise', 'ExpertiseController');
    Route::resource('/specialities', 'SpecialityController');
    Route::resource('/coupon', 'CouponController');
    Route::group(['prefix' => 'service', 'as' => 'service.'], function () {
        Route::resource('/service-category', 'ServiceCategoryController');
    });

    Route::resource('/service', 'ServiceController');
    Route::resource('/front-service', 'FrontServiceController');
    Route::resource('/testimonial', 'Website\TestimonialController');
    Route::resource('/order', 'OrderController')->only(['index', 'show']);

});

Route::get('logoutlink', function () {
    Auth::logout();
    return redirect('login');
});

