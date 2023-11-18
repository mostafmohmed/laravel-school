<?php

use App\Http\Controllers\classromcontroller;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

// Route::group(
//     [
//         'prefix' => LaravelLocalization::setLocale(),
//         'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
//     ], function(){ 
        
//         return view('dashboard');
//     });




Route:: group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::get('/', function()
{
    return view('welcome');
});
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	// Route::get('/', function()
	// {
	// 	return view('dashboard');
	// });
    // Route::resource('grade', 'GradeController');
   
	// Route::get('test',function(){
	// 	return View::make('test');
	// });

    Auth::routes();
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
	
	Route::resource('classroom',classromcontroller::class);
Route::resource('Grade',GradeController::class);
Route::resource('section',SectionController::class);



});

// Route::group(
//     [
//         'prefix' => LaravelLocalization::setLocale(),
//         'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
//     ], function(){ //...
//         return view('dashboard');
//     });




