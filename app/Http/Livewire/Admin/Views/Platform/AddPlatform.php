<?php

namespace App\Http\Livewire\Admin\Views\Platform;

use Livewire\Component;

    class AddPlatform extends Component
{
    public function render()
    {
        return view('livewire.admin.views.platform.add-platform')->extends('layouts.admin.master.master')->section('content');;;
    }
}
