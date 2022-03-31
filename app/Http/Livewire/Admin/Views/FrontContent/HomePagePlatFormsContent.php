<?php

namespace App\Http\Livewire\Admin\Views\FrontContent;

use Livewire\Component;

class HomePagePlatFormsContent extends Component
{
    public function render()
    {
        return view('livewire.admin.views.front-content.home-page-plat-forms-content')->extends('layouts.admin.master.master')->section('content');;
    }
}
