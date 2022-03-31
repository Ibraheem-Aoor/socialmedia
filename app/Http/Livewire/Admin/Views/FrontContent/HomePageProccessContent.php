<?php

namespace App\Http\Livewire\Admin\Views\FrontContent;

use Livewire\Component;

class HomePageProccessContent extends Component
{
    public function render()
    {
        return view('livewire.admin.views.front-content.home-page-proccess-content')->extends('layouts.admin.master.master')->section('content');
    }
}
