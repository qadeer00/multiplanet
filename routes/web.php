<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
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
Route::group(['prefix'=>'/fn'],function(){
    Route::get('/', [HomeController::class ,'index'])->name('home.index');
    
    Route::get('/about-us', [HomeController::class ,'about'])->name('about');
    Route::get('/al-rah-beach', [HomeController::class ,'alrah'])
    ->name('al-rah-beach');
    Route::get('/al-reem-Island', [HomeController::class ,'alreem'])
    ->name('al-reem-island');
    Route::get('/career', [HomeController::class ,'career'])->name('career');
    Route::get('/clubhouse-and-lifestyle', [HomeController::class ,'clubhouse'])
    ->name('clubhouse');
    Route::get('/consultancy-services', [HomeController::class ,'consultency']
    )->name('consultency-services');
    Route::get('/contact-us', [HomeController::class ,'contact'])
    ->name('contact-us');
    Route::get('/cookie-policy', [HomeController::class ,'cookie'])
    ->name('cokkie-policy');
    Route::get('/corporate-social', [HomeController::class ,'corporate'])
    ->name('corporate-social');
    Route::get('/leadership-team', [HomeController::class ,'leadership'])
    ->name('leader-team');
    Route::get('/leasing', [HomeController::class ,'leasing'])->name('leasing');
    Route::get('/media', [HomeController::class ,'media'])->name('media');
    Route::get('/our-clients', [HomeController::class ,'client'])->name('our-client');
    Route::get('/our-values', [HomeController::class ,'values'])->name('our-values');
    Route::get('/our-vision', [HomeController::class ,'vision'])->name('vision');
    Route::get('/owners-association', [HomeController::class ,'owner']
    )->name('owner-association');
    Route::get('/privacy-policy', [HomeController::class ,'privacy'])
    ->name('privacy');
    Route::get('/property-managemet', [HomeController::class ,'propertymanagement'])
    ->name('property-management');
    Route::get('/property-search', [HomeController::class ,'propertysearch'])
    ->name('property-search');
  
    Route::get('/saadiyat-island', [HomeController::class ,'saadiyatisland'])
    ->name('saadiyat-island');
    Route::get('/signin', [HomeController::class ,'signin'])
    ->name('sigin');
    Route::get('/terms-conditions', [HomeController::class ,'terms'])
    ->name('terms-conditions');
    Route::get('/yas-island', [HomeController::class ,'yasisland'])
    ->name('yas-island');
    
});

