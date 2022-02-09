<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


//
Route::get('/', function () {return view('pages.index');})->name('index');

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/password-change', [\App\Http\Controllers\HomeController::class,'changePassword'])->name('password.change');
//Route::post('/password-update', [\App\Http\Controllers\HomeController::class,'updatePassword'])->name('password.update');
Route::get('/user/logout', [\App\Http\Controllers\HomeController::class,'Logout'])->name('user.logout');

//admin=======
Route::get('admin/home', [\App\Http\Controllers\AdminController::class,'index'])->name('admin.home');
Route::get('admin/login', [\App\Http\Controllers\LoginAdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [\App\Http\Controllers\LoginAdminController::class,'login']);
Route::get('admin/register', [\App\Http\Controllers\RegisterAdminController::class, 'showRegistrationForm'])->name('admin.register');
Route::post('admin/register', [\App\Http\Controllers\RegisterAdminController::class,'register']);

        // Password Reset Routes...
//Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
//Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
//Route::get('admin/reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
//Route::post('admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');
Route::get('/admin/Change/Password',[\App\Http\Controllers\AdminController::class,'ChangePassword'])->name('admin.password.change');
Route::post('/admin/password/update',[\App\Http\Controllers\AdminController::class,'Update_pass'])->name('admin.password.update');
Route::get('admin/logout', [\App\Http\Controllers\AdminController::class,'logout'])->name('admin.logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/// Admin Section
// categories
Route::get('admin/categories', [\App\Http\Controllers\Admin\Category\CategoryController::class,'category'])->name('categories');
Route::post('admin/store/category', [\App\Http\Controllers\Admin\Category\CategoryController::class,'storecategory'])->name('store.category');
Route::get('delete/category/{id}', [\App\Http\Controllers\Admin\Category\CategoryController::class,'Deletecategory'])->name('delete.category');
Route::get('edit/category/{id}', [\App\Http\Controllers\Admin\Category\CategoryController::class,'Editcategory'])->name('edit.category');
Route::post('update/category/{id}', [\App\Http\Controllers\Admin\Category\CategoryController::class,'Updatecategory'])->name('update.category');

/// Brand
Route::get('admin/brands', [\App\Http\Controllers\Admin\Category\BrandController::class,'brand'])->name('brands');
Route::post('admin/store/brand', [\App\Http\Controllers\Admin\Category\BrandController::class,'storebrand'])->name('store.brand');
Route::get('delete/brand/{id}', [\App\Http\Controllers\Admin\Category\BrandController::class,'DeleteBrand']);
Route::get('edit/brand/{id}', [\App\Http\Controllers\Admin\Category\BrandController::class,'EditBrand']);
Route::post('update/brand/{id}', [\App\Http\Controllers\Admin\Category\BrandController::class,'UpdateBrand']);

// Sub Categories
Route::get('admin/sub/category', [\App\Http\Controllers\Admin\Category\SubCategoryController::class,'subcategories'])->name('sub.categories');
Route::post('admin/store/subcat', [\App\Http\Controllers\Admin\Category\SubCategoryController::class,'storesubcat'])->name('store.subcategory');
Route::get('delete/subcategory/{id}', [\App\Http\Controllers\Admin\Category\SubCategoryController::class,'DeleteSubcat']);
Route::get('edit/subcategory/{id}', [\App\Http\Controllers\Admin\Category\SubCategoryController::class,'EditSubcat']);
Route::post('update/subcategory/{id}', [\App\Http\Controllers\Admin\Category\SubCategoryController::class,'UpdateSubcat']);

// Coupons All
Route::get('admin/sub/coupon', [\App\Http\Controllers\Admin\Category\CouponController::class,'Coupon'])->name('admin.coupon');
Route::post('admin/store/coupon', [\App\Http\Controllers\Admin\Category\CouponController::class,'StoreCoupon'])->name('store.coupon');
Route::get('delete/coupon/{id}', [\App\Http\Controllers\Admin\Category\CouponController::class,'DeleteCoupon']);
Route::get('edit/coupon/{id}', [\App\Http\Controllers\Admin\Category\CouponController::class,'EditCoupon']);
Route::post('update/coupon/{id}', [\App\Http\Controllers\Admin\Category\CouponController::class,'UpdateCoupon']);

// Newslater
Route::get('admin/newslater', [\App\Http\Controllers\Admin\Category\CouponController::class,'Newslater'])->name('admin.newslater');
Route::get('delete/sub/{id}', [\App\Http\Controllers\Admin\Category\CouponController::class,'DeleteSub']);

// Frontend All Routes
Route::post('store/newsletter', [\App\Http\Controllers\FrontController::class,'StoreNewsletter'])->name('store.newsletter');

// Product All Route
Route::get('admin/product/all', [\App\Http\Controllers\Admin\ProductController::class,'index'])->name('all.product');
Route::get('admin/product/add', [\App\Http\Controllers\Admin\ProductController::class,'create'])->name('add.product');
Route::post('admin/store/product', [\App\Http\Controllers\Admin\ProductController::class,'store'])->name('store.product');

Route::get('inactive/product/{id}', [\App\Http\Controllers\Admin\ProductController::class,'inactive']);
Route::get('active/product/{id}', [\App\Http\Controllers\Admin\ProductController::class,'active']);
Route::get('delete/product/{id}', [\App\Http\Controllers\Admin\ProductController::class,'DeleteProduct']);

Route::get('view/product/{id}', [\App\Http\Controllers\Admin\ProductController::class,'ViewProduct']);
Route::get('edit/product/{id}', [\App\Http\Controllers\Admin\ProductController::class,'EditProduct']);

Route::post('update/product/withoutphoto/{id}', [\App\Http\Controllers\Admin\ProductController::class,'UpdateProductWithoutPhoto']);

Route::post('update/product/photo/{id}', [\App\Http\Controllers\Admin\ProductController::class,'UpdateProductPhoto']);

// For Show Sub category with ajax
Route::get('get/subcategory/{category_id}', [\App\Http\Controllers\Admin\ProductController::class,'GetSubcat']);



// Blog Admin All

Route::get('blog/category/list', [\App\Http\Controllers\Admin\PostController::class,'BlogCatList'])->name('add.blog.categorylist');
Route::post('admin/store/blog', [\App\Http\Controllers\Admin\PostController::class,'BlogCatStore'])->name('store.blog.category');
Route::get('delete/blogcategory/{id}', [\App\Http\Controllers\Admin\PostController::class,'DeleteBlogCat']);
Route::get('edit/blogcategory/{id}', [\App\Http\Controllers\Admin\PostController::class,'EditBlogCat']);
Route::post('update/blog/category/{id}', [\App\Http\Controllers\Admin\PostController::class,'UpdateBlogCat']);


Route::get('admin/add/post', [\App\Http\Controllers\Admin\PostController::class,'Create'])->name('add.blogpost');
Route::get('admin/all/post', [\App\Http\Controllers\Admin\PostController::class,'index'])->name('all.blogpost');

Route::post('admin/store/post', [\App\Http\Controllers\Admin\PostController::class,'store'])->name('store.post');

Route::get('delete/post/{id}', [\App\Http\Controllers\Admin\PostController::class,'DeletePost']);
Route::get('edit/post/{id}', [\App\Http\Controllers\Admin\PostController::class,'EditPost']);

Route::post('update/post/{id}', [\App\Http\Controllers\Admin\PostController::class,'UpdatePost']);


// ADD Wishlist

Route::get('add/wishlist/{id}', [\App\Http\Controllers\WishlistController::class,'addWishlist']);

// Add to Cart Route
Route::get('add/to/cart/{id}', [\App\Http\Controllers\CartController::class,'AddCart']);
Route::get('check', [\App\Http\Controllers\CartController::class,'check']);
Route::get('product/cart', [\App\Http\Controllers\CartController::class,'ShowCart'])->name('show.cart');
Route::get('remove/cart/{rowId}', [\App\Http\Controllers\CartController::class,'removeCart']);
Route::post('update/cart/item/', [\App\Http\Controllers\CartController::class,'UpdateCart'])->name('update.cartitem');
Route::get('/cart/product/view/{id}', [\App\Http\Controllers\CartController::class,'ViewProduct']);
Route::post('insert/into/cart/', [\App\Http\Controllers\CartController::class,'insertCart'])->name('insert.into.cart');
Route::get('user/checkout/', [\App\Http\Controllers\CartController::class,'Checkout'])->name('user.checkout');
Route::get('user/wishlist/', [\App\Http\Controllers\CartController::class,'wishlist'])->name('user.wishlist');
Route::post('user/apply/coupon/', [\App\Http\Controllers\CartController::class,'Coupon'])->name('apply.coupon');
Route::get('coupon/remove/', [\App\Http\Controllers\CartController::class,'CouponRemove'])->name('coupon.remove');
Route::get('/product/details/{id}/{product_name}', [\App\Http\Controllers\ProductController::class,'ProductView']);
Route::post('/cart/product/add/{id}', [\App\Http\Controllers\ProductController::class,'AddCart']);


/// Blog Post Route

Route::get('blog/post/', [\App\Http\Controllers\BlogController::class,'blog'])->name('blog.post');
Route::get('language/english', [\App\Http\Controllers\BlogController::class,'English'])->name('language.english');
Route::get('language/hindi', [\App\Http\Controllers\BlogController::class,'Arabic'])->name('language.arabic');
Route::get('blog/single/{id}', [\App\Http\Controllers\BlogController::class,'BlogSingle']);

// Payment Step
Route::get('payment/page', [\App\Http\Controllers\CartController::class,'PaymentPage'])->name('payment.step');
Route::post('user/payment/process/', [\App\Http\Controllers\PaymentController::class,'Payment'])->name('payment.process');
Route::post('user/stripe/charge/', [\App\Http\Controllers\PaymentController::class,'StripeCharge'])->name('stripe.charge');

// Product details Page
Route::get('products/{id}', [\App\Http\Controllers\ProductController::class,'ProductsView']);
Route::get('allcategory/{id}', [\App\Http\Controllers\ProductController::class,'CategoryView']);

Auth::routes(['verify'=>true]);
             
