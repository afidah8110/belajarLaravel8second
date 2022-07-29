<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ParticipantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/db query', function(){
        $eventM = EventModel::where('title', 'LIKE', 'Pesta Muda Mudi')->get();

        dd ($eventM);
    });
    
    Route::get('/events', [EventsController::class, 'index'])->name('events.index');
    Route::get('/events/tambah-events', [EventsController::class, 'create'])->name('events.create');
    Route::post('/events/store-events', [EventsController::class, 'store'])->name('events.store');
    Route::get('/events/edit-events/{id}', [EventsController::class, 'edit'])->name('events.edit');
    Route::post('/events/update-events', [EventsController::class, 'update'])->name('events.update');
    Route::get('/events/delete-events/{id}', [EventsController::class, 'delete'])->name('events.delete');


    Route::get('/participant/tambah-participant', [ParticipantController::class, 'create'])->name('participant.create');
    Route::post('/participant/store-participant', [ParticipantController::class, 'store'])->name('participant.store');
    Route::get('/participant/edit-participant/{id}', [ParticipantController::class, 'edit'])->name('participant.edit');
    Route::post('/participant/update-participant', [ParticipantController::class, 'update'])->name('participant.update');
    Route::get('/participant/delete-participant/{id}', [ParticipantController::class, 'delete'])->name('participant.delete');
    Route::get('/participant/{id}', [ParticipantController::class, 'index'])->name('participant.index');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
