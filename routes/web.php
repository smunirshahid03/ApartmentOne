<?php

use App\Http\Controllers\WebController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

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
Route::get('/login',[WebController::class,'login'])->name('login');
Route::get('/register',[WebController::class,'register'])->name('register');
