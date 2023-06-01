<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NamaskarController;



Route::get('{site}/{url?}', [NamaskarController::class, 'site'])->where('url', '.*');

// Route::get('admin/{any?}', [NamaskarController::class, 'renderer'])->where('any', '.*');

// Route::fallback([NamaskarController::class, 'renderer']);

 //Route::get('/{str1?}/{str2?}/{str3?}/{str4?}', [NamaskarController::class, 'renderer']);