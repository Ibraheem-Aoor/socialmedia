<?php

namespace App\Http\Livewire\Admin;

use App\Models\Admin\Platform;
use App\Models\Order;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $numberOfPlatforms = Platform::count();
        $numberOrders = Order::count();
        return view('livewire.admin.dashboard' ,
            [
                'numberOfPlatforms' => $numberOfPlatforms,
                'numberOrders' => $numberOrders,
            ]
        )->extends('layouts.admin.master.master')->section('content');
    }
}
