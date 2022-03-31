<?php

namespace App\Http\Livewire\Admin\Views\FrontContent;

use Livewire\Component;

class HomePageContentShow extends Component
{
    public function render()
    {
        return view('livewire.admin.views.front-content.home-page-content-show')->extends('layouts.admin.master.master')->section('content');
    }
}
