<?php

use App\Http\Controllers\CurriCulumBioDataController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[CurriCulumBioDataController::class,'create'])->name('biodata.create');
Route::post('curriculum/store',[CurriCulumBioDataController::class,'store'])->name('biodata.store');
