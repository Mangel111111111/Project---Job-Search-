<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VacancyController;

Route::get('/vacancies', [VacancyController::class,'index'])->name('apiindex');
Route::delete('/vacancies/{id}',[VacancyController::class,'destroy'])->name('apidestroy');
