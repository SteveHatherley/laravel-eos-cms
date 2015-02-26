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
    return View::make('admin.home');
});

Route::get('/admin/menus', function()
{
    return View::make('admin.menus');
});
Route::get('/admin/settings', function()
{
    return View::make('admin.settings');
});

Route::get('/admin/pages', function()
{
    return View::make('admin.pages');
});

Route::get('/admin/plugins', function()
{
    return View::make('admin.plugins');
});
Route::get('/admin/chunks', function()
{
    return View::make('admin.chunks');
});
Route::get('/admin/templates', function()
{
    return View::make('admin.templates');
});
Route::get('/admin/layouts', function()
{
    return View::make('admin.layouts');
});
Route::get('/admin/themes', function()
{
    return View::make('admin.themes');
});
Route::get('/admin/css', function()
{
    return View::make('admin.css');
});
Route::get('/admin/typography', function()
{
    return View::make('admin.typography');
});
Route::get('/admin/glyphs', function()
{
    return View::make('admin.glyphs');
});
Route::get('/admin/emojii', function()
{
    return View::make('admin.emojii');
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
