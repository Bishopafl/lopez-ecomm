<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProductListController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\Admin\SliderController;
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

Route::get('/getVisitor', [VisitorController::class, 'GetVisitorDetails']); // Get Visitor Details Route

Route::post('/contactDetails', [ContactController::class, 'ContactPageDetails']); // Contact Page Route

Route::get('/allsiteinfo', [SiteInfoController::class, 'AllSiteInfo']); // Site Info Route

Route::get('/allcategorydata', [CategoryController::class, 'AllCategory']); // Category Route

Route::get('/productlistbyremark/{remark}', [ProductListController::class, 'ProductListByRemark']); // Product List By Remark Route

Route::get('/productlistbycategory/{category}', [ProductListController::class, 'ProductListByCategory']); // Product List by Collection Route

Route::get('/productlistbysubcategory/{category}/{subcategory}', [ProductListController::class, 'ProductListBySubcategory']); // Product List by Subcategory Route

Route::get('/allslider', [SliderController::class, 'AllHomeSliders']); // Slider Route