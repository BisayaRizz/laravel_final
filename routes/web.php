<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\boxersController;
use App\Http\Controllers\recordsController; 
use App\Http\Controllers\statsController; 
use App\Http\Controllers\ratesController;
use App\Http\Controllers\heavydivisionsController;
use App\Http\Controllers\weltersController;
use App\Http\Controllers\superbantamsController;
use App\Models\superbantams;
use App\Models\welters;
use App\Models\heavydivisions;
use App\Models\rates;
use App\Models\boxers;
use App\Models\records;
use App\Models\stats;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('guest')->group(function(){
    Route::get('/dashboard', function () {
        return view('guests.guests_dashboard');
    })->name('guests.dashboard');
     
    Route::get('/boxers', [boxersController::class, 'guest_boxers'])->name('guests.boxers');
    Route::get('/boxers_details{id}', [boxersController::class, 'guest_show_boxers'])->name('guests.boxer_details');
    Route::get('/records', [recordsController::class, 'guest_records'])->name('guests.records');
    Route::get('/records_details{id}', [recordsController::class, 'guest_show_records'])->name('guests.records_details');
    Route::get('/stats', [statsController::class, 'guests_stats'])->name('guests.stats');
    Route::get('/stats_details{id}', [statsController::class, 'guest_show_stats'])->name('guests.stats_details');
    Route::get('/rates', [ratesController::class, 'guests_rates'])->name('guests.rates');
    Route::get('/rates_details{id}', [ratesController::class, 'guest_show_rates'])->name('guests.rates_details');
    Route::get('/heavydivisions', [heavydivisionsController::class, 'guests_heavydivisions'])->name('guests.heavydivisons');
    Route::get('/heavydivisions_details{id}', [heavydivisionsController::class, 'guest_show_heavydivisions'])->name('guests.heavydivisions_details');
    Route::get('/welters', [weltersController::class, 'guests_welters'])->name('guests.welters');
    Route::get('/welters_details{id}', [weltersController::class, 'guest_show_welters'])->name('guests.welters_details');
    Route::get('/superbantams', [superbantamsController::class, 'guests_superbantams'])->name('guests.superbantams');
    Route::get('/superbantams_details{id}', [superbantamsController::class, 'guest_show_superbantams'])->name('guests.superbantams_details');
});



Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
 
    Route::controller(boxersController::class)->prefix('boxers')->group(function () {
        Route::get('', 'index')->name('boxers');
        Route::get('create', 'create')->name('boxers.create');
        Route::post('store', 'store')->name('boxers.store');
        Route::get('show/{id}', 'show')->name('boxers.show');
        Route::get('edit/{id}', 'edit')->name('boxers.edit');
        Route::put('edit/{id}', 'update')->name('boxers.update');
        Route::delete('destroy/{id}', 'destroy')->name('boxers.destroy');
    });

    Route::controller(recordsController::class)->prefix('records')->group(function () {
        Route::get('', 'index')->name('records');
        Route::get('create', 'create')->name('records.create');
        Route::post('store', 'store')->name('records.store');
        Route::get('show/{id}', 'show')->name('records.show');
        Route::get('edit/{id}', 'edit')->name('records.edit');
        Route::put('edit/{id}', 'update')->name('records.update');
        Route::delete('destroy/{id}', 'destroy')->name('records.destroy');
    });

    Route::controller(statsController::class)->prefix('stats')->group(function () {
        Route::get('', 'index')->name('stats');
        Route::get('create', 'create')->name('stats.create');
        Route::post('store', 'store')->name('stats.store');
        Route::get('show/{id}', 'show')->name('stats.show');
        Route::get('edit/{id}', 'edit')->name('stats.edit');
        Route::put('edit/{id}', 'update')->name('stats.update');
        Route::delete('destroy/{id}', 'destroy')->name('stats.destroy');
    });

    Route::controller(ratesController::class)->prefix('rates')->group(function () {
        Route::get('', 'index')->name('rates');
        Route::get('create', 'create')->name('rates.create');
        Route::post('store', 'store')->name('rates.store');
        Route::get('show/{id}', 'show')->name('rates.show');
        Route::get('edit/{id}', 'edit')->name('rates.edit');
        Route::put('edit/{id}', 'update')->name('rates.update');
        Route::delete('destroy/{id}', 'destroy')->name('rates.destroy'); 
    });

    Route::controller(heavydivisionsController::class)->prefix('heavydivisions')->group(function () {
        Route::get('', 'index')->name('heavydivisions');
        Route::get('create', 'create')->name('heavydivisions.create');
        Route::post('store', 'store')->name('heavydivisions.store');
        Route::get('show/{id}', 'show')->name('heavydivisions.show');
        Route::get('edit/{id}', 'edit')->name('heavydivisions.edit');
        Route::put('edit/{id}', 'update')->name('heavydivisions.update');
        Route::delete('destroy/{id}', 'destroy')->name('heavydivisions.destroy'); 
    });

    Route::controller(weltersController::class)->prefix('welters')->group(function () {
        Route::get('', 'index')->name('welters');
        Route::get('create', 'create')->name('welters.create');
        Route::post('store', 'store')->name('welters.store');
        Route::get('show/{id}', 'show')->name('welters.show');
        Route::get('edit/{id}', 'edit')->name('welters.edit');
        Route::put('edit/{id}', 'update')->name('welters.update');
        Route::delete('destroy/{id}', 'destroy')->name('welters.destroy'); 
    });

    Route::controller(superbantamsController::class)->prefix('superbantams')->group(function () {
        Route::get('', 'index')->name('superbantams');
        Route::get('create', 'create')->name('superbantams.create');
        Route::post('store', 'store')->name('superbantams.store');
        Route::get('show/{id}', 'show')->name('superbantams.show');
        Route::get('edit/{id}', 'edit')->name('superbantams.edit');
        Route::put('edit/{id}', 'update')->name('superbantams.update');
        Route::delete('destroy/{id}', 'destroy')->name('superbantams.destroy'); 
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});