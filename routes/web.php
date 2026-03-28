<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin_control;

Route::get('/', [admin_control::class, 'index']);