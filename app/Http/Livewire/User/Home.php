<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.user.home')->extends('layouts.user.master.master')->section('content');
    }
}
