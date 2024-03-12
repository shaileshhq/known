<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AizUploadController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();
Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('index');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/product', [FrontController::class, 'product'])->name('product');
Route::get('/product-details/{id}', [FrontController::class, 'product_details'])->name('product_details');
Route::get('/services', [FrontController::class, 'services'])->name('services');
Route::get('/gallerys', [FrontController::class, 'gallery'])->name('gallery');
Route::get('/our-project', [FrontController::class, 'our_project'])->name('our_project');
Route::get('/award-and-certificate', [FrontController::class, 'award_and_certificate'])->name('award_and_certificate');
Route::get('/store-location', [FrontController::class, 'store_location'])->name('store_location');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');


// Upload multiple Images
Route::post('/aiz-uploader', [AizUploadController::class, 'show_uploader']);
Route::post('/aiz-uploader/upload', [AizUploadController::class, 'upload']);
Route::get('/aiz-uploader/get_uploaded_files', [AizUploadController::class, 'get_uploaded_files']);
Route::delete('/aiz-uploader/destroy/{id}', [AizUploadController::class, 'destroy']);
Route::post('/aiz-uploader/get_file_by_ids', [AizUploadController::class, 'get_preview_files']);
Route::get('/aiz-uploader/download/{id}', [AizUploadController::class, 'attachment_download'])->name('download_attachment');
