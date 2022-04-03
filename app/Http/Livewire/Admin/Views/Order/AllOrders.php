<?php

namespace App\Http\Livewire\Admin\Views\Order;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class AllOrders extends Component
{
    //This class shows all the orders in a table.

    use WithPagination;


    // Delete an order (softdelete)
    public function delete($id)
    {
        Order::findOrFail($id)->delete();
        session()->flash('success','تم حذف الطلب');
    }
    public function render()
    {
        $orders = Order::with('platform')->latest('id' , 'desc')->paginate(10);
        return view('livewire.admin.views.order.all-orders' ,
        [
            'orders' => $orders,
        ])->extends('layouts.admin.master.master')->section('content');;
    }
}
