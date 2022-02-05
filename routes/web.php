<?php

use App\Http\Controllers\Backend\AdminProfileUpdate;
use App\Http\Controllers\Backend\CoreController;
use App\Http\Controllers\Backend\FeatureController;
use App\Http\Controllers\Backend\HeaderController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\GalaryController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Laravel\Fortify\Features;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

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


// Frontend Routes Start
Route::get('/', [IndexController::class, 'index'])->name('home');

// Frontend Routes End


// Backend Routes Start

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    
    return view('frontend.dashboard');
})->name('dashboard');

// Route::get('/dashboard',[IndexController::class, 'dashboard'])->middleware(['auth:sanctum', 'verified'])->name('dashboard');

Route::get('/admin/dashboard', function () {
    return view('admin.admin_dashboard');
})->name('admin.dashboard')->middleware('auth:admin');

Route::prefix('admin')->name('admin.')->group(function()
{
    $enableViews = config('fortify.views', true);
    Route::get('/login',function()
    {
        return view('auth.adminlogin');
    })->middleware('guest:admin');

    $limiter = config('fortify.limiters.login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware(array_filter([
            'guest:admin',
            $limiter ? 'throttle:'.$limiter : null,
        ]))->name('login');
    

    Route::get('/profile-update', [AdminProfileUpdate::class, 'index'])
        ->name('profilePageShow');

    Route::post('/profile-update', [AdminProfileUpdate::class, 'update'])
        ->name('profile_update');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

    if (Features::enabled(Features::registration())) {
        if ($enableViews) {
            Route::get('/register', function()
            {
                return view('auth.adminregister');
            })
                ->middleware(['guest:admin'])
                ->name('admin.register');
        }

        Route::post('/register', [RegisteredUserController::class, 'store'])
            ->middleware(['guest:admin'])->name('register');
    }

});


    // Header Image route group

    Route::prefix('header')->group(function(){

        Route::get('/view',[HeaderController::class,'HeaderView'])->name('header.view');
        Route::post('/store', [HeaderController::class, 'HeaderStore'])->name('header.store');
        Route::get('/edit/{id}',[HeaderController::class,'HeaderEdit'])->name('header.edit');
        Route::post('/update/{id}',[HeaderController::class,'HeaderUpdate'])->name('header.update');
        Route::get('/delete/{id}',[HeaderController::class,'HeaderDelete'])->name('header.delete');
        
        
    });


    // Slider Image route group

    Route::prefix('slider')->group(function(){

        Route::get('/view',[SliderController::class,'SliderView'])->name('slider.view');
        Route::post('/store',[SliderController::class,'SliderStore'])->name('slider.store');
        Route::get('/edit/{id}',[SliderController::class,'SliderEdit'])->name('slider.edit');
        Route::post('/update/{id}',[SliderController::class,'SliderUpdate'])->name('slider.update');
        Route::get('/delete/{id}',[SliderController::class, 'SliderDelete'])->name('slider.delete');
    });

    //Core feature route group

    Route::prefix('core')->group(function(){

        Route::get('/view',[CoreController::class,'CoreView'])->name('core.view');
        Route::post('/store',[CoreController::class,'CoreStore'])->name('core.store');
        Route::get('/edit/{id}',[CoreController::class,'CoreEdit'])->name('core.edit');
        Route::post('/update/{id}',[CoreController::class,'CoreUpdate'])->name('core.update');
        Route::get('/delete/{id}',[CoreController::class,'CoreDelete'])->name('core.delete');
    });


    //image view route group

    Route::prefix('galary')->group(function(){

        Route::get('/view',[GalaryController::class,'GalaryView'])->name('galary.view');
        Route::post('/store',[GalaryController::class,'GalaryStore'])->name('galary.store');
        Route::get('/edit/{id}',[GalaryController::class,'GalaryEdit'])->name('galary.edit');
        Route::post('/update/{id}',[GalaryController::class,'GalaryUpdate'])->name('galary.update');
        Route::get('/delete/{id}',[GalaryController::class,'GalaryDelete'])->name('galary.delete');
    });

    //Features details route group

    Route::prefix('feature')->group(function(){

        Route::get('/view',[FeatureController::class,'FeaturesView'])->name('feature.view');
        Route::post('/get',[FeatureController::class,'FeaturesStore'])->name('feature.store');
        Route::get('/edit/{id}',[FeatureController::class,'FeaturesEdit'])->name('feature.edit');
        Route::post('/update/{id}',[FeatureController::class,'FeaturesUpdate'])->name('feature.update');
        Route::get('/delete/{id}',[FeatureController::class,'FeaturesDelete'])->name('feature.delete');
        
    });

    //service package route group 
    Route::prefix('service')->group(function(){

        Route::get('/view',[ServiceController::class,'ServiceView'])->name('service.view');
        Route::post('/store',[ServiceController::class,'ServiceStore'])->name('service.store');
        Route::get('/edit/{id}',[ServiceController::class,'ServiceEdit'])->name('service.edit');
        Route::post('/update/{id}',[ServiceController::class,'ServiceUpdate'])->name('service.update');
        Route::get('/delete/{id}',[ServiceController::class,'ServiceDelete'])->name('service.delete');

    });

// Backend Routes End
   


    
