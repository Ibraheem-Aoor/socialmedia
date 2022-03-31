<?php

namespace App\Http\Livewire\Admin\Views\FrontContent;

use Livewire\Component;

class ChoicesPageContent extends Component
{
    public function render()
    {
        return view('livewire.admin.views.front-content.choices-page-content')->extends('layouts.admin.master.master')->section('content');
    }
}
