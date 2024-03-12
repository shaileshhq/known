<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\UserDetailsController;
use App\Http\Controllers\ProductCategoryController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();
Route::group(['middleware' => ['admin']], function(){
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Slider
 Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');   // -> name('Route')

 Route::get('/slider/create', [SliderController::class, 'create'])->name('slider.create');
 Route::post('/slider/store', [SliderController::class, 'store'])->name('slider.store');
 Route::get('/slider/{slider}/edit', [SliderController::class, 'edit'])->name('slider.edit');
 Route::put('/slider/{slider}', [SliderController::class, 'update'])->name('slider.update');
Route::get('/slider/delete/{slider}',[SliderController::class, 'destroy'])->name('slider.delete');

// Award
Route::get('/award', [AwardController::class, 'index'])->name('award.index');   // -> name('Route')

Route::get('/award/create', [AwardController::class, 'create'])->name('award.create');
Route::post('/award/store', [AwardController::class, 'store'])->name('award.store');
Route::get('/award/{award}/edit', [AwardController::class, 'edit'])->name('award.edit');
Route::put('/award/{award}', [AwardController::class, 'update'])->name('award.update');
Route::get('/award/delete/{award}',[AwardController::class, 'destroy'])->name('award.delete');

// Project
Route::get('/project', [ProjectController::class, 'index'])->name('project.index');   // -> name('Route')

Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');
Route::get('/project/{project}/edit', [ProjectController::class, 'edit'])->name('project.edit');
Route::put('/project/{project}', [ProjectController::class, 'update'])->name('project.update');
Route::get('/project/delete/{project}',[ProjectController::class, 'destroy'])->name('project.delete');

// Brand Support
Route::get('/support', [SupportController::class, 'index'])->name('support.index');   // -> name('Route')

Route::get('/support/create', [SupportController::class, 'create'])->name('support.create');
Route::post('/support/store', [SupportController::class, 'store'])->name('support.store');
Route::get('/support/{support}/edit', [SupportController::class, 'edit'])->name('support.edit');
Route::put('/support/{support}', [SupportController::class, 'update'])->name('support.update');
Route::get('/support/delete/{support}',[SupportController::class, 'destroy'])->name('support.delete');

//Category
Route::get('/category', [ProductCategoryController::class, 'index'])->name('category.index');

Route::get('/category/create', [ProductCategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [ProductCategoryController::class, 'store'])->name('category.store');
Route::get('/category/{category}/edit', [ProductCategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/{category}', [ProductCategoryController::class, 'update'])->name('category.update');
Route::get('/category/delete/{category}',[ProductCategoryController::class, 'destroy'])->name('category.delete');

//Product

Route::get('/product', [ProductController::class, 'index'])->name('product.index');

Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}', [ProductController::class, 'update'])->name('product.update');
Route::get('/product/delete/{product}',[ProductController::class, 'destroy'])->name('product.delete');

//Gallery
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');

Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
Route::get('/gallery/{gallery}/edit', [GalleryController::class, 'edit'])->name('gallery.edit');
Route::put('/gallery/{gallery}', [GalleryController::class, 'update'])->name('gallery.update');
Route::get('/gallery/delete/{gallery}',[GalleryController::class, 'destroy'])->name('gallery.delete');

//Logo
Route::get('/logo', [LogoController::class, 'index'])->name('logo.index');

Route::get('/logo/create', [LogoController::class, 'create'])->name('logo.create');
Route::post('/logo/store', [LogoController::class, 'store'])->name('logo.store');
Route::get('/logo/{logo}/edit', [LogoController::class, 'edit'])->name('logo.edit');
Route::put('/logo/{logo}', [LogoController::class, 'update'])->name('logo.update');
Route::get('/logo/delete/{logo}',[LogoController::class, 'destroy'])->name('logo.delete');



//Enquiry


Route::get('/enquiry', [EnquiryController::class, 'index'])->name('enquiry.index');

Route::get('/enquiry/create', [EnquiryController::class, 'create'])->name('enquiry.create');
Route::post('/enquiry/store', [EnquiryController::class, 'store'])->name('enquiry.store');
Route::get('/enquiry/delete/{enquiry}',[EnquiryController::class, 'destroy'])->name('enquiry.delete');

//Product Inquiry
Route::get('/inquiry', [InquiryController::class, 'index'])->name('inquiry.index');

Route::get('/inquiry/create', [InquiryController::class, 'create'])->name('inquiry.create');
Route::post('/inquiry/store', [InquiryController::class, 'store'])->name('inquiry.store');
Route::get('/inquiry/delete/{inquiry}',[InquiryController::class, 'destroy'])->name('inquiry.delete');
//User Profile

Route::get('/profile', [UserDetailsController::class, 'index'])->name('profile.index');

Route::put('profile', [UserDetailsController::class, 'profile_update'])->name('profile.profile_update');

Route::get('/convertSlug', [BlogController::class, 'convertSlug']);
Route::get('/convertSlug', [NewsEventController::class, 'convertSlug']);
});