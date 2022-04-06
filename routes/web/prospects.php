<?php

use App\Http\Controllers\Admin\Prospects\ProspectsController;

//Prefix: prospects
//name: admin.prospects.create

Route::get('/', [ProspectsController::class, 'index'])->name('dashboard');

Route::get('/create', [ProspectsController::class, 'create'])->name('create');

Route::get('{prospect}/edit', [ProspectsController::class, 'edit'])->name('edit');

Route::post('/', [ProspectsController::class, 'store'])->name('store');