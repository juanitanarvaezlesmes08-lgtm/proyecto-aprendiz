<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'principal')->name('home');
Route::view('/iniciar_sesion', 'iniciarsesion')->name('iniciarsesion');
Route::redirect('/iniciar-sesion', '/iniciar_sesion');
