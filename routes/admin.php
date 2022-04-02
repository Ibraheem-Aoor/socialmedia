<?php

use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Views\Admins\AddAdmin;
use App\Http\Livewire\Admin\Views\Admins\AllAdmins;
use App\Http\Livewire\Admin\Views\Platform\AddPlatform;
use App\Http\Livewire\Admin\Views\FrontContent\ChoicesPageContent;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Admin\Views\FrontContent\HomePageContentShow;
use App\Http\Livewire\Admin\Views\FrontContent\HomePagePlatFormsContent;
use App\Http\Livewire\Admin\Views\FrontContent\HomePageProccessContent;
use App\Http\Livewire\Admin\Views\Offer\OfferPage;
use App\Http\Livewire\Admin\Views\Order\AllOrders;
use App\Http\Livewire\Admin\Views\Order\PlatformOrders;
use App\Http\Livewire\Admin\Views\Platform\ShowPlatform;
use App\Http\Livewire\Admin\Views\Platform\SelectPlatform;

// prefix => admin
Route::group(['middleware' => ['auth' , 'auth.admin']] , function()
{

Route::get('/dashboard', Dashboard::class)->name('admin.dashboard');
// Content
Route::get('/home-page/content', HomePageContentShow::class)->name('admin.homepage.intro.content.show');
Route::get('/home-page-proccess/content', HomePageProccessContent::class)->name('admin.homepage.proccess.content.show');
Route::get('/home-page-platforms/content', HomePagePlatFormsContent::class)->name('admin.homepage.platforms.content.show');
Route::get('/chocies-page/content', ChoicesPageContent::class)->name('admin.choicepage.content.show');


// Platform
Route::get('/add-platform', AddPlatform::class)->name('admin.platform.add');
Route::get('/platform/{id}', ShowPlatform::class)->name('admin.platform.show');

// Offer
Route::get('/offer-add', OfferPage::class)->name('admin.offer');

//orders
Route::get('/all-orders', AllOrders::class)->name('admin.orders');
Route::get('/all-platforms', SelectPlatform::class)->name('admin.platform.select');
Route::get('/orders/{id}', PlatformOrders::class)->name('admin.platform.orders');


// Profile
Route::get('/profile', PlatformOrders::class)->name('admin.profile');

// admins
Route::get('/admins-all', AllAdmins::class)->name('admin.admins.show');
Route::get('/admins-new', AddAdmin::class)->name('admin.admins.add');



});
