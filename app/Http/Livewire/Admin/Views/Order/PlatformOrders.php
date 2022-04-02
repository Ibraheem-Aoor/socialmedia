<?php

namespace App\Http\Livewire\Admin\Views\Order;

use App\Models\Admin\Platform;
use Livewire\Component;
use Livewire\WithPagination;

class PlatformOrders extends Component
{
    use WithPagination;
    public $platform;
    public function mount($id = null)
    {
        $this->platform = Platform::with('orders')->findOrFail($id);
    }
    public function render()
    {
        $orders = $this->platform->orders()->orderBy('id' , 'desc')->paginate(10);
        return view('livewire.admin.views.order.platform-orders' , ['orders' => $orders])->extends('layouts.admin.master.master')->section('content');;
    }
}
