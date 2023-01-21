<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DonorController;
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
    return view('welcome');
});


Route::resource('donor', DonorController::class);

// Route::get('donor/edit', Controller::class);
// Route::get('donor/edit', Controller::class, 'editIndex')->name('edit');
// Route::get('/list', [App\Http\Controllers\DonorController::class, 'edit'])->name('donor.edit');

// Route::get('/list', function () {
//     return view('edit');
// })->name('allListDonor');