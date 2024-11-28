<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VacancyController;

Route::get('/', [VacancyController::class, 'index']);

Route::get('/vacancies/{id}', [VacancyController::class, 'show'])->name('show');