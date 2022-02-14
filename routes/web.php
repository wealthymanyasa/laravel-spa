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
//route for inserting portfolio cartegories
Route::post('addPc', [crudController::class, 'insertData']);
//route for getting a portfolio
Route::get('new-portfolio', [adminController::class, 'newPortfolio']);
//route for inserting portfolios
Route::post('addPortfolio', [crudController::class, 'insertData']);
//route for getting clients
Route::get('clients', [adminController::class, 'clients']);
//route for inserting clients
Route::post('addClient', [crudController::class, 'insertData']);
//route to delete a client
Route::get('deleteclient/{id}', [adminController::class, 'deleteClient']);



// <!--/Portfolio Filters -->
// @foreach($portfolio as $port)
//          <!-- Portfolio Item -->
//  <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;"
//   class="portfolio-item one-four {{$port->class}} android isotope-item">
//      <div class="portfolio_img"> 
//          <img src="{{url('public/portfolios')}}/{{$port->image}}"
//           > 
//      </div>
//      <div class="item_overlay">
//          <div class="item_info">
//              <h4 class="project_name">{{$port->title}}</h4>
//          </div>
//      </div>
//  </div>
//  <!--/Portfolio Item -->
//  @endforeach

// </div>
// <!--/Portfolio Wrapper -->

// <!--/Portfolio Filters -->

// <div class="portfolio_btm"></div>


// <div id="project_container">
// <div class="clear"></div>
// <div id="project_data"></div>
// </div>


// </section>
// <!--/Portfolio -->