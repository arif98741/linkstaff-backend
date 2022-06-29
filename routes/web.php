<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('logoutlink', function () {
    Auth::logout();
    return redirect('login');
});

