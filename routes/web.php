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


Route::get('/termsConditions/{type}', function ($type) {
    $policyTypes = collect(
        [
//          terms policies
            [
                'name' => 'Terms and Conditions',
                'slug' => 'term_and_conditions',
                'content' => '
                                  <div class="text-gray-500 text-sm lg:text-[15px] leading-7">
                    <p>
                    Welcome to Himrooz, your trusted destination for premium organic products. By accessing or using our website and services, you agree to comply with and be bound by the following terms and conditions. Please read them carefully before making a purchase.
                    </p>

                    <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold  font-body">
                         Acceptance of Terms:
                    </h4>
                    <p>
                    By using the Himrooz website or making a purchase, you acknowledge that you have read, understood, and agree to be bound by these terms and conditions.
                    </p>

                      <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold  font-body">
                        Products and Descriptions:
                    </h4>
                    <p>
Himrooz strives to provide accurate product information and descriptions. However, we do not warrant that product descriptions or other content on the site are accurate, complete, reliable, current, or error-free.
                    </p>

                      <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold  font-body">
Pricing and Payments:
                    </h4>
                    <p>
All prices listed on the Himrooz website are in the applicable currency and are subject to change. Payment for orders must be made in full before the products are dispatched. Himrooz reserves the right to refuse or cancel any order at its sole discretion.
                    </p>

                      <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold  font-body">
Shipping and Delivery:
                    </h4>
                    <p>
Himrooz aims to deliver products in a timely manner. However, delivery times may vary based on the shipping location and other factors beyond our control. Himrooz is not responsible for any delays or damages during transit.
                    </p>

                      <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold  font-body">
Returns and Refunds:
                    </h4>
                    <p>
For information on our return and refund policy, please refer to the dedicated "Returns and Refunds" section on the Himrooz website.
                    </p>

                      <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold  font-body">
Product Quality and Assurance:
                    </h4>
                    <p>
Himrooz is committed to providing high-quality organic products. However, variations in color, texture, and taste may occur due to the natural characteristics of organic items. We do not guarantee the absence of allergens and advise customers to check product labels for specific information.
                    </p>

                      <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold  font-body">
Privacy Policy:
                    </h4>
                    <p>
Himrooz values your privacy. Our Privacy Policy outlines how we collect, use, disclose, and manage your personal information. By using our services, you agree to our Privacy Policy.
                    </p>

                      <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold  font-body">
Intellectual Property:
                    </h4>
                    <p>
All content on the Himrooz website, including text, graphics, logos, images, and software, is the property of Himrooz and is protected by intellectual property laws. You may not use, reproduce, distribute, or create derivative works based on this content without explicit permission.
                    </p>

                      <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold  font-body">
Modification of Terms:
                    </h4>
                    <p>
Himrooz reserves the right to modify these terms and conditions at any time. Changes will be effective immediately upon posting on the website. It is your responsibility to review the terms regularly to stay informed of any updates.
                    </p>
                    <p class="mt-4">
Thank you for choosing Himrooz for your organic product needs. We appreciate your trust and look forward to serving you!
                    </p>

                </div>

                  '
            ],

//          privacy policies
            [
                'name' => 'Privacy Policy',
                'slug' => 'privacy_policy',
                'content' => '
        <div class="text-gray-500 text-sm lg:text-[15px] leading-7">
            <p>
                Welcome to Himrooz, your trusted destination for premium organic products. Your privacy is important to us, and we are committed to protecting your personal information. This Privacy Policy outlines how we collect, use, disclose, and manage your data. By using our services, you agree to the terms outlined below.
            </p>

            <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold  font-body">
                Information We Collect:
            </h4>
            <p>
                Himrooz may collect personal information such as your name, email address, shipping address, and payment details when you use our website or make a purchase. We may also collect non-personal information such as IP addresses, browser type, and device information for analytical purposes.
            </p>

            <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold  font-body">
                How We Use Your Information:
            </h4>
            <p>
                We use the collected information to process your orders, improve our services, and communicate with you about your purchases. Additionally, we may use non-personal information for analytical and marketing purposes to enhance your experience with Himrooz.
            </p>

            <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold  font-body">
                Disclosure of Information:
            </h4>
            <p>
                Himrooz may share your personal information with trusted third parties such as payment processors and shipping companies to fulfill your orders. We do not sell or rent your personal information to third parties for marketing purposes without your explicit consent.
            </p>

            <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold  font-body">
                Security Measures:
            </h4>
            <p>
                Himrooz implements reasonable security measures to protect your personal information from unauthorized access, disclosure, alteration, and destruction. However, no method of transmission over the internet or electronic storage is 100% secure, and we cannot guarantee absolute security.
            </p>

            <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold  font-body">
                Your Choices:
            </h4>
            <p>
                You have the right to access, correct, or delete your personal information. You can manage your communication preferences and opt-out of marketing emails. If you have any concerns or questions about your privacy, please contact us using the information provided at the end of this Privacy Policy.
            </p>

            <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold  font-body">
                Changes to the Privacy Policy:
            </h4>
            <p>
                Himrooz reserves the right to update or modify this Privacy Policy at any time. Changes will be effective immediately upon posting on the website. It is your responsibility to review the policy regularly to stay informed of any updates.
            </p>
            <p class="mt-4">
                Thank you for choosing Himrooz. We value and respect your privacy, and we are dedicated to providing you with a secure and enjoyable shopping experience.
            </p>
        </div>
    '
            ],

//          shipping policies
            [
            'name' => 'Shipping Policy',
            'slug' => 'shipping_policy',
            'content' => '
        <div class="text-gray-500 text-sm lg:text-[15px] leading-7">
            <p>
                Welcome to Himrooz! Our Shipping Policy outlines the details regarding the shipping and delivery of our premium organic products.
            </p>

            <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold font-body">
                Shipping Methods:
            </h4>
            <p>
                Himrooz offers various shipping methods to cater to your needs. The available options and associated costs can be viewed during the checkout process. Please select the preferred method that suits you best.
            </p>

            <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold font-body">
                Delivery Times:
            </h4>
            <p>
                While we strive to deliver products in a timely manner, the actual delivery times may vary based on the shipping location, product availability, and other factors beyond our control. Himrooz is not responsible for any delays that may occur during transit.
            </p>

            <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold font-body">
                Shipping Costs:
            </h4>
            <p>
                The shipping costs are calculated based on the selected shipping method, the destination address, and the total weight of the order. These costs will be clearly displayed during the checkout process before you confirm your purchase.
            </p>

            <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold font-body">
                International Shipping:
            </h4>
            <p>
                Himrooz provides international shipping services. Customers placing orders outside the country of origin should be aware of any customs regulations and import duties that may apply. These additional charges are the responsibility of the recipient.
            </p>

            <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold font-body">
                Tracking Orders:
            </h4>
            <p>
                Once your order is dispatched, you will receive a confirmation email with a tracking number. You can use this tracking number to monitor the status and estimated delivery date of your shipment.
            </p>

            <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold font-body">
                Contact Us:
            </h4>
            <p>
                If you have any questions or concerns regarding the shipping of your order, please contact our customer service team. We are here to assist you.
            </p>

            <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold font-body">
                Modification of Shipping Policy:
            </h4>
            <p>
                Himrooz reserves the right to modify this Shipping Policy at any time. Any changes will be effective immediately upon posting on the website. It is recommended to review the policy regularly for updates.
            </p>

            <p class="mt-4">
                Thank you for choosing Himrooz. We appreciate your trust and hope you enjoy our premium organic products!
            </p>
        </div>
    '
        ],

//          refund policies
            [
            'name' => 'Refund Policy',
            'slug' => 'refund_policy',
            'content' => '
                    <div class="text-gray-500 text-sm lg:text-[15px] leading-7">
                        <p>
                            At Himrooz, we strive to ensure your satisfaction with our premium organic products. This Refund Policy outlines the terms and conditions regarding returns and refunds. Please read this policy carefully before making a purchase.
                        </p>

                        <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold font-body">
                            Eligibility for Refunds:
                        </h4>
                        <p>
                            To be eligible for a refund, the following conditions must be met:
                            <ul class="list-disc list-inside">
                                <li>Product must be in its original packaging.</li>
                                <li>Product must be unused and in the same condition as received.</li>
                                <li>Return request must be made within [X] days of receiving the product.</li>
                            </ul>
                        </p>

                        <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold font-body">
                            Refund Process:
                        </h4>
                        <p>
                            If your return meets the eligibility criteria, follow these steps for a refund:
                            <ol class="list-decimal list-inside">
                                <li>Contact our customer support team to initiate the return process.</li>
                                <li>Package the product securely and send it to the address provided by our support team.</li>
                                <li>Once we receive and inspect the returned product, we will notify you of the approval or rejection of your refund.</li>
                                <li>If approved, the refund will be processed, and a credit will be automatically applied to your original payment method within [X] days.</li>
                            </ol>
                        </p>

                        <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold font-body">
                            Non-Refundable Items:
                        </h4>
                        <p>
                            Certain items are non-refundable, including:
                            <ul class="list-disc list-inside">
                                <li>Perishable goods.</li>
                                <li>Gift cards.</li>
                                <li>Downloadable products.</li>
                            </ul>
                        </p>

                        <h4 class="text-brand-dark text-base mt-4 xl:text-md xl:leading-7 font-semibold font-body">
                            Contact Us:
                        </h4>
                        <p>
                            If you have any questions about our Refund Policy, please contact us at [contact@himrooz.com].
                        </p>

                        <p class="mt-4">
                            Thank you for choosing Himrooz. We value your trust and aim to provide you with the best organic products and customer service.
                        </p>
                    </div>
              '
        ]

        ]
    );
    $policy = $policyTypes->where('slug', $type)->first();
    return view('front.termsConditions')->with('policy', $policy);
})->name('termsConditions');


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
