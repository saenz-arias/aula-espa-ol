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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\Controller::class, 'index'])->name('index');
Route::get('/online', [App\Http\Controllers\OnlineController::class, 'index'])->name('online');
Route::get('/cursos-espanol-guayaquil', [App\Http\Controllers\EspanolController::class, 'index'])->name('espanol');

// Route::get('/learn-spanish-online', function () {
//     return redirect('/online');
// });

Route::get('/learn-spanish-online', function () {
    return redirect('https://aula-ec-online.com/learn-spanish-online');
});

Route::get('/online', function () {
    return redirect('https://aula-ec-online.com/learn-spanish-online');
});
