<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController as Admin;
use App\Http\Controllers\LoginController as Login;
use App\Http\Controllers\RegisterController as Register;
use App\Http\Controllers\ProfileController as Profile;
use App\Http\Controllers\HomeController as Home;
use App\Http\Controllers\ProductController as Product;
use App\Http\Controllers\CategoryController as Category;
use App\Http\Controllers\PaymentController as Payment;
use App\Http\Controllers\OfferController as Offer;


Route::get('/header', function () {
    return view('layouts/header');
});
Route::get('/footer', function () {
    return view('layouts/footer');
});
Route::get('/', [Home::class,'landingpage'])->name('landingpage');
Route::get('/about',[Home::class,'about']);
Route::get('/contact',[Home::class,'contact']);
Route::get('/shipping',[Home::class,'shipping']);
Route::get('/needhelp',[Home::class,'needhelp']);

// PRODUCT
Route::get('/product',[Home::class,'product']);
Route::get('/product/sweet-grocery',[Product::class,'product_sweetgrocery']);

// CART
Route::get('/cart', function () {
    return view('pages/cart');
});

// BLOG
Route::get('/blog',[Home::class,'blog']);
Route::get('/blogmin', function(){
    return view(('pages/blogmin'));
});

// PROFILE
Route::get('/profile',[Profile::class, 'getProfileForm']);
Route::post('/profile',[Profile::class, 'postProfileForm']);
Route::post('/changepwd',[Profile::class, 'postNewPassword']);

// LOGIN
Route::get('/login',[Login::class, 'getLoginform']);
Route::post('/login',[Login::class, 'postLoginform']);
// REGISTER
Route::get('/register',[Register::class, 'getRegisterform']);
Route::post('/register',[Register::class, 'postRegisterform']);

//--------------------------------ADMIN----------------------------------------//
Route::get('/adminhome',[Admin::class,'AdminControllerPage'])->name('adminhome');
Route::get('/admin',[Admin::class,'LoginSuccess']);
Route::get('/feedback',[Admin::class,'FeedbackPage']);
Route::get('/customer',[Admin::class,'CustomerPage']);
Route::get('/lastestorder',[Admin::class,'LatestOrderPage']);


// PRODUCT
Route::get('/addproduct',[Product::class,'AddProduct']);
Route::post('/addproduct',[Product::class,'SubmitProduct']);
Route::get('/allproduct',[Product::class,'AllProduct']);
Route::Post('/allproduct',[Product::class,'RequestEditCategory']);
Route::get('/editproduct',[Product::class,'EditProduct']);
Route::post('/editproduct',[Product::class,'PostEditProduct']);

Route::get('/importstock',[Product::class,'ImportStock']);
Route::post('/importstock',[Product::class,'SubmitImportStock']);
Route::get('/allstock',[Product::class,'AllStock']);
Route::post('/editstock',[Product::class,'EditStock']);

Route::get('/importproduct',[Product::class, 'showImportProduct']);
Route::post('/importproduct',[Product::class, 'postImportProduct']);
Route::get('/editimportproduct',[Product::class, 'showEditimportproduct']);
Route::post('/editimportproduct',[Product::class, 'Editimportproduct']);

// CATEGORY
Route::get('/addcategory',[Category::class, 'ShowAddCategory']);
Route::post('/addcategory',[Category::class, 'AddNewCategory']);

Route::get('/allcategory',[Category::class,'ShowAllCategory']);
Route::post('/allcategory',[Category::class,'RequestEditCategory'])->name('allcategory');
Route::get('/editcategory',[Category::class,'EditCategory']);

// PAYMENT
Route::get('/payment',[Payment::class,'ShowAllPayment']);
Route::post('/payment',[Payment::class,'AddPayment']);

// OFFER
Route::get('/offer',[Offer::class,'ShowAllOffer']);
Route::post('/offer',[Offer::class,'AddOffer']);
// PROFILE
Route::get('/adminprofile',[Admin::class,'showAdminProfile']);
Route::post('/adminprofile',[Admin::class,'postAdminProfile']);

?>