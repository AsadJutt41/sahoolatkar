<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\DashboardController;
use App\Http\Controllers\API\RequestFormController;
use App\Http\Controllers\API\AccountLevelController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/register', 'API\AuthController@register');
Route::post('/login', 'API\AuthController@login');
Route::post('/forgot-password', 'API\AuthController@forgotPassword');
Route::post('/check-code', 'API\AuthController@checkCode');
Route::post('/reset-password', 'API\AuthController@resetPassword');


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', 'API\AuthController@logout');
    Route::get('/get-profile', [DashboardController::class, 'getProfile']);
    Route::post('/profile-update', [DashboardController::class, 'profileUpdate']);
    Route::post('/change-password', [DashboardController::class, 'changePassword']);

    /****DashBoard ****/
    Route::get('/brands', [DashboardController::class, 'brands']);
    Route::get('/categories', [DashboardController::class, 'categories']);

    Route::post('/suggest-new-product' , [DashboardController::class , 'suggestProduct']);
    Route::get('/store-locator' , [DashboardController::class , 'storeLocator']);

    /**** Account Level ****/
    Route::get('/account-level', [AccountLevelController::class, 'accountLevel']);

    Route::post('/appointment', [AccountLevelController::class, 'appointment']);
    Route::post('/appointment-update/{id}', [AccountLevelController::class, 'appointmentUpdate']);
    Route::post('/personal', [AccountLevelController::class, 'personal']);
    Route::post('/personal-update/{id}', [AccountLevelController::class, 'personalUpdate']);
    Route::post('/education', [AccountLevelController::class, 'education']);
    Route::post('/education-update/{id}', [AccountLevelController::class, 'educationUpdate']);
    Route::post('/bank', [AccountLevelController::class, 'bank']);
    Route::post('/bank-update/{id}', [AccountLevelController::class, 'bankUpdate']);
    Route::post('/utility-bill', [AccountLevelController::class, 'utilityBill']);
    Route::post('/utility-bill-update/{id}', [AccountLevelController::class, 'utilityBillUpdate']);
    Route::post('/driving-license', [AccountLevelController::class, 'drivingLicense']);
    Route::post('/driving-license-update/{id}', [AccountLevelController::class, 'drivingLicenseUpdate']);
    Route::post('/live-photo', [AccountLevelController::class, 'livePhoto']);
    Route::post('/live-photo-update/{id}', [AccountLevelController::class, 'livePhotoUpdate']);
    Route::post('/biometric', [AccountLevelController::class, 'biometric']);

    #request Form
    Route::post('/request-form', [RequestFormController::class, 'requestForm']);
});

