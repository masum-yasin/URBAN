<?php

use App\Http\Controllers\CurriCulumBioDataController;
use App\Http\Controllers\PersonalInformationController;
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

// Route::get('/',[CurriCulumBioDataController::class,'create'])->name('biodata.create');
// Route::post('curriculum/store',[CurriCulumBioDataController::class,'store'])->name('biodata.store');




Route::get('/',[PersonalInformationController::class,'index'])->name('biodata.index');
Route::get('curriculum/create',[PersonalInformationController::class,'create'])->name('biodata.create');
Route::post('curriculum/store',[PersonalInformationController::class,'storePersonalInfo'])->name('biodata.storePersonalInfo');
Route::get('curriculum/edit/{id}',[PersonalInformationController::class,'edit'])->name('biodata.edit');
Route::PUT('curriculum/update/{id}',[PersonalInformationController::class,'update'])->name('biodata.update');
