<?php

use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route; // <-- Singular (Correcto)

Route::get('/', function(){
  return view('admin.dashboard');
})->name('dashboard');

//Gestion de roles

Route::resource('roles', RoleController::class);
Route::resource('usuarios', UserController::class);
?>