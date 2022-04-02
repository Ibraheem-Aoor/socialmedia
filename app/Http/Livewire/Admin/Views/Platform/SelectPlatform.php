<?php

namespace App\Http\Livewire\Admin\Views\Platform;

use App\Models\Admin\Platform;
use Livewire\Component;

class SelectPlatform extends Component
{
    // This class is used to select a platform to show it's orders.
    public function render()
    {
        return view('livewire.admin.views.platform.select-platform' , ['platforms' => Platform::all()])->extends('layouts.admin.master.master')->section('content');;;
    }
}
