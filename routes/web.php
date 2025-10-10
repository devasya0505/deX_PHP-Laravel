<?php

use App\Http\Controllers\deXController;
use Illuminate\Support\Facades\Route;

Route::get('/', [deXController::class, 'index']);
