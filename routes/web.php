<?php

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
// 


