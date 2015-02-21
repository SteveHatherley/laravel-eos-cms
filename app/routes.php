<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function()
{
	return View::make('hello');
});


// Route::get('/login', function(){
//     return View:make('admin.login')
// });

Route::get('/admin/login', function()
{
    return View::make('admin.login');
});

// @TODO: Move this to login protected area after admin dashboard has been mocked
Route::get('/admin/home', function()
{
    return View::make('admin.dashboard');
});

Route::group(array('prefix' => 'admin', 'before' => 'auth'), function(){
        

        Route::get('/', function()
        {
            return View::make('admin.dashboard');
        });

        Route::get('/logout', function()
        {
            return View::make('admin.logout');
        });
        
});
