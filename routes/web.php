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

// Route::get('/', function () {
//     return view('welcome');
// });


//Route login with facebook
Route::get('/login','UserController@getLoginForm')->name('getlogin');
Route::post('/login', 'UserController@doLogin')->name('doLogin');

Route::get('/', 'HomeController@getHomePage')->name('home');
Route::get('job-detail', 'HomeController@getSinglePage')->name('single');

// Route::get('/monitor', 'HomeController@getMonitor')->name('Monitor');
Route::group(['middleware' => ['IsAdmin']], function () {
	Route::prefix('admin')->group(function () {
	    Route::get('/', 'AdminController@getAdmin');
	    Route::get('/job/list', 'JobController@getList')->name('postList');
	    Route::get('/create/job', 'JobController@getPost')->name('getPost');
	    Route::post('/job/add-new', 'JobController@AddPost')->name('addJob');
	    Route::get('/job/edit/{id}', 'JobController@getEditPost')->name('getPostEdit');
	    Route::post('/job/edit', 'JobController@updatePost')->name('updatePost');
	   	Route::get('/post/delete', 'JobController@Delete')->name('deletePost');


	   	// Route::get('/service/list', 'JobController@getService')->name('getServicePackage');
	   	Route::get('/our-service/list', 'JobController@getOurService')->name('getOurService');
	   	// // Route::get('/service/delete', 'JobController@DeleteService')->name('DeleteService');

	   	Route::get('agent/list', "AgentController@getAgent")->name('getAgent');
	   	Route::get('agent/add-new', "AgentController@getAgentForm")->name('getAgentForm');
	   	Route::post('agent/add-new', "AgentController@createAgent")->name('createAgent');

	   	Route::get('/category', 'JobController@getCategory')->name('categoryList');
	   	Route::post('/category/edit', 'JobController@EditCategory')->name('getEdit');
	   	Route::get('/app/category', 'JobController@getAppCategory')->name('categoryListApp');
	   	Route::post('/app/category/add', 'JobController@addCategory')->name('categoryAdd');
	   	// Route::post('/app/category/', 'JobController@addCategory')->name('categoryAdd');
	   	Route::get('/app/category/delete', 'JobController@catDelete')->name('deleteCat');

	   	Route::get('/user/list', 'UserController@getUserList')->name('getUserList');
	   	Route::get('/user/add', 'UserController@getUserForm')->name('getUserForm');
	   	Route::post('/user/add', 'UserController@addUserData')->name('addUser');
	   	Route::get('/user/edit/{id}', 'UserController@editUserData')->name('getUserFormEdit');
	   	Route::post('/user/edit', 'UserController@updateUserData')->name('editUser');
	   	Route::get('/user/delete', 'UserController@destroy')->name('delUser');
		Route::post('/user/signout', 'UserController@signout')->name('logout'); 
	});
});





