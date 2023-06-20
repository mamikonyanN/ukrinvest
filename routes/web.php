<?php

use App\Http\Controllers\AboutDescriptionController;
use App\Http\Controllers\AppealController;
use App\Http\Controllers\CarouselElementController;
use App\Http\Controllers\ContactsDescriptionController;
use App\Http\Controllers\MissionDescriptionController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PressController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectDescriptionController;
use App\Http\Controllers\ProjectsBannerController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

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

Auth::routes(['confirm' => false, 'email' => false, 'reset' => false]);

Route::get('/', [PageController::class, 'main'])->name('main');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');

Route::post('/appeal', [AppealController::class, 'store'])->name('appeal');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
  Route::resource('carouselElement', CarouselElementController::class)->only(['index', 'store', 'update', 'destroy']);
  Route::resource('mission', MissionDescriptionController::class)->only(['update']);
  Route::resource('service', ServiceController::class)->only(['index', 'store', 'update', 'destroy']);
  Route::resource('projectDescription', ProjectDescriptionController::class)->only(['update']);
  Route::resource('project', ProjectController::class)->only(['index', 'store', 'update', 'destroy']);
  Route::resource('press', PressController::class)->only(['index', 'store', 'update', 'destroy']);
  Route::resource('news', NewsController::class)->only(['index', 'store', 'update', 'destroy']);
  Route::resource('contacts', ContactsDescriptionController::class)->only(['update']);
  Route::resource('banner', ProjectsBannerController::class)->only(['update']);
  Route::resource('about', AboutDescriptionController::class)->only(['update']);
});
