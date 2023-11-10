<?php
use App\Http\Controllers\eventCreator;
use App\Http\Controllers\eventController;

use Illuminate\Support\Facades\Route;




Route:: get('/', [eventCreator::class, 'index'])->name('select');
Route:: get('/adminlogin', [eventCreator::class, 'login'])->name('admin.login');
Route::post('/adminlogin', [eventCreator::class, 'authenticate']);
Route:: get('/adminregister', [eventCreator::class, 'register'])->name('admin.register');
Route::post('/adminregister', [eventCreator::class, 'store']);
// GET DISPLAY
Route:: get ('/{id}/event', [eventController::class, 'show'])->name('admin.event');
// POST CREATE
Route::get('/{id}/event/create', [eventController::class, 'create'])->name('admin.create');
Route::post('/{id}/event/create', [eventController::class, 'store']);
// PUT OR PATCH EDITING
Route::get('/{id}/event/{eid}/edit', [eventController::class, 'edit']);
Route::patch('/{id}/event/{eid}/edit', [eventController::class, 'update']);
// DELETE
Route::delete('/{id}/event/{eid}/delete', [eventController::class, 'destroy']);
