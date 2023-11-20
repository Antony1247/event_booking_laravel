<?php
use App\Http\Controllers\eventCreator;
use App\Http\Controllers\eventController;
use App\Http\Controllers\eventUser;

use Illuminate\Support\Facades\Route;




Route:: get('/', [eventCreator::class, 'index'])->name('select');
Route:: get('/select', [eventCreator::class, 'LoginPage'])->name('select_onw');
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






<<<<<<< HEAD

=======
//USER LOGIN
>>>>>>> 71eaedf09402d5118ef1398e97848de5ab8e4bd4
Route:: get('/userlogin', [eventUser::class, 'login'])->name('user.login');
Route::post('/userlogin', [eventUser::class, 'authenticate']);
Route:: get('/userregister', [eventUser::class, 'register'])->name('user.register');
Route::post('/userregister', [eventUser::class, 'store']);
// GET DISPLAY
Route:: get ('/{id}/events', [eventUser::class, 'show'])->name('user.event');
//BOOKING
Route:: get ('/{id}/events/{eid}/book', [eventUser::class, 'viewbook'])->name('user.book');
<<<<<<< HEAD
Route:: post ('/{id}/events/{eid}/book', [eventUser::class, 'book']);
=======
Route:: post ('/{id}/events/{eid}/book', [eventUser::class, 'book']);
//TICKET VIEW
Route:: get ('/{id}/ticket', [eventUser::class, 'viewticket'])->name('user.ticket');
// DELETE TICKETS
Route::delete('/{id}/ticket/delete/{tid}', [eventUser::class, 'destroy1']);
>>>>>>> 71eaedf09402d5118ef1398e97848de5ab8e4bd4
