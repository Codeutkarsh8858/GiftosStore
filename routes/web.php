<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/allproduct',[UserController::class,'indexPage'])->name('index');
Route::get('/',[UserController::class,'latestProduct'])->name('user.latestproduct');
Route::get('/why-us',[UserController::class,'whyUs'])->name('user.whyus');
Route::get('/contact-us',[UserController::class,'contactUs'])->name('user.contactus');
Route::post('/contact-us',[UserController::class,'contactPost'])->name('user.contactpost');
Route::get('/search_product_user',[UserController::class,'searchProductUser'])->name('user.searchproduct');
Route::get('/product_detail/{id}',[UserController::class,'productDetails'])->name('user.productdetails');

Route::middleware(['auth'])->group(function () {
    Route::get('/addtocart/{id}',[UserController::class,'addToCart'])->name('user.productaddtocart');
    Route::get('/viewcart',[UserController::class,'viewCart'])->name('user.viewcart');
    Route::get('/delete_cart_data/{id}',[UserController::class,'deleteCartData'])->name('user.delcartdata');
    Route::post('/confirmorder',[UserController::class,'confirmOrder'])->name('user.confirmorder');
    Route::get('/my_order',[UserController::class,'myOrder'])->name('My_Order');
    Route::get('/dashboard', [UserController::class,'index'])->name('dashboard');
    Route::get('/stripe',[UserController::class,'stripe'])->name('user.stripe');
    Route::post('/stripe',[UserController::class,'stripePost'] )->name('stripe.post');
   

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','admin'])->group(function () {

    Route::get('/admin_dashboard', [AdminController::class,'adminCount'])->name('admin.dashboard');
    //category
    Route::get('/add_category',[AdminController::class,'addCategory'])->name('admin.addcategory');
    Route::post('/add_category',[AdminController::class,'postAddCategory'])->name('admin.postaddcategory');
    Route::get('/view_category',[AdminController::class,'viewCategory'])->name('admin.viewcategory');
    Route::get('/delete_category/{id}',[AdminController::class,'deleteCategory'])->name('admin.deletecategory');
    Route::get('/update_category/{id}',[AdminController::class,'updateCategory'])->name('admin.updatecategory');
    Route::post('/update_category/{id}',[AdminController::class,'postUpdateCategory'])->name('admin.postupdatecategory');
    // product
    Route::get('/add_product',[AdminController::class,'addProduct'])->name('admin.addproduct');
    Route::post('/add_product',[AdminController::class,'postAddProduct'])->name('admin.postaddproduct');
    Route::get('/view_product',[AdminController::class,'viewProduct'])->name('admin.viewproduct');
    Route::get('/delete_product/{id}',[AdminController::class,'deleteProduct'])->name('admin.deleteproduct');
    Route::get('/update_product/{id}',[AdminController::class,'updateProduct'])->name('admin.updateproduct');
    Route::post('/update_product/{id}',[AdminController::class,'postUpdateProduct'])->name('admin.postupdateproduct');
    Route::get('/product_details/{id}',[AdminController::class,'productDetail'])->name('admin.productdetail');
    Route::post('/search_product',[AdminController::class,'searchProduct'])->name('admin.searchproduct');
    // order
    Route::get('/vieworder',[AdminController::class,'viewOrder'])->name('admin.vieworder');
    Route::get('/delete_order/{id}',[AdminController::class,'deleteOrder'])->name('admin.deleteorder');
    Route::post('/statuscheck/{id}',[AdminController::class,'statusCheck'])->name('admin.statuscheck');
    Route::get('/downloadpdf/{id}',[AdminController::class,'downloadPdf'])->name('admin.downloadpdf');
});



require __DIR__.'/auth.php';
