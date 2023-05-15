<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'index']);

Route::post('/login',  [IndexController::class, 'login'])->name('login');
Route::get('/login',  [IndexController::class, 'login'])->name('login');
Route::get('/admin',  [IndexController::class, 'admin'])->name('admin');
Route::get('/logout',  [IndexController::class, 'logout'])->name('logout');
Route::get('/editslider',  [IndexController::class, 'editslider'])->name('editslider');
Route::get('/editslider/add',  [IndexController::class, 'addslider'])->name('addslider');
Route::post('/editslider/add',  [IndexController::class, 'addslider'])->name('addslider');
Route::post('/editslider',  [IndexController::class, 'editslider'])->name('editslider');

Route::get('/editslider/{id}',  [IndexController::class, 'showslider'])->name('showslider');

Route::get('/editslider/delete/{id}',  [IndexController::class, 'deleteslider'])->name('deleteslider');


Route::get('/statics',  [IndexController::class, 'statics'])->name('statics');

Route::get('/about',  [IndexController::class, 'about'])->name('about');
Route::post('/about',  [IndexController::class, 'about'])->name('about');

Route::get('/courses',  [IndexController::class, 'courses'])->name('courses');
Route::get('/courses/{id}',  [IndexController::class, 'editcourses'])->name('editcourses');
Route::post('/courses/{id}',  [IndexController::class, 'editcourses'])->name('editcourses');
Route::get('/course/add',  [IndexController::class, 'addcourses'])->name('addcourses');
Route::post('/course/add',  [IndexController::class, 'addcourses'])->name('addcourses');
Route::get('/courses/delete/{id}',  [IndexController::class, 'deletecourses'])->name('deletecourses');
Route::get('/editprice',  [IndexController::class, 'editprice'])->name('editprice');
Route::post('/editprice',  [IndexController::class, 'editprice'])->name('editprice');
Route::get('/editreviews',  [IndexController::class, 'editreviews'])->name('editreviews');
Route::post('/editreviews',  [IndexController::class, 'editreviews'])->name('editreviews');

Route::get('/calandar',  [IndexController::class, 'calandar'])->name('calandar');
Route::get('/addcalendar',  [IndexController::class, 'addcalendar'])->name('addcalendar');
Route::post('/addcalendar',  [IndexController::class, 'addcalendar'])->name('addcalendar');
Route::get('/stat_clear',  [IndexController::class, 'stat_clear'])->name('stat_clear');


Route::get('/courses/view/{id}',  [IndexController::class, 'coursesview'])->name('coursesview');

