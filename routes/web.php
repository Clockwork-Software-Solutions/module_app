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
Route::get('/FoodChain&FoodWeb/complex_foodchain2', App\Http\Livewire\FoodChainComplexSecond::class)->name('foodchain7');
Route::get('/FoodChain&FoodWeb/complex_foodchain3', App\Http\Livewire\FoodChainComplexThird::class)->name('foodchain8');
Route::get('/FoodChain&FoodWeb/foodweb', App\Http\Livewire\FoodWeb::class)->name('foodweb');
Route::get('/FoodChain&FoodWeb/foodweb2', App\Http\Livewire\FoodWebSecond::class)->name('foodweb2');
Route::get('/FoodChain&FoodWeb/foodwebcomplex', App\Http\Livewire\FoodWebComplex::class)->name('foodweb3');
Route::get('/FoodChain&FoodWeb/foodwebcomplex_final', App\Http\Livewire\FoodWebComplexLast::class)->name('foodweb4');
Route::get('/Symbiosis&NonSymbiosis', App\Http\Livewire\SymbiosisAndNonsymbiosis::class)->name('symbiosis');
Route::get('/Symbiosis&NonSymbiosis/parasitism', App\Http\Livewire\Parasitism::class)->name('parasitism');
Route::get('/Symbiosis&NonSymbiosis/commensalism', App\Http\Livewire\Commensalism::class)->name('commensalism');
Route::get('/Symbiosis&NonSymbiosis/mutualism', App\Http\Livewire\Mutualism::class)->name('mutualism');
Route::get('/Symbiosis&NonSymbiosis/competitionForResources', App\Http\Livewire\Competition::class)->name('competition');
Route::get('/Symbiosis&NonSymbiosis/competitionAndPredation', App\Http\Livewire\CompetitionLast::class)->name('lastcompetition');
















