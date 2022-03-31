<?php

use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Views\Platform\AddPlatform;
use App\Http\Livewire\Admin\Views\FrontContent\ChoicesPageContent;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Admin\Views\FrontContent\HomePageContentShow;
use App\Http\Livewire\Admin\Views\FrontContent\HomePagePlatFormsContent;
use App\Http\Livewire\Admin\Views\FrontContent\HomePageProccessContent;

// prefix => admin
Route::get('/dashboard', Dashboard::class)->name('admin.dashboard');
// Content
Route::get('/home-page/content', HomePageContentShow::class)->name('admin.homepage.intro.content.show');
Route::get('/home-page-proccess/content', HomePageProccessContent::class)->name('admin.homepage.proccess.content.show');
Route::get('/home-page-platforms/content', HomePagePlatFormsContent::class)->name('admin.homepage.platforms.content.show');
Route::get('/chocies-page/content', ChoicesPageContent::class)->name('admin.choicepage.content.show');

// CRUD
Route::get('/add-platform', AddPlatform::class)->name('admin.platform.add');


