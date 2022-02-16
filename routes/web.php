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
Route::get('/', [frontController::class  , 'index']);
//admin dashboard route
Route::get('admin', [adminController::class  , 'index']);
//website settings route
Route::get('setups', [adminController::class  , 'setups']);
//crud route
Route::post('addSettings', [crudController::class , 'insertData']);

//categories route
Route::get('categories', [adminController::class  , 'categories']);
//route for adding category
Route::post('addCategory', [crudController::class , 'insertdata']);
//route to delete a category
Route::get('deleteCategory/{id}', [adminController::class  , 'deleteCategory']);
//route to edit a category
Route::get('editCategory/{id}', [adminController::class  , 'editCategory']);
//route to update a category
Route::post('updateCategory/{id}', [crudController::class , 'updateData']);

//route to add a new post
Route::get('new-post', [adminController::class , 'newPost']);
//route to cater for addPost
Route::post('addPost', [crudController::class , 'insertData']);
// gettig posts route
Route::get('all-posts', [adminController::class, 'allPosts']);
// route for editing post
Route::get('editPost/{id}', [adminController::class,'editPost']);
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
//route for inserting portfolio cartegories
Route::post('addPc', [crudController::class, 'insertData']);
//route for getting a portfolio
Route::get('new-portfolio', [adminController::class, 'newPortfolio']);
//route for inserting portfolios
Route::post('addPortfolio', [crudController::class, 'insertData']);
//route for getting all portfolios
Route::get('all-portfolio', [adminController::class, 'allPortfolios']);
//route to delete a portfolio
Route::get('deletePortfolio/{id}', [adminController::class, 'deletePortfolio']);

//route for getting clients
Route::get('clients', [adminController::class, 'clients']);
//route for inserting clients
Route::post('addClient', [crudController::class, 'insertData']);
// route for editing client
Route::get('editclient/{id}', [adminController::class, 'editClient']);
//route to delete a client
Route::get('deleteclient/{id}', [adminController::class, 'deleteClient']);
//route to update a client
Route::post('updateClient/{id}', [crudController::class, 'updateData']);
