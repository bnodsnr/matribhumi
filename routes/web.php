<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\VidoeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GeneralOptionController;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('detail/{id}', [HomeController::class, 'show'])->name('detail');
Route::get('articles/{id}', [HomeController::class, 'category'])->name('articles');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('authcheck', [LoginController::class, 'authenticate']);
Route::post('logout', [LoginController::class, 'logout']);

Route::group(['middleware' => 'auth'], function () {
  Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
  Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
  /*----------------------------------------------------------------
    roles
  ------------------------------------------------------------------*/
  Route::get('roles', [RoleController::class, 'index']);
  Route::get('add-role', [RoleController::class, 'create'])->name('add-role');
  Route::post('save-roles', [RoleController::class, 'store'])->name('save-roles');
  Route::get('edit-role', [RoleController::class, 'edit'])->name('edit-role');
  Route::post('update-role/{id}', [RoleController::class, 'update'])->name('update-role');

  //permission controller
  Route::get('modules', [PermissionController::class,'index'])->name('modules');
  Route::get('add-modules', [PermissionController::class,'create'])->name('add-modules');
  Route::post('save-modules', [PermissionController::class,'store'])->name('save-modules');
  Route::get('edit-modules', [PermissionController::class,'edit'])->name('edit-modules');
  Route::post('update-modules/{id}', [PermissionController::class,'update'])->name('update-modules');
  Route::get('show-modules/{id}', [PermissionController::class,'show'])->name('show-modules');
  Route::post('assign-userpermission/{id}', [PermissionController::class,'createPermission'])->name('assign-userpermission');
  Route::get('revoke-permission/{userid}/{permission}', [PermissionController::class,'revokeUserPermission'])->name('revoke-permission');

 /*------------------------------------------------------------
    users 
  ---------------------------------------------------------*/
  Route::resource('users', UserController::class);
  Route::get('create',[UserController::class,'create']);
  Route::post('save-user',[UserController::class, 'store'])->name('save-user');
  Route::get('edit-user/{id}',[UserController::class,'edit'])->name('edit-user');
  Route::post('/update-user/{id}', [UserController::class,'update'])->name('update-user');

 /*------------------------------------------------------------
    News Category
  ---------------------------------------------------------*/
  Route::get('category', [CategoryController::class,'index'])->name('category');
  Route::get('create-category',[CategoryController::class,'create'])->name('create-category');
  Route::post('save-category',[CategoryController::class, 'store'])->name('save-category');
  Route::get('edit-category',[CategoryController::class,'edit'])->name('edit-category');
  Route::post('/update-category/{id}', [CategoryController::class,'update'])->name('update-category');

 /*------------------------------------------------------------
    News 
  ---------------------------------------------------------*/
  // Route::get('news', [PostController::class,'index'])->name('news');
  // Route::get('create-news',[PostController::class,'create'])->name('create-news');
  // Route::post('save-news',[PostController::class, 'store'])->name('save-news');
  // Route::get('edit-news/{id}',[PostController::class,'edit'])->name('edit-news');
  // Route::post('/update-news/{id}', [PostController::class,'update'])->name('update-news');

  Route::get('news', [ArticleController::class,'index'])->name('news');
  Route::get('create-news',[ArticleController::class,'create'])->name('create-news');
  Route::post('save-news',[ArticleController::class, 'store'])->name('save-news');
  Route::get('edit-news/{id}',[ArticleController::class,'edit'])->name('edit-news');
  Route::post('/update-news/{id}', [ArticleController::class,'update'])->name('update-news');

 /*------------------------------------------------------------
    Advertisment 
  ---------------------------------------------------------*/
  Route::get('manage-ads', [AdvertisementController::class,'index'])->name('manage-ads');
  Route::get('create-ads',[AdvertisementController::class,'create'])->name('create-ads');
  Route::post('save-ads',[AdvertisementController::class, 'store'])->name('save-ads');
  Route::get('edit-ads/{id}',[AdvertisementController::class,'edit'])->name('edit-ads');
  Route::post('/update-ads/{id}', [AdvertisementController::class,'update'])->name('update-ads');

/*------------------------------------------------------------
    videos
  ---------------------------------------------------------*/
  Route::get('videos', [VidoeController::class,'index'])->name('videos');
  Route::get('create-videos',[VidoeController::class,'create'])->name('create-videos');
  Route::post('save-videos',[VidoeController::class, 'store'])->name('save-videos');
  Route::get('edit-videos/',[VidoeController::class,'edit'])->name('edit-videos');
  Route::post('/update-videos/{id}', [VidoeController::class,'update'])->name('update-videos');
  Route::post('/delete-videos/', [VidoeController::class,'update'])->name('delete-videos');

/*------------------------------------------------------------
    GENERAL OPTION
  ---------------------------------------------------------*/
  Route::get('general-option', [GeneralOptionController::class,'index'])->name('general-option');
  Route::post('reorder-menu', [GeneralOptionController::class,'rearrange'])->name('reorder-menu');
  Route::post('save-general-option', [GeneralOptionController::class,'SaveGeneralOption'])->name('save-general-option');
  Route::post('save-social-media', [GeneralOptionController::class,'saveSocialMediaOption'])->name('save-social-media');
});
