<?php

use App\Http\Livewire\User\Home;
use App\Http\Livewire\User\Views\Choices;
use App\Http\Livewire\User\Views\MakeOrder;
use Illuminate\Http\Request;
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
Route::get('/choices/{id}', Choices::class)->name('choices');
Route::get('/make-order', MakeOrder::class)->name('order.make')->middleware('visitofferpage');



Auth::routes();

// <!-- // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); -->
