<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('ajax-form', [AjaxContactController::class, 'index']);
Route::post('store-data', [AjaxContactController::class, 'store'])->name('store-data');
