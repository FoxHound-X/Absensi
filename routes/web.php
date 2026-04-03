<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControl;

Route::get('/', [AdminControl::class, 'index']);

Route::delete('/jurusan/delete/{id}', [AdminControl::class, 'DeleteJurusan'])->name('deletejurusan');
