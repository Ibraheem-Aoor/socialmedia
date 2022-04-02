<?php

namespace App\Http\Livewire\User\Views;

use App\Models\Order;
use Livewire\Component;

class MakeOrder extends Component
{
    public $url;

    public function makeOrder()
    {
        $this->validate($this->rules());
        $platform_id = session()->has('platform_id') ? session()->get('platform_id') :'';
        $choice = session()->has('choice') ? session()->get('choice') : '';
        Order::create([
            'url' => $this->url,
            'choice' => $choice ,
            'platform_id' => $platform_id,
        ]);
        notify()->success('Thank You!');
        return redirect(route('home'));
    }

    public function rules()
    {
        return [
            'url' => 'required|url',
        ];
    }
    public function messages()
    {
        return [
            'url.required' => 'URL is Required',
            'url.url' => 'URL is not valid',
        ];
    }
    public function render()
    {
        return view('livewire.user.views.make-order')->extends('layouts.user.master.master');
    }
}
