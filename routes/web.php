<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\CategorieController;
use App\Http\Controllers\admin\FrontController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\HomeSliderController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\ProductImageController;
use App\Http\Controllers\admin\ProductSubcategoryController;
use App\Http\Controllers\admin\StoreCOntroller;
use App\Http\Controllers\admin\SubCategoryCOntroller;
use App\Http\Controllers\conditionsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DealController;
use App\Http\Controllers\WishlistController;


Route::get('/about', function () {
    return view('front.about');
})->name('about');
//Route::get('/store', function () {
//    return view('front.store');
//})->name('store');
Route::get('/productDetail', function () {
    return view('front.productDetail');
})->name('productDetail');
Route::get('checkOut', [CartController::class, 'checkout'])->name('checkOut');
Route::get('/orderComplete', function () {
    return view('front.orderComplete');
})->name('orderComplete');

Route::get('/logIn', function () {
    return view('front.logIn');
})->name('logIn');


Route::get('/signUp', function () {
    return view('front.signUp');
})->name('signUp');

Route::get('/contact', function () {
    return view('front.contact');
})->name('contact');



Route::get('termsConditions/{type}', [conditionsController::class, 'index'])->name('termsConditions');


Route::post('searchProduct', [ProductController::class, 'search'])->name('searchProduct');

Route::get('login', [AdminController::class, 'index'])->name('login');
Route::get('signup', [AdminController::class, 'signup'])->name('signup');
Route::post('authenticate', [AdminController::class, 'authenticate'])->name('authenticate');
Route::get('logout', [HomeController::class, 'logout'])->name('logout');


Route::get('/', [FrontController::class, 'index'])->name('front.home');
Route::get('product/show/{productId}', [FrontController::class, 'productShow'])->name('product.show');
Route::get('store/{id}', [StoreController::class, 'GetProduct'])->name('store');
//  register

Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register/store', [AuthController::class, 'store'])->name('register.store');


Route::get('forgetPassword', [AuthController::class, 'forgetPasswordPage'])->name('forgetPasswordPage');

Route::post('sendVerificationCode', [AuthController::class, 'sendVerificationCode'])->name('sendVerificationCode');
Route::post('verifyCode', [AuthController::class, 'verifyCode'])->name('verifyCode');
Route::post('changePassword', [AuthController::class, 'changePassword'])->name('changePassword');

//Cart Routes

//Route::middleware('auth')->group(function(){

//if (Auth::guard('admin')->user()){
Route::prefix('cart')->name('cart.')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('index');
    Route::post('store', [CartController::class, 'store'])->name('store');
    Route::get('delete/{cart}', [CartController::class, 'delete'])->name('delete');
    Route::get('increment/{cart}', [CartController::class, 'increment'])->name('increment');
    Route::get('decrement/{cart}', [CartController::class, 'decrement'])->name('decrement');
    Route::get('clear', [CartController::class, 'clear'])->name('clear');
    Route::get('add/{product}', [CartController::class, 'add'])->name('add');
});

Route::prefix('wishlist')->name('wishlist.')->group(function () {
    Route::get('add/{product}', [WishlistController::class, 'add'])->name('add');
    Route::get('delete/{wishlist}', [WishlistController::class, 'delete'])->name('delete');
});


Route::prefix('order')->name('order.')->group(function () {
    Route::post('placeOrder', [OrderController::class, 'placeOrder'])->name('placeOrder');
    Route::post('cancel/{order}/{type}', [OrderController::class, 'orderCancelOrReturn'])->name('cancelOrReturn');
});

Route::post('product/review/{product}', [ProductController::class, 'review'])->name('product.review');


