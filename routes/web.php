<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\Auth\AuhController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\TenantAuthController;
use App\Http\Controllers\Auth\LandlordAuthController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// WEBSITE ROUTES
Route::get('/',[WebController::class,'index'])->name('index');
Route::get('/about',[WebController::class,'about'])->name('about');
Route::get('/help',[WebController::class,'help'])->name('help');
Route::get('/blog',[WebController::class,'blog'])->name('blog');
Route::get('/blogdescription',[WebController::class,'blogdescription'])->name('blogdescription');
Route::get('/faqs',[WebController::class,'faqs'])->name('faqs');
Route::get('/contact',[WebController::class,'contact'])->name('contact');
Route::get('/services',[WebController::class,'services'])->name('services');
Route::get('/seekingahome',[WebController::class,'seekingahome'])->name('seekingahome');
Route::get('/rentahome',[WebController::class,'rentahome'])->name('rentahome');
Route::get('/info',[WebController::class,'info'])->name('info');
// guest
Route::get('/login',[WebController::class,'login'])->name('login');
Route::get('/register',[WebController::class,'register'])->name('register');
Route::post('/register/store',[AuhController::class,'register'])->name('register.store');
Route::post('/login/store',[AuhController::class,'login'])->name('login.store');
Route::post('/logout',[AuhController::class,'logout'])->name('logout');

// Dashboard Routes
Route::prefix('tenant')->name('tenant.')->group(function () {
    Route::middleware(['role:tenant'])->group(function () {
    Route::get('/dashboard',[TenantAuthController::class,'dashboard'])->name('dashboard');
    Route::get('/properties',[DashboardController::class,'properties'])->name('properties');
    Route::get('/propertieslistings',[DashboardController::class,'propertieslistings'])->name('propertieslistings');
    Route::get('/applyhistory',[DashboardController::class,'applyhistory'])->name('applyhistory');
    Route::get('/profile',[DashboardController::class,'profile'])->name('profile');
    Route::get('/wishlist',[DashboardController::class,'wishlist'])->name('wishlist');
    Route::get('/notifications',[DashboardController::class,'notifications'])->name('notifications');
    Route::get('/messages',[DashboardController::class,'messages'])->name('messages');
    // profile
    Route::get('/profile',[TenantAuthController::class,'profile'])->name('profile');
    Route::post('/profile/update', [TenantAuthController::class, 'updateProfile'])->name('profile.update');
    //  Bank Info
    Route::post('/bank', [TenantAuthController::class, 'bank'])->name('bank');
});
});


// Landlord Routes
Route::prefix('landlord')->name('landlord.')->group(function () {
    Route::middleware(['role:land_lord'])->group(function () {
    Route::get('/dashboard',[LandlordAuthController::class,'dashboard'])->name('dashboard');
    Route::get('/properties',[LandlordAuthController::class,'properties'])->name('properties');
    Route::get('/add_property',[LandlordAuthController::class,'add_property'])->name('add_property');
    // profile
    Route::get('/profile',[DashboardController::class,'profile'])->name('profile');
    Route::get('/profile',[LandlordAuthController::class,'profile'])->name('profile');
    Route::post('/profile/update', [LandlordAuthController::class, 'updateProfile'])->name('profile.update');
    // Profile end
    });
});


