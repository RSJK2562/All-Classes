<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\EpmController;
use App\Http\Controllers\SanctumController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getdata', [ApiController::class, 'getList']);

Route::post('/allemployee', [ApiController::class, 'setdata']);

Route::put('/update-data', [ApiController::class, 'updateData']);

Route::delete('/delete-data/{id}', [ApiController::class, 'deleteData']);

Route::get('/search-data/{name}', [ApiController::class, 'searchData']);

// API With --resource controller
Route::resource('/resource-api', EpmController::class);
// ---------------------------- NOTES ----------------------------
// HTTP Method  	URI	                        Action	Route Name
// GET	            /resource-api	            index	resource-api.index
// GET	            /resource-api/create	    create	resource-api.create
// POST	            /resource-api	            store	resource-api.store
// GET	            /resource-api/{id}	        show	resource-api.show
// GET	            /resource-api/{id}/edit	    edit	resource-api.edit
// PUT/PATCH	    /resource-api/{id}	        update	resource-api.update
// DELETE	        /resource-api/{id}	        destroy	resource-api.destroy


// sanctum API
Route::post('/SignUp', [SanctumController::class, 'signup']);
Route::post('/Login', [SanctumController::class, 'login']);


// Authentication
Route::group(['middleware' => "auth:sanctum"], function () {
    Route::get('/empData', [ApiController::class, 'getList']);
});
