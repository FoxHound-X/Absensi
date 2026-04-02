<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControl;
// use App\Http\Controllers\Api\JurusanController;

Route::get('/', [AdminControl::class, 'index']);
// API routes are handled in routes/api.php to avoid web middleware CSRF issues.