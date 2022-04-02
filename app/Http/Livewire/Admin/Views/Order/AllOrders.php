<?php

namespace App\Http\Livewire\Admin\Views\Order;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class AllOrders extends Component
{
    //This class shows all the orders in a table.

    use WithPagination;
    public function render()
    {
        $orders = Order::with('platform')->orderBy('id' , 'desc')->paginate(2);
        return view('livewire.admin.views.order.all-orders' ,
        [
            'orders' => $orders,
        ])->extends('layouts.admin.master.master')->section('content');;
    }
}
