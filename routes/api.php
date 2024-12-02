<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VacancyController;

Route::get('/vacancies', [VacancyController::class,'index'])->name('apiindex');
Route::delete('/vacancies/{id}',[VacancyController::class,'destroy'])->name('apidestroy');
Route::post('/vacancies',[VacancyController::class,'store'])->name('apistore');
Route::put('/vacancies/{id}',[VacancyController::class,'update'])->name('apiupdate');
Route::get('/vacancies/{id}', [VacancyController::class, 'show'])->name('apishow');