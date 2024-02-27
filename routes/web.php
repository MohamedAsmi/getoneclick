<?php

use App\Http\Controllers\ChallansController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\UserDetailController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\SubscriptionController;
use App\Models\Lead;
use App\Models\Subscription;
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

Route::get('/', [HomeController::class,'index']);
Route::get('/dashboard', [HomeController::class,'redirect']);

Route::get('/index', function () {
    return view('index');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/newtest', function () {
    return view('newtest');
});

Auth::routes();
Route::resource('professional', ProfessionController::class);
Route::resource('users', UserController::class);
//  

Route::middleware(['auth','is-admin'])->group(function () {
    Route::resource('admin', AdminController::class);
    Route::resource('video', VideoController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('profile', UserDetailController::class);
    Route::resource('categories', CategoryController::class);
    Route::get('list/video', [VideoController::class,'list'])->name('video.list');
    Route::get('list/project', [ProjectController::class,'list'])->name('project.list');
    Route::get('list/categories', [CategoryController::class,'list'])->name('categories.list');
   

});

Route::middleware(['auth','is-user'])->group(function () {

    Route::resource('user', DashboardController::class);
    Route::resource('user-profile', DashboardController::class);
    Route::resource('leads', LeadController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('subscribe', SubscriptionController::class);
    

});