<?php

use App\Http\Controllers\HNGController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HNGController::class, 'index']);
