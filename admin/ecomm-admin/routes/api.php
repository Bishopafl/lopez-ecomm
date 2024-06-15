<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProductDetailsController;
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

// Get Visitor Details Route
Route::get('/getVisitor', [VisitorController::class, 'GetVisitorDetails']); 

// Contact Page Route
Route::post('/contactDetails', [ContactController::class, 'ContactPageDetails']); 

// Site Info Route
Route::get('/allsiteinfo', [SiteInfoController::class, 'AllSiteInfo']); 

// Category Route
Route::get('/allcategorydata', [CategoryController::class, 'AllCategory']); 

// Product List Routes
Route::get('/productlistbyremark/{remark}', [ProductListController::class, 'ProductListByRemark']); // Product List By Remark Route

Route::get('/productlistbycategory/{category}', [ProductListController::class, 'ProductListByCategory']); // Product List by Collection Route

Route::get('/productlistbysubcategory/{category}/{subcategory}', [ProductListController::class, 'ProductListBySubcategory']); // Product List by Subcategory Route

// Slider Routes
Route::get('/allhomesliders', [SliderController::class, 'AllHomeSliders']);

// Product Details Routes
Route::get('/product-details/{id}', [ProductDetailsController::class, 'ProductDetails']);