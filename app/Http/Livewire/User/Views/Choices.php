<?php

namespace App\Http\Livewire\User\Views;

use Livewire\Component;

class Choices extends Component
{
    public function render()
    {
        return view('livewire.user.views.choices')->extends('layouts.user.master.master');
    }
}
