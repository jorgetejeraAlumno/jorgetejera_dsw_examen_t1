<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/messages', function () {
    $messages = \App\Models\Message::all();
    return view('messages', ['messages' => $messages]);
});
Route::get('/form_messages', function () {
    $messages = \App\Models\Message::all();
    return view('form_message', ['messages' => $messages]);
});
Route::delete('eliminar_mensaje/{id}/delete',[MessageController::class,'eliminar_mensaje'])->name('eliminarMensaje');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
