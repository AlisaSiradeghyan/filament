<?php

use App\Http\Controllers\PublicCharacteristicController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/characteristics');

Route::get('/characteristics', [PublicCharacteristicController::class, 'index']);
