<?php
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

use App\Product;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

Route::get('/product/{name}',function($name){
    return Product::search($name)->get();
});

Route::get('/mail',function(){
    $data=['body'=>"hldafh;fhasf;ldfefcdfj"];
    Mail::send('emails',$data,function($message){
        $message->from("abc@gmail.com","lfasfh");
        $message->to('kashyapashish6665@gmail.com');
        $message->subject('fklgfhfgklhgkfghfg');
    });
});
// // User Auth
// Route::post('logout','Front\UserController@logout')->name('userlogout');
// Route::livewire('/login', 'front.auth.login')
//     ->layout('layouts.front.masterlayout')->name('login');
// Route::livewire('/register', 'front.auth.register')
//     ->layout('layouts.front.masterlayout')->name('registerForm');
// Route::livewire('/forget-form', 'front.auth.forget')
//     ->layout('layouts.front.masterlayout')->name('forgetForm');
Auth::routes(['verify'=>true]);
Route::get('/price','Front\UserController@priceRange')->name('price');
// Site Route

Route::livewire('/', 'front.homepage')->layout('layouts.front.masterlayout')->name('home');
Route::livewire('/product-store/{category:slug?}', 'front.product-store')
    ->layout('layouts.front.masterlayout')->name('productstore');
Route::livewire('/product-details/{product}', 'front.product-details')
    ->layout('layouts.front.masterlayout')->name('productdetails');
Route::livewire('/register', 'front.auth.register')
    ->layout('layouts.front.masterlayout')->name('register');
Route::livewire('/forget', 'front.auth.forget')
    ->layout('layouts.front.masterlayout')->name('forget');
Route::livewire('/cart', 'front.product-cart')
    ->layout('layouts.front.masterlayout')->name('cart');
Route::livewire('/checkout/{product?}', 'front.checkout')
    ->layout('layouts.front.masterlayout')->name('checkout')->middleware('auth');
Route::livewire('/search', 'front.search-page')
    ->layout('layouts.front.masterlayout')->name('search');
Route::livewire('/wishlist', 'front.wishlist')
    ->layout('layouts.front.masterlayout')->name('wishlist');
Route::livewire('/contact', 'front.auth.contact')
    ->layout('layouts.front.masterlayout')->name('contact'); 
Route::livewire('/search', 'front.search-page')
    ->layout('layouts.front.masterlayout')->name('search'); 
Route::livewire('/user-profile', 'front.user-profile')
    ->layout('layouts.front.masterlayout')->name('userprofile')->middleware('verified'); 

// Route::view('/search-page','front.search-page')->name('search-page');


// Payment Route
Route::post('/payment/status', 'Payment\OrderController@paymentCallback')->middleware('prevent-back-history');
Route::post('/payment', 'Payment\OrderController@order')->name('payment')->middleware('auth');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

