<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControl;

Route::get('/', [AdminControl::class, 'index']);