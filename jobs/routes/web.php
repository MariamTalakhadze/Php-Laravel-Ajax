<?php
use App\Http\Controllers\aboutController;

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

Route::get('/', 'selectForHomeController@index');
// Route::get('/about', 'postajobcontroller@read' );
Route::get('/about', function () {
    return view('homepage.aboutus');
});
Route::get('/contact', function () {
    return view('homepage.contact');
});
Route::get('/index', function () {
    return view('homepage.sections');
});
Route::get('/admin123', 'admincontroller@index');
Route::get('/admin123/{id}', 'admincontroller@confirm');
Route::post('/admin123/{id}', 'admincontroller@confirm');
Route::get('/admin123/edit/{id}', 'admincontroller@edit');
Route::post('/admin123/edit/{id}', 'admincontroller@edit');
Route::get('/admin123/delete/{id}', 'admincontroller@delete');
Route::post('/admin123/delete/{id}', 'admincontroller@delete');
Route::get('/admin123/edita/{id}', 'admincontroller@show');
Route::post('/admin123/edita/{id}', 'admincontroller@show');
// Route::post('/post', 'aboutcontroller');
 Route::get('/post', 'aboutcontroller@index');
 Route::post('/post', 'aboutcontroller@store');
 Route::get('/do', 'testcontroller@index');
 Route::post('/do', 'testcontroller@generate');