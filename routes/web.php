<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\AgmController;
use App\Http\Controllers\TubController;
use App\Http\Controllers\SubscriptionController;
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

Route::get('/', function () {
    return view('dashboard.view');
});

// Route
Route::get('/dashboard', [dashboardController::class, 'index']);
Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard.index');

// Route
Route::get('/dashboard/about', [aboutController::class, 'index']);
Route::get('/dashboard/about', [aboutController::class, 'index'])->name('about.index');

//enquiry
Route::get('/dashboard/enquiry', [enquiryController::class, 'showForm'])->name('enquiry.form');
Route::post('/dashboard/enquiry', [enquiryController::class, 'sendEmail'])->name('enquiry.send');

// Route
Route::get('/dashboard/support', [supportController::class, 'index']);
Route::get('/dashboard/support', [supportController::class, 'index'])->name('support.index');

// Route
Route::get('/dashboard/agm', [agmController::class, 'index']);
Route::get('/dashboard/agm', [agmController::class, 'index'])->name('agm.index');

// Route
Route::get('/dashboard/tub', [tubController::class, 'index']);
Route::get('/dashboard/tub', [tubController::class, 'index'])->name('tub.index');


Route::get('/dashboard/subscription', [SubscriptionController::class, 'showForm'])->name('subscription.form');
Route::post('/dashboard/subscription', [SubscriptionController::class, 'sendEmail'])->name('subscription.send');