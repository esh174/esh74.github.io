<?php

use Illuminate\Support\Facades\Route;

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

Route::get(uri: '/', action: \App\Http\Livewire\Page\Pets::class)
    ->name(name: 'app.pets');

Route::get(uri: '/{pet?}', action: \App\Http\Livewire\Page\Pets\Concrete::class)
    ->name(name: 'app.pets.concrete');

Route::fallback(action: fn() => redirect()->route(route: 'app.pets'));
