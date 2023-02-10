<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\TransportationController;
use App\Http\Controllers\TransportationTypeController;
use App\Models\Booking;
use App\Models\Operator;
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



Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::get('registration', [AuthController::class, 'registration'])->name('registration');
Route::post('registration', [AuthController::class, 'customRegistration'])->name('registration');

Route::group(['prefix' => 'admin'] ,function(){
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('passenger', [PassengerController::class, 'index'])->name('admin.passenger');

    Route::get('passenger/pdf', [PassengerController::class, 'exportPDF'])->name('admin.passenger.pdf');
    Route::get('passenger/xlsx', [PassengerController::class, 'exportXlsx'])->name('admin.passenger.xlsx');

    Route::get('operator', [OperatorController::class, 'index'])->name('admin.operator');

    Route::get('booking', [BookingController::class, 'index'])->name('admin.booking');

    Route::get('transportation', [TransportationController::class, 'index'])->name('admin.transportation');

    Route::get('transportation-type', [TransportationTypeController::class, 'index'])->name('admin.transportation-type');

    Route::get('route', [RouteController::class, 'index'])->name('admin.route');

    Route::get('level', [LevelController::class, 'index'])->name('admin.level');
});


Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