Route::prefix('user')->name('user.')->group(function () {
    Route::get('order', [HomeController::class, 'profile'])->name('order');
    Route::get('accountSetting', [HomeController::class, 'profile'])->name('accountSetting');
    Route::get('wishlist', [HomeController::class, 'profile'])->name('wishlist');

    Route::post('updateAccountSetting', [AuthController::class, 'updateAccountSetting'])->name('updateAccountSetting');
    Route::post('userQuery', [AuthController::class, 'userQuery'])->name('userQuery');
});
//};
//}


Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin.auth'], function () {
        Route::get('dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
        Route::get('logout', [HomeController::class, 'logout'])->name('admin.logout');


        // categories route
        Route::get('categorie/index', [CategorieController::class, 'index'])->name('categorie.index');
        Route::get('categorie/create', [CategorieController::class, 'create'])->name('categorie.create');
        Route::post('categorie/store', [CategorieController::class, 'store'])->name('categorie.store');
        Route::get('categorie/edit/{categories}', [CategorieController::class, 'edit'])->name('categorie.edit');
        Route::put('categorie/update/{categories}', [CategorieController::class, 'update'])->name('categorie.update');
        Route::get('categorie/delete/{categories}', [CategorieController::class, 'delete'])->name('categorie.delete');
        Route::get('categorie/duplicateItem/{category}', [CategorieController::class, 'duplicateItem'])->name('categorie.duplicateItem');


        //sub categories
        Route::get('subcategory/index', [SubCategoryCOntroller::class, 'index'])->name('subcategory.index');

        Route::get('subcategory/create', [SubCategoryCOntroller::class, 'create'])->name('subcategory.create');
        Route::post('subcategory/store', [SubCategoryCOntroller::class, 'store'])->name('subcategory.store');

        Route::get('subcategory/edit/{subcategories}', [SubCategoryCOntroller::class, 'edit'])->name('subcategory.edit');
        Route::put('subcategory/update/{subcategories}', [SubCategoryCOntroller::class, 'update'])->name('subcategory.update');
        Route::get('subcategory/dublicateItem/{subcategories}', [SubCategoryCOntroller::class, 'duplicate'])->name('subcategory.dublicateItem');
        Route::get('subcategory/delete/{subcategories}', [SubCategoryCOntroller::class, 'delete'])->name('subcategory.delete');

        //brand
        Route::get('brand/index', [BrandController::class, 'index'])->name('brand.index');
        Route::get('brand/create', [BrandController::class, 'create'])->name('brand.create');
        Route::post('brand/store', [BrandController::class, 'store'])->name('brand.store');
        Route::get('brand/edit/{brandId}', [BrandController::class, 'edit'])->name('brand.edit');
        Route::put('brand/update/{brandId}', [BrandController::class, 'Brandupdate'])->name('brand.update');
        Route::get('brand/delete/{brandId}', [BrandController::class, 'delete'])->name('brand.delete');


        //product
        Route::get('product/index', [ProductController::class, 'index'])->name('product.index');
        Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
        Route::post('product/upload-media', [ProductImageController::class, 'uploadMedia'])->name('product.uploadMedia');

        Route::get('product/delete/{product}', [ProductController::class, 'delete'])->name('product.delete');
        Route::get('product/tagDelete/{tag}', [ProductController::class, 'tagDelete'])->name('tag.delete');

        Route::get('product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
        Route::put('product/update/{product}', [ProductController::class, 'update'])->name('product.update');
        Route::get('product/duplicate/{product}', [ProductController::class, 'duplicate'])->name('product.duplicate');
        Route::get('product/variationDelete/{variation}', [ProductController::class, 'variationDelete'])->name('product.variationDelete');
        Route::get('product/subcategories/{category}', [ProductSubcategoryController::class, 'getProductSubcategories'])->name('product.subcategories');


        //slider
        Route::get('slider/index', [HomeSliderController::class, 'index'])->name('slider.index');
        Route::get('slider/create', [HomeSliderController::class, 'create'])->name('slider.create');
        Route::post('slider/store', [HomeSliderController::class, 'store'])->name('slider.store');
        Route::get('slider/edit/{slider}', [HomeSliderController::class, 'edit'])->name('slider.edit');
        Route::put('slider/update/{slider}', [HomeSliderController::class, 'update'])->name('slider.update');
        Route::get('slider/delete/{slider}', [HomeSliderController::class, 'delete'])->name('slider.delete');
        Route::get('slider/duplicate/{slider}', [HomeSliderController::class, 'duplicate'])->name('slider.duplicate');

        Route::prefix('deal')->name('deal.')->group(function () {
            Route::get('/', [DealController::class, 'index'])->name('index');
            Route::get('create/{product}', [DealController::class, 'create'])->name('create');
            Route::post('store', [DealController::class, 'store'])->name('store');
            route::get('edit/{deal}', [DealController::class, 'edit'])->name('edit');
            route::post('update/{deal}', [DealController::class, 'update'])->name('update');
            route::get('delete/{deal}', [DealController::class, 'delete'])->name('delete');
        });

        Route::prefix('order')->name('order.')->group(function () {
            Route::get('/', [OrderController::class, 'index'])->name('index');
            Route::get('create/{product}', [OrderController::class, 'create'])->name('create');
            Route::post('store', [OrderController::class, 'store'])->name('store');
            route::get('edit/{order}', [OrderController::class, 'edit'])->name('edit');
            route::post('update/{order}', [OrderController::class, 'update'])->name('update');
            route::get('delete/{order}', [OrderController::class, 'delete'])->name('delete');
        });

    });
});
