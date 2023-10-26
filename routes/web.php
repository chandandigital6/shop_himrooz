<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\CategorieController;
use App\Http\Controllers\admin\FrontController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\HomeSliderController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ProductImageController;
use App\Http\Controllers\admin\ProductSubcategoryController;
use App\Http\Controllers\admin\SubCategoryCOntroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('admin.login');
//});

Route::get('/about', function () {
    return view('front.about');
})->name('about');
Route::get('/store', function () {
    return view('front.store');
})->name('store');
Route::get('/productDetail', function () {
    return view('front.productDetail');
})->name('productDetail');
Route::get('/checkOut', function () {
    return view('front.checkOut');
})->name('checkOut');
Route::get('/orderComplete', function () {
    return view('front.orderComplete');
})->name('orderComplete');

Route::get('/logIn', function () {
    return view('front.logIn');
})->name('logIn');


Route::get('/signUp', function () {
    return view('front.signUp');
})->name('signUp');
Route::get('/forgetPassword', function () {
    return view('front.forgetPassword');
})->name('forgetPassword');
Route::get('/profile', function () {
    return view('front.profile');
})->name('profile');
Route::get('/contact', function () {
    return view('front.contact');
})->name('contact');
Route::get('/termsConditions', function () {
    return view('front.termsConditions');
})->name('termsConditions');
Route::get('/',[FrontController::class,'index'])->name('front.home');
Route::get('product/show/{productId}',[FrontController::class,'productShow'])->name('product.show');


Route::get('admin/login',[AdminController::class,'index'])->name('admin.login');
Route::group(['prefix' => 'admin'],function (){
    Route::group(['middleware' => 'admin.guest'],function (){
        Route::get('login',[AdminController::class,'index'])->name('admin.login');
        Route::get('signup',[AdminController::class,'signup'])->name('admin.signup');
        Route::post('authenticate',[AdminController::class,'authenticate'])->name('admin.authenticate');
    });
    Route::group(['middleware' => 'admin.auth'],function (){
        Route::get('dashboard',[HomeController::class,'index'])->name('admin.dashboard');
        Route::get('logout',[HomeController::class,'logout'])->name('admin.logout');


        // categories route
        Route::get('categorie/index',[CategorieController::class,'index'])->name('categorie.index');
        Route::get('categorie/create',[CategorieController::class,'create'])->name('categorie.create');
        Route::post('categorie/store',[CategorieController::class,'store'])->name('categorie.store');
        Route::get('categorie/edit/{categories}',[CategorieController::class,'edit'])->name('categorie.edit');
        Route::put('categorie/update/{categories}',[CategorieController::class,'update'])->name('categorie.update');
        Route::get('categorie/delete/{categories}',[CategorieController::class,'delete'])->name('categorie.delete');
        Route::get('categorie/duplicateItem/{category}',[CategorieController::class,'duplicateItem'])->name('categorie.duplicateItem');


        //sub categories
        Route::get('subcategory/index',[SubCategoryCOntroller::class,'index'])->name('subcategory.index');

        Route::get('subcategory/create',[SubCategoryCOntroller::class,'create'])->name('subcategory.create');
        Route::post('subcategory/store',[SubCategoryCOntroller::class,'store'])->name('subcategory.store');

        Route::get('subcategory/edit/{subcategories}',[SubCategoryCOntroller::class,'edit'])->name('subcategory.edit');
        Route::put('subcategory/update/{subcategories}',[SubCategoryCOntroller::class,'update'])->name('subcategory.update');
        Route::get('subcategory/dublicateItem/{subcategories}',[SubCategoryCOntroller::class,'duplicate'])->name('subcategory.dublicateItem');
        Route::get('subcategory/delete/{subcategories}',[SubCategoryCOntroller::class,'delete'])->name('subcategory.delete');

        //brand
        Route::get('brand/index',[BrandController::class,'index'])->name('brand.index');
        Route::get('brand/create',[BrandController::class,'create'])->name('brand.create');
        Route::post('brand/store',[BrandController::class,'store'])->name('brand.store');
        Route::get('brand/edit/{brandId}',[BrandController::class,'edit'])->name('brand.edit');
        Route::put('brand/update/{brandId}',[BrandController::class,'Brandupdate'])->name('brand.update');
        Route::get('brand/delete/{brandId}',[BrandController::class,'delete'])->name('brand.delete');


        //product
        Route::get('product/index',[ProductController::class,'index'])->name('product.index');
        Route::get('product/create',[ProductController::class,'create'])->name('product.create');
        Route::post('product/store',[ProductController::class,'store'])->name('product.store');
        Route::post('product/upload-media', [ProductImageController::class, 'uploadMedia'])->name('product.uploadMedia');
        Route::get('product/delete/{product}',[ProductController::class,'delete'])->name('product.delete');
        Route::get('product/edit/{product}',[ProductController::class,'edit'])->name('product.edit');
        Route::put('product/update/{product}',[ProductController::class,'update'])->name('product.update');
        Route::get('product/duplicate/{product}',[ProductController::class,'duplicate'])->name('product.duplicate');

        Route::get('product/subcategories/{category}',[ProductSubcategoryController::class,'getProductSubcategories'])->name('product.subcategories');


        //slider
        Route::get('slider/index',[HomeSliderController::class,'index'])->name('slider.index');
          Route::get('slider/create',[HomeSliderController::class,'create'])->name('slider.create');
        Route::post('slider/store',[HomeSliderController::class,'store'])->name('slider.store');
        Route::get('slider/edit/{slider}',[HomeSliderController::class,'edit'])->name('slider.edit');
        Route::put('slider/update/{slider}',[HomeSliderController::class,'update'])->name('slider.update');
        Route::get('slider/delete/{slider}',[HomeSliderController::class,'delete'])->name('slider.delete');
        Route::get('slider/duplicate/{slider}',[HomeSliderController::class,'duplicate'])->name('slider.duplicate');

    });
});
