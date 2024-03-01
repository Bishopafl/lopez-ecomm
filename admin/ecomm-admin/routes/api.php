<?php

use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteInfoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitorController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Get Visitor
Route::get('/getVisitor', [VisitorController::class, 'GetVisitorDetails']);

// Contact Page Route
Route::post('/contactDetails', [ContactController::class, 'ContactPageDetails']);

// Site Info Route
Route::get('/allsiteinfo', [SiteInfoController::class, 'AllSiteInfo']);