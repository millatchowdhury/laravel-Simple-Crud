<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;


Route::get('/', [IndexController::class, 'Index']);




Route::get('/addNew', [IndexController::class, 'addNew'] )->name('add_New');
Route::post('/formSubmit', [IndexController::class, 'addNewData'] )->name('formSubmit');

Route::get('/update/{id}', [IndexController::class, 'showUpdateDate'] );
Route::post('/updateData', [IndexController::class, 'UpdateDate'] )->name('updateData');

Route::get('/delete/{id}', [IndexController::class, 'DeleteData'] );
