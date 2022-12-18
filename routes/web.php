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

Route::get('/', function () {
	return view('site.index');
})->name('home');
Route::get('/news', function () {
	return view('site.news.index');
})->name('news');
Route::get('/about', function () {
	return view('site.about.index');
})->name('about');
Route::get('/contact', function () {
	return view('site.contact.index');
})->name('contact');
Route::get('/project', function () {
	return view('site.project.index');
})->name('project');

Route::get('/news/{slug}', function ($slug) {
	return  view('site.news.card', [
		'slug' => $slug
	]);
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {

	Route::group(['middleware' => ['role:admin|manager']], function () {
		Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');

		Route::group(['middleware' => ['role:admin']], function () {
			Route::resource('news', App\Http\Controllers\Admin\NewsController::class);
			Route::resource('users', App\Http\Controllers\Admin\UserController::class);
			Route::resource('status-project', App\Http\Controllers\Admin\StatusProjectController::class);
			Route::resource('city', App\Http\Controllers\Admin\CityController::class);
			Route::resource('country', App\Http\Controllers\Admin\CountryController::class);
			Route::resource('type-real', App\Http\Controllers\Admin\TypeRealController::class);
			Route::resource('partner', App\Http\Controllers\Admin\PartnerController::class);
		});

		Route::resource('project', App\Http\Controllers\Admin\ProjectController::class);
	});
});
