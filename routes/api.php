<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VacancyController;

Route::get('/', [VacancyController::class,'index'])->name('apiIndex');
