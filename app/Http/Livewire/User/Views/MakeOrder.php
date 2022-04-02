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
        $platform_id = session()->has('platform_id') ? session()->get('platform_id') :null;
        $choice = session()->has('choice') ? session()->get('choice') : null;
        session()->put('platform_id' , null);
        session()->put('choice' , null);
        if($platform_id == null || $choice == null)
        {
            notify()->error('something went wrong');
            return redirect()->back();
        }
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
