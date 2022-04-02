<?php

namespace App\Http\Livewire\User;

use App\Models\Admin\Content;
use App\Models\Admin\Platform;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $content = Content::first();
        $platforms = Platform::all();
        return view('livewire.user.home'
        ,[
            'content' => $content,
            'platforms' => $platforms,
        ]
        )->extends('layouts.user.master.master')->section('content');
    }
}
