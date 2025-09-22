<?php

use Illuminate\Support\Facades\Routes;

Route::get('/', function(){
  return view('admin.dashboard');
})->name('dashboard');



?>