<?php

use App\Http\Livewire\User\Home;
use App\Http\Livewire\User\Views\Choices;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function()
{
    return redirect(route('home'));
});
Route::get('/home', Home::class)->name('home');
Route::get('/choices', Choices::class)->name('choices');


Auth::routes();

// <!-- // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); -->