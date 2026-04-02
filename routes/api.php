<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JurusanController;

Route::post('/jurusan', [JurusanController::class, 'StoreData']);