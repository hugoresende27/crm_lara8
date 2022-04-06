<?php

use App\Http\Controllers\Admin\Companies\CompanyController;

//Prefix: prospects
//name: admin.prospects.create



Route::get('/', [CompanyController::class, 'index'])->name('dashboard');

Route::get('/create', [CompanyController::class, 'create'])->name('create');

Route::get('{company}/edit', [CompanyController::class, 'edit'])->where('company', '[0-9]+')->name('edit');

Route::get('{company}', [CompanyController::class, 'show'])->where('company', '[0-9]+')->name('show');

Route::post('/', [CompanyController::class, 'store'])->name('store');

Route::put('{company}', [CompanyController::class, 'update'])->where('company', '[0-9]+')->name('update');