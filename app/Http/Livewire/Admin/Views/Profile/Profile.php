<?php

namespace App\Http\Livewire\Admin\Views\Profile;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        return view('livewire.admin.views.profile.profile')->extends('layouts.admin.master.master')->section('content');
    }
}
