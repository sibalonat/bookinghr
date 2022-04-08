<?php

// use App\Http\Controllers\BookingController;
use App\Http\Livewire\CreateBooking;
use App\Http\Livewire\EmployeeCreation;
use App\Http\Livewire\ServiceCreation;
use App\Http\Livewire\ShowBooking;
// use App\Models\Employee;
// use App\Models\Service;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/employee/create', EmployeeCreation::class)->name('service.create');
Route::get('/employee/{employee}/create', ServiceCreation::class)->name('employee.attach');
// Route::get('/service/create', ServiceCreation::class)->name('service.create');
// Route::get('/service/{service}/create', EmployeeCreation::class)->name('employee.attach');

Route::get('/bookings/create', CreateBooking::class)->name('book.service');
Route::get('/bookings/{appointment:uuid}', ShowBooking::class)->name('booking.show');





require __DIR__.'/auth.php';
