<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
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
//homepage route
Route::get('/', 'App\Http\Controllers\frontController@index');
//admin route
Route::get('admin', 'App\Http\Controllers\adminController@index');
//website settings route
Route::get('setups', 'App\Http\Controllers\adminController@setups');
//crud route
Route::post('addSettings', 'App\Http\Controllers\crudController@insertData');
//categories route
Route::get('categories', 'App\Http\Controllers\adminController@categories');
//route for adding category
Route::post('addCategory', 'App\Http\Controllers\crudController@insertdata');
//route to delete a category
Route::get('deleteCategory/{id}', 'App\Http\Controllers\adminController@deleteCategory');
//route to edit a category
Route::get('editCategory/{id}', 'App\Http\Controllers\adminController@editCategory');
//route to update a category
Route::post('updateCategory/{id}', 'App\Http\Controllers\crudController@updateData');
//route to add a new post
Route::get('new-post', 'App\Http\Controllers\adminController@newPost');
//route to cater for addPost
Route::post('addPost', 'App\Http\Controllers\crudController@insertData');
// gettig posts route
Route::get('all-posts', 'App\Http\Controllers\adminController@allPosts');
// route for editing post
Route::get('editPost/{id}', 'App\Http\Controllers\adminController@editPost');
//route to update a post
Route::post('updatePost/{id}', [crudController::class, 'updateData']);
//route to delete a post
Route::get('deletePost/{id}', [adminController::class, 'deletePost']);
//route for getting a service
Route::get('new-service', [adminController::class, 'newService']);
//route for inserting services
Route::post('addService', [crudController::class, 'insertData']);
//route for getting all services
Route::get('all-services', [adminController::class, 'allServices']);
// route for editing Service
Route::get('editService/{id}', [adminController::class, 'editService']);
//route to update a Service
Route::post('updateService/{id}', [crudController::class, 'updateData']);
//route to delete a Service
Route::get('deleteService/{id}', [adminController::class, 'deleteService']);
//route for getting portfolio cartegories
Route::get('portcats', [adminController::class, 'portcats']);