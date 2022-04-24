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

Route::get('/', App\Http\Livewire\MainOptions::class)->name('main');
Route::get('/FoodChain&FoodWeb', App\Http\Livewire\FoodChain::class)->name('foodchain');
Route::get('/FoodChain&FoodWeb/foodchain1', App\Http\Livewire\SecondActivity::class)->name('foodchain2');
Route::get('/FoodChain&FoodWeb/foodchain2', App\Http\Livewire\ThirdActivity::class)->name('foodchain3');
Route::get('/FoodChain&FoodWeb/foodchain3', App\Http\Livewire\LastActivity::class)->name('foodchain4');
Route::get('/FoodChain&FoodWeb/foodchain4', App\Http\Livewire\LastActivity2::class)->name('foodchain5');
Route::get('/FoodChain&FoodWeb/complex_foodchain', App\Http\Livewire\FoodChainComplex::class)->name('foodchain6');




